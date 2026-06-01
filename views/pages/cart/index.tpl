{extends file="layouts/default.tpl"}

{block name="content"}

    {if $products|@count == 0}

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

    {else}

        {if isset($smarty.session.flash)}
            <div class="toast toast-{$smarty.session.flash.type} show">
                {$smarty.session.flash.message}
            </div>
            {$smarty.session.flash = null}
        {/if}

        <div class="cart-container">

            <h1 class="cart-title">Twój koszyk</h1>

            <div class="cart-layout">

                <!-- LEWA STRONA -->
                <div class="cart-products">

                    <div class="cart-items">

                        {assign var=total value=0}

                        {foreach $products as $item name=products}

                            {assign var=product value=$item.product}
                            {assign var=variant value=$item.variant}
                            {assign var=productVariant value=$product->getVariants()->first()}
                            {assign var=price value=$productVariant->getPrice()}

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

                            <div class="cart-item">

                                <!-- LEWA -->
                                <div class="cart-left">

                                    {assign var=image value=$variant}
                                    {if $image}
                                        <img src="/Praktyki-2-master/uploads/{$image->getImage()}" class="cart-image">
                                    {/if}

                                    <div>
                                        {$product->getName()}<br>
                                        <small>Kolor: {$variant->getColor()}</small>
                                    </div>

                                </div>

                                <!-- CENA -->
                                <div class="cart-price">
                                    {$price} zł
                                </div>

                                <!-- ILOŚĆ -->
                                <div class="cart-quantity">

                                    <a href="/Praktyki-2-master/?page=cart/decrease&index={$smarty.foreach.products.index}" class="qty-btn">-</a>

                                    <span>{$item.quantity}</span>

                                    <a href="/Praktyki-2-master/?page=cart/increase&index={$smarty.foreach.products.index}" class="qty-btn">+</a>

                                </div>

                                <!-- RAZEM -->
                                <div class="cart-total">
                                    {$lineTotal} zł
                                </div>

                            </div>

                        {/foreach}

                    </div>

                    <!-- TOTAL -->
                   

                </div>

                <!-- PRAWA STRONA -->
                <div class="cart-summary">

                    <h2>Podsumowanie</h2>

                    <div class="summary-box">

                        {if $address}

                            <p>Imię i nazwisko: {$address->getFirstName()} {$address->getLastName()}</p>
                            <p>Ulica: {$address->getStreet()}</p>
                            <p>Miasto: {$address->getCity()}</p>
                            <p>Kod pocztowy: {$address->getPostcode()}</p>
                            <p>Kraj: {$address->getCountry()}</p>
                            <p>Nr tel: {$address->getPhone()}</p>

                        {else}

                            <p>Brak adresu dostawy</p>

                        {/if}

                    </div>

                    <hr>
                     <div class="cart-total-box">

                        <div class="cart-total-row">
                            <span>Łącznie:</span>
                            <strong>{$total} zł</strong>

                            
                        </div>
                        
                    </div>
                    {if !$address}
                        <button class="buy-btn" disabled style="opacity:0.5;">
                            Dodaj adres aby kontynuować
                        </button>
                    {else}
                        <a href="/Praktyki-2-master/?page=cart/checkout" class="buy-btn">
                            Przejdź do podsumowania
                        </a>
                    {/if}
<a href="/Praktyki-2-master/?page=cart/clear" class="clear-cart-btn">
                                Wyczyść koszyk
                            </a>
                </div>
                    
            </div>

        </div>

    {/if}

{/block}