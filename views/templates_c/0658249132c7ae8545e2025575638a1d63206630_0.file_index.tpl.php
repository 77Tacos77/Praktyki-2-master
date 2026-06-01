<?php
/* Smarty version 5.8.0, created on 2026-06-01 11:29:59
  from 'file:pages/checkout/index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a1d511746b206_28292847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0658249132c7ae8545e2025575638a1d63206630' => 
    array (
      0 => 'pages/checkout/index.tpl',
      1 => 1780306197,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a1d511746b206_28292847 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-Master\\views\\pages\\checkout';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_6107107766a1d51174472f0_71000262', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/default.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_6107107766a1d51174472f0_71000262 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Praktyki-2-Master\\views\\pages\\checkout';
?>



    <div class="checkout-container">

        <!-- LEWA STRONA -->
        <div class="checkout-products">

            <h3>Twoje produkty</h3>
            <hr>

            <?php $_smarty_tpl->assign('total', 0, false, NULL);?>

            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('products'), 'item');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
?>

                <?php $_smarty_tpl->assign('product', $_smarty_tpl->getValue('item')['product'], false, NULL);?>
                <?php $_smarty_tpl->assign('variant', $_smarty_tpl->getValue('item')['variant'], false, NULL);?>
                <?php $_smarty_tpl->assign('price', $_smarty_tpl->getValue('product')->getVariants()->first()->getPrice(), false, NULL);?>

                <?php $_smarty_tpl->assign('lineTotal', $_smarty_tpl->getValue('price')*$_smarty_tpl->getValue('item')['quantity'], false, NULL);?>
                <?php $_smarty_tpl->assign('total', $_smarty_tpl->getValue('total')+$_smarty_tpl->getValue('lineTotal'), false, NULL);?>

                <div class="checkout-item">

                    <div class="item-left">


                        <?php if ($_smarty_tpl->getValue('variant') && $_smarty_tpl->getValue('variant')->getImage()) {?>
                            <img src="/Praktyki-2-master/uploads/<?php echo $_smarty_tpl->getValue('variant')->getImage();?>
" width="70">
                        <?php }?>



                        <div>
                            <div class="item-title">
                                <?php echo $_smarty_tpl->getValue('product')->getName();?>

                            </div>
                            <small><?php echo $_smarty_tpl->getValue('variant')->getColor();?>
</small>
                        </div>

                    </div>

                    <div class="item-right">
                        <?php echo $_smarty_tpl->getValue('item')['quantity'];?>
 × <?php echo $_smarty_tpl->getValue('price');?>
 zł
                        <br>
                        <strong><?php echo $_smarty_tpl->getValue('lineTotal');?>
 zł</strong>
                    </div>


                </div>

            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <hr>
            <div class="checkout-total">
                <strong>Łącznie: <?php echo $_smarty_tpl->getValue('total');?>
 zł</strong>
            </div>

        </div>


        <!-- PRAWA STRONA -->
        <div class="checkout-summary">

            <h3>Adres dostawy</h3>

            <table class="address-table">
                <tr>
                    <td>Imię</td>
                    <td><?php echo $_smarty_tpl->getValue('address')->getFirstName();?>
</td>
                </tr>
                <tr>
                    <td>Nazwisko</td>
                    <td><?php echo $_smarty_tpl->getValue('address')->getLastName();?>
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
            </table>

            <form method="POST" action="/Praktyki-2-master/?page=cart/payment">
                <h3>Wybierz metodę płatności:</h3>

                <div class="payment-dropdown">

                    <div class="dropdown-selected" id="selectedPayment">
                        Wybierz metodę płatności ▼
                    </div>

                    <div class="dropdown-options" id="paymentOptions">

                        <div class="dropdown-item" data-value="card">
                            <img src="/Praktyki-2-master/assets/cards/visa.svg">
                            <span>Karta</span>
                        </div>

                        <div class="dropdown-item" data-value="blik">
                            <img src="/Praktyki-2-master/assets/apm/blik.svg">
                            <span>BLIK</span>
                        </div>

                    </div>

                    <input type="hidden" name="payment_method" id="paymentMethodInput">

                </div>
                <button class="buy-btn">Zapłać</button>
            </form>
            <div class="payment-box">
                <br>

                <h4>Akceptujemy płatności</h4>


                    
<div class="payment-icons">
    <img src="/Praktyki-2-master/assets/cards/mastercard-alt.svg">
    <img src="/Praktyki-2-master/assets/cards/visa.svg">
    <img src="/Praktyki-2-master/assets/wallets/google-pay.svg">
    <img src="/Praktyki-2-master/assets/apm/blik.svg">
</div>




                <p class="secure-text">
                    🔒 Bezpieczna płatność SSL
                </p>

            </div>
        </div>

    </div>
    <?php echo '<script'; ?>
>
        const dropdown = document.getElementById('selectedPayment');
        const options = document.getElementById('paymentOptions');
        const hiddenInput = document.getElementById('paymentMethodInput');

        dropdown.addEventListener('click', () => {
            options.classList.toggle('show');
        });

        document.querySelectorAll('.dropdown-item').forEach(item => {
            item.addEventListener('click', () => {

                const value = item.dataset.value;
                const text = item.innerText;

                dropdown.innerHTML = text + " ▼";
                hiddenInput.value = value;

                options.classList.remove('show');
            });
        });

        // klik poza = zamyka
        document.addEventListener('click', (e) => {
            if (!dropdown.contains(e.target) && !options.contains(e.target)) {
                options.classList.remove('show');
            }
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "content"} */
}
