<?php
/* Smarty version 5.8.0, created on 2026-05-26 09:17:37
  from 'file:pages/cart/index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a154911d87f59_29160846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cba3879ad593500c5c91d12ed2112bf63786110b' => 
    array (
      0 => 'pages/cart/index.tpl',
      1 => 1779779852,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a154911d87f59_29160846 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages\\cart';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_9856821416a154911d74e07_33940624', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_9856821416a154911d74e07_33940624 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-master\\views\\pages\\cart';
?>

    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('products')) == 0) {?>
        <div class="empty-cart">

            <h1>Twój koszyk</h1>

            <h2>Koszyk jest pusty 🛒</h2>

            <p>Dodaj produkty, aby przejść do płatności</p>

            <a href="/Praktyki-2-master/" class="empty-btn">
                Przejdź do produktów
            </a><?php } else { ?>

        </div>
        <?php if ((true && (true && null !== ($_SESSION['flash'] ?? null)))) {?>

            <div class="toast toast-<?php echo $_SESSION['flash']['type'];?>
 show">

                <?php echo $_SESSION['flash']['message'];?>


            </div>

            <?php $_smarty_tpl->assign('flash', $_SESSION['flash'], false, NULL);?>

            <?php $_tmp_array = $_smarty_tpl->getValue('smarty') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['session']['flash'] = null;
$_smarty_tpl->assign('smarty', $_tmp_array, false, NULL);?>

        <?php }?>
        <div class="cart-container">

            <h1 class="cart-title">
                Twój koszyk
            </h1>

            <div class="cart-layout">

                                <div class="cart-products">
                    <a href="/Praktyki-2-master/?page=cart/clear" class="clear-cart-btn">
                        Wyczyść koszyk
                    </a>

                    <table class="cart-table">

                        <thead>

                            <tr>
                                <th>Produkt</th>
                                <th>Cena</th>
                                <th>Ilość</th>
                                <th>Razem</th>
                                <th></th>

                            </tr>

                        </thead>

                        <tbody>

                            <?php $_smarty_tpl->assign('total', 0, false, NULL);?>

                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('products'), 'item', false, NULL, 'products', array (
  'index' => true,
));
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['index']++;
?>


                                <?php $_smarty_tpl->assign('product', $_smarty_tpl->getValue('item')['product'], false, NULL);?>
                                <?php $_smarty_tpl->assign('variant', $_smarty_tpl->getValue('item')['variant'], false, NULL);?>
                                <?php $_smarty_tpl->assign('productVariant', $_smarty_tpl->getValue('product')->getVariants()->first(), false, NULL);?>
                                <?php $_smarty_tpl->assign('price', $_smarty_tpl->getValue('productVariant')->getPrice(), false, NULL);?>

                                <?php $_smarty_tpl->assign('lineTotal', $_smarty_tpl->getValue('price')*$_smarty_tpl->getValue('item')['quantity'], false, NULL);?>
                                <?php $_smarty_tpl->assign('total', $_smarty_tpl->getValue('total')+$_smarty_tpl->getValue('lineTotal'), false, NULL);?>

                                <tr>

                                    <td>
                                        <div class="cart-product-info">

                                            <?php $_smarty_tpl->assign('image', $_smarty_tpl->getValue('variant'), false, NULL);?>

                                            <?php if ($_smarty_tpl->getValue('image')) {?>
                                                <img src="/Praktyki-2-master/uploads/<?php echo $_smarty_tpl->getValue('image')->getImage();?>
" class="cart-image">
                                            <?php }?>

                                            <span>
                                                <?php echo $_smarty_tpl->getValue('product')->getName();?>

                                                <br>
                                                <small>Kolor: <?php echo $_smarty_tpl->getValue('variant')->getColor();?>
</small>
                                            </span>

                                        </div>
                                    </td>

                                    <td>
                                        <?php echo $_smarty_tpl->getValue('price');?>
 zł
                                    </td>

                                    <td class="qty-box">

                                        <a href="/Praktyki-2-master/?page=cart/decrease&index=<?php echo ($_smarty_tpl->getValue('__smarty_foreach_products')['index'] ?? null);?>
" class="qty-btn">-</a>

                                        <span><?php echo $_smarty_tpl->getValue('item')['quantity'];?>
</span>

                                        <a href="/Praktyki-2-master/?page=cart/increase&index=<?php echo ($_smarty_tpl->getValue('__smarty_foreach_products')['index'] ?? null);?>
" class="qty-btn">+</a>

                                    </td>



                                    <td>
                                        <?php echo $_smarty_tpl->getValue('lineTotal');?>
 zł
                                    </td>

                                </tr>

                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                        </tbody>

                    </table>
                    <div class="cart-total-box">

                        <div class="cart-total-row">

                            <span>
                                Łącznie:
                            </span>

                            <strong>
                                <?php echo $_smarty_tpl->getValue('total');?>
 zł
                            </strong>

                        </div>


                    </div>

                </div>

                                <div class="cart-summary">

                    <h2>
                        Podsumowanie
                    </h2>
                    <div class="summary-box">

                        <?php if ($_smarty_tpl->getValue('address')) {?>

                            <p>
                                Imię i nazwisko:
                                <?php echo $_smarty_tpl->getValue('address')->getFirstName();?>

                                <?php echo $_smarty_tpl->getValue('address')->getLastName();?>

                            </p>

                            <p>
                                Ulica:
                                <?php echo $_smarty_tpl->getValue('address')->getStreet();?>

                            </p>

                            <p>
                                Miasto:
                                <?php echo $_smarty_tpl->getValue('address')->getCity();?>

                            </p>

                            <p>
                                Kod pocztowy:
                                <?php echo $_smarty_tpl->getValue('address')->getPostcode();?>

                            </p>

                            <p>
                                Kraj:
                                <?php echo $_smarty_tpl->getValue('address')->getCountry();?>

                            </p>

                            <p>
                                Nr tel:
                                <?php echo $_smarty_tpl->getValue('address')->getPhone();?>

                            </p>

                        <?php } else { ?>

                            <p>
                                Brak adresu dostawy
                            </p>

                        <?php }?>
                    </div>
                    <hr>

                    <form method="POST" action="/Praktyki-2-master/?page=cart/checkout">
                        <button class="buy-btn">
                            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('products')) == 0) {?>
                                Koszyk pusty
                            <?php } else { ?>
                                Przejdź do płatności
                            <?php }?>
                        </button>
                    </form>

                </div>

            </div>

        </div>
    <?php }
}
}
/* {/block "content"} */
}
