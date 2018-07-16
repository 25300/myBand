<?php
/* Smarty version 3.1.32, created on 2018-07-16 12:00:51
  from '/Users/alishavancaspel/Documents/ma/bewijzenmap/periode1.4/proj/myband/private/views/news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b4c6cd39ce8b7_47279890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '624ab20796c313a6c974bbb348ea8fbbcbee2c5d' => 
    array (
      0 => '/Users/alishavancaspel/Documents/ma/bewijzenmap/periode1.4/proj/myband/private/views/news.tpl',
      1 => 1531735251,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b4c6cd39ce8b7_47279890 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="news">
    <h3 class="title">news</h3>

                                                        
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <div class="news__article">
            <div class="news__container">
                    <div class="news__info">
                        <h2 class="news__title"><?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
</h2>
                    </div>
                    <div class="news__info">
                        <p class="news__date"><?php echo $_smarty_tpl->tpl_vars['item']->value[1];?>
</p>
                    </div>
                    <div class="news__row">
                        <p class="news__text"><?php echo $_smarty_tpl->tpl_vars['item']->value[2];?>
</p>
                    </div>
                    <div class="news__column">
                        <img class="news__img" src="<?php echo $_smarty_tpl->tpl_vars['item']->value[3];?>
" alt="Image article">
                    </div>
                    <div class="clear"></div>
                    <a class="news__link" href="<?php echo $_smarty_tpl->tpl_vars['item']->value[4];?>
" target="_blank">Read more</a>
            </div>
        </div>
        <div class="clear"></div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <div class="news__pagination">
        <?php if ($_smarty_tpl->tpl_vars['current_page']->value > 1) {?>
            <a class="arrow" href="index.php?page=news&pageno=<?php echo $_smarty_tpl->tpl_vars['current_page']->value-1;?>
"><</a>
        <?php }?>
      <p class="news__number"><?php echo $_smarty_tpl->tpl_vars['current_page']->value;?>
</p>
        <?php if ($_smarty_tpl->tpl_vars['current_page']->value < $_smarty_tpl->tpl_vars['total_pages']->value) {?>
            <a class="arrow" href="index.php?page=news&pageno=<?php echo $_smarty_tpl->tpl_vars['current_page']->value+1;?>
"> > </a>
        <?php }?>
    </div>
</section><?php }
}
