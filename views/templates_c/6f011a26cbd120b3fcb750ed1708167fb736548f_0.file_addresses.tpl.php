<?php
/* Smarty version 5.8.0, created on 2026-05-25 12:02:20
  from 'file:pages/addresses.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a141e2c872e69_71114021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f011a26cbd120b3fcb750ed1708167fb736548f' => 
    array (
      0 => 'pages/addresses.tpl',
      1 => 1779703340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a141e2c872e69_71114021 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_19982489536a141e2c865a45_97344261', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_19982489536a141e2c865a45_97344261 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages';
?>

    <?php if ((true && ($_smarty_tpl->hasVariable('error') && null !== ($_smarty_tpl->getValue('error') ?? null)))) {?>
        <div class="error-alert"> <?php echo $_smarty_tpl->getValue('error');?>
 </div>
    <?php }?>
    <?php if ((true && ($_smarty_tpl->hasVariable('success') && null !== ($_smarty_tpl->getValue('success') ?? null)))) {?>
        <div class="success-alert"> <?php echo $_smarty_tpl->getValue('success');?>
 </div>
    <?php }?>

    <div class="address-container">
        <h1>Moje adresy</h1> <a href="/Praktyki-2-master/address-create" class="create-btn"> Dodaj adres </a>
        <hr>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('addresses'), 'address');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('address')->value) {
$foreach0DoElse = false;
?>
            <div class="address-box<?php if ((true && (true && null !== ($_SESSION['selected_address'] ?? null))) && $_smarty_tpl->getValue('address')->getId() == $_SESSION['selected_address']) {?> selected<?php }?>">
                <h2>Imię i Nazwisko: <?php echo $_smarty_tpl->getValue('address')->getFirstName();?>
 <?php echo $_smarty_tpl->getValue('address')->getLastName();?>
 </h2>
                <p>Adres: <?php echo $_smarty_tpl->getValue('address')->getStreet();?>
 </p>
                <p>Kod pocztowy i Miasto: <?php echo $_smarty_tpl->getValue('address')->getPostcode();?>
 <?php echo $_smarty_tpl->getValue('address')->getCity();?>
 </p>
                <p>Kraj: <?php echo $_smarty_tpl->getValue('address')->getCountry();?>
 </p>
                <p>Telefon: <?php echo $_smarty_tpl->getValue('address')->getPhone();?>
 </p>
                <div class="address-buttons">
<a href="/Praktyki-2-master/?page=address-select&id=<?php echo $_smarty_tpl->getValue('address')->getId();?>
" class="choose-btn"
>Wybierz</a>
                    <a class="edit-btn" href="/Praktyki-2-master/address-edit&id=<?php echo $_smarty_tpl->getValue('address')->getId();?>
"> Edytuj </a>
                    <a class="delete-btn" href="/Praktyki-2-master/address-delete&id=<?php echo $_smarty_tpl->getValue('address')->getId();?>
"> Usuń </a>
                </div>
            </div>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </div>
    <?php echo '<script'; ?>
>
        const chooseButtons = document.querySelectorAll('.choose-btn');

        chooseButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                
                document.querySelectorAll('.address-box').forEach(box => {
                    box.classList.remove('selected');
                });
                this.closest('.address-box').classList.add('selected');
            });
        });
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block "content"} */
}
