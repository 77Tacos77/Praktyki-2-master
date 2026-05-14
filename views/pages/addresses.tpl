{extends file="layouts/default.tpl"}

{block name="content"}

    <div class="address-container">

        <h1>Moje adresy</h1>

        <a href="/Praktyki-2-master/?page=address-create">
            Dodaj adres
        </a>

        <hr>

        {foreach $addresses as $address}

            <div class="address-box">

                <h2>{$address->getTitle()}</h2>

                <a href="{$address->getUrl()}" target="_blank" class="link">
                    {$address->getUrl()}
                </a>

                <p>
                    {$address->getDescription()}
                </p>

                <div class="address-buttons">

                    <a class="edit-btn" href="/Praktyki-2-master/?page=address-edit&id={$address->getId()}">
                        Edytuj
                    </a>

                    <a class="delete-btn" href="/Praktyki-2-master/?page=address-delete&id={$address->getId()}">
                        Usuń
                    </a>

                </div>

            </div>

            <hr>

        {/foreach}

    </div>

{/block}