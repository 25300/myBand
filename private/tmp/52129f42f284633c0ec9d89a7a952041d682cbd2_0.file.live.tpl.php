<?php
/* Smarty version 3.1.32, created on 2018-06-25 16:44:06
  from '/Users/alishavancaspel/Documents/ma/bewijzenmap/periode1.4/proj/myband/private/views/live.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b30ffb638ba90_11735981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52129f42f284633c0ec9d89a7a952041d682cbd2' => 
    array (
      0 => '/Users/alishavancaspel/Documents/ma/bewijzenmap/periode1.4/proj/myband/private/views/live.tpl',
      1 => 1529937845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b30ffb638ba90_11735981 (Smarty_Internal_Template $_smarty_tpl) {
?><p>
    <table>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['live']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['data']->value[0];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['data']->value[1];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['data']->value[2];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['data']->value[3];?>
</td>
                <td><a href="<?php echo $_smarty_tpl->tpl_vars['data']->value[4];?>
" target="_blank"><button>Ticket</button></a></td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
</p><?php }
}
