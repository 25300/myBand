<?php
/* Smarty version 3.1.32, created on 2018-07-16 12:05:21
  from '/Users/alishavancaspel/Documents/ma/bewijzenmap/periode1.4/proj/myband/private/views/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b4c6de19dc6a9_89063006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '367701a408d753f3213cd940fec98e79e38d1935' => 
    array (
      0 => '/Users/alishavancaspel/Documents/ma/bewijzenmap/periode1.4/proj/myband/private/views/home.tpl',
      1 => 1531735251,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b4c6de19dc6a9_89063006 (Smarty_Internal_Template $_smarty_tpl) {
?>    
<section class="home__section">
    <h3 class="title">Queendom is out now!</h3>
    <iframe class="home__section-video" width="700" height="400" src="https://www.youtube.com/embed/wULeXeQkqd0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</section>

<hr class="line">

    
<section class="home__live">
    <h3 class="title">Live dates</h3>
    <div class="table home__table">
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
    </div>
    <div class="center">
        <a class="seemore" href="index.php?page=live">See more</a>
    </div>
</section>

<hr class="line">

    
<section class="home__photos">
    <h3 class="title">photo's</h3>
    <section class="home__gallery">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['photos']->value, 'photo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->value) {
?>
            <div class="home__gallery-container">
                <img class="home__gallery-photos" src="<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
" alt="Image of Aurora">
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </section>
    <div class="center">
        <a class="seemore" href="index.php?page=photos">See more</a>
    </div>
</section>

<hr class="line">

    
<section class="news">
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
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <div class="center">
        <a class="seemore" href="index.php?page=news">See more</a>
    </div>
</section>

<hr class="line">

    
<section class="merch">
    <h3 class="title">merch</h3>
    <div class="merch__container--home">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['merch']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
            <div class="merch__item">
                <div class="merch__media--home">
                    <img class="merch__img" src="<?php echo $_smarty_tpl->tpl_vars['product']->value[0];?>
" alt="Product image">
                    <article class="merch__discription--home">
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
</section>
<div class="center">
    <a class="seemore" href="index.php?page=merch">See more</a>
</div><?php }
}
