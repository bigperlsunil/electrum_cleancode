<?php

class SJB_Admin_Miscellaneous_FbAppSettings extends SJB_Function
{
	public function isAccessible()
	{
		$this->setPermissionLabel('set_facebook_app_plug-in');
		return parent::isAccessible();
	}

	public function execute()
	{
		$tp = SJB_System::getTemplateProcessor();
		$theme = 'Facebook';
		$tp->assign('theme', $theme);
		$errors = array();
		$files = array('logo', 'header');
		$appInstalled = false;
		$action = SJB_Request::getVar('action', '');
		switch ($action) {
			case 'save':
				foreach ($files as $file) {
					if (empty($_FILES[$file])) {
						continue;
					}
					if ($_FILES[$file]['error'] == UPLOAD_ERR_OK) {
						if (SJB_System::getSystemSettings('isDemo')) {
							$errors[] = 'NOT_ALLOWED_IN_DEMO';
						}
						else {
							$pictureManager = new SJB_UploadPictureManager();
							if ($pictureManager->isValidUploadedPictureFile($file)) {
								$themePath = SJB_TemplatePathManager::getAbsoluteThemePath($theme);
								move_uploaded_file($_FILES[$file]['tmp_name'], "{$themePath}main/images/{$file}.png");
							} else {
								$errors[] = $pictureManager->error;
							}
						}
					}
					else {
						switch ($_FILES[$file]['error']) {
							case UPLOAD_ERR_INI_SIZE:
								$errors[] = 'File size exceeds system limit. Please check the file size limits on your hosting or upload another file.';
								break;
							case UPLOAD_ERR_FORM_SIZE:
								$errors[] = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
								break;
							case UPLOAD_ERR_PARTIAL:
								$errors[] = 'The uploaded file was only partially uploaded';
								break;
							case UPLOAD_ERR_NO_FILE:
								// Разрешим ничего не аплоадить
								break;
							case UPLOAD_ERR_NO_TMP_DIR:
								$errors[] = 'Missing a temporary folder';
								break;
							case UPLOAD_ERR_CANT_WRITE:
								$errors[] = 'Failed to write file to disk';
								break;
							default:
								$errors[] = 'File upload error';
						}
					}
				}
				break;

			case 'install-page':
				$params = json_decode(SJB_Request::getVar('params'));
				if ($params->saved === 'true') {
					$facebookAppPages = unserialize(SJB_Settings::getValue('facebookAppPages'));
					$facebookAppPages = array_merge($facebookAppPages, $params->pages);
					SJB_Settings::setValue('facebookAppPages', serialize(array_unique($facebookAppPages)));
					$appInstalled = true;
				}
				break;
		}
		$tp->assign('errors', $errors);
		$tp->assign('appInstalled', $appInstalled);
		$tp->assign('action', $action);
		$tp->assign('facebookAppPages', unserialize(SJB_Settings::getValue('facebookAppPages')));
		$tp->display(__DIR__ . '/fb_app_settings.tpl');
	}
}
