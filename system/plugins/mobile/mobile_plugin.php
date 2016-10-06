<?php

class MobilePlugin extends SJB_PluginAbstract
{
	/**
	 * Holds types of devices for detecting of mobile device to redirect to mobile site automatically.
	 * @var array
	 */
	private static $mobileUserAgents = array(
		'iphone',
		'android',
		'bada',
		'symbian',
		'blackberry',
		'midp',
		'j2me',
		'series 60',
		'windows mobile',
		'windows ce',
		'ppc',
		'smartphone',
		'mtk'
	);

	/**
	 * Holds url of mobile SJB site.
	 * @var string
	 */
	public static $mobileUrl = null;

	/**
	 * Holds url of the main SJB site.
	 * @var string
	 */
	public static $mainSiteUrl = null;

	/** @var MobilePlugin */
	private static $instance = null;

	/**
	 * Constructor
	 * @param void
	 */
	public function __construct()
	{
		$mobileDomain = SJB_Settings::getValue('mobile_url');
		if (!empty($mobileDomain)) {
			self::$mobileUrl = str_replace($_SERVER['HTTP_HOST'], $mobileDomain, SJB_System::getSystemSettings('SITE_URL'));
			self::$mobileUrl = str_replace(SJB_System::getSystemSettings('BASEURL'), '', self::$mobileUrl);
			self::$mobileUrl .= SJB_Navigator::getURIThis();
			self::$mobileUrl .= strpos(self::$mobileUrl, '?') ? '&' : '?';
			self::$mobileUrl .= 'authId=' . SJB_Session::getSessionId();
			SJB_System::setGlobalTemplateVariable('mobileUrl', self::$mobileUrl);
		}

		$mainSiteDomain = SJB_Settings::getValue('main_site_domain');
		if (empty($mainSiteDomain) && ($_SERVER['HTTP_HOST'] == 'demo.smartjobboard.com' || $_SERVER['HTTP_HOST'] == 'mobile.smartjobboard.com')) {
			$mainSiteDomain = 'demo.smartjobboard.com';
		}

		if (!empty($mainSiteDomain)) {
			self::$mainSiteUrl = str_replace($_SERVER['HTTP_HOST'], $mainSiteDomain, SJB_System::getSystemSettings('SITE_URL'));
			SJB_System::setGlobalTemplateVariable('mainSiteUrl', self::$mainSiteUrl);
		}

		$requestURI = SJB_Navigator::getURI();
		$viewFullSite = SJB_Request::getVar('viewFullSite', false);

		if (strpos(SJB_Navigator::getURIThis(), '/admin') === false && strpos($requestURI, 'miscellaneous/api') === false && !$viewFullSite && self::$mainSiteUrl == SJB_System::getSystemSettings('SITE_URL') && SJB_Settings::getValue('detect_iphone') && MobilePlugin::isPhone() && !SJB_Request::getVar('mobileDetected', false, 'COOKIE')) {
			if (!MobilePlugin::isURIAllowedForMobile($requestURI)) {
				self::$mobileUrl = str_replace($_SERVER['HTTP_HOST'], $mobileDomain, SJB_System::getSystemSettings('SITE_URL'));
			}
			SJB_HelperFunctions::redirect(self::$mobileUrl);
		}
	}

	/**
	 * Returns an instance of MobilePlugin class
	 * @param object
	 * @return MobilePlugin
	 */
	public static function getInstance()
	{
		if (self::$instance === null) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	/**
	 * Launches methods of MobilePlugin class
	 * @param void
	 */
	public function execute()
	{
		$viewFullSiteUrl = str_replace(SJB_System::getSystemSettings('BASEURL'), '', SJB_Navigator::getURIThis());
		$viewFullSiteParams = SJB_Request::getVar('PHPSESSID', false, 'COOKIE') ? "viewFullSite=1&amp;authId=". SJB_Request::getVar('PHPSESSID', false, 'COOKIE') : 'viewFullSite=1';
		$viewFullSite = SJB_Request::getVar('viewFullSite', false, 'GET');
		if ($viewFullSite) {
			$_COOKIE['mobileDetected'] = 1;
			setcookie('mobileDetected', 1, null, SJB_System::getSystemSettings('BASEURL') . '/');
		}

		if (!MobilePlugin::isURIAllowedForMobile($viewFullSiteUrl) && MobilePlugin::isPhone() && !self::isFullSiteRequested()) {
			if (strpos(SJB_Navigator::getURIThis(), '/admin') === false && strpos($viewFullSiteUrl, 'miscellaneous/api') === false) {
				self::$mobileUrl = str_replace($_SERVER['HTTP_HOST'], SJB_Settings::getValue('mobile_url'), SJB_System::getSystemSettings('SITE_URL'));
				SJB_HelperFunctions::redirect(self::$mobileUrl);
			}
		}
		// fixme: viewFullSite duplication
		if (strpos(SJB_Navigator::getURIThis(), '?') !== false) {
			$viewFullSiteUrl .= "&".$viewFullSiteParams;
		} else {
			$viewFullSiteUrl .= "?".$viewFullSiteParams;
		}
		SJB_System::setGlobalTemplateVariable('viewFullSiteUrl', $viewFullSiteUrl);

		/*
		 * @deprecated
		 */
		SJB_System::setGlobalTemplateVariable('SessionId', SJB_Request::getVar('PHPSESSID', false, 'COOKIE'));
		$authId = SJB_Request::getVar('authId', false, 'GET');
		if (self::isMobilePluginEnabled() && $authId) {
			setcookie('PHPSESSID', $authId, null, SJB_System::getSystemSettings('BASEURL') . '/');
			$url = preg_replace('|authId=\w+&?|', '', $_SERVER['REQUEST_URI']);
			$url = rtrim($url, '?');
			SJB_HelperFunctions::redirect($url);
		}

		SJB_Event::handle('GetCurrentTheme', array('MobilePlugin', 'getCurrentTheme'));
		SJB_Event::handle('CanApplyWithoutResume', array('MobilePlugin', 'canApplyWithoutResume'));
		SJB_Event::handle('AfterSystemBoot', array('MobilePlugin', 'afterSystemBoot'));
	}

	private static function isMobilePluginEnabled()
	{
		return SJB_PluginManager::isPluginActive('MobilePlugin')
			&& SJB_System::getSettingByName('mobile_url') != ''
			&& SJB_Settings::getSettingByName('main_site_domain') != '';
	}

	/**
	 * @return array
	 */
	function pluginSettings()
	{
		return array(
			array(
				'id'      => 'mobile_url',
				'caption' => 'Mobile version domain',
				'type'    => 'string',
				'comment' => '',
				'length'  => '50',
				'order'   => null,
			),
			array(
				'id'      => 'main_site_domain',
				'caption' => 'Main site domain',
				'type'    => 'string',
				'comment' => '',
				'required'=> true,
				'length'  => '50',
				'order'   => null,
			),
			array(
				'id'      => 'detect_iphone',
				'caption' => 'Automatically detect mobile device and switch to mobile version',
				'type'    => 'boolean',
				'order'   => null,
			),
		);
	}

	/**
	 * @param string $theme Original theme
	 * @return string
	 */
	public static function getCurrentTheme($theme)
	{
		if (self::isActiveMobileVersion()) {
			SJB_Statistics::addStatistics('viewMobileVersion', '', 0, true);

			if (self::isFullSiteRequested()) {
				$theme = SJB_Request::getVar('theme', false);
				if (!$theme) {
					$theme = SJB_Session::getValue('theme');
				}
				if (!$theme) {
					$theme = SJB_TemplateSupplier::getUserCurrentTheme();
				}
			} else {
				$theme = 'mobile';
			}
		}
		return $theme;
	}

	/**
	 * @return Boolean
	 */
	public static function isMobileThemeOn()
	{
		return (self::isActiveMobileVersion() && !self::isFullSiteRequested())
					|| SJB_Session::getValue('theme') == 'mobile'
					|| (SJB_Settings::getValue('CURRENT_THEME') == 'mobile' && !SJB_Session::getValue('theme'));
	}

	/**
	 * @return Boolean
	 */
	public static function isActiveMobileVersion()
	{
		return str_replace('www.', '', $_SERVER['HTTP_HOST']) === SJB_Settings::getValue('mobile_url')
			|| (SJB_Settings::getValue('detect_iphone') && self::isPhone());
	}

	/**
	 * @return bool
	 */
	public static function isPhone()
	{
		$httpUserAgent = SJB_Request::getVar('HTTP_USER_AGENT', null, 'SERVER');
		$agent = strtolower($httpUserAgent);
		foreach (self::$mobileUserAgents as $mobileUserAgent) {
			if (strpos($agent, $mobileUserAgent) !== false) {
				return true;
			}
		}
		return false;
	}

	/**
	 * @return bool
	 */
	public static function canApplyWithoutResume()
	{
		$theme = SJB_Session::getValue('theme');
		if (self::getCurrentTheme($theme) == 'mobile') {
			SJB_Event::$data = true;
		}
		return false;
	}

	/**
	 * @return bool
	 */
	public static function isFullSiteRequested()
	{
		return self::$mainSiteUrl == SJB_System::getSystemSettings('SITE_URL') && SJB_Request::getVar('mobileDetected', false, 'COOKIE');
	}

	/**
	 * @return bool
	 */
	public static function isURIAllowedForMobile($requestURI)
	{
		$allowedUrls = array(
				'terms-of-use',
				'login',
				'logout',
				'my-account',
				'edit-profile',
				'tell-friends',
				'my-listings',
				'saved-resumes',
				'resume-alerts',
				'my-resume-details',
				'my-job-details',
				'registration/?user_group_id=JobSeeker',
				'guest-alerts',
				'display-job',
				'saved-jobs',
				'find-jobs',
				'job-alerts',
				'save-search',
				'saved-ads',
				'search-results-jobs',
				'search-results-resumes',
				'search-resumes',
				'display-resume',
				'apply-now',
				'get-states',
				'autocomplete'
		);
		foreach ($allowedUrls as $uri) {
			if (strpos($requestURI, $uri) !== false || $requestURI == '/') {
				return true;
			}
		}
		return false;
	}

	public static function afterSystemBoot()
	{
		if (SJB_Session::getValue('CURRENT_THEME') != 'mobile' && (!self::isActiveMobileVersion() || self::isFullSiteRequested())) {
			return;
		}
		SJB_Settings::changeValue('contactUserCaptcha', 0);
		SJB_Settings::changeValue('tellFriendCaptcha', 0);
		SJB_Settings::changeValue('registrationCaptcha', 0);
		SJB_Settings::changeValue('postJobCaptcha', 0);
		if (strpos(SJB_Navigator::getURI(), 'registration') !== false) {
			if (isset($_REQUEST['password']['original'])) {
				$_REQUEST['password']['confirmed'] = $_REQUEST['password']['original'];
			}
			if (isset($_REQUEST['email']['original'])) {
				$_REQUEST['email']['confirmed'] = $_REQUEST['email']['original'];
			}
		}
		if (strpos(SJB_Navigator::getURI(), 'edit-profile') !== false) {
			if (isset($_REQUEST['password']['original'])) {
				$_REQUEST['password']['confirmed'] = $_REQUEST['password']['original'];
			}
			if (isset($_REQUEST['email']['original'])) {
				$_REQUEST['email']['confirmed'] = $_REQUEST['email']['original'];
			}
		}
	}
}
