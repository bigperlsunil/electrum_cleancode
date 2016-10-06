<?php

class SJB_Classifieds_MakeFeatured extends SJB_Function
{
	public function execute()
	{
		$listingSid = SJB_Request::getVar("listing_id", null, 'default', 'int');
		if ($listingSid && SJB_UserManager::isUserLoggedIn()) {
			$listing = SJB_ListingManager::getObjectBySID($listingSid);
			$current_user = SJB_UserManager::getCurrentUser();
			if ($listing && $listing->getUserSID() == $current_user->getID()) {
				if (!is_null($listing) && !$listing->isFeatured()) {
					$productInfo = $listing->getProductInfo();
					$subTotalPrice  = $productInfo['upgrade_to_featured_listing_price'];
					if ($subTotalPrice > 0) {
						$userSid        = $listing->getUserSID();
						$productSid     = $productInfo['product_sid'];
						$listingTitle   = $listing->getProperty('Title')->getValue();
						$listingTypeSid = $listing->getListingTypeSID();
						$listingTypeId  = SJB_ListingTypeManager::getListingTypeIDBySID($listingTypeSid);

						$newProductName = "Upgrade of \"{$listingTitle}\" {$listingTypeId} to featured";
						$newProductInfo = SJB_ShoppingCart::createInfoForCustomProduct($userSid, $productSid, $listingSid, $subTotalPrice, $newProductName, 'featuredListing');
						if ($subTotalPrice <= 0) {
							SJB_InvoiceManager::generateInvoice($newProductInfo, $userSid, $subTotalPrice, SJB_System::getSystemSettings('SITE_URL') . '/make-featured/');
							SJB_ListingManager::makeFeaturedBySID($listingSid);
						} else {
							SJB_ShoppingCart::createCustomProduct($newProductInfo, $userSid);
							$shoppingUrl = SJB_System::getSystemSettings('SITE_URL') . '/shopping-cart/';
							SJB_HelperFunctions::redirect($shoppingUrl);
						}
					} else {
						$listingTypeID = SJB_ListingTypeManager::getListingTypeIDBySID($listing->getListingTypeSID());
						SJB_HelperFunctions::redirect(SJB_System::getSystemSettings('SITE_URL') . '/my-listings/' . $listingTypeID);
					}
				}
				else if (is_null($listing)) {
					$errors['INVALID_LISTING_ID'] = 1;
				} else {
					$errors['LISTING_ALREADY_FEATURED'] = 1;
				}
			} else {
				$errors['PARAMETERS_MISSED'] = 1;
			}
		} else {
			$errors['PARAMETERS_MISSED'] = 1;
		}

		$tp = SJB_System::getTemplateProcessor();
		$tp->assign("errors", (isset($errors) ? $errors : null));
		$tp->display("make_listing_featured.tpl");
	}
}
