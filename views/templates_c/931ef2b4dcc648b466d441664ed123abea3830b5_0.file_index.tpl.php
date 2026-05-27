<?php
/* Smarty version 5.8.0, created on 2026-05-27 12:31:47
  from 'file:pages/products/index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a16c813f32069_02175934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '931ef2b4dcc648b466d441664ed123abea3830b5' => 
    array (
      0 => 'pages/products/index.tpl',
      1 => 1779877755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a16c813f32069_02175934 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-Master\\views\\pages\\products';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_15239494346a16c813f24775_80739556', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_15239494346a16c813f24775_80739556 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-Master\\views\\pages\\products';
?>


    <div class="products-page">
        <h1 class="products-title">Produkty</h1>
        <hr>

        <div class="products-actions">
            <a id="show-delete-mode" class="deletee-product-btn">- Usuń</a>
            <a href="/Praktyki-2-master/?page=products/create" class="add-product-btn">+ Dodaj produkt</a>
        </div>
        
        <hr>

        <form action="/Praktyki-2-master/?page=products-delete-multiple" method="post" id="delete-form" class="delete-product-btn">
        <button type="submit" id="delete-selected" style="display:none;" class="delete-selected-btn">
            Usuń zaznaczone
        </button>


            <div class="products-grid">

                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('products'), 'product');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('product')->value) {
$foreach0DoElse = false;
?>

                    <?php $_smarty_tpl->assign('image', $_smarty_tpl->getValue('product')->getImages()->first(), false, NULL);?>

                    <a href="/Praktyki-2-master/?page=products/edit&id=<?php echo $_smarty_tpl->getValue('product')->getId();?>
" class="product-card-link">
                        <div class="product-card">

                            <input type="checkbox" name="ids[]" value="<?php echo $_smarty_tpl->getValue('product')->getId();?>
" class="delete-checkbox" style="display:none;">

                            <div class="product-image">
                                <?php $_smarty_tpl->assign('image', $_smarty_tpl->getValue('product')->getImages()->first(), false, NULL);?>

                                <?php if ($_smarty_tpl->getValue('image')) {?>
                                    <img src="/Praktyki-2-master/uploads/<?php echo $_smarty_tpl->getValue('image')->getAlt();?>
">
                                <?php } else { ?>
                                    <img src="/Praktyki-2-master/uploads/default.jpg">
                                <?php }?>
                            </div>

                            <div class="product-content">
                                <h2><?php echo $_smarty_tpl->getValue('product')->getName();?>
</h2>
                                <p><?php echo $_smarty_tpl->getValue('product')->getDescription();?>
</p>

                                <?php $_smarty_tpl->assign('variant', $_smarty_tpl->getValue('product')->getVariants()->first(), false, NULL);?>
                                <?php if ($_smarty_tpl->getValue('variant')) {?>
                                    <p class="product-price">Cena: <?php echo $_smarty_tpl->getValue('variant')->getPrice();?>
 zł</p>
                                <?php } else { ?>
                                    <p class="product-price">Brak ceny</p>
                                <?php }?>
                            </div>


                        </div>
                    </a>

                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

            </div>
        </form>
    </div>

    <?php echo '<script'; ?>
>
        document.getElementById('show-delete-mode').addEventListener('click', function() {
            document.querySelectorAll('.delete-checkbox').forEach(cb => {
                cb.style.display = 'inline-block';
            });
            document.getElementById('delete-selected').style.display = 'inline-block';
        });
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block "content"} */
}
