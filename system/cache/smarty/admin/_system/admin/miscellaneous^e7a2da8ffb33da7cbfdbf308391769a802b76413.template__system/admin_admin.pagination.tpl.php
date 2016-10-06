<?php /* Smarty version Smarty-3.1.19, created on 2016-09-23 13:40:00
         compiled from "template__system/admin_admin:../pagination/pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112628963457e4e35827a718-89556251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7a2da8ffb33da7cbfdbf308391769a802b76413' => 
    array (
      0 => 'template__system/admin_admin:../pagination/pagination.tpl',
      1 => 1398826334,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '112628963457e4e35827a718-89556251',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'paginationInfo' => 0,
    'id' => 0,
    'param' => 0,
    'action' => 0,
    'value' => 0,
    'layout' => 0,
    'actionInfo' => 0,
    'page' => 0,
    'numberOfElement' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e4e35846fa11_16799191',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e4e35846fa11_16799191')) {function content_57e4e35846fa11_16799191($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home/electrum/public_html/system/ext/Smarty/libs/plugins/modifier.escape.php';
?><?php $_smarty_tpl->_capture_stack[0][] = array("urlParams", null, null); ob_start(); ?><?php if (is_array($_smarty_tpl->tpl_vars['paginationInfo']->value['uniqueUrlParams'])) {?><?php  $_smarty_tpl->tpl_vars['param'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['param']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['paginationInfo']->value['uniqueUrlParams']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['param']->key => $_smarty_tpl->tpl_vars['param']->value) {
$_smarty_tpl->tpl_vars['param']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['param']->key;
?>&amp;<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
=<?php if ($_smarty_tpl->tpl_vars['param']->value['escape']) {?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['param']->value['value'], ((string)$_smarty_tpl->tpl_vars['param']->value['escape']));?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['param']->value['value'];?>
<?php }?><?php } ?><?php } else { ?>&amp;<?php echo $_smarty_tpl->tpl_vars['paginationInfo']->value['uniqueUrlParams'];?>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<div class="items-count"><strong><?php echo $_smarty_tpl->tpl_vars['paginationInfo']->value['itemsCount'];?>
</strong> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['paginationInfo']->value['item'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
<?php if ($_smarty_tpl->tpl_vars['paginationInfo']->value['actionsForSelect']) {?>
	<?php if (count($_smarty_tpl->tpl_vars['paginationInfo']->value['actionsForSelect'])==1) {?>
		<div class="actionWithSelected">
			<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['paginationInfo']->value['actionsForSelect']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['action']->key;
?>
				<input type="button" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="<?php if ($_smarty_tpl->tpl_vars['value']->value=='delete') {?>deletebutton<?php } else { ?>editbutton<?php }?>" onclick="<?php if ($_smarty_tpl->tpl_vars['paginationInfo']->value['popUp']==true) {?>isPopUp('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['paginationInfo']->value['translatedText']['chooseItem'], ENT_QUOTES, 'UTF-8', true);?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['paginationInfo']->value['translatedText']['delete'], ENT_QUOTES, 'UTF-8', true);?>
');<?php } else { ?>goSingleButton('<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['paginationInfo']->value['translatedText']['chooseItem'], ENT_QUOTES, 'UTF-8', true);?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['paginationInfo']->value['translatedText']['delete'], ENT_QUOTES, 'UTF-8', true);?>
');<?php }?>" />
			<?php } ?>
		</div>
	<?php } else { ?>
		<div class="actionSelected">
			<select id="selectedAction_<?php echo $_smarty_tpl->tpl_vars['layout']->value;?>
" name="selectedAction_<?php echo $_smarty_tpl->tpl_vars['layout']->value;?>
">
				<option value=""><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Select action<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
				<?php  $_smarty_tpl->tpl_vars['actionInfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['actionInfo']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['paginationInfo']->value['actionsForSelect']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['actionInfo']->key => $_smarty_tpl->tpl_vars['actionInfo']->value) {
$_smarty_tpl->tpl_vars['actionInfo']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['actionInfo']->key;
?>
					<?php if ($_smarty_tpl->tpl_vars['actionInfo']->value['isVisible']==true) {?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['actionInfo']->value['name'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
					<?php }?>
				<?php } ?>
			</select>
			<input type="button" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Go<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="grayButton" onclick="<?php if ($_smarty_tpl->tpl_vars['paginationInfo']->value['popUp']==true) {?>isPopUp('<?php echo $_smarty_tpl->tpl_vars['layout']->value;?>
','<?php echo strtr($_smarty_tpl->tpl_vars['paginationInfo']->value['translatedText']['chooseAction'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', '<?php echo strtr($_smarty_tpl->tpl_vars['paginationInfo']->value['translatedText']['chooseItem'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', '<?php echo strtr($_smarty_tpl->tpl_vars['paginationInfo']->value['translatedText']['delete'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');<?php } else { ?>go('<?php echo $_smarty_tpl->tpl_vars['layout']->value;?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['paginationInfo']->value['translatedText']['delete'], ENT_QUOTES, 'UTF-8', true);?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['paginationInfo']->value['translatedText']['chooseAction'], ENT_QUOTES, 'UTF-8', true);?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['paginationInfo']->value['translatedText']['chooseItem'], ENT_QUOTES, 'UTF-8', true);?>
');<?php }?>"/>
		</div>
	<?php }?>
<?php }?>

<?php if (count($_smarty_tpl->tpl_vars['paginationInfo']->value['pages'])!=1) {?>
	<div class="pagination">
		<?php if ($_smarty_tpl->tpl_vars['paginationInfo']->value['currentPage']==1) {?>
			<a class="none"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
arrow-left-no-active.png" /></a>
		<?php } else { ?>
			&nbsp;<a class="arrow-left"  href="?<?php if ($_smarty_tpl->tpl_vars['paginationInfo']->value['restore']==1) {?>restore=1<?php }?>&amp;page=<?php echo $_smarty_tpl->tpl_vars['paginationInfo']->value['currentPage']-1;?>
&amp;itemsPerPage=<?php echo $_smarty_tpl->tpl_vars['paginationInfo']->value['itemsPerPage'];?>
<?php if ($_smarty_tpl->tpl_vars['paginationInfo']->value['uniqueUrlParams']) {?><?php echo Smarty::$_smarty_vars['capture']['urlParams'];?>
<?php }?>"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
arrow-left.png" /></a>
		<?php }?>
		<?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['paginationInfo']->value['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['page']->value==$_smarty_tpl->tpl_vars['paginationInfo']->value['currentPage']) {?>
				<span id="currentButton" class="current" onclick="showInputPage('<?php echo $_smarty_tpl->tpl_vars['layout']->value;?>
');"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&nbsp;<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
arrow-down.png" /></span>

				<div id="pageField_<?php echo $_smarty_tpl->tpl_vars['layout']->value;?>
" class="page-field" style="display: none;">
					<div class="title-current"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
go to page<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</div>
					<div class="content-current">
						<div class="page-input">
							<input id="pageInput_<?php echo $_smarty_tpl->tpl_vars['layout']->value;?>
" type="text" autocomplete="off" onkeypress="$(this).keyup(function(event) { checkEnteredPage(event.keyCode, '<?php echo $_smarty_tpl->tpl_vars['layout']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['paginationInfo']->value['totalPages'];?>
', '?<?php if ($_smarty_tpl->tpl_vars['paginationInfo']->value['restore']==1) {?>restore=1<?php }?><?php if ($_smarty_tpl->tpl_vars['paginationInfo']->value['sortingField']!=null) {?>&amp;sortingField=<?php echo $_smarty_tpl->tpl_vars['paginationInfo']->value['sortingField'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['paginationInfo']->value['sortingOrder']!=null) {?>&amp;sortingOrder=<?php echo $_smarty_tpl->tpl_vars['paginationInfo']->value['sortingOrder'];?>
<?php }?>&amp;itemsPerPage=<?php echo $_smarty_tpl->tpl_vars['paginationInfo']->value['itemsPerPage'];?>
<?php if ($_smarty_tpl->tpl_vars['paginationInfo']->value['uniqueUrlParams']) {?><?php echo Smarty::$_smarty_vars['capture']['urlParams'];?>
<?php }?>') });" onblur="hideInputPage('<?php echo $_smarty_tpl->tpl_vars['layout']->value;?>
');" />
						</div>
						<div class="page-enter-button">
							<input id="enterButton_<?php echo $_smarty_tpl->tpl_vars['layout']->value;?>
" type="button" disabled="disabled" onclick="goToPage('<?php echo $_smarty_tpl->tpl_vars['layout']->value;?>
', '?<?php if ($_smarty_tpl->tpl_vars['paginationInfo']->value['restore']==1) {?>restore=1<?php }?><?php if ($_smarty_tpl->tpl_vars['paginationInfo']->value['sortingField']!=null) {?>&amp;sortingField=<?php echo $_smarty_tpl->tpl_vars['paginationInfo']->value['sortingField'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['paginationInfo']->value['sortingOrder']!=null) {?>&amp;sortingOrder=<?php echo $_smarty_tpl->tpl_vars['paginationInfo']->value['sortingOrder'];?>
<?php }?>&amp;itemsPerPage=<?php echo $_smarty_tpl->tpl_vars['paginationInfo']->value['itemsPerPage'];?>
<?php if ($_smarty_tpl->tpl_vars['paginationInfo']->value['uniqueUrlParams']) {?><?php echo Smarty::$_smarty_vars['capture']['urlParams'];?>
<?php }?>')" />
						</div>
					</div>
				</div>
			<?php } else { ?>
				<?php if ($_smarty_tpl->tpl_vars['page']->value==$_smarty_tpl->tpl_vars['paginationInfo']->value['totalPages']&&$_smarty_tpl->tpl_vars['paginationInfo']->value['currentPage']<$_smarty_tpl->tpl_vars['paginationInfo']->value['totalPages']-3) {?> ... <?php }?>
				<a href="?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php if ($_smarty_tpl->tpl_vars['paginationInfo']->value['restore']==1) {?>&amp;restore=1<?php }?><?php if ($_smarty_tpl->tpl_vars['paginationInfo']->value['sortingField']!=null) {?>&amp;sortingField=<?php echo $_smarty_tpl->tpl_vars['paginationInfo']->value['sortingField'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['paginationInfo']->value['sortingOrder']!=null) {?>&amp;sortingOrder=<?php echo $_smarty_tpl->tpl_vars['paginationInfo']->value['sortingOrder'];?>
<?php }?>&amp;itemsPerPage=<?php echo $_smarty_tpl->tpl_vars['paginationInfo']->value['itemsPerPage'];?>
<?php if ($_smarty_tpl->tpl_vars['paginationInfo']->value['uniqueUrlParams']) {?><?php echo Smarty::$_smarty_vars['capture']['urlParams'];?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
				<?php if ($_smarty_tpl->tpl_vars['page']->value==1&&$_smarty_tpl->tpl_vars['paginationInfo']->value['currentPage']>4) {?> ... <?php }?>
			<?php }?>
		<?php } ?>


		<?php if ($_smarty_tpl->tpl_vars['paginationInfo']->value['currentPage']==$_smarty_tpl->tpl_vars['paginationInfo']->value['totalPages']) {?>
			<a class="none"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
arrow-right-no-active.png" /></a>&nbsp;
		<?php } else { ?>
			<a class="arrow-right" href="?<?php if ($_smarty_tpl->tpl_vars['paginationInfo']->value['restore']==1) {?>restore=1<?php }?>&amp;page=<?php echo $_smarty_tpl->tpl_vars['paginationInfo']->value['currentPage']+1;?>
&amp;itemsPerPage=<?php echo $_smarty_tpl->tpl_vars['paginationInfo']->value['itemsPerPage'];?>
<?php if ($_smarty_tpl->tpl_vars['paginationInfo']->value['uniqueUrlParams']) {?><?php echo Smarty::$_smarty_vars['capture']['urlParams'];?>
<?php }?>" ><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
arrow-right.png" /></a>&nbsp;
		<?php }?>
	</div>
<?php }?>

<div class="numberPerPage">
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
per page<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:
	<select id="itemsPerPage" name="itemsPerPage" onchange="window.location = '?<?php if ($_smarty_tpl->tpl_vars['paginationInfo']->value['restore']==1) {?>restore=1<?php }?><?php if ($_smarty_tpl->tpl_vars['paginationInfo']->value['sortingField']!=null) {?>&amp;sortingField=<?php echo $_smarty_tpl->tpl_vars['paginationInfo']->value['sortingField'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['paginationInfo']->value['sortingOrder']!=null) {?>&amp;sortingOrder=<?php echo $_smarty_tpl->tpl_vars['paginationInfo']->value['sortingOrder'];?>
<?php }?>&amp;page=1<?php if ($_smarty_tpl->tpl_vars['paginationInfo']->value['uniqueUrlParams']) {?><?php echo Smarty::$_smarty_vars['capture']['urlParams'];?>
<?php }?>&amp;itemsPerPage=' + this.value;" class="perPage">
		<?php  $_smarty_tpl->tpl_vars['numberOfElement'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['numberOfElement']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['paginationInfo']->value['numberOfElementsPageSelect']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['numberOfElement']->key => $_smarty_tpl->tpl_vars['numberOfElement']->value) {
$_smarty_tpl->tpl_vars['numberOfElement']->_loop = true;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['numberOfElement']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['paginationInfo']->value['itemsPerPage']==$_smarty_tpl->tpl_vars['numberOfElement']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['numberOfElement']->value;?>
</option>
		<?php } ?>
	</select>
</div>

<?php if ($_smarty_tpl->tpl_vars['layout']->value=='header') {?>
	<div id="actionWarning" style="display: none"></div>
<?php }?>
<?php }} ?>
