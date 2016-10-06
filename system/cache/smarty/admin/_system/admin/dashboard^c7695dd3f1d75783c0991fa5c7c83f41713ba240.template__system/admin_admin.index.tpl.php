<?php /* Smarty version Smarty-3.1.19, created on 2016-09-23 13:50:26
         compiled from "template__system/admin_admin:/home/electrum/public_html/templates/_system/admin/dashboard/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19105542257e4d5916ed6b4-52955391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7695dd3f1d75783c0991fa5c7c83f41713ba240' => 
    array (
      0 => 'template__system/admin_admin:/home/electrum/public_html/templates/_system/admin/dashboard/index.tpl',
      1 => 1474618823,
      2 => 'template__system/admin_admin',
    ),
  ),
  'nocache_hash' => '19105542257e4d5916ed6b4-52955391',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e4d591d31da3_63208771',
  'variables' => 
  array (
    'groupsInfo' => 0,
    'GLOBALS' => 0,
    'key' => 0,
    'groupInfo' => 0,
    'listingsInfo' => 0,
    'listingInfo' => 0,
    'totalFlagsNum' => 0,
    'onlineUsers' => 0,
    'totalOnlineUsers' => 0,
    'value' => 0,
    'usersInfo' => 0,
    'users_url' => 0,
    'period' => 0,
    'today' => 0,
    'weekAgo' => 0,
    'monthAgo' => 0,
    'group' => 0,
    'totalPostings' => 0,
    'listingType' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e4d591d31da3_63208771')) {function content_57e4d591d31da3_63208771($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/electrum/public_html/system/ext/Smarty/libs/plugins/function.cycle.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('breadcrumbs', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Dashboard<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['breadcrumbs'][0][0]->_tpl_breadcrumbs(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div id="stats">
	<div id="statblocks">
		
		


		<?php  $_smarty_tpl->tpl_vars['groupInfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['groupInfo']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groupsInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['groupInfo']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['groupInfo']->key => $_smarty_tpl->tpl_vars['groupInfo']->value) {
$_smarty_tpl->tpl_vars['groupInfo']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['groupInfo']->key;
 $_smarty_tpl->tpl_vars['groupInfo']->index++;
 $_smarty_tpl->tpl_vars['groupInfo']->first = $_smarty_tpl->tpl_vars['groupInfo']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['outer']['first'] = $_smarty_tpl->tpl_vars['groupInfo']->first;
?>
			<div class="statblock">
				<h2>
					<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-users/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['key']->value, 'UTF-8');?>
/?user_group%5Bequal%5D=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
&amp;action=search"><?php echo $_smarty_tpl->tpl_vars['groupInfo']->value['total']['count'];?>
</a>
				</h2>
				<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['groupInfo']->value['caption'];?>
s<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
			</div>
		<?php } ?>

		<?php  $_smarty_tpl->tpl_vars['listingInfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listingInfo']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['listingsInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['listingInfo']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['listingInfo']->key => $_smarty_tpl->tpl_vars['listingInfo']->value) {
$_smarty_tpl->tpl_vars['listingInfo']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['listingInfo']->key;
 $_smarty_tpl->tpl_vars['listingInfo']->index++;
 $_smarty_tpl->tpl_vars['listingInfo']->first = $_smarty_tpl->tpl_vars['listingInfo']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['outer']['first'] = $_smarty_tpl->tpl_vars['listingInfo']->first;
?>
			<div class="statblock">
				<h2>
					<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-<?php if ($_smarty_tpl->tpl_vars['key']->value!='Job'&&$_smarty_tpl->tpl_vars['key']->value!='Resume') {?><?php echo mb_strtolower($_smarty_tpl->tpl_vars['key']->value, 'UTF-8');?>
-listings<?php } else { ?><?php echo mb_strtolower($_smarty_tpl->tpl_vars['key']->value, 'UTF-8');?>
s<?php }?>/?action=search&amp;active%5Bequal%5D=1"><?php echo $_smarty_tpl->tpl_vars['listingInfo']->value['total']['active'];?>
</a>
				</h2>
				<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
s<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
			</div>
		<?php } ?>

		<?php  $_smarty_tpl->tpl_vars['listingInfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listingInfo']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['listingsInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['listingInfo']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['listingInfo']->key => $_smarty_tpl->tpl_vars['listingInfo']->value) {
$_smarty_tpl->tpl_vars['listingInfo']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['listingInfo']->key;
 $_smarty_tpl->tpl_vars['listingInfo']->index++;
 $_smarty_tpl->tpl_vars['listingInfo']->first = $_smarty_tpl->tpl_vars['listingInfo']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['outer']['first'] = $_smarty_tpl->tpl_vars['listingInfo']->first;
?>
			<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['outer']['first']) {?>
				<?php if ($_smarty_tpl->tpl_vars['totalFlagsNum']->value[$_smarty_tpl->tpl_vars['key']->value]>0) {?>
					<div class="statblock">
						<h2><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/flagged-listings/?listing_type_id=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><strong style="color: #C00;"><?php echo $_smarty_tpl->tpl_vars['totalFlagsNum']->value[$_smarty_tpl->tpl_vars['key']->value];?>
</strong></a></h2>
						<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Flagged Listings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
					</div>
				<?php }?>
			<?php }?>
		<?php } ?>
	</div>
</div>

<div id="dashboard">
<div class="dashboardBlocks">
	<div class="box">
		<div class="box-header"><h1 class="usersOnline"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Users online<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1></div>
		<div class="innerpadding">
			<table width="100%">
				<tbody>
				<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow','advance'=>true),$_smarty_tpl);?>
">
					<td><strong><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Total Users<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</strong></td>
					<?php if ($_smarty_tpl->tpl_vars['onlineUsers']->value) {?>
						<td align="center"><?php echo $_smarty_tpl->tpl_vars['totalOnlineUsers']->value;?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
online<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
					<?php } else { ?>
						<td align="center">0</td>
					<?php }?>
				</tr>
				<?php if ($_smarty_tpl->tpl_vars['onlineUsers']->value) {?>
					<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['onlineUsers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['value']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
 $_smarty_tpl->tpl_vars['value']->index++;
 $_smarty_tpl->tpl_vars['value']->first = $_smarty_tpl->tpl_vars['value']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['outer']['first'] = $_smarty_tpl->tpl_vars['value']->first;
?>
						<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow','advance'=>true),$_smarty_tpl);?>
">
							<td><strong><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</strong></td>
							<td align="center">
								<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-users/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['key']->value, 'UTF-8');?>
?user_group%5Bequal%5D=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
&amp;online=1&amp;action=search"><?php echo $_smarty_tpl->tpl_vars['value']->value['count'];?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
online<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
							</td>
						</tr>
					<?php } ?>
				<?php } else { ?>
					<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow','advance'=>false),$_smarty_tpl);?>
">
						<td colspan="2"><strong><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
No online users<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</strong></td>
					</tr>
				<?php }?>
				</tbody>
			</table>
		</div>
	</div>
</div>


<div class="clr"><br/></div>

<div class="dashboardBlocks">
	<div class="box">
		<div class="box-header"><h1 class="registered"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Registered Users<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
: <?php echo $_smarty_tpl->tpl_vars['usersInfo']->value['count'];?>
</h1></div>
		<div class="innerpadding">
			<?php  $_smarty_tpl->tpl_vars['groupInfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['groupInfo']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groupsInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['groupInfo']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['groupInfo']->key => $_smarty_tpl->tpl_vars['groupInfo']->value) {
$_smarty_tpl->tpl_vars['groupInfo']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['groupInfo']->key;
 $_smarty_tpl->tpl_vars['groupInfo']->index++;
 $_smarty_tpl->tpl_vars['groupInfo']->first = $_smarty_tpl->tpl_vars['groupInfo']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['outer']['first'] = $_smarty_tpl->tpl_vars['groupInfo']->first;
?>
				<?php ob_start();?><?php echo mb_strtolower($_smarty_tpl->tpl_vars['key']->value, 'UTF-8');?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["users_url"] = new Smarty_variable("manage-users/".$_tmp1, null, 0);?>
				<?php if ($_smarty_tpl->tpl_vars['groupInfo']->value['approveInfo']!='') {?>
					<?php if ($_smarty_tpl->tpl_vars['groupInfo']->value['approveInfo']['Pending']!='') {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['users_url']->value;?>
/?approval%5Bequal%5D=pending"><strong><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Waiting for approval<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
: <?php echo $_smarty_tpl->tpl_vars['groupInfo']->value['approveInfo']['Pending'];?>
</strong></a>
					<?php } else { ?>
						<strong><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Waiting for approval<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
: 0</strong>
					<?php }?>
				<?php }?>
				<table width="100%">
					<thead>
					<tr>
						<th><b><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['groupInfo']->value['caption'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</b></th>
						<th align="center"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Active<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
						<th align="center"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Not active<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
						<th align="center"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Total<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
					</tr>
					</thead>
					<tbody>
					<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars['period'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groupInfo']->value['periods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['period']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
						<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow','advance'=>true),$_smarty_tpl);?>
">
							<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['period']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
							<td align="center"><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['users_url']->value;?>
/?action=search&amp;active%5Bequal%5D=1&amp;registration_date%5Bnot_less%5D=<?php if ($_smarty_tpl->tpl_vars['period']->value=="Today") {?><?php echo $_smarty_tpl->tpl_vars['today']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['period']->value=="This Week") {?><?php echo $_smarty_tpl->tpl_vars['weekAgo']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['period']->value=="This Month") {?><?php echo $_smarty_tpl->tpl_vars['monthAgo']->value;?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['group']->value['active'];?>
</a></td>
							<td align="center"><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['users_url']->value;?>
/?action=search&amp;active%5Bequal%5D=0&amp;registration_date%5Bnot_less%5D=<?php if ($_smarty_tpl->tpl_vars['period']->value=="Today") {?><?php echo $_smarty_tpl->tpl_vars['today']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['period']->value=="This Week") {?><?php echo $_smarty_tpl->tpl_vars['weekAgo']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['period']->value=="This Month") {?><?php echo $_smarty_tpl->tpl_vars['monthAgo']->value;?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['group']->value['count']-$_smarty_tpl->tpl_vars['group']->value['active'];?>
</a></td>
							<td align="center"><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['users_url']->value;?>
/?action=search&amp;registration_date%5Bnot_less%5D=<?php if ($_smarty_tpl->tpl_vars['period']->value=="Today") {?><?php echo $_smarty_tpl->tpl_vars['today']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['period']->value=="This Week") {?><?php echo $_smarty_tpl->tpl_vars['weekAgo']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['period']->value=="This Month") {?><?php echo $_smarty_tpl->tpl_vars['monthAgo']->value;?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['group']->value['count'];?>
</a></td>
						</tr>
					<?php } ?>
					<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow','advance'=>false),$_smarty_tpl);?>
">
						<td><strong><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Totals<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</strong></td>
						<td align="center"><strong><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['users_url']->value;?>
/?action=search&amp;active%5Bequal%5D=1"><?php echo $_smarty_tpl->tpl_vars['groupInfo']->value['total']['active'];?>
</a></strong></td>
						<td align="center"><strong><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['users_url']->value;?>
/?action=search&amp;active%5Bequal%5D=0"><?php echo $_smarty_tpl->tpl_vars['groupInfo']->value['total']['count']-$_smarty_tpl->tpl_vars['groupInfo']->value['total']['active'];?>
</a></strong></td>
						<td align="center"><strong><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['users_url']->value;?>
/?action=search"><?php echo $_smarty_tpl->tpl_vars['groupInfo']->value['total']['count'];?>
</a></strong></td>
					</tr>
					</tbody>
				</table>
				<br/>
			<?php } ?>
		</div>
	</div>
</div>

<div class="dashboardBlocks">
	<div class="box">
		<?php $_smarty_tpl->tpl_vars["totalPostings"] = new Smarty_variable("0", null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['listingInfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listingInfo']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['listingsInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['listingInfo']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['listingInfo']->key => $_smarty_tpl->tpl_vars['listingInfo']->value) {
$_smarty_tpl->tpl_vars['listingInfo']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['listingInfo']->key;
 $_smarty_tpl->tpl_vars['listingInfo']->index++;
 $_smarty_tpl->tpl_vars['listingInfo']->first = $_smarty_tpl->tpl_vars['listingInfo']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['outer']['first'] = $_smarty_tpl->tpl_vars['listingInfo']->first;
?>
			<?php $_smarty_tpl->tpl_vars["totalPostings"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['listingInfo']->value['total']['count']+$_smarty_tpl->tpl_vars['totalPostings']->value), null, 0);?>
		<?php } ?>

		<div class="box-header"><h1 class="postings"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Postings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
: <?php echo $_smarty_tpl->tpl_vars['totalPostings']->value;?>
</h1></div>
		<div class="innerpadding">
			<?php  $_smarty_tpl->tpl_vars['listingInfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listingInfo']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['listingsInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['listingInfo']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['listingInfo']->key => $_smarty_tpl->tpl_vars['listingInfo']->value) {
$_smarty_tpl->tpl_vars['listingInfo']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['listingInfo']->key;
 $_smarty_tpl->tpl_vars['listingInfo']->index++;
 $_smarty_tpl->tpl_vars['listingInfo']->first = $_smarty_tpl->tpl_vars['listingInfo']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['outer']['first'] = $_smarty_tpl->tpl_vars['listingInfo']->first;
?>
				<?php $_smarty_tpl->tpl_vars["totalPostings"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['listingInfo']->value['total']['count']+$_smarty_tpl->tpl_vars['totalPostings']->value), null, 0);?>
			<?php } ?>

			<?php  $_smarty_tpl->tpl_vars['listingInfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listingInfo']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['listingsInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['listingInfo']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['listingInfo']->key => $_smarty_tpl->tpl_vars['listingInfo']->value) {
$_smarty_tpl->tpl_vars['listingInfo']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['listingInfo']->key;
 $_smarty_tpl->tpl_vars['listingInfo']->index++;
 $_smarty_tpl->tpl_vars['listingInfo']->first = $_smarty_tpl->tpl_vars['listingInfo']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['outer']['first'] = $_smarty_tpl->tpl_vars['listingInfo']->first;
?>
				<?php if ($_smarty_tpl->tpl_vars['key']->value!='Job'&&$_smarty_tpl->tpl_vars['key']->value!='Resume') {?>
					<?php $_smarty_tpl->_capture_stack[0][] = array("listingType", null, null); ob_start(); ?><?php echo mb_strtolower($_smarty_tpl->tpl_vars['key']->value, 'UTF-8');?>
-listings<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php } else { ?>
					<?php $_smarty_tpl->_capture_stack[0][] = array("listingType", null, null); ob_start(); ?><?php echo mb_strtolower($_smarty_tpl->tpl_vars['key']->value, 'UTF-8');?>
s<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['listingInfo']->value['approveInfo']!='') {?>
					<?php if ($_smarty_tpl->tpl_vars['listingInfo']->value['approveInfo']['pending']!='') {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-<?php echo Smarty::$_smarty_vars['capture']['listingType'];?>
/?action=search&amp;status%5Bequal%5D=pending"><strong><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Waiting for approval<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
: <?php echo $_smarty_tpl->tpl_vars['listingInfo']->value['approveInfo']['pending'];?>
</strong></a>
					<?php } else { ?>
						<strong><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Waiting for approval<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
: 0</strong>
					<?php }?>
				<?php }?>
				<table width="100%">
					<thead>
					<tr class="headrow">
						<th>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<br/>
							<?php if ($_smarty_tpl->tpl_vars['totalFlagsNum']->value[$_smarty_tpl->tpl_vars['key']->value]>0) {?><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/flagged-listings/?listing_type_id=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><strong><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Flagged<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
: <?php echo $_smarty_tpl->tpl_vars['totalFlagsNum']->value[$_smarty_tpl->tpl_vars['key']->value];?>
</strong></a><?php }?>
						</th>
						<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Active<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
						<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Not active<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
						<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Total<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
					</tr>
					</thead>
					<tbody>
					<?php  $_smarty_tpl->tpl_vars['listingType'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listingType']->_loop = false;
 $_smarty_tpl->tpl_vars['period'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['listingInfo']->value['periods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['listingType']->key => $_smarty_tpl->tpl_vars['listingType']->value) {
$_smarty_tpl->tpl_vars['listingType']->_loop = true;
 $_smarty_tpl->tpl_vars['period']->value = $_smarty_tpl->tpl_vars['listingType']->key;
?>
						<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow','advance'=>true),$_smarty_tpl);?>
">
							<td><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['period']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
							<td align="center"><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-<?php echo Smarty::$_smarty_vars['capture']['listingType'];?>
/?active[equal]=1&amp;action=search&amp;activation_date[not_less]=<?php if ($_smarty_tpl->tpl_vars['period']->value=="Today") {?><?php echo $_smarty_tpl->tpl_vars['today']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['period']->value=="This Week") {?><?php echo $_smarty_tpl->tpl_vars['weekAgo']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['period']->value=="This Month") {?><?php echo $_smarty_tpl->tpl_vars['monthAgo']->value;?>
<?php }?>"><b><?php echo $_smarty_tpl->tpl_vars['listingType']->value['active'];?>
</b></a></td>
							<td align="center"><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-<?php echo Smarty::$_smarty_vars['capture']['listingType'];?>
/?active[equal]=0&amp;action=search&amp;activation_date[not_less]=<?php if ($_smarty_tpl->tpl_vars['period']->value=="Today") {?><?php echo $_smarty_tpl->tpl_vars['today']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['period']->value=="This Week") {?><?php echo $_smarty_tpl->tpl_vars['weekAgo']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['period']->value=="This Month") {?><?php echo $_smarty_tpl->tpl_vars['monthAgo']->value;?>
<?php }?>"><b><?php echo $_smarty_tpl->tpl_vars['listingType']->value['count']-$_smarty_tpl->tpl_vars['listingType']->value['active'];?>
</b></a></td>
							<td align="center"><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-<?php echo Smarty::$_smarty_vars['capture']['listingType'];?>
/?action=search&amp;activation_date[not_less]=<?php if ($_smarty_tpl->tpl_vars['period']->value=="Today") {?><?php echo $_smarty_tpl->tpl_vars['today']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['period']->value=="This Week") {?><?php echo $_smarty_tpl->tpl_vars['weekAgo']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['period']->value=="This Month") {?><?php echo $_smarty_tpl->tpl_vars['monthAgo']->value;?>
<?php }?>"><b><?php echo $_smarty_tpl->tpl_vars['listingType']->value['count'];?>
</b></a></td>
						</tr>
					<?php } ?>
					<tr class="<?php echo smarty_function_cycle(array('values'=>'evenrow,oddrow','advance'=>false),$_smarty_tpl);?>
">
						<td><strong><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Totals<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</strong></td>
						<td align="center"><strong><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-<?php echo Smarty::$_smarty_vars['capture']['listingType'];?>
/?action=search&amp;active%5Bequal%5D=1"><?php echo $_smarty_tpl->tpl_vars['listingInfo']->value['total']['active'];?>
</a></strong></td>
						<td align="center"><strong><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-<?php echo Smarty::$_smarty_vars['capture']['listingType'];?>
/?action=search&amp;active%5Bequal%5D=0"><?php echo $_smarty_tpl->tpl_vars['listingInfo']->value['total']['count']-$_smarty_tpl->tpl_vars['listingInfo']->value['total']['active'];?>
</a></strong></td>
						<td align="center"><strong><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/manage-<?php echo Smarty::$_smarty_vars['capture']['listingType'];?>
/?action=search"><?php echo $_smarty_tpl->tpl_vars['listingInfo']->value['total']['count'];?>
</a></strong></td>
					</tr>
					</tbody>
				</table>
				<br/>
			<?php } ?>
		</div>
	</div>
</div>

<div class="clr"><br/></div>
<br />
</div><?php }} ?>
