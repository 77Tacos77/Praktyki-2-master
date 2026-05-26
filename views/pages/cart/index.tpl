{extends file="layouts/default.tpl"}

{block name="content"}
    {if $products|@count == 0}
        <div class="empty-cart">

            <h1>Twój koszyk</h1>

            <h2>Koszyk jest pusty 🛒</h2>

            <p>Dodaj produkty, aby przejść do płatności</p>

            <a href="/Praktyki-2-master/" class="empty-btn">
                Przejdź do produktów
            </a>{else}

        </div>
        {if isset($smarty.session.flash)}

            <div class="toast toast-{$smarty.session.flash.type} show">

                {$smarty.session.flash.message}

            </div>

            {assign var=flash value=$smarty.session.flash}

            {$smarty.session.flash = null}

        {/if}
        <div class="cart-container">

            <h1 class="cart-title">
                Twój koszyk
            </h1>

            <div class="cart-layout">

                {* LEWA STRONA *}
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

                                <tr>

                                    <td>
                                        <div class="cart-product-info">

                                            {assign var=image value=$variant}

                                            {if $image}
                                                <img src="/Praktyki-2-master/uploads/{$image->getImage()}" class="cart-image">
                                            {/if}

                                            <span>
                                                {$product->getName()}
                                                <br>
                                                <small>Kolor: {$variant->getColor()}</small>
                                            </span>

                                        </div>
                                    </td>

                                    <td>
                                        {$price} zł
                                    </td>

                                    <td class="qty-box">

                                        <a href="/Praktyki-2-master/?page=cart/decrease&index={$smarty.foreach.products.index}" class="qty-btn">-</a>

                                        <span>{$item.quantity}</span>

                                        <a href="/Praktyki-2-master/?page=cart/increase&index={$smarty.foreach.products.index}" class="qty-btn">+</a>

                                    </td>



                                    <td>
                                        {$lineTotal} zł
                                    </td>

                                </tr>

                            {/foreach}

                        </tbody>

                    </table>
                    <div class="cart-total-box">

                        <div class="cart-total-row">

                            <span>
                                Łącznie:
                            </span>

                            <strong>
                                {$total} zł
                            </strong>

                        </div>


                    </div>

                </div>

                {* PRAWA STRONA *}
                <div class="cart-summary">

                    <h2>
                        Podsumowanie
                    </h2>
                    <div class="summary-box">

                        {if $address}

                            <p>
                                Imię i nazwisko:
                                {$address->getFirstName()}
                                {$address->getLastName()}
                            </p>

                            <p>
                                Ulica:
                                {$address->getStreet()}
                            </p>

                            <p>
                                Miasto:
                                {$address->getCity()}
                            </p>

                            <p>
                                Kod pocztowy:
                                {$address->getPostcode()}
                            </p>

                            <p>
                                Kraj:
                                {$address->getCountry()}
                            </p>

                            <p>
                                Nr tel:
                                {$address->getPhone()}
                            </p>

                        {else}

                            <p>
                                Brak adresu dostawy
                            </p>

                        {/if}
                    </div>
                    <hr>

                    <form method="POST" action="/Praktyki-2-master/?page=cart/checkout">
                        <button class="buy-btn">
                            {if $products|@count == 0}
                                Koszyk pusty
                            {else}
                                Przejdź do płatności
                            {/if}
                        </button>
                    </form>

                </div>

            </div>

        </div>
    {/if}
{/block}