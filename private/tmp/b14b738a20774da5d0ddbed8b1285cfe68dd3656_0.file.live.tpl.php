<?php
/* Smarty version 3.1.32, created on 2018-06-29 15:52:12
  from 'C:\Users\alish\Desktop\ma\bewijzenmap\periode1.4\proj\myband\private\views\live.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b36398c772489_48197663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b14b738a20774da5d0ddbed8b1285cfe68dd3656' => 
    array (
      0 => 'C:\\Users\\alish\\Desktop\\ma\\bewijzenmap\\periode1.4\\proj\\myband\\private\\views\\live.tpl',
      1 => 1530280217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b36398c772489_48197663 (Smarty_Internal_Template $_smarty_tpl) {
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
                <td><a href="<?php echo $_smarty_tpl->tpl_vars['data']->value[4];?>
" target="_blank"><button class="button__ticket">Ticket</button></a></td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
</div><?php }
}
