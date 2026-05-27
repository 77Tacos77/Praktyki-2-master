<?php
/* Smarty version 5.8.0, created on 2026-05-27 13:38:11
  from 'file:pages/checkout/index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a16d7a3e3f285_96443900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0658249132c7ae8545e2025575638a1d63206630' => 
    array (
      0 => 'pages/checkout/index.tpl',
      1 => 1779881884,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a16d7a3e3f285_96443900 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-Master\\views\\pages\\checkout';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_2076998186a16d7a3e382b8_70942201', "content");
?>

``<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_2076998186a16d7a3e382b8_70942201 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-Master\\views\\pages\\checkout';
?>


    <h1>Checkout</h1>

    <h3>Adres dostawy</h3>

    <?php if ($_smarty_tpl->getValue('address')) {?>

        <table class="address-table">

            <tr>
                <td>Imię i nazwisko</td>
                <td><?php echo $_smarty_tpl->getValue('address')->getFirstName();?>
 <?php echo $_smarty_tpl->getValue('address')->getLastName();?>
</td>
            </tr>

            <tr>
                <td>Ulica</td>
                <td><?php echo $_smarty_tpl->getValue('address')->getStreet();?>
</td>
            </tr>

            <tr>
                <td>Miasto</td>
                <td><?php echo $_smarty_tpl->getValue('address')->getCity();?>
</td>
            </tr>

            <tr>
                <td>Kod pocztowy</td>
                <td><?php echo $_smarty_tpl->getValue('address')->getPostcode();?>
</td>
            </tr>

            <tr>
                <td>Kraj</td>
                <td><?php echo $_smarty_tpl->getValue('address')->getCountry();?>
</td>
            </tr>

            <tr>
                <td>Telefon</td>
                <td><?php echo $_smarty_tpl->getValue('address')->getPhone();?>
</td>
            </tr>

        </table>

        <a href="/Praktyki-2-master/?page=cart/payment" class="buy-btn">
            Przejdź do płatności
        </a>

    <?php } else { ?>

        <p style="color:red;">Brak adresu!</p>
        <a href="/Praktyki-2-master/?page=address" class="buy-btn">
            Dodaj adres
        </a>

    <?php }?>

<?php
}
}
/* {/block "content"} */
}
