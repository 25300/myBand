<?php
/* Smarty version 3.1.32, created on 2018-07-14 12:38:39
  from '/Users/alishavancaspel/Documents/ma/bewijzenmap/periode1.4/proj/myband/private/views/live.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b49d2af049b94_62074169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52129f42f284633c0ec9d89a7a952041d682cbd2' => 
    array (
      0 => '/Users/alishavancaspel/Documents/ma/bewijzenmap/periode1.4/proj/myband/private/views/live.tpl',
      1 => 1531229158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b49d2af049b94_62074169 (Smarty_Internal_Template $_smarty_tpl) {
?><h3 class="title">Live dates</h3>
<div class="table">
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
                <td><a class="ticketlink" href="<?php echo $_smarty_tpl->tpl_vars['data']->value[4];?>
" target="_blank">Ticket</a></td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
</div><?php }
}
