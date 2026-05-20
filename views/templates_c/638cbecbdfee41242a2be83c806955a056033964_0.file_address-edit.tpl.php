<?php
/* Smarty version 5.8.0, created on 2026-05-19 13:16:16
  from 'file:pages/address-edit.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a0c4680f18a41_03567485',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '638cbecbdfee41242a2be83c806955a056033964' => 
    array (
      0 => 'pages/address-edit.tpl',
      1 => 1779171370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a0c4680f18a41_03567485 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1996916786a0c4680f14533_24763232', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_1996916786a0c4680f14533_24763232 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages';
?>

    <div class="login-container">
        <h1>Edytuj adres</h1>
        <form method="POST"> <label>Imię</label> <input type="text" name="firstName" value="<?php echo $_smarty_tpl->getValue('address')->getFirstName();?>
"> <label>Nazwisko</label> <input type="text" name="lastName" value="<?php echo $_smarty_tpl->getValue('address')->getLastName();?>
"> <label>Ulica</label> <input type="text" name="street" value="<?php echo $_smarty_tpl->getValue('address')->getStreet();?>
"> <label>Kod pocztowy</label> <input type="text" name="postcode" value="<?php echo $_smarty_tpl->getValue('address')->getPostcode();?>
"> <label>Miasto</label> <input type="text" name="city" value="<?php echo $_smarty_tpl->getValue('address')->getCity();?>
"> <label>Kraj</label> <input type="text" name="country" value="<?php echo $_smarty_tpl->getValue('address')->getCountry();?>
"> <label>Telefon</label> <input type="text" name="phone" value="<?php echo $_smarty_tpl->getValue('address')->getPhone();?>
">
            <div class="button-group"> <button type="submit" class="submit"> Zapisz </button> </div>
        </form>
    </div>
<?php
}
}
/* {/block "content"} */
}
