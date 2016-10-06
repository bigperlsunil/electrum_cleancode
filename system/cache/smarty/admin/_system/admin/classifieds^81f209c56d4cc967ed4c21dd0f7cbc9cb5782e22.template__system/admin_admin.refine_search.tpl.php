<?php /* Smarty version Smarty-3.1.19, created on 2016-09-23 13:41:54
         compiled from "template__system/admin_admin:/home/electrum/public_html/templates/_system/admin/classifieds/refine_search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:154181909757e4e3ca3b6646-52183364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81f209c56d4cc967ed4c21dd0f7cbc9cb5782e22' => 
    array (
      0 => 'template__system/admin_admin:/home/electrum/public_html/templates/_system/admin/classifieds/refine_search.tpl',
      1 => 1400843946,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '154181909757e4e3ca3b6646-52183364',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'refine_search_items_limit' => 0,
    'listingTypes' => 0,
    'listingType' => 0,
    'fields' => 0,
    'saved_fields' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e4e3ca45bf21_08482002',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e4e3ca45bf21_08482002')) {function content_57e4e3ca45bf21_08482002($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/electrum/public_html/system/ext/Smarty/libs/plugins/function.cycle.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('breadcrumbs', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Refine Search Settings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<h1><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
/icons/search32.png" border="0" alt="" class="titleicon"/><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Refine Search Settings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>

<form method="post" action="">
	<input type="hidden" name="action" value="save_setting" />
	<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Items Limit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
: <input type="text" name="refine_search_items_limit" value="<?php echo $_smarty_tpl->tpl_vars['refine_search_items_limit']->value;?>
" /> <input type="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="greenButton"/>
	<br /><small><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Specify the limit for the number of items to be displayed in Refine Search blocks<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</small></p>
</form>

<?php  $_smarty_tpl->tpl_vars['listingType'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listingType']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listingTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['listingType']->key => $_smarty_tpl->tpl_vars['listingType']->value) {
$_smarty_tpl->tpl_vars['listingType']->_loop = true;
?>
    <fieldset>
        <legend><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['listingType']->value['id'];?>
 Search<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</legend>
        <form method="post" action="">
            <input type="hidden" name="action" value="save_setting" />
            <input type="hidden" name="listing_type_id" value="<?php echo $_smarty_tpl->tpl_vars['listingType']->value['id'];?>
" />
            <input type="hidden" name="turn_on_refine_search_<?php echo $_smarty_tpl->tpl_vars['listingType']->value['id'];?>
" value="0">
            <input type="checkbox" name="turn_on_refine_search_<?php echo $_smarty_tpl->tpl_vars['listingType']->value['id'];?>
"  value="1" <?php if ($_smarty_tpl->tpl_vars['listingType']->value['setting']) {?>checked<?php }?> onchange='form.submit();' /> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Turn on Refine Search<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </form>
        <form method="post" action="" class="refine-block">
            <input type="hidden" name="action" value="save" />
            <input type="hidden" name="listing_type_sid" value="<?php echo $_smarty_tpl->tpl_vars['listingType']->value['sid'];?>
" />
            <select name="field_id" class="left">
                <?php  $_smarty_tpl->tpl_vars['fields'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fields']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listingType']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fields']->key => $_smarty_tpl->tpl_vars['fields']->value) {
$_smarty_tpl->tpl_vars['fields']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['sid'];?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['fields']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
                <?php } ?>
                <?php if ($_smarty_tpl->tpl_vars['listingType']->value['user_fields']['id']) {?>
                    <option value="user_<?php echo $_smarty_tpl->tpl_vars['listingType']->value['user_fields']['sid'];?>
"><?php echo $_smarty_tpl->tpl_vars['listingType']->value['user_fields']['id'];?>
</option>
                <?php }?>
            </select><span class="greenButtonInEnd"><input type="submit" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="grayButton" /></span>
        </form>
        <br/>
        <table>
            <thead>
                <tr>
                    <th><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Field Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
                    <th colspan="3" width="1%" class="actions"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Actions<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
                </tr>
            </thead>
            <?php  $_smarty_tpl->tpl_vars['saved_fields'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['saved_fields']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listingType']->value['saved_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['saved_fields']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['items_block']['total'] = $_smarty_tpl->tpl_vars['saved_fields']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['items_block']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['saved_fields']->key => $_smarty_tpl->tpl_vars['saved_fields']->value) {
$_smarty_tpl->tpl_vars['saved_fields']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['items_block']['iteration']++;
?>
            <tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow'),$_smarty_tpl);?>
">
                <td width="100%"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['saved_fields']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
                <td nowrap="nowrap"><a href="?field_id=<?php echo $_smarty_tpl->tpl_vars['saved_fields']->value['id'];?>
&action=delete" onclick='return confirm("<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Are you sure you want to delete this field?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
")' title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="deletebutton"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></td>
                <td nowrap="nowrap">
                    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['items_block']['iteration']<$_smarty_tpl->getVariable('smarty')->value['foreach']['items_block']['total']) {?>
                        <a href="?field_id=<?php echo $_smarty_tpl->tpl_vars['saved_fields']->value['id'];?>
&amp;listing_type_sid=<?php echo $_smarty_tpl->tpl_vars['listingType']->value['sid'];?>
&amp;action=move_down"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
b_down_arrow.gif" border="0" alt=""/></a>
                    <?php }?>
                </td>
                <td nowrap="nowrap">
                    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['items_block']['iteration']>1) {?>
                        <a href="?field_id=<?php echo $_smarty_tpl->tpl_vars['saved_fields']->value['id'];?>
&amp;listing_type_sid=<?php echo $_smarty_tpl->tpl_vars['listingType']->value['sid'];?>
&amp;action=move_up"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
b_up_arrow.gif" border="0" alt=""/></a>
                    <?php }?>
                </td>
            </tr>
            <?php } ?>
        </table>
    </fieldset>
    <br/>
<?php } ?><?php }} ?>
