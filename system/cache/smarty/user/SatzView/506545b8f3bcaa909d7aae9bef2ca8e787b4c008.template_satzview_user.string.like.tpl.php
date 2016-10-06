<?php /* Smarty version Smarty-3.1.19, created on 2016-10-01 10:09:51
         compiled from "template_satzview_user:../field_types/search/string.like.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99410479457ef3e17d72081-73669143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '506545b8f3bcaa909d7aae9bef2ca8e787b4c008' => 
    array (
      0 => 'template_satzview_user:../field_types/search/string.like.tpl',
      1 => 1402650044,
      2 => 'template_satzview_user',
    ),
  ),
  'nocache_hash' => '99410479457ef3e17d72081-73669143',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'value' => 0,
    'parentID' => 0,
    'useAutocomplete' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ef3e17d9b751_55121050',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ef3e17d9b751_55121050')) {function content_57ef3e17d9b751_55121050($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/electrum/public_html/system/ext/Smarty/libs/plugins/modifier.replace.php';
?><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[like]"  id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="searchStringLike" value="<?php if ($_smarty_tpl->tpl_vars['value']->value['like']) {?><?php echo $_smarty_tpl->tpl_vars['value']->value['like'];?>
<?php } elseif ($_smarty_tpl->tpl_vars['value']->value['multi_like_and'][0]) {?><?php echo $_smarty_tpl->tpl_vars['value']->value['multi_like_and'][0];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['value']->value['equal'];?>
<?php }?>"/>
<?php if ($_smarty_tpl->tpl_vars['parentID']->value) {?>
	<?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(smarty_modifier_replace($_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl->tpl_vars['parentID']->value,''), null, 0);?>
	<?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(smarty_modifier_replace($_smarty_tpl->tpl_vars['id']->value,'_',''), null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['useAutocomplete']->value==1) {?>
	<?php echo $_smarty_tpl->getSubTemplate ('../field_types/search/autocomplete.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php }} ?>
