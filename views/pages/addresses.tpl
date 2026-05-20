{extends file="layouts/default.tpl"} {block name="content"}
    {if isset($error)}
        <div class="error-alert"> {$error} </div>
    {/if}
    {if isset($success)}
        <div class="success-alert"> {$success} </div>
    {/if}

    <div class="address-container">
        <h1>Moje adresy</h1> <a href="/Praktyki-2-master/address-create"> Dodaj adres </a>
        {foreach $addresses as $address}
<div class="address-box {if $address->getId() == $smarty.session.selected_address}selected{/if}"><h2>Imię i Nazwisko: {$address->getFirstName()} {$address->getLastName()} </h2>
                <p>Adres: {$address->getStreet()} </p>
                <p>Kod pocztowy i Miasto: {$address->getPostcode()} {$address->getCity()} </p>
                <p>Kraj: {$address->getCountry()} </p>
                <p>Telefon: {$address->getPhone()} </p>
                <div class="address-buttons">
                    <a class="choose-btn" href="/Praktyki-2-master/address-select&id={$address->getId()}"> Wybierz </a>
                    <a class="edit-btn" href="/Praktyki-2-master/address-edit&id={$address->getId()}"> Edytuj </a>
                    <a class="delete-btn" href="/Praktyki-2-master/address-delete&id={$address->getId()}"> Usuń </a>
                </div>
            </div>
        {/foreach}
    </div>
{/block}
<script>
    const chooseButtons = document.querySelectorAll('.choose-btn');

    chooseButtons.forEach(button => {

        button.addEventListener('click', function(e) {

            e.preventDefault();

            document.querySelectorAll('.address-box').forEach(box => {
                box.classList.remove('selected');
            });

            this.closest('.address-box').classList.add('selected');

        });

    });
</script>