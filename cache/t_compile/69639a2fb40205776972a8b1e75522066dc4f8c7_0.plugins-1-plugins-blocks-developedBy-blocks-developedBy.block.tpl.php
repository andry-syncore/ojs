<?php
/* Smarty version 3.1.39, created on 2022-10-28 06:22:50
  from 'plugins-1-plugins-blocks-developedBy-blocks-developedBy:block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_635b753ad4f058_32160637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69639a2fb40205776972a8b1e75522066dc4f8c7' => 
    array (
      0 => 'plugins-1-plugins-blocks-developedBy-blocks-developedBy:block.tpl',
      1 => 1664910542,
      2 => 'plugins-1-plugins-blocks-developedBy-blocks-developedBy',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635b753ad4f058_32160637 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pkp_block block_developed_by">
	<h2 class="pkp_screen_reader">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.block.developedBy.blockTitle"),$_smarty_tpl ) );?>

	</h2>

	<div class="content">
		<a href="http://pkp.sfu.ca/ojs/">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.software"),$_smarty_tpl ) );?>

		</a>
	</div>
</div>
<?php }
}
