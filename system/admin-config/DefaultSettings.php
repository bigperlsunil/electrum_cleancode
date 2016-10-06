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
	'SYSTEM_ACCESS_TYPE'		=>	'admin',
	'STARTUP_MODULE'			=>	'main',
	'SYSTEM_URL_BASE'			=>	'system',
	'SYSTEM_DEFAULT_TEMPLATE'	=>	'index.tpl',
	'ADMIN_ACCESS_TYPE'			=>	'admin',
	'PAGE_TEMPLATES_MODULE_NAME'=>	'main',
	'DEFAULT_THEME'				=>	'_system/admin',
	'SCRIPTS_DIR'				=>	SJB_BASE_DIR . 'system/admin-scripts/',
	'EXTERNAL_COMPONENTS_DIR'	=>	'../system/ext/',
	'FILES_DIR'					=>	SJB_BASE_DIR . 'files/',
	'VIDEO_FILES_DIR'			=>	'videos/',
	'UPLOAD_FILES_DIRECTORY'	=> '../files',
	// UPDATE BLOCK
	'SJB_UPDATE_SERVER_URL'     => 'http://update.smartjobboard.com',
	'SJB_UPDATES_DIR'           => SJB_BASE_DIR . 'system/cache/updates/',

	'EXPORT_FILES_DIRECTORY'	=> '../temp/export',
	'IMPORT_FILES_DIRECTORY'	=> '../temp/import',
	'TEMP_FILES_DIRECTORY'		=> '../temp',
	'USER_CONFIG_FILE'			=> '../config.php',
	'LanguageIDMaxLength'		=> 256,
	'LanguageCaptionMaxLength'	=> 256,
	'DateFormatValidSymbols'	=> 'yYmd',
	'DateFormatMaxLength'		=> 50,
	'ValidThousandsSeparators'	=> ' ,.',
	'ValidDecimalsSeparators'	=> ',.',
	'PhraseIDMaxLength'			=> 1000,
	'TranslationMaxLength'		=> 2000,
	'I18NSettings_PathToLanguageFiles'                   => SJB_BASE_DIR . 'languages',
	'I18NSettings_FileNameTemplateForLanguageExportFile' => '%s.xml',
	'I18NSettings_FileNameTemplateForLanguageFile'       => '%s.conf.xml',
	'I18NSettings_FileNameTemplateForLanguagePagesFile'  => '%s.pages.xml',
	'ADMIN_SPLASH_SCREEN_URL'	=> 'splash.htm',
	'version'					=> array(
		'major' => 4,
		'minor'	=> 2,
		'build'	=> '10018'
	),
	'PLUGINS_DIR'				=> SJB_BASE_DIR . 'system/plugins',
	'SESSION_STORAGE'           => 'files',
);

