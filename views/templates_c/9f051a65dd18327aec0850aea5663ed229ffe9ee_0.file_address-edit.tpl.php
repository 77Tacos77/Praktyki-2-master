<?php
/* Smarty version 5.8.0, created on 2026-05-28 12:13:28
  from 'file:pages/address-edit.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a18154852e986_36402650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f051a65dd18327aec0850aea5663ed229ffe9ee' => 
    array (
      0 => 'pages/address-edit.tpl',
      1 => 1779877755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a18154852e986_36402650 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-Master\\views\\pages';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_2195487516a181548527780_91838375', "content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_2195487516a181548527780_91838375 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-Master\\views\\pages';
?>


    <div class="login-container">

        <h1>Edytuj adres</h1>

        <hr>

        <form method="POST">

            <label>Imię</label>
            <input type="text" name="firstName" value="<?php echo $_smarty_tpl->getValue('address')->getFirstName();?>
">

            <label>Nazwisko</label>
            <input type="text" name="lastName" value="<?php echo $_smarty_tpl->getValue('address')->getLastName();?>
">

            <label>Ulica</label>
            <input type="text" name="street" value="<?php echo $_smarty_tpl->getValue('address')->getStreet();?>
">

            <label>Kod pocztowy</label>
            <input type="text" name="postcode" value="<?php echo $_smarty_tpl->getValue('address')->getPostcode();?>
">

            <label>Miasto</label>
            <input type="text" name="city" value="<?php echo $_smarty_tpl->getValue('address')->getCity();?>
">

            <label>Kraj</label>
            <input type="text" name="country" value="<?php echo $_smarty_tpl->getValue('address')->getCountry();?>
">

            <label>Telefon</label>
            <input type="text" name="phone" value="<?php echo $_smarty_tpl->getValue('address')->getPhone();?>
">

            <div class="button-group">

                <button type="submit" class="submit">
                    Zapisz
                </button>

                <a href="/Praktyki-2-master/?page=addresses" class="add-product-btn">
                    Powrót
                </a>

            </div>

        </form>

    </div>

<?php
}
}
/* {/block "content"} */
}
