{extends file="layouts/default.tpl"} {block name="content"}
    {if isset($error)}
        <div class="error-alert"> {$error} </div>
    {/if}
    {if isset($success)}
        <div class="success-alert"> {$success} </div>
    {/if}

    <div class="address-container">

        <h1 class="address-title">Moje adresy</h1>

        <a href="/Praktyki-2-master/address-create" class="add-address-btn">
            + Dodaj adres
        </a>

        <div class="address-list">

            {foreach $addresses as $address}

                <div class="address-card {if isset($smarty.session.selected_address) && $address->getId() == $smarty.session.selected_address} selected {/if}">

                    <h2>
                        {$address->getFirstName()} {$address->getLastName()}
                    </h2>

                    <p>{$address->getStreet()}</p>
                    <p>{$address->getPostcode()} {$address->getCity()}</p>
                    <p>{$address->getCountry()}</p>
                    <p>Tel: {$address->getPhone()}</p>

                    <div class="address-actions">

                        <a href="/Praktyki-2-master/?page=address-select&id={$address->getId()}" class="address-btn choose-btn">
                            Wybierz
                        </a>

                        <a href="/Praktyki-2-master/address-edit&id={$address->getId()}" class="address-btn edit-btn">
                            Edytuj
                        </a>

                        <a href="/Praktyki-2-master/address-delete&id={$address->getId()}" class="address-btn delete-btn">
                            Usuń
                        </a>

                    </div>

                </div>

            {/foreach}

        </div>

    </div>

    <script>
        const chooseButtons = document.querySelectorAll('.choose-btn');

        chooseButtons.forEach(button => {
                    button.addEventListener('click', function(e) {
                        e.preventDefault(); // 🔥 STOP reload

                        document.querySelectorAll('.address-card').forEach(box => {
                            box.classList.remove('selected');
                        });

                        this.closest('.address-card').classList.add('selected');

                        window.location.href = this.href; // 🔥 dopiero potem redirect
                    });
    </script>

{/block}