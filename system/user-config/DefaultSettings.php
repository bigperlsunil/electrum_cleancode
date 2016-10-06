<?php


return array (
	'DEBUG_MODE'				=> false,
	'CLASSES_DIR' 				=>	SJB_BASE_DIR . 'system/core/',
	'MODULES_DIR'				=>	SJB_BASE_DIR . 'system/modules/',
	'TEMPLATES_DIR'				=>	'templates/',
	'SYSTEM_TEMPLATE_DIR'		=>	'_system',
	'CACHE_DIR'					=>	SJB_BASE_DIR . 'system/cache',
	'COMPILED_TEMPLATES_DIR'	=>	SJB_BASE_DIR . 'system/cache/smarty/',
	'SMARTY_PATH'				=>	SJB_BASE_DIR . 'system/ext/Smarty/Smarty.class.php',
	'LIBRARY_DIR'				=>	SJB_BASE_DIR . 'system/lib/',
	'EXT_LIBRARY_DIR'			=>	SJB_BASE_DIR . 'system/ext/',
	'CRON_LOG_DIR'				=>	SJB_BASE_DIR . 'cron/log/',
	'SYSTEM_ACCESS_TYPE'		=>	'user',
	'STARTUP_MODULE'			=>	'main',
	'SYSTEM_URL_BASE'			=>	'system',
	'SYSTEM_DEFAULT_TEMPLATE'	=>	'index.tpl',
	'ADMIN_ACCESS_TYPE'			=>	'admin',
	'EXTERNAL_COMPONENTS_DIR'	=>	'system/ext/',
	'PAGE_TEMPLATES_MODULE_NAME'=>	'main',
	'DEFAULT_THEME'				=>	'CorporateView',
	'SCRIPTS_DIR'				=>	SJB_BASE_DIR . 'system/user-scripts/',
	'FILES_DIR'					=>	SJB_BASE_DIR . 'files/',
	'UPLOAD_FILES_DIRECTORY'	=>	'files',
	'EXPORT_FILES_DIRECTORY'	=>  'temp/export',
	'I18NSettings_PathToLanguageFiles'                  => SJB_BASE_DIR . 'languages',
	'I18NSettings_FileNameTemplateForLanguageFile'      => '%s.conf.xml',
	'I18NSettings_FileNameTemplateForLanguagePagesFile' => '%s.pages.xml',
	'I18NSettings_HighlightedPattern'                   => "%2\$s(<a style='color:red;' href=\"%5\$s/system/I18N/auto_translate/?showsplash=true&phrase=%4\$s&domain=%1\$s&translations[%3\$s]=%4\$s\" target=\"_blank\" onclick=\"javascript:window.open(this.href, this.target, 'width=700,height=600,top=200,left=400,scrollbars=yes');return false;\" title=\"Translate this\">T</a>)",
	'PLUGINS_DIR'				 => SJB_BASE_DIR . 'system/plugins',
	'MOBILE_LOGO_FILENAME'       => '/logo_mobile_sjb_banner.png',
	'SESSION_STORAGE'            => 'files',
);

