<?php
/* Smarty version 3.1.39, created on 2022-10-28 07:48:29
  from 'app:controllersgridusersrevie' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_635b894deb07a7_11880182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '650d81d71f26364850440139060a1dbf0ce5c1a6' => 
    array (
      0 => 'app:controllersgridusersrevie',
      1 => 1664910542,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:reviewer/review/reviewerRecommendations.tpl' => 1,
    'core:controllers/grid/users/reviewer/readReview.tpl' => 1,
  ),
),false)) {
function content_635b894deb07a7_11880182 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "reviewerRecommendations", null);?>
	<?php $_smarty_tpl->_subTemplateRender("app:reviewer/review/reviewerRecommendations.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('description'=>"reviewer.article.selectRecommendation.byEditor",'required'=>false), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php echo '<script'; ?>
 type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#readReviewForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("core:controllers/grid/users/reviewer/readReview.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
