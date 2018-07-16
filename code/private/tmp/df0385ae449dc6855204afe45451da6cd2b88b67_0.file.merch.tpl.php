<?php
/* Smarty version 3.1.32, created on 2018-07-14 19:04:11
  from '/Users/alishavancaspel/Documents/ma/bewijzenmap/periode1.4/proj/myband/private/views/merch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b4a2d0b09a177_56022668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df0385ae449dc6855204afe45451da6cd2b88b67' => 
    array (
      0 => '/Users/alishavancaspel/Documents/ma/bewijzenmap/periode1.4/proj/myband/private/views/merch.tpl',
      1 => 1531587850,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b4a2d0b09a177_56022668 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="merch">
    <h3 class="title">merch</h3>
    <div class="merch__container">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['merch']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
            <div class="merch__item">
                <div class="merch__media">
                    <img class="merch__img" src="<?php echo $_smarty_tpl->tpl_vars['product']->value[0];?>
" alt="Product image">
                    <article class="merch__discription">
                        <p class="merch__product margin"><?php echo $_smarty_tpl->tpl_vars['product']->value[1];?>
</p>
                        <p class="merch__price margin"><?php echo $_smarty_tpl->tpl_vars['product']->value[2];?>
</p>
                        <a class="merch__link margin" href="<?php echo $_smarty_tpl->tpl_vars['product']->value[3];?>
" target="_blank">Buy</a>
                    </article>
                </div>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</section><?php }
}
