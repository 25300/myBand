<?php
/* Smarty version 3.1.32, created on 2018-07-14 12:38:39
  from '/Users/alishavancaspel/Documents/ma/bewijzenmap/periode1.4/proj/myband/private/views/photos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b49d2afee9b34_07921968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34336128e4860ee7caeda3d8750878a2ef680d3e' => 
    array (
      0 => '/Users/alishavancaspel/Documents/ma/bewijzenmap/periode1.4/proj/myband/private/views/photos.tpl',
      1 => 1531144213,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b49d2afee9b34_07921968 (Smarty_Internal_Template $_smarty_tpl) {
?><h3 class="title">photo's</h3>
<section class="gallery">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['photos']->value, 'photo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->value) {
?>
        <div class="gallery__container">
            <img class="gallery__photos" src="<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
" alt="Image of Aurora">
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</section><?php }
}
