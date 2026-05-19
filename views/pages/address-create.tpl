```smarty
{extends file="layouts/default.tpl"}

{block name="content"}

<div class="login-container">

    <h1>Dodaj adres</h1>

    <form method="POST">

        <label>Imię</label>
        <input type="text" name="firstName" required>

        <label>Nazwisko</label>
        <input type="text" name="lastName" required>

        <label>Ulica</label>
        <input type="text" name="street" required>

        <label>Kod pocztowy</label>
        <input type="text" name="postcode" required>

        <label>Miasto</label>
        <input type="text" name="city" required>

        <label>Kraj</label>
        <input type="text" name="country" required>

        <label>Numer telefonu</label>
        <input type="text" name="phone" required>

        <div class="button-group">

            <button class="submit" type="submit">
                Zapisz
            </button>

            <button class="reset" type="reset">
                Reset
            </button>

        </div>

    </form>

</div>

{/block}
```
