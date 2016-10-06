<?php /* Smarty version Smarty-3.1.19, created on 2016-09-23 14:03:44
         compiled from "template__system/admin_admin:/home/electrum/public_html/templates/_system/admin/users/users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121310684657e4e8e8505be3-73871155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adafe25495688475f99e8e07cc5a451239694474' => 
    array (
      0 => 'template__system/admin_admin:/home/electrum/public_html/templates/_system/admin/users/users.tpl',
      1 => 1441880594,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '121310684657e4e8e8505be3-73871155',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'rangeIPs' => 0,
    'IP' => 0,
    'cantBanUsers' => 0,
    'username' => 0,
    'errors' => 0,
    'METADATA' => 0,
    'error' => 0,
    'products' => 0,
    'product' => 0,
    'count_listings' => 0,
    'found_users' => 0,
    'found_user' => 0,
    'userGroupInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e4e8e8667956_06806203',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e4e8e8667956_06806203')) {function content_57e4e8e8667956_06806203($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/electrum/public_html/system/ext/Smarty/libs/plugins/function.cycle.php';
?><script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['common_js'][0][0]->getCommonJsURL(array(),$_smarty_tpl);?>
/pagination.js"></script>
<script type="text/javascript">
	$.ui.dialog.prototype.options.bgiframe = true;
	var progbar = "<img src='<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/system/ext/jquery/progbar.gif' />";
	var parentReload = false;
	$(function() {
		$(".getUser").click(function() {
			$("#dialog").dialog('destroy');
			$("#dialog").attr({ title: "Loading"});
			$("#dialog").html(progbar).dialog({ width: 180});
			var link = $(this).attr("href");
			$.get(link, function(data) {
				$("#dialog").dialog('destroy');
				$("#dialog").attr({ title: "User Product Details"});
				$("#dialog").html(data).dialog({
					width: 560,
					close: function(event, ui) {
						$("#expired_date").datepicker( 'hide' );
						if (parentReload == true) {
							window.location = "?restore=1";
						}}
				});
			});
			return false;
		});

		$("#change_product_send_button").click(function() {
			val = $("#product_select").val();
			$("#product_to_change").val( val );
			var number_of_listings = $("#number_of_listings_"+val).val();
			$("#number_of_listings").val( number_of_listings );
			$("input[name='action_name']").val('change_product');
			$("#change_product_dialog").dialog('destroy').html("<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please wait ...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" + progbar).dialog( { width: 200});
			$("form[name='users_form']").submit();
		});
		
		$("#user_reject_send_button").click(function() {
			val = $("#rejection_reason_text").val();
			$("#rejection_reason").val(val);
			$("input[name='action_name']").val('reject');
			$("#user_reject_dialog").dialog('destroy').html("<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please wait ...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" + progbar).dialog( { width: 200});
			$("form[name='users_form']").submit();
		});
		
		$("tr[id^='users']").click(function() {
			var name = ($(this).attr('id'));
			if( !$(this).attr('style') ) {
				$("input[name='" + name + "']").attr('checked','checked');
				$(this).attr('style','background-color: #ffcc99');
			} else {
				$(this).removeAttr('style');
				$("input[name='" + name + "']").removeAttr('checked');
			}
		});
	});

	function login_as_user( name, pass ) {
		$.get('<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/login-as-user/', { username: name, password: pass}, function (data) {
			var response = $.trim(data);
			if (response == "") {
				document.login.username.value = name;
				document.login.password.value = pass;
				document.getElementById('login').submit();
			}
			else {
				popUpMessageWindow(300, 100, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Error<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', data);
			}
		});
	}

	function isPopUp(button, textChooseAction, textChooseItem, textToDelete) {
		if(isActionEmpty(button, textChooseAction, textChooseItem)) {
			var action = $("#selectedAction_" + button).val();

			switch (action) {
				case 'send_activation_letter':
					var users = [];
					var userids = [];
					users = $("input:checked:not(#all_checkboxes_control)");
					for (var i = 0; i < users.length; i++) {
						userids[i] = users[i].name.substring(users[i].name.indexOf('[')+1,users[i].name.lastIndexOf(']'));
					}

					var progbar = "<img src='<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/../system/ext/jquery/progbar.gif'>";
					$(function() {
						var data = '';
						$("#dialog").dialog('destroy');
						$("#dialog").attr({ title: "Loading"});
						$("#dialog").html(progbar).dialog({ width: 180 });

						$.get("<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/send-activation-letter/",{ 'userids[]':userids, ajax:true}, function(data) {
							$("#dialog").dialog('destroy');
							$("#dialog").attr({ title: "<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Sending activation emails<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 " });
							$("#dialog").html(data).dialog({ width: 300 });
						});
					});
					break;
				case 'reject':
					$("#user_reject_dialog").dialog('destroy');
					$("#user_reject_dialog").dialog({ title: "<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User Rejection<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
", width: 350});
					break;
				case 'change_product':
					$("#change_product_dialog").dialog('destroy');
					$("#change_product_dialog").dialog({ title: "<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Change Product<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
", width: 350});
					break;
				case "delete":
					if (confirm(textToDelete)) {
						submitForm("delete");
					}
					break;
				default :
					submitForm(action);
					break;
			}
		}
	}

	function viewListingBlock() {
        $("#product_select option").each(function () {
        	$("#block_"+this.value).css('display', 'none');
          });
	
        $("#product_select option:selected").each(function () {
           $("#block_"+this.value).css('display', 'block');
         });
	}	
	</script>

<?php if ($_smarty_tpl->tpl_vars['rangeIPs']->value) {?>
	<div id="bannedIPsInfo" title="Attention!" style="display:none">
		<p>
			<span class="ui-icon ui-icon-circle-check" style="float:left; margin:0 7px 50px 0;"></span>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The range of the IP addresses has been banned. That's why you are not able to unblock the following IP addresses<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:
			<?php  $_smarty_tpl->tpl_vars['IP'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['IP']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rangeIPs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['IP']->key => $_smarty_tpl->tpl_vars['IP']->value) {
$_smarty_tpl->tpl_vars['IP']->_loop = true;
?>
				<b><?php echo $_smarty_tpl->tpl_vars['IP']->value;?>
</b><br/>
			<?php } ?>
		</p>
	</div>
	<script type="text/javascript"><!--
	$("#bannedIPsInfo").dialog({
		bgiframe: true,
		buttons: {
			Close: function() {
				$(this).dialog('close');
			}
		}
	});
	--></script>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['cantBanUsers']->value) {?>
	<div id="usersInfo" title="" style="display:none">
		<p>
			<span class="ui-icon ui-icon-circle-check" style="float:left; margin:0 7px 50px 0;"></span>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
IPs of the following users were not defined, therefore they can’t be banned<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:<br/>
			<?php  $_smarty_tpl->tpl_vars['username'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['username']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cantBanUsers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['username']->key => $_smarty_tpl->tpl_vars['username']->value) {
$_smarty_tpl->tpl_vars['username']->_loop = true;
?>
				<b><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</b><br/>
			<?php } ?>
		</p>
	</div>
	<script type="text/javascript"><!--
	$("#usersInfo").dialog({
		bgiframe: true,
		buttons: {
			Close: function() {
				$(this).dialog('close');
			}
		}
	});
	--></script>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
	<?php  $_smarty_tpl->tpl_vars["error"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["error"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["error"]->key => $_smarty_tpl->tpl_vars["error"]->value) {
$_smarty_tpl->tpl_vars["error"]->_loop = true;
?>
		<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['error'])); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['error']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('metadata'=>$_smarty_tpl->tpl_vars['METADATA']->value['error']), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
	<?php } ?>
<?php }?>
<div id="dialog" style="display: none"></div>
<form id="login" name="login" target="_blank"  action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/login/" method="post">
    <input type="hidden" name="action" value="login" />
    <input type="hidden" name="as_user" />
    <input type="hidden" name="username" value="" />
    <input type="hidden" name="password" value="" />
</form>

<div class="clr"><br/></div>
<form method="post" name="users_form">
	<input type="hidden" name="action_name" id="action_name" value="" />
	<input type="hidden" name="product_to_change" id="product_to_change" value="" />
	<input type="hidden" name="number_of_listings" id="number_of_listings" value="" />
	<input type="hidden" name="rejection_reason" id="rejection_reason" value="" />
	<div class="box" id="displayResults">
		<div class="box-header">
			<?php echo $_smarty_tpl->getSubTemplate ("../pagination/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('layout'=>"header"), 0);?>

			<div id="change_product_dialog" style="display: none">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Select Action<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:
				<select name="product_select" id="product_select" style="width: 219px;"  onChange="viewListingBlock()">
					<option value='0'><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Clear Subscriptions<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
					<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['product']->value['sid'];?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
					<?php } ?>
				</select>
				<br/><br/>
				<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
					<div id="block_<?php echo $_smarty_tpl->tpl_vars['product']->value['sid'];?>
" style="display: none">
						<?php if ($_smarty_tpl->tpl_vars['product']->value['count_listings']) {?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of Listings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:
							<select name="number_of_listings_<?php echo $_smarty_tpl->tpl_vars['product']->value['sid'];?>
" id="number_of_listings_<?php echo $_smarty_tpl->tpl_vars['product']->value['sid'];?>
" style="width: 50px;">
								<?php  $_smarty_tpl->tpl_vars['count_listings'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['count_listings']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['count_listings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['count_listings']->key => $_smarty_tpl->tpl_vars['count_listings']->value) {
$_smarty_tpl->tpl_vars['count_listings']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['count_listings']->value;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['count_listings']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
								<?php } ?>
							</select>
						<?php }?>
					</div>
				<?php } ?>
				<div class="clr"><br/></div>
				<div class="floatRight"><input type="button" id="change_product_send_button" name="change_product_send_button" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Change<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="greenButton" /></div>
			</div>

			<div id="user_reject_dialog" style="display: none">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Enter Reject Reason<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:
				<textarea name="rejection_reason_text" id="rejection_reason_text" style="width: 315px; height: 200px;"></textarea>
				<div class="clr"><br/></div>
				<div class="floatRight"><input type="button" id="user_reject_send_button" name="user_reject_send_button" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Reject<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="grayButton" /></div>
			</div>
		</div>
		<div class="innerpadding">
			<div id="displayResultsTable">
				<table width="100%">
					<thead>
					<?php echo $_smarty_tpl->getSubTemplate ("../pagination/sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					</thead>
					<?php  $_smarty_tpl->tpl_vars['found_user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['found_user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['found_users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['users_block']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['found_user']->key => $_smarty_tpl->tpl_vars['found_user']->value) {
$_smarty_tpl->tpl_vars['found_user']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['users_block']['iteration']++;
?>
						<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
							<td><input type="checkbox" name="users[<?php echo $_smarty_tpl->tpl_vars['found_user']->value['sid'];?>
]" value="1" id="checkbox_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['users_block']['iteration'];?>
" /></td>
							<td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-user/?user_sid=<?php echo $_smarty_tpl->tpl_vars['found_user']->value['sid'];?>
" title="Edit"><b><?php echo $_smarty_tpl->tpl_vars['found_user']->value['sid'];?>
</b></a></td>
							<td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-user/?user_sid=<?php echo $_smarty_tpl->tpl_vars['found_user']->value['sid'];?>
" title="Edit"><b><?php echo $_smarty_tpl->tpl_vars['found_user']->value['username'];?>
<?php if ($_smarty_tpl->tpl_vars['found_user']->value['parent_sid']) {?>&nbsp;<small>(<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
sub-user<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
)</small><?php }?></b></a></td>
							<?php if ($_smarty_tpl->tpl_vars['userGroupInfo']->value['id']=='Employer') {?>
								<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['found_user']->value['CompanyName'], ENT_QUOTES, 'UTF-8', true);?>
</td>
							<?php } elseif ($_smarty_tpl->tpl_vars['userGroupInfo']->value['id']=='JobSeeker') {?>
								<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['found_user']->value['FirstName'], ENT_QUOTES, 'UTF-8', true);?>
</td>
								<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['found_user']->value['LastName'], ENT_QUOTES, 'UTF-8', true);?>
</td>
							<?php }?>
							<!-- for ie -->	<td style="word-break: break-all;"><!-- for firefox--><div style="word-wrap: break-word; width: 130px;"><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['found_user']->value['email'];?>
"><?php echo $_smarty_tpl->tpl_vars['found_user']->value['email'];?>
</a></div></td>
							<td><?php if ($_smarty_tpl->tpl_vars['found_user']->value['products']>0) {?><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/user-product/?user_sid=<?php echo $_smarty_tpl->tpl_vars['found_user']->value['sid'];?>
" target="_blank" class="getUser"><?php echo $_smarty_tpl->tpl_vars['found_user']->value['products'];?>
</a><?php } else { ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
N/A<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?></td>
							<td><?php echo $_smarty_tpl->tpl_vars['found_user']->value['registration_date'];?>
</td>
							<td>
								<?php if ($_smarty_tpl->tpl_vars['found_user']->value['active']=="1") {?>
									<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Active<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

								<?php } else { ?>
									<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Not Active<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

								<?php }?>
							</td>
							<?php if ($_smarty_tpl->tpl_vars['userGroupInfo']->value['approve_user_by_admin']) {?>
								<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['found_user']->value['approval'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
							<?php }?>
							<td nowrap="nowrap"><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-user/?user_group=<?php echo $_smarty_tpl->tpl_vars['userGroupInfo']->value['id'];?>
&amp;user_sid=<?php echo $_smarty_tpl->tpl_vars['found_user']->value['sid'];?>
" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="editbutton"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></td>
							<td nowrap="nowrap" style="border-left: 0px;"><span class="greenButtonEnd"><input type="button" name="button" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Login<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="greenButton" onclick="login_as_user('<?php echo $_smarty_tpl->tpl_vars['found_user']->value['username'];?>
', '<?php echo $_smarty_tpl->tpl_vars['found_user']->value['password'];?>
');" /></span></td>
						</tr>
					<?php } ?>
				</table>
			</div>
		</div>
		<div class="box-footer">
			<?php echo $_smarty_tpl->getSubTemplate ("../pagination/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('layout'=>"footer"), 0);?>

		</div>
	</div>
</form><?php }} ?>
