<?php
/* Smarty version 5.8.0, created on 2026-05-19 13:14:06
  from 'file:products.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a0c45fe5f26d6_66860844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4f560d6a7dc4342216e42634730f361a1269f19' => 
    array (
      0 => 'products.tpl',
      1 => 1779188047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a0c45fe5f26d6_66860844 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php ob_start();
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_8062975286a0c45fe5d0883_87870478', "content");
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_8062975286a0c45fe5d0883_87870478 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages';
?>

    <div class="products-container">
        <h1>Produkty</h1>
        <div class="products-grid">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('products'), 'product');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('product')->value) {
$foreach0DoElse = false;
?>
                <div class="product-card">
                    <h2><?php echo $_smarty_tpl->getValue('product')->getName();?>
</h2>
                    <p><?php echo $_smarty_tpl->getValue('product')->getDescription();?>
</p>
                    <p>Cena: <?php echo $_smarty_tpl->getValue('product')->getPrice();?>
 PLN</p>
                </div>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
