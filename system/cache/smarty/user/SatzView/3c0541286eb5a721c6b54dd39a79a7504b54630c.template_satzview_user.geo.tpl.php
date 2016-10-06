<?php /* Smarty version Smarty-3.1.19, created on 2016-09-30 13:48:52
         compiled from "template_satzview_user:../field_types/input/geo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145257780357ee1fecd1c782-14003925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c0541286eb5a721c6b54dd39a79a7504b54630c' => 
    array (
      0 => 'template_satzview_user:../field_types/input/geo.tpl',
      1 => 1406815268,
      2 => 'template_satzview_user',
    ),
  ),
  'nocache_hash' => '145257780357ee1fecd1c782-14003925',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'parentID' => 0,
    'id' => 0,
    'complexField' => 0,
    'value' => 0,
    'complexStep' => 0,
    'useAutocomplete' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ee1fecd51ae2_60859842',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ee1fecd51ae2_60859842')) {function content_57ee1fecd51ae2_60859842($_smarty_tpl) {?><input id="<?php if ($_smarty_tpl->tpl_vars['parentID']->value) {?><?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>" type="text" class="inputGeo <?php if ($_smarty_tpl->tpl_vars['complexField']->value) {?>complexField<?php }?>" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value) {?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
]<?php } elseif ($_smarty_tpl->tpl_vars['parentID']->value) {?><?php echo $_smarty_tpl->tpl_vars['parentID']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
]<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>" />

<?php if ($_smarty_tpl->tpl_vars['useAutocomplete']->value==1) {?>
	<?php echo $_smarty_tpl->getSubTemplate ('../field_types/search/autocomplete.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php }} ?>
