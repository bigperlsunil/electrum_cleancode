<?php /* Smarty version Smarty-3.1.19, created on 2016-09-23 13:42:19
         compiled from "template__system/admin_admin:/home/electrum/public_html/templates/_system/admin/miscellaneous/email_log.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115972351557e4e3e3290988-30427358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6df020bf2469474b215c6ecc64f226d005f6700a' => 
    array (
      0 => 'template__system/admin_admin:/home/electrum/public_html/templates/_system/admin/miscellaneous/email_log.tpl',
      1 => 1400843946,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '115972351557e4e3e3290988-30427358',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'doNotShowAttachmentNotification' => 0,
    'paginationInfo' => 0,
    'errors' => 0,
    'error' => 0,
    'message' => 0,
    'searchFields' => 0,
    'found_emails' => 0,
    'found_email' => 0,
    'pages' => 0,
    'page' => 0,
    'currentPage' => 0,
    'totalPages' => 0,
    'sorting_field' => 0,
    'sorting_order' => 0,
    'items_per_page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e4e3e33ab571_51857909',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e4e3e33ab571_51857909')) {function content_57e4e3e33ab571_51857909($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/electrum/public_html/system/ext/Smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/electrum/public_html/system/ext/Smarty/libs/plugins/modifier.date_format.php';
?><script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/pagination.js"></script>
<?php $_smarty_tpl->_capture_stack[0][] = array("trResend", null, null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Resend<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("trCancel", null, null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Cancel<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("trAreYouSureToResend", null, null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Are you sure you want to resend selected emails?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("displayJobProgressBar", null, null); ob_start(); ?><img style="vertical-align: middle;" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/jquery/progbar.gif" alt="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please wait ...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" /> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please wait ...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<script type="text/javascript">

	var doNotShowAttachmentNotificationDialog = parseInt("<?php echo $_smarty_tpl->tpl_vars['doNotShowAttachmentNotification']->value;?>
");

	function showDialogMessage(message) {
		var dialog = $("#messageBox");
		dialog.dialog('destroy');
		dialog.attr({ title: "" });
		dialog.html(message).dialog({ width: 300 });
	}

	function checkCurrentEmailAndGo(emailSID) {
		var checkbox = $("#tr_email_" + emailSID).find("input:checkbox");
		checkbox.attr("checked", "checked");
		isPopUp('<?php echo strtr($_smarty_tpl->tpl_vars['paginationInfo']->value['translatedText']['chooseAction'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
','<?php echo strtr($_smarty_tpl->tpl_vars['paginationInfo']->value['translatedText']['delete'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
	}

	function isPopUp(chooseItem, textToDelete) {
		if(! $("input:checked").length) {
			showDialogMessage(chooseItem);
		} else {
			if (confirm('<?php echo strtr(Smarty::$_smarty_vars['capture']['trAreYouSureToResend'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
')){
				if (doNotShowAttachmentNotificationDialog) {
					submitEmailListForm();
				} else {
					showAttachmentNotifAndSubmitForm();
				}
			}
		}
	}

	function showAttachmentNotifAndSubmitForm() {
		$('#attachmentNotification').dialog({
			title: "",
			width: '500px',
			modal: true,
			resizable: false,
			buttons: [
				{
					text: "<?php echo preg_replace("%(?<!\\\\)'%", "\'",Smarty::$_smarty_vars['capture']['trCancel']);?>
",
					click: function() {
						$(this).dialog("close");
					}
				},
				{
					text: "<?php echo preg_replace("%(?<!\\\\)'%", "\'",Smarty::$_smarty_vars['capture']['trResend']);?>
",
					click: function() {
						var doShow = $("#doNotShowAttachmentNotificationDialog:checked").length;
						document.getElementById('doNotShowAttachmentNotification').value = doShow;
						submitEmailListForm();
						$(this).dialog("close");
					}
				}
			]
		});
	}

	function submitEmailListForm() {
		document.getElementById('action_name').value = 'resend';
		var form = document.emailListForm;
		form.submit();
	}
</script>

<?php if (!$_smarty_tpl->tpl_vars['doNotShowAttachmentNotification']->value) {?>
	<div id="attachmentNotification" style="display: none;">
		<form action="" method="POST" id="resendEmailDialogForm">
			<fieldset>
				<span><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please note that attachments will not be resent because they are not stored in the database.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span><br/>
				<input type="checkbox" id="doNotShowAttachmentNotificationDialog" name="doNotShowAttachmentNotificationDialog" value="1"/>
				<label for="doNotShowAttachmentNotificationDialog"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Do not show anymore<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
			</fieldset>
		</form>
	</div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['errors']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars["error"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["error"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["error"]->key => $_smarty_tpl->tpl_vars["error"]->value) {
$_smarty_tpl->tpl_vars["error"]->_loop = true;
?>
		<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
	<?php } ?>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['message']->value)) {?>
	<p class="note"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
<?php }?>

<div class="clr"><br/></div>

<div class="box" id="displayResults">
	<form method="post" name="emailListForm">
		<input type="hidden" id="action_name" name="action_name" value="view_log"/>
		<input type="hidden" name="searchFields" value="<?php echo $_smarty_tpl->tpl_vars['searchFields']->value;?>
"/>
		<input type="hidden" id="doNotShowAttachmentNotification" name="doNotShowAttachmentNotification" value="<?php echo $_smarty_tpl->tpl_vars['doNotShowAttachmentNotification']->value;?>
"/>

		<div class="box-header">
			<?php echo $_smarty_tpl->getSubTemplate ("../pagination/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('layout'=>"header"), 0);?>

		</div>
		<div class="innerpadding">
			<div id="displayResultsTable">
				<table width="100%">
					<thead>
						<?php echo $_smarty_tpl->getSubTemplate ("../pagination/sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars["found_email"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["found_email"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['found_emails']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["emails_block"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["found_email"]->key => $_smarty_tpl->tpl_vars["found_email"]->value) {
$_smarty_tpl->tpl_vars["found_email"]->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["emails_block"]['iteration']++;
?>
							<tr id="tr_email_<?php echo $_smarty_tpl->tpl_vars['found_email']->value['sid'];?>
" class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
								<td><input type="checkbox" name="emails[]" value="<?php echo $_smarty_tpl->tpl_vars['found_email']->value['sid'];?>
" id="checkbox_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['emails_block']['iteration'];?>
" /></td>
								<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('type'=>"date")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"date"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['found_email']->value['date'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"date"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<br /><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['found_email']->value['date'],"%H:%M:%S");?>
</td>
								<td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/email-log/display-message/" onClick="popUpWindow('<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/email-log/?action_name=display_message&sid=<?php echo $_smarty_tpl->tpl_vars['found_email']->value['sid'];?>
',600, 600, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Viewing Email Message<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'); return false;"><?php echo $_smarty_tpl->tpl_vars['found_email']->value['subject'];?>
</a></td>
								<td><?php echo $_smarty_tpl->tpl_vars['found_email']->value['email'];?>
</td>
								<td>
									<?php if ($_smarty_tpl->tpl_vars['found_email']->value['user']['username']) {?>
										<?php echo $_smarty_tpl->tpl_vars['found_email']->value['user']['username'];?>

										<?php } elseif ($_smarty_tpl->tpl_vars['found_email']->value['admin']['username']) {?>
										<?php echo $_smarty_tpl->tpl_vars['found_email']->value['admin']['username'];?>

										<?php if ($_smarty_tpl->tpl_vars['found_email']->value['admin']['sid']) {?>
											(<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
subadmin<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
)
											<?php } else { ?>
											(<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
admin<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
)
										<?php }?>
										<?php } else { ?>
										<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Undefined<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

									<?php }?>
								</td>
								<td>
									<?php if ($_smarty_tpl->tpl_vars['found_email']->value['error_msg']) {?>
										<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/email-log/display-message/" onClick="popUpWindow('<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/email-log/?action_name=display_message&display_error=1&sid=<?php echo $_smarty_tpl->tpl_vars['found_email']->value['sid'];?>
',400, 200, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Viewing Error Message<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'); return false;"><strong><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['found_email']->value['status'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</strong></a>
									<?php } else { ?>
										<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['found_email']->value['status'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

									<?php }?>
								</td>
								<td>
									<a href="" title="<?php echo htmlspecialchars(Smarty::$_smarty_vars['capture']['trResend'], ENT_QUOTES, 'UTF-8', true);?>
" class="editbutton"
									   onclick="checkCurrentEmailAndGo(<?php echo $_smarty_tpl->tpl_vars['found_email']->value['sid'];?>
);return false;"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo htmlspecialchars(Smarty::$_smarty_vars['capture']['trResend'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="box-footer">
			<div class="pagination">
				<?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['page']->value==$_smarty_tpl->tpl_vars['currentPage']->value) {?>
						<strong><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</strong>
					<?php } else { ?>
						<?php if ($_smarty_tpl->tpl_vars['page']->value==$_smarty_tpl->tpl_vars['totalPages']->value&&$_smarty_tpl->tpl_vars['currentPage']->value<$_smarty_tpl->tpl_vars['totalPages']->value-3) {?> ... <?php }?>
						<a href="?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php if ($_smarty_tpl->tpl_vars['sorting_field']->value!=null) {?>&amp;sorting_field=<?php echo $_smarty_tpl->tpl_vars['sorting_field']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['sorting_order']->value!=null) {?>&amp;sorting_order=<?php echo $_smarty_tpl->tpl_vars['sorting_order']->value;?>
<?php }?>&amp;items_per_page=<?php echo $_smarty_tpl->tpl_vars['items_per_page']->value;?>
<?php echo $_smarty_tpl->tpl_vars['searchFields']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
						<?php if ($_smarty_tpl->tpl_vars['page']->value==1&&$_smarty_tpl->tpl_vars['currentPage']->value>4) {?> ... <?php }?>
					<?php }?>
				<?php } ?>
			</div>
		</div>
	</form>
</div><?php }} ?>
