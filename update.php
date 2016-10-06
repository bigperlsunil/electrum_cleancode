<?php

return array(
	'SJB-2523',
	function() {
		SJB_DB::queryExec("
			INSERT INTO `payment_gateways_properties` (`object_sid`, `id`, `value`, `add_parameter`)
			VALUES
				(1, 'sandbox', '0', '');
				");
	},
	'SJB-2566',
	function() {
		SJB_DB::queryExec('UPDATE `email_templates` SET `text`= REPLACE(`text`, \'<br />\r\n	Use the following access details to <a href="{$GLOBALS.user_site_url}/login/" login="">sign in</a> to the site:<br />\r\n	Username: {$user.username}<br />\r\n	Password: {$user.password}<br />\r\n	\', \'\') WHERE `sid` IN (9, 48, 49)');
	},

	'SJB-2602',
	function() {
		SJB_DB::queryExec("DELETE FROM `settings` WHERE `name` = 'li_allowPeopleSearch'");
	},

	'JOBG-232',
	function() {
		SJB_DB::queryExec('
			CREATE TABLE IF NOT EXISTS `jobg8_listings_properties` (
				`sid` int(10) unsigned NOT NULL AUTO_INCREMENT,
				`listingSid` int(10) unsigned NOT NULL,
				`jobReference` varchar(100) DEFAULT NULL,
				`jobType` varchar(100) DEFAULT NULL,
				PRIMARY KEY (`sid`),
				KEY `listingSid` (`listingSid`),
				KEY `jobReference` (`jobReference`),
				KEY `jobType` (`jobType`)
			)  DEFAULT CHARSET=utf8
		');
		SJB_DB::queryExec("INSERT INTO `jobg8_listings_properties` (`listingSid`,`jobReference`) SELECT `sid`, `job_reference` FROM `listings` WHERE `job_reference` NOT LIKE `sid` ");
		SJB_DB::queryExec('
			ALTER TABLE `listings` DROP COLUMN `job_reference`;
		');
	},
	
	'SJB-2664',
	function() {
		SJB_DB::queryExec("ALTER TABLE `pages` ADD `special_page` TINYINT(1) NOT NULL DEFAULT '0'");
		SJB_DB::queryExec("
			UPDATE `pages` 
			SET `special_page` = '1' 
			WHERE `pages`.`uri` = '/jobg8_incoming/' 
			OR `pages`.`uri` = '/jobg8_outgoing/' 
			OR `pages`.`uri` = '/p4p/' 
			OR `pages`.`uri` = '/apply-now-external/'
			OR `pages`.`uri` = '/select-posting-type/'
		");
		SJB_DB::queryExec("
			DELETE FROM `pages` 
			WHERE `pages`.`uri` = '/activate-listing/' 
			OR `pages`.`uri` = '/download-resume/'
		");
	},

	'SJB-2575',
	function() {
		SJB_DB::queryExec("
			ALTER TABLE `states`
				ADD INDEX `state_code` (`state_code`)
		");
	},

	'SJB-2609',
	function() {
		SJB_DB::queryExec("
			UPDATE formbuilders_fieldsholders
			SET `html` = '{City}, {State.Code}, {Country.Name}'
			WHERE `field_sid` = '359' && `theme` = 'ProgressiveView' && `fields_holder_id` = 'col-narrow-left' && `html` = '{City}, {State.Code}'
		");
	},

	'SJB-2677',
	function() {
		$columns = array("Country", "State", "City", "ZipCode");
		$tables = array("listings", "users");
		$database = SJB_System::getSystemSettings('DBNAME');
		foreach ($tables as $table) {
			$columnsQuery = join("', '", $columns);
			$columnsVerifyQuery = "
			SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS
			WHERE table_name = '{$table}' AND table_schema = '{$database}' AND  column_name IN('{$columnsQuery}')";
			$columnsInSchema = SJB_DB::query($columnsVerifyQuery);
			foreach ($columnsInSchema as $columnKey => $columnInSchema) {
				$columnsInSchema[$columnKey] = $columnInSchema['COLUMN_NAME'];
			}

			// if the fields and their sorting are identical
			if ($columnsInSchema && !array_diff_assoc($columnsInSchema, $columns)) {
				$dropColumnQuery = join("`, DROP `", $columns);
				SJB_DB::queryExec("
					ALTER TABLE `{$table}`
					DROP `{$dropColumnQuery}`
				");
			}
		}
	},

	'SJB-2624',
	function() {
		SJB_BrowseDBManager::rebuildBrowses();
	},

	'SJB-2699',
	function() {
		$pages = array();
		foreach (SJB_UserGroupManager::getAllUserGroupsIDsAndCaptions() as $userGroup) {
			$userGroup['key'] = strtolower($userGroup['key']);
			if (in_array($userGroup['key'], array('jobseeker', 'employer'))) {
				$pages[] = "/manage-{$userGroup['key']}/";
			} else {
				$pages[] = "/manage-{$userGroup['key']}-users/";;
			}
			$pages[] = "/add-{$userGroup['key']}/";
		}
		SJB_DB::queryExec("DELETE FROM `pages` WHERE `uri` IN (?l)", $pages);

		SJB_PageManager::addPage(
			array(
				'uri'                       => '/manage-users/',
				'module'                    => 'users',
				'function'                  => 'users',
				'access_type'               => 'admin',
				'pass_parameters_via_uri'   => 1,
				'template'                  => '',
				'title'                     => '',
				'parameters'                => '',
				'keywords'                  => '',
				'description'               => '',
			)
		);
		SJB_DB::queryExec("UPDATE `pages` SET `pass_parameters_via_uri` = 1 WHERE `uri` = '/add-user/'");
	},
	
	'SJB-2699-2',
	function() {
		$content = SJB_DB::queryValue("SELECT `content` FROM `stat_pages` WHERE `id` = '404'");
		$content = str_replace('{$userGroupInfo.id|strtolower', '{$userGroupInfo.id|lower', $content);
		SJB_DB::queryExec("UPDATE `stat_pages` SET `content` = ?s WHERE `id` = '404'", $content);
	},
	
	'SJB-1996-JOBG-231',
	function() {
		$userInfo = SJB_UserManager::getUserInfoByUserName('jobg8');
		$jobg8Password = SJB_Authorization::generateSessionKey();
		if (SJB_PluginManager::getPluginByName('JobG8IntegrationPlugin') && !SJB_Settings::getSettingByName('jobg8Installed')) {
			if ($userInfo) {
				$mapper = new JobG8_Mapper();
				$defaultMappingFields = array(
						$mapper::CATEGORY_MAPPING_TYPE   => $mapper->categoryMappingFieldID,
						$mapper::EMPLOYMENT_MAPPING_TYPE => $mapper->employmentMappingFieldID,
						$mapper::SALARY_MAPPING_TYPE     => $mapper->salaryMappingFieldID
				);
				foreach ($defaultMappingFields as $mappingType => $defaultMappingField) {
					if (SJB_ListingFieldManager::getListingFieldSIDByID($defaultMappingField)) {
						SJB_Settings::saveSetting($mappingType .'MappingFieldID', $defaultMappingField);
					}
				}
				$mapper->createMappingTable();
				$mapper->setCategoryMappingType();
				$mapper->setEmploymentMappingType();
				$mapper->setSalaryMappingType();
				$mapper->setDefaultCategoryMapping();
				$mapper->setDefaultEmploymentMapping();
				$mapper->setDefaultSalaryMapping();
				
				$user = new SJB_User($userInfo, $userInfo['user_group_sid']);
				$user->setPropertyValue('password', $jobg8Password);
				$user->setSID($userInfo['sid']);
				SJB_UserManager::saveUser($user);
				SJB_Settings::addSetting('jobG8UserPassword', $jobg8Password);
				if (!$user->hasContract()) {
					$listingTypeSID = SJB_ListingTypeManager::getListingTypeSIDByID('Job');
					$userSID = $userInfo['sid'];
					$productInfo = array(
						'name' => 'JobG8 Hidden Product (Do not delete)',
						'short_description' => 'JobG8 Hidden Product (Do not delete)',
						'user_group_sid' => $userInfo['user_group_sid'],
						'listing_type_sid' => $listingTypeSID,
						'listing_duration' => 28
					);
					$product = new SJB_Product($productInfo, 'post_listings');
					$product->saveProduct($product);
					$contract = new SJB_Contract(array('product_sid' => $product->getSID()));
					$contract->setUserSID($userSID);
					$contract->saveInDB();
				}
				SJB_DB::queryExec('
					CREATE TABLE IF NOT EXISTS ?w (
						`sid` int(10) unsigned NOT NULL AUTO_INCREMENT,
						`listing_sid` int(10) unsigned NOT NULL,
						`action` varchar(10) NOT NULL,
						PRIMARY KEY (`sid`),
						KEY `listing_sid` (`listing_sid`),
						KEY `action` (`action`)
					)  DEFAULT CHARSET=utf8',
					'jobg8_mapping'
				);
				SJB_DB::queryExec('
					CREATE TABLE IF NOT EXISTS ?w (
						`sid` int(10) unsigned NOT NULL AUTO_INCREMENT,
						`listingSid` int(10) unsigned NOT NULL,
						`jobReference` varchar(100) DEFAULT NULL,
						`jobType` varchar(100) DEFAULT NULL,
						PRIMARY KEY (`sid`),
						KEY `listingSid` (`listingSid`),
						KEY `jobReference` (`jobReference`),
						KEY `jobType` (`jobType`)
					)  DEFAULT CHARSET=utf8',
					'jobg8_listings_properties'
				);
				SJB_Settings::saveSetting('jobg8Installed', 1);
			} else {
				SJB_Event::dispatch('installJobG8');
			}
		} elseif ($userInfo) {
			$user = new SJB_User($userInfo, $userInfo['user_group_sid']);
			$user->setPropertyValue('password', $jobg8Password);
			$user->setSID($userInfo['sid']);
			SJB_UserManager::saveUser($user);
			SJB_Settings::addSetting('jobG8UserPassword', $jobg8Password);
		}
	},
	
	'SJB-2738',
	function() {
		SJB_DB::queryExec("DELETE FROM `users_notifications` WHERE `user_sid` NOT IN (SELECT `sid` FROM `users`)");
	},
	
	'SJB-2712',
	function() {
		SJB_DB::queryExec("UPDATE `listing_fields` SET `display_as` = 'state_name' WHERE `id` = 'State' AND (`display_as` = '' OR `display_as` IS NULL)");
		SJB_DB::queryExec("UPDATE `listing_fields` SET `display_as` = 'country_name' WHERE `id` = 'Country' AND (`display_as` = '' OR `display_as` IS NULL)");
		SJB_DB::queryExec("UPDATE `user_profile_fields` SET `display_as` = 'state_name' WHERE `id` = 'State' AND (`display_as` = '' OR `display_as` IS NULL)");
		SJB_DB::queryExec("UPDATE `user_profile_fields` SET `display_as` = 'country_name' WHERE `id` = 'Country' AND (`display_as` = '' OR `display_as` IS NULL)");
	},
	
	'SJB-2771',
	function() {
		SJB_DB::queryExec("ALTER TABLE `invoices` ADD `status_paid` BOOLEAN NOT NULL DEFAULT FALSE ;");
		SJB_DB::queryExec("UPDATE `invoices` SET `status_paid` = 1 WHERE `status` = 'Paid'");
	},
	
	'SJB-2768',
	function() {
		SJB_DB::queryExec("DELETE FROM `settings` WHERE `name` IN ('notify_admin_on_user_approval', 'notify_admin_on_user_rejection')");
	},
	
	'SJB-2739',
	function() {
		SJB_DB::queryExec("DELETE FROM `pages` WHERE `uri` IN ('/print-listing/', '/print-job/', '/print-resume/', '/print-my-job/', '/print-my-resume/')");
	},

	'JOBG-233',
	function() {
		SJB_DB::queryExec("INSERT INTO `settings` (`name`, `value`) VALUES ('jobG8BuyApplicationsStatus', 1)");
		SJB_DB::queryExec("DELETE FROM `settings` WHERE (`name` = 'jobg8_password' AND `value` = 'demo') OR (`name` = 'jobg8_jobboard_id' AND `value` = '254')");
		SJB_DB::queryExec("DELETE FROM `settings` WHERE `name` = 'jobg8_cid' AND `value` = '880541'");
		SJB_DB::queryExec("DELETE FROM `settings` WHERE `name` IN ('jobg8_adhoc', 'jobg8_p4p_url', 'jobg8_package_ID', 'jobg8_jobboard_id_p4p')");
		SJB_DB::queryExec("DELETE FROM `pages` WHERE `uri` IN ('/select-posting-type/', '/p4p/')");
		SJB_DB::queryExec("UPDATE `settings` SET `name` = CONCAT('applications_', `name`) WHERE `name` IN ('jobg8_job_category_list', 'jobg8_job_category_filter', 'jobg8_product_filter', 'jobg8_product_list', 'jobg8_company_name_filter', 'jobg8_company_list')");
		$dbName = SJB_System::getSystemSettings('DBNAME');
		if (SJB_Settings::getSettingByName('jobg8Installed') && !SJB_DB::queryValue("SELECT `column_name` FROM `information_schema`.`columns` WHERE `table_name` = 'listings_to_jobg8' AND `column_name` = 'postingType' AND `table_schema` = '{$dbName}'")) {
			SJB_DB::queryExec("ALTER TABLE `listings_to_jobg8` ADD COLUMN `postingType` ENUM('traffic','applications') NOT NULL DEFAULT 'applications', ADD INDEX `postingType` (`postingType`)");
		}
	},
	
	'SJB-2803',
	function() {
		SJB_DB::queryExec("ALTER TABLE `email_log` DROP INDEX `email`");
		SJB_DB::queryExec("ALTER TABLE `email_log` CHANGE `email` `email` VARCHAR(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL");
		SJB_DB::queryExec("ALTER TABLE `email_log` ADD INDEX `email` (`email`(255))");
	},
	
	'SJB-2752',
	function() {
		SJB_DB::queryExec("DELETE FROM `settings` WHERE `name` = 'jobAMaticDomain'");
	},
	
	'SJB-2822',
	function() {
		$columns = SJB_DB::query('DESCRIBE facebook_feeds');
		foreach ($columns as $column) {
			if ($column['Field'] == 'hash_tags') {
				SJB_DB::queryExec('ALTER TABLE `facebook_feeds` DROP COLUMN `hash_tags`');
				break;
			}
		}
	},

	'SJB-2879',
	function() {
		SJB_DB::query('TRUNCATE TABLE `error_log`');
		SJB_DB::query('DELETE FROM `settings` WHERE `name` = "error_log_lifetime"');
		$key = SJB_DB::query('SHOW INDEX FROM `error_log` WHERE KEY_NAME = "date"');
		if (!empty($key)) {
			SJB_DB::query('ALTER TABLE `error_log` DROP INDEX `date`;');
		}
	},

	'SJB-2889',
	function() {
		SJB_DB::queryExec('UPDATE `listings` SET `access_type` = "no_one" WHERE `access_type` = "only"');
		SJB_DB::queryExec('UPDATE `listings` SET `access_type` = "everyone" WHERE `access_type` = "except"');
	},

	'SJB-2882',
	function() {
		SJB_DB::query('INSERT INTO `settings` (`name`, `value`) VALUES ("statistics_lifetime", 24);');
	},

	'SJB-2860',
	function() {
		SJB_DB::query('ALTER TABLE `users` CHANGE `sendmail` `sendmail` INT(11) NOT NULL DEFAULT "0";');
	},

	'SJB-HUGE-BROWSE',
	function() {
		'ALTER TABLE `browse` CHANGE `data` `data` MEDIUMTEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;';
	},
);