{extends file="layouts/default.tpl"}

{block name="content"}


    <div class="checkout-container">

        <!-- LEWA STRONA -->
        <div class="checkout-products">

            <h3>Twoje produkty</h3>

            {assign var=total value=0}

            {foreach $products as $item}

                {assign var=product value=$item.product}
                {assign var=variant value=$item.variant}
                {assign var=price value=$product->getVariants()->first()->getPrice()}

                {assign
                    var=lineTotal
                    value=$price
                    *
                    $item.quantity
                }
                {assign
                    var=total
                    value=$total
                    +
                    $lineTotal
                }

                <div class="checkout-item">

                    <div class="item-left">


                        {if $variant && $variant->getImage()}
                            <img src="/Praktyki-2-master/uploads/{$variant->getImage()}" width="70">
                        {/if}



                        <div>
                            <div class="item-title">
                                {$product->getName()}
                            </div>
                            <small>{$variant->getColor()}</small>
                        </div>

                    </div>

                    <div class="item-right">
                        {$item.quantity} × {$price} zł
                        <br>
                        <strong>{$lineTotal} zł</strong>
                    </div>


                </div>

            {/foreach}
            <div class="checkout-total">
                <strong>Łącznie: {$total} zł</strong>
            </div>

        </div>


        <!-- PRAWA STRONA -->
        <div class="checkout-summary">

            <h3>Adres dostawy</h3>

            <table class="address-table">
                <tr>
                    <td>Imię</td>
                    <td>{$address->getFirstName()}</td>
                </tr>
                <tr>
                    <td>Nazwisko</td>
                    <td>{$address->getLastName()}</td>
                </tr>
                <tr>
                    <td>Ulica</td>
                    <td>{$address->getStreet()}</td>
                </tr>
                <tr>
                    <td>Miasto</td>
                    <td>{$address->getCity()}</td>
                </tr>
            </table>

            <form method="POST" action="/Praktyki-2-master/?page=cart/payment">
                <button class="buy-btn">Zapłać</button>
            </form>
            <div class="payment-box">
                <br>

                <h4>Akceptujemy płatności</h4>

                <div class="payment-icons">

                    <div class="payment-icons">

                        <img src="/Praktyki-2-master/assets/cards/mastercard-alt.svg">
                        <img src="/Praktyki-2-master/assets/cards/visa.svg">
                        <img src="/Praktyki-2-master/assets\wallets\google-pay.svg">
                        <img src="/Praktyki-2-master/assets/apm/blik.svg">

                    </div>


                </div>

                <p class="secure-text">
                    🔒 Bezpieczna płatność SSL
                </p>

            </div>
        </div>

    </div>

{/block}