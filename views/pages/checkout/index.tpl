{extends file="layouts/default.tpl"}

{block name="content"}

    <h1>Checkout</h1>

    <h3>Adres dostawy</h3>

    {if $address}

        <table class="address-table">

            <tr>
                <td>Imię i nazwisko</td>
                <td>{$address->getFirstName()} {$address->getLastName()}</td>
            </tr>

            <tr>
                <td>Ulica</td>
                <td>{$address->getStreet()}</td>
            </tr>

            <tr>
                <td>Miasto</td>
                <td>{$address->getCity()}</td>
            </tr>

            <tr>
                <td>Kod pocztowy</td>
                <td>{$address->getPostcode()}</td>
            </tr>

            <tr>
                <td>Kraj</td>
                <td>{$address->getCountry()}</td>
            </tr>

            <tr>
                <td>Telefon</td>
                <td>{$address->getPhone()}</td>
            </tr>

        </table>

        <a href="/Praktyki-2-master/?page=cart/payment" class="buy-btn">
            Przejdź do płatności
        </a>

    {else}

        <p style="color:red;">Brak adresu!</p>
        <a href="/Praktyki-2-master/?page=address" class="buy-btn">
            Dodaj adres
        </a>

    {/if}

{/block}
``