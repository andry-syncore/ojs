<?php
/* Smarty version 3.1.39, created on 2022-10-25 06:23:04
  from 'app:controllerslistbuilderlis' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_635780c86d2d94_92072998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4043330988f73234866880826a23e8fed5ae2954' => 
    array (
      0 => 'app:controllerslistbuilderlis',
      1 => 1664910729,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/grid/columnGroup.tpl' => 1,
  ),
),false)) {
function content_635780c86d2d94_92072998 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gridTableId']->value ));?>
">
	<?php if (count($_smarty_tpl->tpl_vars['columns']->value) > 1) {?>		<?php $_smarty_tpl->_subTemplateRender("app:controllers/grid/columnGroup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('columns'=>$_smarty_tpl->tpl_vars['columns']->value), 0, false);
?>
		<thead>
			<tr>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['columns']->value, 'column');
$_smarty_tpl->tpl_vars['column']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->do_else = false;
?>
					<?php if ($_smarty_tpl->tpl_vars['column']->value->hasFlag('alignment')) {?>
						<?php $_smarty_tpl->_assignInScope('alignment', $_smarty_tpl->tpl_vars['column']->value->getFlag('alignment'));?>
					<?php } else { ?>
						<?php $_smarty_tpl->_assignInScope('alignment', (defined('COLUMN_ALIGNMENT_LEFT') ? constant('COLUMN_ALIGNMENT_LEFT') : null));?>
					<?php }?>
					<th scope="col" style="text-align: <?php echo $_smarty_tpl->tpl_vars['alignment']->value;?>
;">
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['column']->value->getLocalizedTitle() ));?>

					</th>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tr>
		</thead>
	<?php }?>
	<tbody>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'lb_row');
$_smarty_tpl->tpl_vars['lb_row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lb_row']->value) {
$_smarty_tpl->tpl_vars['lb_row']->do_else = false;
?>
			<?php echo $_smarty_tpl->tpl_vars['lb_row']->value;?>

		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<tr class="empty"<?php if ($_smarty_tpl->tpl_vars['rows']->value) {?> style="display: none;"<?php }?>>
			<td colspan="<?php echo count($_smarty_tpl->tpl_vars['columns']->value);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"grid.noItems"),$_smarty_tpl ) );?>
</td>
		</tr>
		<div class="newRow"></div>
	</tbody>
</table>
<?php }
}
