<?php /* Smarty version Smarty-3.1.19, created on 2016-09-30 13:00:07
         compiled from "template_satzview_user:../field_types/search/text.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167781015757ee147f313813-65917850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d36c747db0826cc3ba80ee3fe6b8626f24cd207' => 
    array (
      0 => 'template_satzview_user:../field_types/search/text.tpl',
      1 => 1402650044,
      2 => 'template_satzview_user',
    ),
  ),
  'nocache_hash' => '167781015757ee147f313813-65917850',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'templateParams' => 0,
    'value' => 0,
    'id' => 0,
    'title' => 0,
    'GLOBALS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ee147f3bd497_47007919',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ee147f3bd497_47007919')) {function content_57ee147f3bd497_47007919($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['templateParams']->value['type']=="bool") {?>
	<input type="text" value="<?php if ($_smarty_tpl->tpl_vars['value']->value['exact_phrase']) {?><?php echo $_smarty_tpl->tpl_vars['value']->value['exact_phrase'];?>
<?php } elseif ($_smarty_tpl->tpl_vars['value']->value['all_words']) {?><?php echo $_smarty_tpl->tpl_vars['value']->value['all_words'];?>
<?php } elseif ($_smarty_tpl->tpl_vars['value']->value['any_words']) {?><?php echo $_smarty_tpl->tpl_vars['value']->value['any_words'];?>
<?php } elseif ($_smarty_tpl->tpl_vars['value']->value['boolean']) {?><?php echo $_smarty_tpl->tpl_vars['value']->value['boolean'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['value']->value['like'];?>
<?php }?>" class="searchText" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[like]"  id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" /><br/>
	<div style="display: inline-block; float: left;">
		<select size="1" id="searchType-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
			<option value="all_words" <?php if ($_smarty_tpl->tpl_vars['value']->value['all_words']) {?>selected="selected"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Match all words<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
			<option value="any_words" <?php if ($_smarty_tpl->tpl_vars['value']->value['any_words']) {?>selected="selected"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Match any words<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
			<option value="exact_phrase" <?php if ($_smarty_tpl->tpl_vars['value']->value['exact_phrase']) {?>selected="selected"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Match exact phrase<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
			<option value="boolean" <?php if ($_smarty_tpl->tpl_vars['value']->value['boolean']) {?>selected="selected"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Boolean<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
		</select>
	</div>
	<div class="search-only">
		<span><?php if ($_smarty_tpl->tpl_vars['templateParams']->value['listingType']=="Job") {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Search job title only<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php } elseif ($_smarty_tpl->tpl_vars['templateParams']->value['listingType']=="Resume") {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Search resume title only<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php } else { ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Search by title<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?></span>
		<input type="checkbox" value="Title" id="titleOnly-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['title']->value) {?>checked="checked"<?php }?> style="margin: 3px 1px !important;" />
	</div>
	<div id="helplink"></div>
	<script type="text/javascript">
	
		//FIXME: будет вываливаться на одной форме будет несколько полей типа bool
	$.ui.dialog.prototype.options.bgiframe = true;

		function setBoolSearch(id) {
			var where = id;
			var fieldId = '#' + id;
			var stId = "#searchType-" + id;
			var toId = "#titleOnly-" + id;
			$(fieldId).attr('name', where+'['+$(stId).val()+']');
			$(stId).change(function() {
				$(fieldId).attr('name', where+'['+$(stId).val()+']');
				if ($(stId).val()=="boolean") {
					$("#helplink").html("<a href='#'  onclick='showHelp();'>"+'<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Boolean search description<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'+"<\/a>");
				}
				else {
					$("#helplink").html("");
				}
			}).change();

			if ($(stId).val() == "boolean") {
				$("#helplink").html("<a href='#'  onclick='showHelp();'>"+'<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Boolean search description<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'+"<\/a>");
			}
			else {
				$("#helplink").html("");
			}

			$(toId).change(function() {
				where = id;
				if ($(toId).is(':checked'))
					where = "Title";
				$(fieldId).attr('name', where+'['+$(stId).val()+']');
			}).change();
		}
		setBoolSearch('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
');

		function showHelp() {
			$.get('<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/boolean-search/', function(data) {
				$("#messageBox").dialog('destroy').html(data);
				$("#messageBox").dialog({
					width: 500,
					height: 500,
					modal: true,
					title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Boolean search description<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
				}).dialog( 'open' );
			});
			return false;
		}

	</script>
	

<?php } else { ?>
	<input type="text" value="<?php if ($_smarty_tpl->tpl_vars['id']->value=='keywords') {?><?php echo $_smarty_tpl->tpl_vars['value']->value['all_words'];?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['exact_phrase'];?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['any_words'];?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['boolean'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['value']->value['like'];?>
<?php }?>" class="searchText" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
[<?php if ($_smarty_tpl->tpl_vars['id']->value=='keywords') {?>all_words<?php } else { ?>like<?php }?>]"  id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['settings']['use_autocomplete_for_keywords']!=false) {?>
	<?php echo $_smarty_tpl->getSubTemplate ('../field_types/search/autocomplete.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>




<?php }} ?>
