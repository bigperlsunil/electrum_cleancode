<?php

class FacebookApplicationPlugin extends SJB_PluginAbstract
{
	/**
	 * @param string $theme Original theme
	 * @return string
	 */
	public static function getCurrentTheme($theme)
	{
		if (strpos(SJB_Request::getVar('HTTP_REFERER', '', 'SERVER'), 'fbapp.smartjobboard.com') !== false && SJB_Request::getVar('original', false) === false) {
			$theme = 'Facebook';
			$signedRequest = SJB_Request::getVar('signed_request', false);
			if ($signedRequest) {
				$signedRequest = self::parse_signed_request($signedRequest);
				if (SJB_Array::get($signedRequest, 'app_data')) {
					SJB_HelperFunctions::redirect('https://fbapp.smartjobboard.com/tab/display-job/' . SJB_Array::get($signedRequest, 'app_data') . '/?tabId=' . SJB_Request::getVar('facebookTabId', '', 'COOKIE'));
				}
			}
		}
		return $theme;
	}

	public static function parse_signed_request($signed_request)
	{
		list($encoded_sig, $payload) = explode('.', $signed_request, 2);
		// decode the data
		$sig = self::base64_url_decode($encoded_sig);
		return json_decode(self::base64_url_decode($payload), true);
	}

	private static function base64_url_decode($input)
	{
		return base64_decode(strtr($input, '-_', '+/'));
	}

	public static function handleSystemBoot()
	{
		$plugin = SJB_PluginManager::getPluginByName('FacebookApplicationPlugin');
		$isPluginActive = $plugin && $plugin['active'] == '1';
		if (!$isPluginActive) {
			return;
		}
		$isFbAppSettingsPage = SJB_Request::getVar('action') == 'settings' && SJB_Request::getVar('plugin') == 'FacebookApplicationPlugin';
		if ($isFbAppSettingsPage) {
			// FBAPP-3
			$patched = SJB_Settings::getValue('db-patch-FBAPP-3');
			if (empty($patched)) {
				SJB_DB::queryExec("INSERT INTO `formbuilders_fieldsholders` (`field_sid`, `fields_holder_id`, `order`, `html`, `complex`, `listing_type_sid`, `theme`) VALUES
					('198', 'col-narrow-left', 0, '', 0, 6, 'Facebook'),
					('199', 'col-narrow-left', 1, '', 0, 6, 'Facebook'),
					('219', 'col-narrow-right', 0, '', 0, 6, 'Facebook'),
					('posted', 'col-narrow-right', 1, '', 0, 6, 'Facebook'),
					('248', 'col-wide', 0, '', 0, 6, 'Facebook'),
					('203', 'col-wide', 1, '', 0, 6, 'Facebook'),
					('204', 'col-wide', 2, '', 0, 6, 'Facebook');");
				if (SJB_System::getSystemSettings('isDemo')) {
					SJB_DB::queryExec("INSERT INTO `stat_pages` (`id`, `name`, `content`, `title`, `lang`) VALUES
					('FacebookApplication', 'Facebook Application Welcome', '<h1>Welcome to Facebook Application Demo!</h1>', NULL, 'en');");
					SJB_DB::queryExec("INSERT INTO `settings` (`name`, `value`) VALUES ('facebookAppPages', ?s);", 'a:1:{i:0;s:15:"475964772488591";}');

				} else {
					SJB_DB::queryExec("INSERT INTO `stat_pages` (`id`, `name`, `content`, `title`, `lang`) VALUES
					('FacebookApplication', 'Facebook Application Welcome', '<h1>Welcome to our site!!!</h1>', NULL, 'en');");
					SJB_DB::queryExec("INSERT INTO `settings` (`name`, `value`) VALUES ('facebookAppPages', 'a:0:{};');");
				}

				SJB_Settings::addSetting('db-patch-FBAPP-3', 'patched');
			}

			SJB_HelperFunctions::redirect(SJB_System::getSystemSettings('ADMIN_SITE_URL') . '/system/miscellaneous/fb_app_settings/');
		}
		if (SJB_Navigator::getURI() == '/system/miscellaneous/fb_app_settings/') {
			SJB_System::getModuleManager()->includeModule(SJB_BASE_DIR . 'system/plugins/facebook_app/module', 'miscellaneous');
			require_once __DIR__ . '/module/miscellaneous/fb_app_settings.php';
		}
	}

}
