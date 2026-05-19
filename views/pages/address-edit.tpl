{extends file="layouts/default.tpl"} {block name="content"}
    <div class="login-container">
        <h1>Edytuj adres</h1>
        <form method="POST"> <label>Imię</label> <input type="text" name="firstName" value="{$address->getFirstName()}"> <label>Nazwisko</label> <input type="text" name="lastName" value="{$address->getLastName()}"> <label>Ulica</label> <input type="text" name="street" value="{$address->getStreet()}"> <label>Kod pocztowy</label> <input type="text" name="postcode" value="{$address->getPostcode()}"> <label>Miasto</label> <input type="text" name="city" value="{$address->getCity()}"> <label>Kraj</label> <input type="text" name="country" value="{$address->getCountry()}"> <label>Telefon</label> <input type="text" name="phone" value="{$address->getPhone()}">
            <div class="button-group"> <button type="submit" class="submit"> Zapisz </button> </div>
        </form>
    </div>
{/block}