<?php
/* Smarty version 3.1.32, created on 2018-07-16 11:56:26
  from '/Users/alishavancaspel/Documents/ma/bewijzenmap/periode1.4/proj/myband/private/views/admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b4c6bca9c5568_26930468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18aec912340689f909af489370fbe110810ca3fc' => 
    array (
      0 => '/Users/alishavancaspel/Documents/ma/bewijzenmap/periode1.4/proj/myband/private/views/admin.tpl',
      1 => 1531734986,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b4c6bca9c5568_26930468 (Smarty_Internal_Template $_smarty_tpl) {
?><section>
    <form action="index.php" method="post">
        <label for="username">Username:</label>
        <input id="username" type="text" name="username" required>
        <label for="password">Password:</label>
        <input id="password" type="password" name="password" required>
        <button type="submit" name="submit__login">Log in</button>
    </form>
</section>

<h3>LIVE</h3>
<form action="index.php" method="post">
    <label for="date">Date:</label>
    <input id="date" type="text" name="date" required><br>
    <label for="location">Location:</label>
    <input id="location" type="text" name="location" required><br>
    <label for="city">City:</label>
    <input id="city" type="text" name="city" required><br>
    <label for="country">Country:</label>
    <input id="country" type="text" name="country" required><br>
    <label for="ticket">Ticket:</label>
    <input id="ticket" type="text" name="ticket" required><br>
    <button type="submit" name="submit_live">Upload</button>
</form>
<div class="table">
    <table>
        <tr>
            <th>ID</th>
            <th>Date</th>
            <th>Location</th>
            <th>City</th>
            <th>Country</th>
            <th>Ticket</th>
        </tr>
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
                <td><?php echo $_smarty_tpl->tpl_vars['data']->value[4];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['data']->value[5];?>
</td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
</div>

<h3>PHOTOS</h3>
<form action="index.php" method="post" enctype="multipart/form-data">
    <label for="uploaded">Image upload photos:</label>
    <input id="uploaded" type="file" name="uploaded" required>
    <button type="submit" name="submit__photos">Upload</button>
</form> <br><br>

<h3>NEWS</h3>
<form action="index.php" method="post" enctype="multipart/form-data">
    <label for="title">Title:</label><br>
    <input id="title" type="text" name="title" required><br>
    <label for="date">Date:</label><br>
    <input id="date" type="text" name="date" required><br>
    <label for="content">Content:</label><br>
    <textarea id="content" cols="30" rows="10" name="content" required></textarea><br>
    <label for="imagelink">Imagelink:</label><br>
    <input id="imagelink" type="file" name="imagelink" required><br>
    <label for="link">Link:</label><br>
    <input id="link" type="text" name="link" required><br>
    <button type="submit" name="submit__news">Upload</button>
</form> <br><br>

<h3>MERCH</h3>
<form action="index.php" method="post" enctype="multipart/form-data">
    <label for="image">Image upload merch:</label>
    <input id="image" type="file" name="image" required><br>
    <label for="product">Product:</label>
    <input id="product" type="text" name="product" required><br>
    <label for="price">Price:</label>
    <input id="price" type="text" name="price" required><br>
    <label for="buylink">Buylink:</label>
    <input id="buylink" type="text" name="buylink" required><br>
    <button type="submit" name="submit__merch">Upload</button>
</form> <br><br><?php }
}
