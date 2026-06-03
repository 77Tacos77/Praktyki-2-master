<?php
/* Smarty version 5.8.0, created on 2026-06-03 08:57:58
  from 'file:pages/cart/index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a1fd076675994_73633688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9a4a536a4940e0e903b56b0a3edc0edaf0edf57' => 
    array (
      0 => 'pages/cart/index.tpl',
      1 => 1780469875,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a1fd076675994_73633688 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-Master\\views\\pages\\cart';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_16937671036a1fd076653e12_76986367', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_16937671036a1fd076653e12_76986367 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-Master\\views\\pages\\cart';
?>


    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('products')) == 0) {?>

        <div class="empty-cart">

            <h1>Twój koszyk</h1>
            <h2>Koszyk jest pusty 🛒</h2>
            <p>Dodaj produkty, aby przejść do płatności</p>

            <div class="planet-wrapper">
                <div class="planet"></div>
                <div class="mirjan">M</div>
            </div>

            <a href="/Praktyki-2-master/" class="empty-btn">
                Przejdź do produktów
            </a>

        </div>

    <?php } else { ?>

        <?php if ((true && (true && null !== ($_SESSION['flash'] ?? null)))) {?>
            <div class="toast toast-<?php echo $_SESSION['flash']['type'];?>
 show">
                <?php echo $_SESSION['flash']['message'];?>

            </div>
            <?php $_tmp_array = $_smarty_tpl->getValue('smarty') ?? [];
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['session']['flash'] = null;
$_smarty_tpl->assign('smarty', $_tmp_array, false, NULL);?>
        <?php }?>

        <div class="cart-container">

            <h1 class="cart-title">Twój koszyk</h1>

            <div class="cart-layout">

                <!-- LEWA STRONA -->
                <div class="cart-products">

                    <div class="cart-items">

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

                            <div class="cart-item">

                                <!-- LEWA -->
                                <div class="cart-left">

                                    <?php $_smarty_tpl->assign('image', $_smarty_tpl->getValue('variant'), false, NULL);?>
                                    <?php if ($_smarty_tpl->getValue('image')) {?>
                                        <img src="/Praktyki-2-master/uploads/<?php echo $_smarty_tpl->getValue('image')->getImage();?>
" class="cart-image">
                                    <?php }?>

                                    <div>
                                        <?php echo $_smarty_tpl->getValue('product')->getName();?>
<br>
                                        <small>Kolor: <?php echo $_smarty_tpl->getValue('variant')->getColor();?>
</small>
                                    </div>

                                </div>

                                <!-- CENA -->
                                <div class="cart-price">
                                    <?php echo $_smarty_tpl->getValue('price');?>
 zł
                                </div>

                                <!-- ILOŚĆ -->
                                <div class="cart-quantity">

                                    <button class="qty-btn" data-url="/Praktyki-2-master/?page=cart/decrease&index=<?php echo ($_smarty_tpl->getValue('__smarty_foreach_products')['index'] ?? null);?>
">-</button>

                                    <span class="qty-value"><?php echo $_smarty_tpl->getValue('item')['quantity'];?>
</span>

                                    <button class="qty-btn" data-url="/Praktyki-2-master/?page=cart/increase&index=<?php echo ($_smarty_tpl->getValue('__smarty_foreach_products')['index'] ?? null);?>
">+</button>


                                </div>

                                <!-- RAZEM -->
                                <div class="cart-total">
                                    <?php echo $_smarty_tpl->getValue('lineTotal');?>
 zł
                                </div>

                                <div class="cart-remove">
                                    <button type="button" data-url="/Praktyki-2-master/?page=cart/delete&index=<?php echo ($_smarty_tpl->getValue('__smarty_foreach_products')['index'] ?? null);?>
" class="remove-btn">
                                        ×
                                    </button>
                                </div>


                            </div>

                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                    </div>

                    <!-- TOTAL -->


                </div>

                <!-- PRAWA STRONA -->
                <div class="cart-summary">

                    <h2>Podsumowanie</h2>

                    <div class="summary-box">

                        <?php if ($_smarty_tpl->getValue('address')) {?>

                            <p>Imię i nazwisko: <?php echo $_smarty_tpl->getValue('address')->getFirstName();?>
 <?php echo $_smarty_tpl->getValue('address')->getLastName();?>
</p>
                            <p>Ulica: <?php echo $_smarty_tpl->getValue('address')->getStreet();?>
</p>
                            <p>Miasto: <?php echo $_smarty_tpl->getValue('address')->getCity();?>
</p>
                            <p>Kod pocztowy: <?php echo $_smarty_tpl->getValue('address')->getPostcode();?>
</p>
                            <p>Kraj: <?php echo $_smarty_tpl->getValue('address')->getCountry();?>
</p>
                            <p>Nr tel: <?php echo $_smarty_tpl->getValue('address')->getPhone();?>
</p>

                        <?php } else { ?>

                            <p>Brak adresu dostawy</p>

                        <?php }?>

                    </div>

                    <hr>
                    <div class="cart-total-box">

                        <div class="cart-total-row">
                            <span>Łącznie:</span>
                            <strong id="cart-total"><?php echo $_smarty_tpl->getValue('total');?>
 zł</strong>


                        </div>

                    </div>
                    <?php if (!$_smarty_tpl->getValue('address')) {?>
                        <button class="buy-btn" disabled style="opacity:0.5;">
                            Dodaj adres aby kontynuować
                        </button>
                    <?php } else { ?>
                        <a href="/Praktyki-2-master/?page=cart/checkout" class="buy-btn">
                            Przejdź do podsumowania
                        </a>
                    <?php }?>
                    <a href="/Praktyki-2-master/?page=cart/clear" class="clear-cart-btn">
                        Wyczyść koszyk
                    </a>
                </div>

            </div>

        </div>

    <?php }?>
    <?php echo '<script'; ?>
>
        document.querySelectorAll(".qty-btn").forEach(btn => {
            btn.addEventListener("click", function() {

                const item = this.closest(".cart-item");
                const url = this.dataset.url;
                const qtyEl = item.querySelector(".qty-value");

                qtyEl.classList.add("bump");

                setTimeout(() => {
                    qtyEl.classList.remove("bump");
                }, 200);

                fetch(url)
                    .then(res => res.json())
                    .then(data => {

                        // ✅ jeśli ilość spadła do 0 → usuń element
                        if (data.quantity === 0) {

                            item.classList.add("removing");

                            setTimeout(() => {
                                item.remove();
                            }, 300);

                            return;
                        }

                        // ✅ aktualizacja ilości
                        if (data.quantity !== undefined) {
                            qtyEl.innerText = data.quantity;
                        }

                        // ✅ aktualizacja ceny w wierszu
                        if (data.lineTotal !== undefined) {
                            item.querySelector(".cart-total").innerText = data.lineTotal + " zł";
                        }

                        // ✅ aktualizacja totala
                        if (data.total !== undefined) {
                            document.querySelector("#cart-total").innerText = data.total + " zł";
                        }
                    });
            });
        });

        document.querySelectorAll(".remove-btn").forEach(btn => {
            btn.addEventListener("click", function() {

                const item = this.closest(".cart-item");
                const url = this.dataset.url;

                item.classList.add("removing");

                setTimeout(() => {
                    fetch(url)
                        .then(res => res.json())
                        .then(data => {
                            item.remove();

                            if (data.total !== undefined) {
                                document.querySelector("#cart-total").innerText = data.total + " zł";
                            }
                        });
                }, 300);
            });
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "content"} */
}
