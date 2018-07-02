<?php
/* Smarty version 3.1.32, created on 2018-06-29 16:16:33
  from 'C:\Users\alish\Desktop\ma\bewijzenmap\periode1.4\proj\myband\private\views\photos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b363f410d8f45_71441760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9210e26c1038846ccc8e53fa4f27954f604a2158' => 
    array (
      0 => 'C:\\Users\\alish\\Desktop\\ma\\bewijzenmap\\periode1.4\\proj\\myband\\private\\views\\photos.tpl',
      1 => 1530204517,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b363f410d8f45_71441760 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['photos']->value, 'photo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->value) {
?>
    <img src="<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
" alt="Photo from Aurora">
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
