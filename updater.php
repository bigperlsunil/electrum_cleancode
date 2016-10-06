<?php

error_reporting(E_ERROR);
if (!defined('__DIR__')) {
	define('__DIR__', dirname(__FILE__));
}

if (file_exists(__DIR__ . "/system/lib/miscellaneous/UpdateManager.php")) {
	require_once __DIR__ . "/system/lib/miscellaneous/UpdateManager.php";
}

function echoText($text)
{
	echo SJB_I18N::getInstance()->gettext('Backend', $text);
}


$updateName = basename(__DIR__);

$serializedFilesInfo = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'files_info_serialized.info');
$filesInfo           = unserialize($serializedFilesInfo);

$prepareUpdateAction = SJB_Request::getVar('prepareUpdate');
$startUpdateAction   = SJB_Request::getVar('startUpdate');
$updateFilesStart    = SJB_Request::getVar('updateFilesStart');
$updateDatabaseStart = SJB_Request::getVar('updateDatabaseStart');
$updateRestPart      = SJB_Request::getVar('updateRestPart');
$makeUpgradeArchive  = SJB_Request::getVar('makeArchive');
$cancelUpdateAction  = SJB_Request::getVar('cancelUpdate');

if (!empty($cancelUpdateAction)) {
	SJB_HelperFunctions::redirect(SJB_System::getSystemSettings('ADMIN_SITE_URL') . '/system/miscellaneous/update_to_new_version/');
	exit;
}



// LETS CHECK CURRENT SYSTEM BUILD
$version = SJB_System::getSystemSettings('version');

$diffAction = SJB_Request::getVar('action');
if ($diffAction == 'diff') {
	$_REQUEST['update_name'] = $updateName;
	if (isset($version['build']) && ((integer) $version['build']) < 6239) { // in this build Text_Diff was added
		// manually loads all needed files to diff
		set_include_path(__DIR__ . "/system/ext" . PATH_SEPARATOR . get_include_path());
		SJB_System::requireAllFilesInDirectory( __DIR__ . "system/ext/PEAR/PEAR/Text_Diff" );
		require_once __DIR__ . "/system/admin-scripts/miscellaneous/update_diff.php";
		
		// copy template to client
		$templatePath = "/templates/_system/admin/miscellaneous/update_diff.tpl";
		if (!file_exists(SJB_BASE_DIR . $templatePath) && is_writable(dirname(SJB_BASE_DIR . $templatePath))) {
			copy(__DIR__ . $templatePath, SJB_BASE_DIR . $templatePath);
		}
		else if (!is_writable(dirname(SJB_BASE_DIR . $templatePath))) {
			echo "<p class=\"error\">" . dirname(SJB_BASE_DIR . $templatePath) . " is not writable. Check for this and try one more time</p>";
		}
	}
	
	// add function data to create correct request from module manager
	$moduleManager = SJB_System::getModuleManager();
	$miscellaneous = $moduleManager->modules['miscellaneous']['functions'];
	$newMiscellaneous = array(
		'update_diff' => array(
			'display_name'	=> 'View files difference',
			'script'		=> 'update_diff.php',
			'type'			=> 'admin',
			'access_type'	=> array('admin'),
		),
	);
	$allFunctions = array_merge( $miscellaneous, $newMiscellaneous );
	$moduleManager->modules['miscellaneous']['functions'] = $allFunctions;
	
	$function = $moduleManager->getFunction('update_diff', 'miscellaneous');
	$function->execute();
}
else if (!empty($startUpdateAction)) {
?>
    <style type="text/css">
        span.updating {
            color: #667386;
            font-size: 18px;
            font-weight: normal;
            margin: 0 0 3px;
            padding: 4px 0;
            display: inline-block;
            min-height: 20px;
        }

        span.updated {
            background: url("../../templates/_system/admin/main/images/check.png") no-repeat left;
            color: #668673;
            font-size: 18px;
            font-weight: normal;
            margin: 0 0 3px;
            padding: 4px 0 4px 26px;
            display: block;
            min-height: 20px;
        }

        #preloader_image_circular_16_for_preloader {
            display: inline-block;
            float: left;
            margin: 5px 6px 0 0;
        }
    </style>
	
	<div id="mainContainer">
	</div>
	
	<script>
		var preloader          = null;
		var preloaderObjectId  = null;
		var percentagePerPatch = null;
		var percentageReady    = 0.0;
		
		function preLoaderCreate(objectID, text)
		{
			if (preloaderObjectId) {
				$(preloader).next("span").remove();
				$("#" + preloaderObjectId).attr('class', 'updated');
			}
			$("#mainContainer").append('<span class="updating" id="' + objectID + '">');
			$("#" + objectID).html(text);
			preloader         = $("#" + objectID).after(getPreloaderCodeForFieldId("preloader"));
			preloaderObjectId = objectID;
		}
		
		function updatingProcessController(response)
		{
			if (response.success) {
				switch (response.status) {
					case "prepareForUpdateCompleted":
						ajaxRequest("updateFiles");
						break;
					case "updateFilesShowPreloader":
						preLoaderCreate("updatingFiles", "<?php echoText('Updating files'); ?>");
						var extraAjaxData = {
							useUpdateFiles: "<?php echo SJB_Request::getVar('useUpdateFiles');?>"
						};
						ajaxRequest("updateFilesStart", extraAjaxData);
						break;
					case "updateFilesCompleted":
						ajaxRequest("updateDatabase");
						break;
					case "updateDatabaseShowPreloader":
						percentagePerPatch = response.percentagePerPatch;
						
						preLoaderCreate("updatingDatabase", "<?php echoText('Updating database'); ?>");
						
						$("#mainContainer").append('<span id="updatingDatabasePercentages">');
						$("#updatingDatabasePercentages").html(' '+ percentageReady.toString() +'%');
						
						ajaxRequest("updateDatabaseStart");
						break;
					case "updateDatabasePatchSet":
						percentageReady += percentagePerPatch;
						percentageReady = Math.floor(percentageReady * 10) / 10;
						$("#updatingDatabasePercentages").html(' ' + percentageReady.toString() + '%');
						
						ajaxRequest("updateDatabaseStart");
						break;
					case "updateDatabaseCompleted":
						$("#updatingDatabasePercentages").remove();
						ajaxRequest("updateRestPart");
						break;
					case "updateRestPartShowPreloader":
						preLoaderCreate("updateRestPart", "<?php echoText('Finish updating'); ?>");
						ajaxRequest("updateRestPartStart");
						break;
					case "updateRestPartCompleted":
						$("#updateRestPart").attr('class', 'updated');
						$(preloader).next("span").remove();
						updatingProcessController({success: true, status: "updateCompleted"});
						break;
					case "updateCompleted":
						$("#mainContainer").append('<span class="updated" id="updateCompleted">');
						$("#updateCompleted").html('<?php echoText('Updating Completed'); ?>.');
						
						$("#mainContainer").append('<p class="message" id="updateCompletedMessage">');
						$("#updateCompletedMessage").html('<?php echoText('All update files were copied successfully. Your SmartJobBoard version is up to date.'); ?>');
						break;
				}
			} else {
				if (preloader) {
					$(preloader).next("span").remove();
				}
				
				$("#mainContainer").append('<p class="error" id="updateError">');
				$("#updateError").html(response.message);
			}
		}
		
		function ajaxRequest(status, extraAjaxData)
		{
			var ajaxData = {
				action:     "updatingToNewVersion",
				to_version: "<?php echo  SJB_Request::getVar('to_version');?>",
				status:     status
			};
			
			if (extraAjaxData != undefined) {
				for(var data in extraAjaxData) {
					ajaxData[data] = extraAjaxData[data];
				}
			}
			
			$.ajax({
				type:     "POST",
				url:      "<?php echo SJB_System::getSystemSettings('ADMIN_SITE_URL') ?>/update-to-new-version/",
				data:     ajaxData,
				cache:    false,
				dataType: "json",
				success:  function (response) {
					updatingProcessController(response);
				},
				error: function (jqXHR, textStatus, errorThrown) {
					response = {
						success: false,
						message: textStatus + " " + errorThrown
					};
					
					updatingProcessController(response);
				}
			});
		}
		
		preLoaderCreate("prepareForUpdate", "<?php echoText('Preparing update'); ?>");
		ajaxRequest("prepareForUpdate");
	</script>
<?php
}
else if (!empty($updateDatabaseStart)) {
	$GLOBALS['updateDatabasePatched'] = SJB_UpdateManager::updateDatabasePerPatch();
}
else if (!empty($updateRestPart)) {
	$plugins = SJB_Session::getValue('updatePlugins');
	if ($plugins) {
		foreach($plugins as $plugin) {
			$config = SJB_PluginManager::getPluginConfigFromIniFile($plugin['config_file']);
			if ($plugin['name'] == 'LinkedinSocialPlugin' && !$plugin['active']) {
				SJB_Settings::updateSetting('linkedin_userGroup', '');
				$config['active'] = true;
			}
			else if ($plugin['name'] == 'FacebookSocialPlugin' && !$plugin['active']) {
				SJB_Settings::updateSetting('facebook_userGroup', '');
				$config['active'] = true;
			} else {
				$config['active'] = $plugin['active'];
			}
			SJB_PluginManager::savePluginConfigIntoIniFile($plugin['config_file'], $config);
		}
	}
	
	$cache = SJB_Cache::getInstance();
	$cache->clean();
	//Clear Smarty Cache
	$compiled_templates_dir = SJB_System::getSystemSettings('COMPILED_TEMPLATES_DIR');
	$access_type            = SJB_System::getSystemSettings('SYSTEM_ACCESS_TYPE');
	$admin_theme            = ThemeManager::getCurrentTheme();
	$template_editor        = new SJB_TemplateEditor();
	$themes_list['user']    = $template_editor->getThemeList();
	$themes_list['admin'][] = $admin_theme;
	foreach ($themes_list as $access_type => $themes) {
		foreach ($themes as $theme) {
			$destination = $compiled_templates_dir . $access_type . "/" . $theme;
			$tp->deleteCacheBySpecifiedPath($destination);
		}
	}
	
	SJB_Session::unsetValue('update_check_state');
}
else if (!empty($prepareUpdateAction) || !empty($updateFilesStart) || !empty($makeUpgradeArchive)) {
	$selectedFilesList = SJB_Request::getVar('useUpdateFiles');
	$selectedFilesList = explode(',', $selectedFilesList);
	$updatesDir        = SJB_System::getSystemSettings('SJB_UPDATES_DIR');
	$errors            = array();
	
	$ignorePaths = array(
		'system/plugins/broadbean_integration_plugin',
		'system/plugins/jobg8_integration_plugin',
		'system/plugins/mobile',
		'system/plugins/api',
		'system/plugins/facebook_app',
		'templates/Facebook',
		'templates/BusinessView', // update only if theme exists
		'templates/ClearView', // update only if theme exists
		'templates/EnhancedView',
		'templates/ElegantView',
		'templates/mobile',
		'templates/PioneerView'
	);
	
	// START UPGRADE
	if (!empty($updateFilesStart)) {
		$updateManager = new SJB_UpdateManager($updateName);
		$plugins       = SJB_PluginManager::getAllPluginsList();
		SJB_Session::setValue('updatePlugins', $plugins);
		
		$errors = $updateManager->checkPermissionsForFiles($selectedFilesList, $ignorePaths);
		if (empty($errors)) {
			$errors = $updateManager->startSjbUpdateForFiles($selectedFilesList, $ignorePaths);
		}
		
		if (!empty($errors)) {
			$message = '';
			foreach ($errors as $error) {
				$message .= $error . '<br />';
			}
			
			$response = array(
				'message' => $message,
				'success' => false,
			);
			
			echo json_encode($response);
		}
	}
	else if (!empty($makeUpgradeArchive)) {
		// CREATE ARCHIVE WITH SELECTED FILES AND GIVE TO USER FOR DOWNLOAD
		$updateManager = new SJB_UpdateManager($updateName);
		foreach ($filesInfo as $key => $fileInfo) {
			$filepath  = $fileInfo['filepath'];
			foreach ($ignorePaths as $ignorePath) {
				if (strpos($filepath, $ignorePath) !== false) {
					$ignorePath = SJB_BASE_DIR . $ignorePath;
					if (!file_exists($ignorePath)) {
						unset($filesInfo[$key]);
						continue 2;
					}
				}
			}
		}
		
		$errors = $updateManager->createZipArchiveWithFiles($selectedFilesList, $filesInfo);
		if (!empty($errors)) {
			foreach ($errors as $errorText) {
				echo "<p class=\"error\">{$errorText}</p>";
			}
		} else {
			$updateManager->sendArchiveToUser();
			exit;
		}
	}
	else if (!empty($prepareUpdateAction)) {
		// SHOW FILES TABLE WITH ACTIONS
		$currentFilesInfo = array();
		$updateStatistics = array('added' => 0, 'updated' => 0, 'changed' => 0);
		
		// compare MD5 of current client version files and MD5 of same version files from SVN
		foreach ($filesInfo as $key => $fileInfo) {
			$filepath  = $fileInfo['filepath'];
			$modStatus = $fileInfo['status'];   // status of file in NEW revision
			$filehashArr = $fileInfo['md5_hash']; // control MD5-hash in CURRENT (OLD) revision
			
			foreach ($ignorePaths as $ignorePath) {
				if (strpos($filepath, $ignorePath) !== false) {
					$ignorePath = SJB_BASE_DIR . $ignorePath;
					if (!file_exists($ignorePath)) {
						continue 2;
					}
				}
			}
			
			if (!file_exists(SJB_BASE_DIR . $filepath)) {
				if ($modStatus == 'A') {
					// file not must exists in current revision
					$currStatus = 'not_exists';
				} elseif ($modStatus == 'D') {
					continue;
				} else {
					// file must be exists but missed
					$currStatus = 'missed';
				}
			} else {
				if (!is_dir(SJB_BASE_DIR . $filepath)) {
					$currHashMD5 = md5_file(SJB_BASE_DIR . $filepath); // control MD5-hash for client file
					
					$identical = false;
					foreach ($filehashArr as $filehash) {
						if ($currHashMD5 == $filehash) {
							$identical = true;
							break;
						}
					}
					if ($identical || $currHashMD5 == @md5_file(__DIR__ . DIRECTORY_SEPARATOR . $filepath)) {
						$currStatus = 'identical';
					} else {
						$currStatus = 'changed';
					}
				}
			}
			
			$fileStatus = '';
			switch ($modStatus) {
				case 'A':
					$updateStatistics['added']++;
					$fileStatus = 'added';
					break;
				case 'M':
				case 'D':
					if ($currStatus == 'identical') {
						$updateStatistics['updated']++;
						$fileStatus = 'updated';
					} else {
						$updateStatistics['changed']++;
						$fileStatus = 'changed';
					}
					break;
				default:
					break;
			}
			
			$currentFilesInfo[$key] = array(
				'file'       => $filepath,
				'status'     => $currStatus,
				'mod_status' => $modStatus,
				'file_status' => $fileStatus,
			);
		}

		// DISPLAY CURRENT STATUS TABLE FOR FILES
		?>
		
		<p>In the new update:</p>
		<p><?php echo $updateStatistics['updated']?> file(s) will be updated</p>
		<p><?php echo $updateStatistics['added']?> file(s) will be added</p>
		<p><?php echo $updateStatistics['changed']?> file(s) will be changed (These files require your attention. Please check them first.):</p>
		
		<div>
			<?php if ($updateStatistics['changed'] > 0) { ?>
			<input type="button" class="grayButton" name="viewChangedFiles" id="viewChangedFiles" value="View changed files" />
			<?php } ?>
			<input type="button" value="View full list of files" class="grayButton" id="viewFullList" name="viewFullList" />
		</div>
		<br />
		
		<script>
			$(function() {
				$("#updateFilesListTable tr[class!=controlButtons]").hide();
				var fullFileListShowed = 0;
				
					$("#updateButton").click(function() {
						<?php if ($updateStatistics['changed'] > 0) { ?>
						var isUpdateFilesChecked = $("#isUpdateFilesChecked").val();
						if (isUpdateFilesChecked == 0) {
							alert("<?php echoText('Please check the list of changed files before update.\nThey require your attention.'); ?>");
							return false;
						}
						<?php } ?>
						generateFilesArray();
					});
					
					$("#makeArchive").click(function() {
						generateFilesArray();
					});
					$("#Cancel").click(function() {
						generateFilesArray();
					});

				
				$("#viewChangedFiles").click(function() {
					if ($(this).hasClass("SHOWED")) {
						$(this).attr("value", "View changed files");
						$("#updateFilesListTable tr.changedFile").hide();
						if (fullFileListShowed == 0) {
							$("#updateFilesListTable tr.headerRow").hide();
						}
						$(this).removeClass("SHOWED");
					} else {
						$(this).attr("value", "Hide changed files");
						$("#updateFilesListTable").show();
						$("#updateFilesListTable tr.changedFile, tr.headerRow").show();
						$(this).addClass("SHOWED");
						
						// and unblock "Update" button
						$("#isUpdateFilesChecked").val(1);
					}
				});
				
				$("#viewFullList").click(function() {
					if ($(this).hasClass("SHOWED")) {
						// hide all files
						$("#updateFilesListTable tr").each(function() {
							$(this).hide();
						});
						$("#viewFullList").attr("value", "View full list of files");
						$("#viewFullList").removeClass("SHOWED");
						fullFileListShowed = 0;
						
						// change button for changed files
						$("#viewChangedFiles").attr("value", "View changed files");
						$("#viewChangedFiles").removeClass("SHOWED");
					} else {
						// show all files list
						$("#updateFilesListTable tr").show();
						$("#viewFullList").attr("value", "Hide list of files");
						$("#viewFullList").addClass("SHOWED");
						fullFileListShowed = 1;
					}
				});
			});
			
			function generateFilesArray()
			{
				var updateTable = $("#updateFilesListTable");
				var useUpdateFiles = new Array();
				var i = 0;
				updateTable.find('.updateFile').each(function() {
					var name = $(this).attr("name");
					if (name.indexOf("use_update_files") != -1) {
						if ($(this).attr('type') == 'radio') {
							if ($(this).is(':checked') === true) {
								useUpdateFiles[i++] = $(this).val();
							}
						} else {
							useUpdateFiles[i++] = $(this).val();
						}
					}
				});
				$("#useUpdateFiles").val(useUpdateFiles.join(','));
			}
		</script>
		
		<table id="updateFilesListTable">
			<thead>
				<tr class="headerRow">
					<td>File</td>
					<td>Status</td>
					<td>Will be</td>
					<td>Actions</td>
				</tr>
			</thead>
			
			<?php
			foreach ($currentFilesInfo as $key => $file) {
				$status = $file['status'];
				$modStatus = $file['mod_status'];
			?>
				<tr class="updateFilesRow <?php echo $file['file_status']?>File">
					<td>
						<?php echo $file['file'] ?>
					</td>
					<td>
						<?php
						if (in_array($status, array('missed', 'changed')) && $modStatus != 'A') {
							echo "<span style=\"color: red;\">WARNING</span>";
						} else {
							echo "<span style=\"color: green;\">OK</span>";
						}
						?>
					</td>
					<td>
						<?php
						switch ($modStatus) {
							case 'A':
								echo 'added';
								break;
							case 'M':
								if ($status == 'identical') {
									echo 'updated';
								} else {
									echo 'changed';
								}
								break;
							case 'D':
								echo 'deleted';
								break;
							default:
								break;
						}
						?>
					</td>
					<td>
						<?php if ($status != 'identical' && $modStatus != 'A') { ?>
							<div style="float: left; padding-right: 10px;">
								<input type="radio" class="updateFile" name="use_update_files[<?php echo $key?>]" id="use_update_<?php echo $key?>" value="<?php echo $key?>" checked="checked"/>
								<label for="use_update_<?php echo $key?>">Update</label>
								<br />
								
								<input type="radio" class="updateFile" name="use_update_files[<?php echo $key?>]"  id="use_my_<?php echo $key?>" value="0"/>
								<label for="use_my_<?php echo $key?>">Skip</label>
							</div>
							
							<?php if ($modStatus != 'D') { ?>
								<input type="button" name="view diff" value="View diff" class="greenButton" onclick="showDiffForFile('<?php echo $file['file']?>');return false;" />
							<?php } ?>
						<?php } else { ?>
							<input type="hidden" class="updateFile" name="use_update_files[<?php echo $key?>]" id="use_update_<?php echo $key?>" value="<?php echo $key?>" />
						<?php } ?>
					</td>
				</tr>
			<?php } ?>
		</table>
		
		<br />
		<form name="updateFilesForm" id="updateFilesForm" method="post">
			<input type="hidden" name="to_version" value="<?php echo $updateName; ?>" />
			<input type="hidden" name="useUpdateFiles" id="useUpdateFiles" value="" />
			<input type="hidden" id="isUpdateFilesChecked" name="isUpdateFilesChecked" value="0" />
			
			<input type="submit" value="Get archived files for manual update" class="grayButton" name="makeArchive" id="makeArchive" />
			
			<br /><br /><br />
			<input type="submit" id="updateButton" value="Update" class="grayButton" name="startUpdate" />
			<input type="submit" value="Cancel" class="grayButton" name="cancelUpdate" id="Cancel"  />
		</form>

		<script>
			var siteUrl = '<?php echo SJB_System::getSystemSettings('ADMIN_SITE_URL');?>';
			function showDiffForFile(filename) {
				window.open(siteUrl + '/update-to-new-version/?to_version=<?php echo $updateName?>&action=diff&filepath=' + filename);
			}
		</script>
	<?php
	}
}
else if (SJB_Request::getVar('action') == 'updatingToNewVersion') {
	$result         = false;
	$updatesDir     = SJB_System::getSystemSettings('SJB_UPDATES_DIR');
	$sourceFilename = $updatesDir . $updateToVer . '/system/admin-scripts/miscellaneous/update_to_new_version.php';
	if (file_exists($sourceFilename)) {
		$destFilename = SJB_BASE_DIR . 'system/admin-scripts/miscellaneous/update_to_new_version.php';
		$result       = copy($sourceFilename, $destFilename);
	}
	
	if ($result) {
		$response = array(
			'status' => 'prepareForUpdateCompleted',
			'success' => true,
		);
	} else {
		$response = array(
			'message' => SJB_I18N::getInstance()->gettext('Backend', 'File update_to_new_version.php is missing in the patch.'),
			'success' => false,
		);
	}
	
	echo json_encode($response);
} else {
	if (version_compare(phpversion(), '5.3') == -1) {
		?>
		<p class="error">PHP version is lower than required. SmartJobBoard 4.1 will work under PHP version 5.3 or higher</p>
		<?php
		return;
	}
	?>
	
	<p class="note">
		Please make a backup of your website b efore launching the update service: <br />
		<a href="<?php echo SJB_System::getSystemSettings("ADMIN_SITE_URL")?>/backup/"><?php echo SJB_System::getSystemSettings("ADMIN_SITE_URL")?>/backup/</a> <br />
		SmartJobBoard is not responsible for any loss of data after the update.
	</p>
	
	<br />
	<form action="">
		I have made a backup and want to continue the update <br />
		<input type="hidden" name="to_version" value="<?php echo $updateName?>" />
		<input type="submit" name="prepareUpdate" value="Continue" class="grayButton" />
	</form>
	
	<br />
	<form action="<?php echo SJB_System::getSystemSettings('ADMIN_SITE_URL') ?>/backup/" method="GET">
		I want to cancel the update for now as I need to make a backup first<br />
		<input type="submit" name="prepareUpdate" value="Cancel" class="grayButton" />
	</form>
	
	<?php
}
