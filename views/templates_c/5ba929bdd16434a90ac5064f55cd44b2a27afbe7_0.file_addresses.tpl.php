<?php
/* Smarty version 5.8.0, created on 2026-05-28 13:31:01
  from 'file:pages/addresses.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a182775b87014_50595284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ba929bdd16434a90ac5064f55cd44b2a27afbe7' => 
    array (
      0 => 'pages/addresses.tpl',
      1 => 1779967856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a182775b87014_50595284 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-Master\\views\\pages';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_70925436a182775b70fe0_44497209', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_70925436a182775b70fe0_44497209 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-Master\\views\\pages';
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

    <h1 class="address-title">Moje adresy</h1>

    <a href="/Praktyki-2-master/address-create" class="add-address-btn">
        + Dodaj adres
    </a>

    <div class="address-list">

        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('addresses'), 'address');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('address')->value) {
$foreach0DoElse = false;
?>

            <div class="address-card <?php if ((true && (true && null !== ($_SESSION['selected_address'] ?? null))) && $_smarty_tpl->getValue('address')->getId() == $_SESSION['selected_address']) {?> selected <?php }?>">

                <h2>
                    <?php echo $_smarty_tpl->getValue('address')->getFirstName();?>
 <?php echo $_smarty_tpl->getValue('address')->getLastName();?>

                </h2>

                <p><?php echo $_smarty_tpl->getValue('address')->getStreet();?>
</p>
                <p><?php echo $_smarty_tpl->getValue('address')->getPostcode();?>
 <?php echo $_smarty_tpl->getValue('address')->getCity();?>
</p>
                <p><?php echo $_smarty_tpl->getValue('address')->getCountry();?>
</p>
                <p>Tel: <?php echo $_smarty_tpl->getValue('address')->getPhone();?>
</p>

                <div class="address-actions">

                    <a href="/Praktyki-2-master/?page=address-select&id=<?php echo $_smarty_tpl->getValue('address')->getId();?>
"
                       class="address-btn choose-btn">
                        Wybierz
                    </a>

                    <a href="/Praktyki-2-master/address-edit&id=<?php echo $_smarty_tpl->getValue('address')->getId();?>
"
                       class="address-btn edit-btn">
                        Edytuj
                    </a>

                    <a href="/Praktyki-2-master/address-delete&id=<?php echo $_smarty_tpl->getValue('address')->getId();?>
"
                       class="address-btn delete-btn">
                        Usuń
                    </a>

                </div>

            </div>

        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

    </div>

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
