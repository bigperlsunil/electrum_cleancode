<?php /* Smarty version Smarty-3.1.19, created on 2016-09-23 14:37:42
         compiled from "template__system/admin_admin:/home/electrum/public_html/templates/_system/admin/statistics/listings_statistics.tpl" */ ?>
<?php /*%%SmartyHeaderCode:65693113057e4f0de2ef809-22203466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '367166f2fa3d1bf2c84e788e10434604b55b800a' => 
    array (
      0 => 'template__system/admin_admin:/home/electrum/public_html/templates/_system/admin/statistics/listings_statistics.tpl',
      1 => 1400843946,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '65693113057e4f0de2ef809-22203466',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'statistics' => 0,
    'statistic' => 0,
    'countResult' => 0,
    'listingTypes' => 0,
    'listingType' => 0,
    'userGroup' => 0,
    'userGroups' => 0,
    'listingTypeSID' => 0,
    'errors' => 0,
    'error' => 0,
    'filterValue' => 0,
    'filter' => 0,
    'period' => 0,
    'periodView' => 0,
    'sorting_order' => 0,
    'sorting_field' => 0,
    'columnTitle' => 0,
    'link' => 0,
    'GLOBALS' => 0,
    'key' => 0,
    'value' => 0,
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e4f0de629db9_23532624',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e4f0de629db9_23532624')) {function content_57e4f0de629db9_23532624($_smarty_tpl) {?><script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script>

	google.load("visualization", "1", { packages:["corechart"]});
	google.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = new google.visualization.DataTable();
		var dataArr = new Array();
		var i = 0;
		data.addColumn('string', 'Title');
		data.addColumn('number', 'Percent');
        <?php  $_smarty_tpl->tpl_vars['statistic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['statistic']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statistics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['statistic']->key => $_smarty_tpl->tpl_vars['statistic']->value) {
$_smarty_tpl->tpl_vars['statistic']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['statistic']->key;
?>
       		var total = parseInt('<?php echo $_smarty_tpl->tpl_vars['statistic']->value['total'];?>
');
       		dataArr[i] = ['<?php echo $_smarty_tpl->tpl_vars['statistic']->value['generalColumn'];?>
', total];
       		i++;
        <?php } ?>


        data.addRows(dataArr);

        var options = {
          title: ''
        };
		if ('<?php echo $_smarty_tpl->tpl_vars['countResult']->value;?>
' > 0) {
	        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
	        chart.draw(data, options);
		}
    }

	var currentListingTypeID = '';
	function setListingType(listingTypeSID) {
		$('.userGroupFields').each(function() {
			$(this).css('display', 'none');
		});
		$('.commonFields').each(function() {
			$(this).css('display', 'none');
		});
		if (listingTypeSID != '') {
			<?php  $_smarty_tpl->tpl_vars['listingType'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listingType']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listingTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['listingType']->key => $_smarty_tpl->tpl_vars['listingType']->value) {
$_smarty_tpl->tpl_vars['listingType']->_loop = true;
?>
				if ('<?php echo $_smarty_tpl->tpl_vars['listingType']->value['id'];?>
' == listingTypeSID) {
					if ('<?php echo $_smarty_tpl->tpl_vars['listingType']->value['key'];?>
' == 'Job' || '<?php echo $_smarty_tpl->tpl_vars['listingType']->value['key'];?>
' == 'Resume')
						listingTypeID = '<?php echo $_smarty_tpl->tpl_vars['listingType']->value['key'];?>
s';
					else
						listingTypeID = '"<?php echo $_smarty_tpl->tpl_vars['listingType']->value['key'];?>
" Listings';

					$('.filterTitle').each(function() {
						if (currentListingTypeID != '')
							var text = $(this).text().replace(currentListingTypeID, listingTypeID);
						else
							var text = $(this).text().replace('#listingType#', listingTypeID);
						$(this).text(text);
					});
					currentListingTypeID = listingTypeID;
					$('.commonFields').each(function() {
						$(this).css('display', 'table-row');
					});
					var html = '';
					<?php  $_smarty_tpl->tpl_vars['userGroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['userGroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listingType']->value['userGroups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['userGroup']->key => $_smarty_tpl->tpl_vars['userGroup']->value) {
$_smarty_tpl->tpl_vars['userGroup']->_loop = true;
?>
						if ('<?php echo $_smarty_tpl->tpl_vars['userGroups']->value[$_smarty_tpl->tpl_vars['userGroup']->value];?>
') {
							$('#userGroup_<?php echo $_smarty_tpl->tpl_vars['userGroups']->value[$_smarty_tpl->tpl_vars['userGroup']->value]['id'];?>
').css('display', 'table-row');
						}
					<?php } ?>
					$("#userGroupTable").html(html);
				}
			<?php } ?>

		}
	}

$(document).ready(function(){
	if ('<?php echo $_smarty_tpl->tpl_vars['listingTypeSID']->value;?>
')
		setListingType('<?php echo $_smarty_tpl->tpl_vars['listingTypeSID']->value;?>
');
});
</script>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('breadcrumbs', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Listings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<h1><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
/icons/risegraph32.png" border="0" alt="" class="titleicon"/><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Listings Reports<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>

<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
	<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['error']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['error']->value=='EMPTY_PARAMETER') {?>
			<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Report can not be generated. Select the report parameter<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
		<?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='SELECTED_PERIOD_IS_INCORRECT') {?>
			<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Report can not be generated. Please set correct dates.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
		<?php } else { ?>
			<p class="error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
		<?php }?>
	<?php } ?>
<?php }?>

<form method="post">
<input type="hidden" name="action" value="search" />
<fieldset style="width: 600px;">
	<legend><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Filter<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</legend>
	<table id="filterForm" border="1">
		<tbody>
			<tr>
				<td colspan="2">
					<select name="listingTypeSID" onChange = "setListingType(this.value)">
					<option value=""><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Select Listing Type<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
					<?php  $_smarty_tpl->tpl_vars['listingType'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listingType']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listingTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['listingType']->key => $_smarty_tpl->tpl_vars['listingType']->value) {
$_smarty_tpl->tpl_vars['listingType']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['listingType']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['listingTypeSID']->value==$_smarty_tpl->tpl_vars['listingType']->value['id']) {?> selected ="selected"<?php }?> ><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['listingType']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
					<?php } ?>
					</select>
				</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['userGroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['userGroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userGroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['userGroup']->key => $_smarty_tpl->tpl_vars['userGroup']->value) {
$_smarty_tpl->tpl_vars['userGroup']->_loop = true;
?>
			<tr id="userGroup_<?php echo $_smarty_tpl->tpl_vars['userGroup']->value['id'];?>
" style="display: none;" class="userGroupFields">
				<?php $_smarty_tpl->tpl_vars['userGroupId'] = new Smarty_variable($_smarty_tpl->tpl_vars['userGroup']->value['id'], null, 0);?>
				<?php $_smarty_tpl->tpl_vars['filterValue'] = new Smarty_variable("userGroup_".((string)$_smarty_tpl->tpl_vars['userGroupId']->value), null, 0);?>
				<td><input type="radio" name="filter" value="<?php echo $_smarty_tpl->tpl_vars['filterValue']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['filter']->value==$_smarty_tpl->tpl_vars['filterValue']->value) {?> checked="checked" <?php }?> /></td>
				<td class="filterTitle"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of #listingType# posted per Period by $userGroup.caption<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
			</tr>
			<?php } ?>
			<tr class="commonFields"  style="display: none;">
				<td><input type="radio" name="filter" value="JobCategory" <?php if ($_smarty_tpl->tpl_vars['filter']->value=='JobCategory') {?> checked="checked" <?php }?> /></td>
				<td class="filterTitle"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of #listingType# posted per Period by Category<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
			</tr>
			<tr class="commonFields" style="display: none;">
				<td><input type="radio" name="filter" value="Location_Country" <?php if ($_smarty_tpl->tpl_vars['filter']->value=='Location_Country') {?> checked="checked" <?php }?> /></td>
				<td class="filterTitle"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of #listingType# posted per Period by Country<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
			</tr>
			<tr class="commonFields" style="display: none;">
				<td><input type="radio" name="filter" value="Location_State" <?php if ($_smarty_tpl->tpl_vars['filter']->value=='Location_State') {?> checked="checked" <?php }?> /></td>
				<td class="filterTitle"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of #listingType# posted per Period by State<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
			</tr>
			<tr class="commonFields" style="display: none;">
				<td><input type="radio" name="filter" value="Location_City" <?php if ($_smarty_tpl->tpl_vars['filter']->value=='Location_City') {?> checked="checked" <?php }?> /></td>
				<td class="filterTitle"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of #listingType# posted per Period by City<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
			</tr>
			<tr class="commonFields"  style="display: none;">
				<td colspan="2">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
From<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:
					<?php $_smarty_tpl->_capture_stack[0][] = array("input_text_field_from", null, null); ob_start(); ?><input type="text" name="period[from]" value="<?php echo $_smarty_tpl->tpl_vars['period']->value['from'];?>
" id="period_notless"/><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
					<?php $_smarty_tpl->_capture_stack[0][] = array("input_text_field_to", null, null); ob_start(); ?><input type="text" name="period[to]" value="<?php echo $_smarty_tpl->tpl_vars['period']->value['to'];?>
" id="period_notmore"/><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
					<?php $_smarty_tpl->tpl_vars["input_text_field_from"] = new Smarty_variable(((string)Smarty::$_smarty_vars['capture']['input_text_field_from']), null, 0);?>
					<?php $_smarty_tpl->tpl_vars["input_text_field_to"] = new Smarty_variable(((string)Smarty::$_smarty_vars['capture']['input_text_field_to']), null, 0);?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$input_text_field_from to $input_text_field_to<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</td>
			</tr>
			<tr>
				<td colspan = "2" align="right"><div class="floatRight"><input  type="submit" name="search" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Generate<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="grayButton" /></div></td>
			</tr>
		</tbody>
	</table>
</fieldset>
</form>

<?php if (!$_smarty_tpl->tpl_vars['errors']->value&&$_smarty_tpl->tpl_vars['statistics']->value) {?>
<div class="clr"><br/><br/></div>
<h3>
	<?php if ($_smarty_tpl->tpl_vars['filter']->value=='JobCategory') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of <?php if ($_smarty_tpl->tpl_vars['listingTypes']->value[$_smarty_tpl->tpl_vars['listingTypeSID']->value]['key']=='Job'||$_smarty_tpl->tpl_vars['listingTypes']->value[$_smarty_tpl->tpl_vars['listingTypeSID']->value]['key']=='Resume') {?><?php echo $_smarty_tpl->tpl_vars['listingTypes']->value[$_smarty_tpl->tpl_vars['listingTypeSID']->value]['key'];?>
s<?php } else { ?>"<?php echo $_smarty_tpl->tpl_vars['listingTypes']->value[$_smarty_tpl->tpl_vars['listingTypeSID']->value]['caption'];?>
" Listings<?php }?> posted per Period by Category<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php } elseif ($_smarty_tpl->tpl_vars['filter']->value=='Location_Country') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of <?php if ($_smarty_tpl->tpl_vars['listingTypes']->value[$_smarty_tpl->tpl_vars['listingTypeSID']->value]['key']=='Job'||$_smarty_tpl->tpl_vars['listingTypes']->value[$_smarty_tpl->tpl_vars['listingTypeSID']->value]['key']=='Resume') {?><?php echo $_smarty_tpl->tpl_vars['listingTypes']->value[$_smarty_tpl->tpl_vars['listingTypeSID']->value]['key'];?>
s<?php } else { ?>"<?php echo $_smarty_tpl->tpl_vars['listingTypes']->value[$_smarty_tpl->tpl_vars['listingTypeSID']->value]['caption'];?>
" Listings<?php }?> posted per Period by Country<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php } elseif ($_smarty_tpl->tpl_vars['filter']->value=='Location_State') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of <?php if ($_smarty_tpl->tpl_vars['listingTypes']->value[$_smarty_tpl->tpl_vars['listingTypeSID']->value]['key']=='Job'||$_smarty_tpl->tpl_vars['listingTypes']->value[$_smarty_tpl->tpl_vars['listingTypeSID']->value]['key']=='Resume') {?><?php echo $_smarty_tpl->tpl_vars['listingTypes']->value[$_smarty_tpl->tpl_vars['listingTypeSID']->value]['key'];?>
s<?php } else { ?>"<?php echo $_smarty_tpl->tpl_vars['listingTypes']->value[$_smarty_tpl->tpl_vars['listingTypeSID']->value]['caption'];?>
" Listings<?php }?> posted per Period by State<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php } elseif ($_smarty_tpl->tpl_vars['filter']->value=='Location_City') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of <?php if ($_smarty_tpl->tpl_vars['listingTypes']->value[$_smarty_tpl->tpl_vars['listingTypeSID']->value]['key']=='Job'||$_smarty_tpl->tpl_vars['listingTypes']->value[$_smarty_tpl->tpl_vars['listingTypeSID']->value]['key']=='Resume') {?><?php echo $_smarty_tpl->tpl_vars['listingTypes']->value[$_smarty_tpl->tpl_vars['listingTypeSID']->value]['key'];?>
s<?php } else { ?>"<?php echo $_smarty_tpl->tpl_vars['listingTypes']->value[$_smarty_tpl->tpl_vars['listingTypeSID']->value]['caption'];?>
" Listings<?php }?> posted per Period by City<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php } else { ?>
		<?php  $_smarty_tpl->tpl_vars['userGroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['userGroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userGroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['userGroup']->key => $_smarty_tpl->tpl_vars['userGroup']->value) {
$_smarty_tpl->tpl_vars['userGroup']->_loop = true;
?>
			<?php $_smarty_tpl->tpl_vars['userGroupId'] = new Smarty_variable($_smarty_tpl->tpl_vars['userGroup']->value['id'], null, 0);?>
			<?php $_smarty_tpl->tpl_vars['filterValue'] = new Smarty_variable("userGroup_".((string)$_smarty_tpl->tpl_vars['userGroupId']->value), null, 0);?>
			<?php if ($_smarty_tpl->tpl_vars['filter']->value==$_smarty_tpl->tpl_vars['filterValue']->value) {?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of <?php if ($_smarty_tpl->tpl_vars['listingTypes']->value[$_smarty_tpl->tpl_vars['listingTypeSID']->value]['key']=='Job'||$_smarty_tpl->tpl_vars['listingTypes']->value[$_smarty_tpl->tpl_vars['listingTypeSID']->value]['key']=='Resume') {?><?php echo $_smarty_tpl->tpl_vars['listingTypes']->value[$_smarty_tpl->tpl_vars['listingTypeSID']->value]['key'];?>
s<?php } else { ?>"<?php echo $_smarty_tpl->tpl_vars['listingTypes']->value[$_smarty_tpl->tpl_vars['listingTypeSID']->value]['caption'];?>
" Listings<?php }?> posted per Period by <?php echo $_smarty_tpl->tpl_vars['userGroup']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
		<?php } ?>
	<?php }?>
</h3>
<div>
	<?php if ($_smarty_tpl->tpl_vars['periodView']->value['from']) {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
from<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
  <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('type'=>"date")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"date"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['periodView']->value['from'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"date"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['periodView']->value['to']) {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
to<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
  <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('type'=>"date")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"date"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['periodView']->value['to'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array('type'=>"date"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
</div>

<table>
	<thead>
		<tr>
			<th>
				<?php if ($_smarty_tpl->tpl_vars['filter']->value=='JobCategory'||$_smarty_tpl->tpl_vars['filter']->value=='Location_Country'||$_smarty_tpl->tpl_vars['filter']->value=='Location_State'||$_smarty_tpl->tpl_vars['filter']->value=='Location_City') {?>
					<a href="?search=search&amp;filter=<?php echo $_smarty_tpl->tpl_vars['filter']->value;?>
&amp;listingTypeSID=<?php echo $_smarty_tpl->tpl_vars['listingTypeSID']->value;?>
&amp;period[from]=<?php echo $_smarty_tpl->tpl_vars['period']->value['from'];?>
&amp;period[to]=<?php echo $_smarty_tpl->tpl_vars['period']->value['to'];?>
&amp;sorting_field=<?php echo $_smarty_tpl->tpl_vars['filter']->value;?>
&amp;sorting_order=<?php if ($_smarty_tpl->tpl_vars['sorting_order']->value=='ASC'&&$_smarty_tpl->tpl_vars['sorting_field']->value==$_smarty_tpl->tpl_vars['filter']->value) {?>DESC<?php } else { ?>ASC<?php }?>"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['columnTitle']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
					<?php if ($_smarty_tpl->tpl_vars['sorting_field']->value==$_smarty_tpl->tpl_vars['filter']->value) {?>
						<?php if ($_smarty_tpl->tpl_vars['sorting_order']->value=='ASC') {?>
							<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
b_up_arrow.gif" alt="Up" />
						<?php } else { ?>
							<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
b_down_arrow.gif" alt="Down" />
						<?php }?>
					<?php }?>
				<?php } else { ?>
					<a href="?search=search&amp;filter=<?php echo $_smarty_tpl->tpl_vars['filter']->value;?>
&amp;listingTypeSID=<?php echo $_smarty_tpl->tpl_vars['listingTypeSID']->value;?>
&amp;period[from]=<?php echo $_smarty_tpl->tpl_vars['period']->value['from'];?>
&amp;period[to]=<?php echo $_smarty_tpl->tpl_vars['period']->value['to'];?>
&amp;sorting_field=username&amp;sorting_order=<?php if ($_smarty_tpl->tpl_vars['sorting_order']->value=='ASC'&&$_smarty_tpl->tpl_vars['sorting_field']->value=='username') {?>DESC<?php } else { ?>ASC<?php }?>"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['columnTitle']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
					<?php if ($_smarty_tpl->tpl_vars['sorting_field']->value=='username') {?>
						<?php if ($_smarty_tpl->tpl_vars['sorting_order']->value=='ASC') {?>
							<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
b_up_arrow.gif" alt="Up" />
						<?php } else { ?>
							<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
b_down_arrow.gif" alt="Down" />
						<?php }?>
					<?php }?>
				<?php }?>
			</th>
			<th>
				<a href="?search=search&amp;filter=<?php echo $_smarty_tpl->tpl_vars['filter']->value;?>
&amp;listingTypeSID=<?php echo $_smarty_tpl->tpl_vars['listingTypeSID']->value;?>
&amp;period[from]=<?php echo $_smarty_tpl->tpl_vars['period']->value['from'];?>
&amp;period[to]=<?php echo $_smarty_tpl->tpl_vars['period']->value['to'];?>
&amp;sorting_field=regular&amp;sorting_order=<?php if ($_smarty_tpl->tpl_vars['sorting_order']->value=='ASC'&&$_smarty_tpl->tpl_vars['sorting_field']->value=='regular') {?>DESC<?php } else { ?>ASC<?php }?>"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of Regular <?php if ($_smarty_tpl->tpl_vars['listingTypes']->value[$_smarty_tpl->tpl_vars['listingTypeSID']->value]['key']=='Job'||$_smarty_tpl->tpl_vars['listingTypes']->value[$_smarty_tpl->tpl_vars['listingTypeSID']->value]['key']=='Resume') {?><?php echo $_smarty_tpl->tpl_vars['listingTypes']->value[$_smarty_tpl->tpl_vars['listingTypeSID']->value]['key'];?>
s<?php } else { ?>"<?php echo $_smarty_tpl->tpl_vars['listingTypes']->value[$_smarty_tpl->tpl_vars['listingTypeSID']->value]['caption'];?>
" Listings<?php }?> Posted<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
				<?php if ($_smarty_tpl->tpl_vars['sorting_field']->value=='regular') {?>
					<?php if ($_smarty_tpl->tpl_vars['sorting_order']->value=='ASC') {?>
						<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
b_up_arrow.gif" alt="Up" />
					<?php } else { ?>
						<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
b_down_arrow.gif" alt="Down" />
					<?php }?>
				<?php }?>
			</th>
			<?php if ($_smarty_tpl->tpl_vars['listingTypes']->value[$_smarty_tpl->tpl_vars['listingTypeSID']->value]['key']=='Job') {?>
			<th>
				<a href="?search=search&amp;filter=<?php echo $_smarty_tpl->tpl_vars['filter']->value;?>
&amp;listingTypeSID=<?php echo $_smarty_tpl->tpl_vars['listingTypeSID']->value;?>
&amp;period[from]=<?php echo $_smarty_tpl->tpl_vars['period']->value['from'];?>
&amp;period[to]=<?php echo $_smarty_tpl->tpl_vars['period']->value['to'];?>
&amp;sorting_field=FeaturedListings&amp;sorting_order=<?php if ($_smarty_tpl->tpl_vars['sorting_order']->value=='ASC'&&$_smarty_tpl->tpl_vars['sorting_field']->value=='FeaturedListings') {?>DESC<?php } else { ?>ASC<?php }?>"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of Featured Jobs Posted<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
				<?php if ($_smarty_tpl->tpl_vars['sorting_field']->value=='FeaturedListings') {?>
					<?php if ($_smarty_tpl->tpl_vars['sorting_order']->value=='ASC') {?>
						<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
b_up_arrow.gif" alt="Up" />
					<?php } else { ?>
						<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
b_down_arrow.gif" alt="Down" />
					<?php }?>
				<?php }?>
			</th>
			<?php }?>
			<th>
				<a href="?search=search&amp;filter=<?php echo $_smarty_tpl->tpl_vars['filter']->value;?>
&amp;listingTypeSID=<?php echo $_smarty_tpl->tpl_vars['listingTypeSID']->value;?>
&amp;period[from]=<?php echo $_smarty_tpl->tpl_vars['period']->value['from'];?>
&amp;period[to]=<?php echo $_smarty_tpl->tpl_vars['period']->value['to'];?>
&amp;sorting_field=PriorityListings&amp;sorting_order=<?php if ($_smarty_tpl->tpl_vars['sorting_order']->value=='ASC'&&$_smarty_tpl->tpl_vars['sorting_field']->value=='PriorityListings') {?>DESC<?php } else { ?>ASC<?php }?>"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Number of Priority <?php if ($_smarty_tpl->tpl_vars['listingTypes']->value[$_smarty_tpl->tpl_vars['listingTypeSID']->value]['key']=='Job'||$_smarty_tpl->tpl_vars['listingTypes']->value[$_smarty_tpl->tpl_vars['listingTypeSID']->value]['key']=='Resume') {?><?php echo $_smarty_tpl->tpl_vars['listingTypes']->value[$_smarty_tpl->tpl_vars['listingTypeSID']->value]['key'];?>
s<?php } else { ?>"<?php echo $_smarty_tpl->tpl_vars['listingTypes']->value[$_smarty_tpl->tpl_vars['listingTypeSID']->value]['caption'];?>
" Listings<?php }?> Posted<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
				<?php if ($_smarty_tpl->tpl_vars['sorting_field']->value=='PriorityListings') {?>
					<?php if ($_smarty_tpl->tpl_vars['sorting_order']->value=='ASC') {?>
						<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
b_up_arrow.gif" alt="Up" />
					<?php } else { ?>
						<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
b_down_arrow.gif" alt="Down" />
					<?php }?>
				<?php }?>
			</th>
			<th>
				<a href="?search=search&amp;filter=<?php echo $_smarty_tpl->tpl_vars['filter']->value;?>
&amp;listingTypeSID=<?php echo $_smarty_tpl->tpl_vars['listingTypeSID']->value;?>
&amp;period[from]=<?php echo $_smarty_tpl->tpl_vars['period']->value['from'];?>
&amp;period[to]=<?php echo $_smarty_tpl->tpl_vars['period']->value['to'];?>
&amp;sorting_field=total&amp;sorting_order=<?php if ($_smarty_tpl->tpl_vars['sorting_order']->value=='ASC'&&$_smarty_tpl->tpl_vars['sorting_field']->value=='total') {?>DESC<?php } else { ?>ASC<?php }?>"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Total<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
				<?php if ($_smarty_tpl->tpl_vars['sorting_field']->value=='total') {?>
					<?php if ($_smarty_tpl->tpl_vars['sorting_order']->value=='ASC') {?>
						<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
b_up_arrow.gif" alt="Up" />
					<?php } else { ?>
						<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
b_down_arrow.gif" alt="Down" />
					<?php }?>
				<?php }?>
			</th>
			<th>
				<a href="?search=search&amp;filter=<?php echo $_smarty_tpl->tpl_vars['filter']->value;?>
&amp;listingTypeSID=<?php echo $_smarty_tpl->tpl_vars['listingTypeSID']->value;?>
&amp;period[from]=<?php echo $_smarty_tpl->tpl_vars['period']->value['from'];?>
&amp;period[to]=<?php echo $_smarty_tpl->tpl_vars['period']->value['to'];?>
&amp;sorting_field=percent&amp;sorting_order=<?php if ($_smarty_tpl->tpl_vars['sorting_order']->value=='ASC'&&$_smarty_tpl->tpl_vars['sorting_field']->value=='percent') {?>DESC<?php } else { ?>ASC<?php }?>">%</a>
				<?php if ($_smarty_tpl->tpl_vars['sorting_field']->value=='percent') {?>
					<?php if ($_smarty_tpl->tpl_vars['sorting_order']->value=='ASC') {?>
						<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
b_up_arrow.gif" alt="Up" />
					<?php } else { ?>
						<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
b_down_arrow.gif" alt="Down" />
					<?php }?>
				<?php }?>
			</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars['statistic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['statistic']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statistics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['statistic']->key => $_smarty_tpl->tpl_vars['statistic']->value) {
$_smarty_tpl->tpl_vars['statistic']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['statistic']->key;
?>
			<tr>
				<td>
					<strong>
					<?php if ($_smarty_tpl->tpl_vars['link']->value=='user') {?>
						<?php if ($_smarty_tpl->tpl_vars['statistic']->value['generalColumn']=='Other') {?>
							<?php echo $_smarty_tpl->tpl_vars['statistic']->value['generalColumn'];?>

						<?php } else { ?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/edit-user/?user_sid=<?php echo $_smarty_tpl->tpl_vars['statistic']->value['user_sid'];?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['statistic']->value['generalColumn'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
						<?php }?>
					<?php } else { ?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['statistic']->value['generalColumn'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }?>
					</strong>
				</td>
				<td><?php echo $_smarty_tpl->tpl_vars['statistic']->value['regular'];?>
</td>
				<?php if ($_smarty_tpl->tpl_vars['listingTypes']->value[$_smarty_tpl->tpl_vars['listingTypeSID']->value]['key']=='Job') {?>
					<td><?php echo $_smarty_tpl->tpl_vars['statistic']->value['FeaturedListings'];?>
</td>
				<?php }?>
				<td><?php echo $_smarty_tpl->tpl_vars['statistic']->value['PriorityListings'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['statistic']->value['total'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['statistic']->value['percent'];?>
%</td>
			</tr>
		<?php } ?>
	</tbody>
</table>
<div id="stat-footer">
	<form method="post">
		<input type="hidden" name="action" value="export" />
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['period']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<input type="hidden" name="period[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" />
		<?php } ?>
		<input type="hidden" name="filter" value="<?php echo $_smarty_tpl->tpl_vars['filter']->value;?>
" />
		<input type="hidden" name="listingTypeSID" value="<?php echo $_smarty_tpl->tpl_vars['listingTypeSID']->value;?>
" />
		<input type="hidden" name="sorting_field" value="<?php echo $_smarty_tpl->tpl_vars['sorting_field']->value;?>
" />
		<input type="hidden" name="sorting_order" value="<?php echo $_smarty_tpl->tpl_vars['sorting_order']->value;?>
" />
		<span class="greenButtonEnd"><input type="submit" name="export" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Export<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="greenButton" /></span>
		<select name="type" class="export-select">
			<option value="csv">CSV</option>
			<option value="xls">XLS</option>
		</select>
	</form>
	<div class="clr"></div>
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/print-listings-statistics/" target="_blank">
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['period']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<input type="hidden" name="period[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" />
		<?php } ?>
		<input type="hidden" name="filter" value="<?php echo $_smarty_tpl->tpl_vars['filter']->value;?>
" />
		<input type="hidden" name="listingTypeSID" value="<?php echo $_smarty_tpl->tpl_vars['listingTypeSID']->value;?>
" />
		<input type="hidden" name="sorting_field" value="<?php echo $_smarty_tpl->tpl_vars['sorting_field']->value;?>
" />
		<input type="hidden" name="sorting_order" value="<?php echo $_smarty_tpl->tpl_vars['sorting_order']->value;?>
" />
		<span class="greenButtonEnd printButton"><input type="submit" name="search" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Print<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="greenButton"  /></span>
	</form>
</div>
<?php } elseif (!$_smarty_tpl->tpl_vars['errors']->value&&!$_smarty_tpl->tpl_vars['statistics']->value&&$_smarty_tpl->tpl_vars['search']->value) {?>
	<br/><br/><p class="error" style="width: 600px;"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Report can not be generated. There is no statistics for this period.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
<?php }?>
<div class="clr"><br/><br/></div>
<div id="chart_div" style="width: 900px; height: 500px;"></div>

<script language="Javascript">
$(function(){

	var dFormat = '<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_language_data']['date_format'];?>
';
	dFormat = dFormat.replace('%m', "mm");
	dFormat = dFormat.replace('%d', "dd");
	dFormat = dFormat.replace('%Y', "yy");

	$("#period_notless, #period_notmore").datepicker({
		dateFormat: dFormat,
		showOn: 'both',
		yearRange: '-99:+99',
		buttonImage: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0][0]->getImageURL(array(),$_smarty_tpl);?>
icons/icon-calendar.png'
	});
});

</script><?php }} ?>
