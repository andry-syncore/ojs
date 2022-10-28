<?php
/* Smarty version 3.1.39, created on 2022-10-28 07:53:31
  from 'app:controllerswizardfileUplo' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_635b8a7ba79f89_40537093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3676b7991ccae709a3e0b2511331cd90732ccf1' => 
    array (
      0 => 'app:controllerswizardfileUplo',
      1 => 1664910729,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635b8a7ba79f89_40537093 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="finishSubmissionForm" class="pkp_helpers_text_center">
	<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.submit.fileAdded"),$_smarty_tpl ) );?>
</h2>
	<?php if ($_smarty_tpl->tpl_vars['fileStage']->value != (defined('SUBMISSION_FILE_PROOF') ? constant('SUBMISSION_FILE_PROOF') : null)) {?>
		<button class="pkp_button" type="button" name="newFile" id="newFile"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'submission.submit.newFile'),$_smarty_tpl ) );?>
</button>
	<?php }?>
	<br>
	<br>
</div>
<?php }
}
