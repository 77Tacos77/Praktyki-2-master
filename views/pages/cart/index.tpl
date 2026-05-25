{extends file="layouts/default.tpl"}

{block name="content"}
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

                                <td>
                                    {$item.quantity}
                                </td>

                                <td>
                                    {$lineTotal} zł
                                </td>
                                
                                
<td>
    <a href="/Praktyki-2-master/?page=cart/delete&index={$smarty.foreach.products.index}" 
       class="delete-btn">✖</a>
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
                <button class="buy-btn checkout-btn">
                    Przejdź do płatności
                </button>

            </div>

        </div>

    </div>

{/block}