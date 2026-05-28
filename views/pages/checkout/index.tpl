{extends file="layouts/default.tpl"}

{block name="content"}


    <div class="checkout-container">

        <!-- LEWA STRONA -->
        <div class="checkout-products">

            <h3>Twoje produkty</h3>
            <hr>

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
            <hr>
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
    <script>
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
    </script>
{/block}