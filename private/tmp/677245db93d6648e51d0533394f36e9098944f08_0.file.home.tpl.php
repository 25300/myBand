<?php
/* Smarty version 3.1.32, created on 2018-07-01 22:45:35
  from 'C:\Users\alish\Desktop\ma\bewijzenmap\periode1.4\proj\myband\private\views\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b393d6fa0bc00_55057602',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '677245db93d6648e51d0533394f36e9098944f08' => 
    array (
      0 => 'C:\\Users\\alish\\Desktop\\ma\\bewijzenmap\\periode1.4\\proj\\myband\\private\\views\\home.tpl',
      1 => 1530477933,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b393d6fa0bc00_55057602 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="home__section">
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
                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['data']->value[4];?>
" target="_blank"><button class="button__ticket">Ticket</button></a></td>
                </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
    <a class="center" href="index.php?page=live"><button class="button__link">See more</button></a>

</section>
<?php }
}
