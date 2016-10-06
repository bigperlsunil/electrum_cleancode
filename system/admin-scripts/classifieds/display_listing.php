<?php

class SJB_Admin_Classifieds_DisplayListing extends SJB_Function
{
	public function isAccessible()
	{
		return true;
	}

	public function execute()
	{
		$listing_id = SJB_Request::getVar('listing_id', null);
		$videoFileId = SJB_Request::getVar('videoFileId', false);
		
		if ($videoFileId) {
			$tp = SJB_System::getTemplateProcessor();
			$displayTemplate = SJB_Request::getVar('display_template', 'display_listing.tpl');
			$errors = array();
			if (is_null($listing_id)) {
				$errors['LISTING_ID_DOESNOT_SPECIFIED'] = $listing_id;
			} else {
				$videoFileLink = SJB_UploadFileManager::getUploadedFileLink($videoFileId);
				$listing = SJB_ListingManager::getObjectBySID($listing_id);
				$listing_structure = SJB_ListingManager::createTemplateStructureForListing($listing);
				$tp->assign("listing", $listing_structure);
				$tp->assign('videoFileLink', $videoFileLink);
			}
			$tp->assign('errors', $errors);
			$tp->display($displayTemplate);
		} else {
			SJB_HelperFunctions::redirect(SJB_System::getSystemSettings('SITE_URL') . "/edit-listing/?listing_id={$listing_id}");
		}
	}
}
