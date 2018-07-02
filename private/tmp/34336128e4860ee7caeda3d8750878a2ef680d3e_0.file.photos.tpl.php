<?php
/* Smarty version 3.1.32, created on 2018-06-25 21:19:55
  from '/Users/alishavancaspel/Documents/ma/bewijzenmap/periode1.4/proj/myband/private/views/photos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b31405bc9f576_02332861',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34336128e4860ee7caeda3d8750878a2ef680d3e' => 
    array (
      0 => '/Users/alishavancaspel/Documents/ma/bewijzenmap/periode1.4/proj/myband/private/views/photos.tpl',
      1 => 1529954392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b31405bc9f576_02332861 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="../private/model.php" method="post" enctype="multipart/form-data">
    <input type="file" name="uploaded_image">
    <button type="submit">upload</button>
</form>

<?php
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
