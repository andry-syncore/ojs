<?php
/* Smarty version 3.1.39, created on 2022-10-28 07:40:53
  from 'app:controllersgridusersrevie' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_635b87858be5c5_27920922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4151d2f23abb290c030b4b0724cc83609055203' => 
    array (
      0 => 'app:controllersgridusersrevie',
      1 => 1664910729,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/notification/inPlaceNotificationContent.tpl' => 1,
  ),
),false)) {
function content_635b87858be5c5_27920922 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pkp_notification" id="noFilesWarning" style="display: none;">
	<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotificationContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>'noFilesWarningContent','notificationStyleClass'=>'notifyWarning','notificationTitle'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( "editor.submission.noReviewerFilesSelected" )),'notificationContents'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( "editor.submission.noReviewerFilesSelected.details" ))), 0, false);
?>
</div>
<?php }
}
