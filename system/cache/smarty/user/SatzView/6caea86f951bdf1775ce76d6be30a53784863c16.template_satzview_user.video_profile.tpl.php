<?php /* Smarty version Smarty-3.1.19, created on 2016-10-02 06:52:09
         compiled from "template_satzview_user:../field_types/input/video_profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182595069257f06141432666-43462386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6caea86f951bdf1775ce76d6be30a53784863c16' => 
    array (
      0 => 'template_satzview_user:../field_types/input/video_profile.tpl',
      1 => 1389094448,
      2 => 'template_satzview_user',
    ),
  ),
  'nocache_hash' => '182595069257f06141432666-43462386',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBALS' => 0,
    'errors' => 0,
    'key' => 0,
    'value' => 0,
    'id' => 0,
    'filesize' => 0,
    'size_token' => 0,
    'form_token' => 0,
    'complexField' => 0,
    'complexStep' => 0,
    'user_group_info' => 0,
    'listing' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57f061415a00e6_36226025',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f061415a00e6_36226025')) {function content_57f061415a00e6_36226025($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['GLOBALS']->value['is_ajax']||$_GET['ajax_submit']) {?>

	<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['error']->key;
?>
		<p class="error">
			<?php if ($_smarty_tpl->tpl_vars['key']->value=='NOT_SUPPORTED_VIDEO_FORMAT'||$_smarty_tpl->tpl_vars['key']->value=='NOT_ACCEPTABLE_FILE_FORMAT') {?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Not supported video format<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php } elseif ($_smarty_tpl->tpl_vars['key']->value=='NOT_CONVERT_VIDEO') {?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Could not convert video file<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php } elseif ($_smarty_tpl->tpl_vars['key']->value==='UPLOAD_ERR_INI_SIZE') {?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
File size exceeds system limit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php } else { ?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
		</p>
	<?php } ?>

	<?php if ($_smarty_tpl->tpl_vars['value']->value['file_url']) {?>
	<div id="user_video_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
		<div>
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['file_name'], ENT_QUOTES, 'UTF-8', true);?>
 (<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['filesize']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['size_token']->value;?>
) |
			<a class="delete_profile_video"
			   form_token="<?php echo $_smarty_tpl->tpl_vars['form_token']->value;?>
"
			   field_id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
			   file_id="<?php echo $_smarty_tpl->tpl_vars['value']->value['file_id'];?>
"
			   href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/users/delete-uploaded-file/?field_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&form_token=<?php echo $_smarty_tpl->tpl_vars['form_token']->value;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>

		</div>
		<br />
	</div>

	<?php }?>


	<input id="autoloadFileSelect_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
		   field_id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
		   field_action="upload_profile_video"
		   field_target="video_field_content_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
		   type="file"
		   name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value) {?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
]<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>"
		   class="inputVideo autouploadField <?php if ($_smarty_tpl->tpl_vars['complexField']->value) {?>complexField<?php }?>"
		   <?php if ($_smarty_tpl->tpl_vars['value']->value['file_url']) {?>style="display:none;"<?php }?> />

	<input type="hidden" name="user_group_id" value="<?php if (isset($_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['group']['id'])) {?><?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['group']['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['user_group_info']->value['id'];?>
<?php }?>" />

<?php } else { ?>

	<div id="video_field_content_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">

	<?php if ($_smarty_tpl->tpl_vars['value']->value['file_url']) {?>
	<div id="user_video_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/files/video/flowplayer-3.2.12.min.js"></script>
		<a href="<?php echo rawurlencode($_smarty_tpl->tpl_vars['value']->value['file_url']);?>
" id="player_<?php echo $_smarty_tpl->tpl_vars['value']->value['file_id'];?>
" class="player"></a>
		<script type="text/javascript">
			$f("player_<?php echo $_smarty_tpl->tpl_vars['value']->value['file_id'];?>
", "<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/files/video/flowplayer-3.2.16.swf",  {
				clip: {
					url: "<?php echo rawurlencode($_smarty_tpl->tpl_vars['listing']->value['video']['file_url']);?>
",
					autoPlay: false,
					autoBuffering: true,
					scaling: "fit"
				},
				plugins: {
					// default controls with the same background color as the page background
					controls:  {
						backgroundColor: '#1c1c1c',
						backgroundGradient: 'none',
						all:false,
						scrubber:true,
						fullscreen:true,
						play:true,
						volume:true,
						mute:true,
						height:30,
						progressColor: '#6d9e6b',
						bufferColor: '#333333',
						autoHide: false
					},
					// time display positioned into upper right corner
					time: {
						url: "<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['user_site_url'];?>
/files/video/flowplayer.controls-3.2.15.swf",
						top:0,
						backgroundGradient: 'none',
						backgroundColor: 'transparent',
						buttonColor: '#ffffff',
						all: false,
						time: true,
						height:20,
						right:0,
						width:100,
						autoHide: false
					}
				},
				// canvas coloring and custom gradient setting
				canvas: {
					backgroundColor:'#000000',
					backgroundGradient: [0.1, 0]
				}
			});
		</script>
		<div>
			<a class="delete_profile_video"
			   form_token="<?php echo $_smarty_tpl->tpl_vars['form_token']->value;?>
"
			   field_id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
			   file_id="<?php echo $_smarty_tpl->tpl_vars['value']->value['file_id'];?>
"
			   href="<?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['site_url'];?>
/users/delete-uploaded-file/?field_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&form_token=<?php echo $_smarty_tpl->tpl_vars['form_token']->value;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['tr'][0][0]->translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
		</div>
		<br />
	</div>
	<?php }?>


		<input id="autoloadFileSelect_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
			   field_id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
			   field_action="upload_profile_video"
			   field_target="video_field_content_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
			   type="file"
			   name="<?php if ($_smarty_tpl->tpl_vars['complexField']->value) {?><?php echo $_smarty_tpl->tpl_vars['complexField']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['complexStep']->value;?>
]<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>"
			   class="inputVideo autouploadField <?php if ($_smarty_tpl->tpl_vars['complexField']->value) {?>complexField<?php }?>"
			   <?php if ($_smarty_tpl->tpl_vars['value']->value['file_url']) {?>style="display:none;"<?php }?> />

		<input type="hidden" name="user_group_id" value="<?php if (isset($_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['group']['id'])) {?><?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['group']['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['user_group_info']->value['id'];?>
<?php }?>" />

	</div>


	<script type="text/javascript">
		

		$(".delete_profile_video").live('click', function() {
			var fileId  = $(this).attr('file_id');
			var fieldId = $(this).attr('field_id');
			var formToken = $(this).attr('form_token');
			var url     = window.SJB_GlobalSiteUrl + '/system/miscellaneous/ajax_file_upload_handler/';
			var params = {
				'ajax_action': 'delete_profile_video',
				'field_id' : fieldId,
				'file_id' : fileId,
				'user_group_id' : '<?php if (isset($_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['group']['id'])) {?><?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['current_user']['group']['id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['user_group_info']->value['id'];?>
<?php }?>',
				'form_token' : formToken
			};

			var preloader = $(this).after( getPreloaderCodeForFieldId(fieldId) );
			$.get(url, params, function(data){
				if (data.result == 'success') {
					$("#autoloadFileSelect_" + fieldId).show();
					$("#user_video_" + fieldId).empty();
				}
				$(preloader).remove();
			}, 'json');
			// prevent link redirect
			return false;
		});

		
	</script>
<?php }?><?php }} ?>
