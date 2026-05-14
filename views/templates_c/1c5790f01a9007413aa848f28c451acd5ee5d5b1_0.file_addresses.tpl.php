<?php
/* Smarty version 5.8.0, created on 2026-05-14 12:55:10
  from 'file:pages/addresses.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a05aa0e4337c8_40757163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c5790f01a9007413aa848f28c451acd5ee5d5b1' => 
    array (
      0 => 'pages/addresses.tpl',
      1 => 1778756110,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a05aa0e4337c8_40757163 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_12678620446a05aa0e4275a3_13852288', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_12678620446a05aa0e4275a3_13852288 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages';
?>


    <div class="address-container">

        <h1>Moje adresy</h1>

        <a href="/Praktyki-2-master/?page=address-create">
            Dodaj adres
        </a>

        <hr>

        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('addresses'), 'address');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('address')->value) {
$foreach0DoElse = false;
?>

            <div class="address-box">

                <h2><?php echo $_smarty_tpl->getValue('address')->getTitle();?>
</h2>

                <a href="<?php echo $_smarty_tpl->getValue('address')->getUrl();?>
" target="_blank" class="link">
                    <?php echo $_smarty_tpl->getValue('address')->getUrl();?>

                </a>

                <p>
                    <?php echo $_smarty_tpl->getValue('address')->getDescription();?>

                </p>

                <div class="address-buttons">

                    <a class="edit-btn" href="/Praktyki-2-master/?page=address-edit&id=<?php echo $_smarty_tpl->getValue('address')->getId();?>
">
                        Edytuj
                    </a>

                    <a class="delete-btn" href="/Praktyki-2-master/?page=address-delete&id=<?php echo $_smarty_tpl->getValue('address')->getId();?>
">
                        Usuń
                    </a>

                </div>

            </div>

            <hr>

        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

    </div>

<?php
}
}
/* {/block "content"} */
}
