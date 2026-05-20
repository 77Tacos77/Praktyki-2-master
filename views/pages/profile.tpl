{extends file="layouts/default.tpl"}

{block name="content"}

    <div class="login-container text-center">

        <h1 class="mb-4">Mój profil</h1>

        {if !$edit}
            <div class="fs-4">

                <p><strong>Imię:</strong> {$profile->getImie()}</p>
                <p><strong>Nazwisko:</strong> {$profile->getNazwisko()}</p>
                <p><strong>Ulica:</strong> {$profile->getUlica()}</p>
                <p><strong>Kod pocztowy:</strong> {$profile->getKodPocztowy()}</p>
                <p><strong>Miasto:</strong> {$profile->getMiasto()}</p>
                <p><strong>Kraj:</strong> {$profile->getKraj()}</p>
                <p><strong>Telefon:</strong> {$profile->getNumerTelefonu()}</p>

                <div class="profile-actions"> <a class="edit-btn" href="/Praktyki-2-master/profile-edit"> Edytuj profil </a>
                 <a class="edit-btn" href="/Praktyki-2-master/change-password"> Zmień hasło </a>
                  <a class="choose-btn" href="/Praktyki-2-master/address-import"> Importuj dane do adresu </a> </div>

            </div>
        {/if}

        {if $edit}
            <form method="POST" class="text-start">

                <label>Imię</label>
                <input class="form-control" type="text" name="imie" value="{$profile->getImie()}">

                <label>Nazwisko</label>
                <input class="form-control" type="text" name="nazwisko" value="{$profile->getNazwisko()}">

                <label>Ulica</label>
                <input class="form-control" type="text" name="ulica" value="{$profile->getUlica()}">

                <label>Kod pocztowy</label>
                <input class="form-control" type="text" name="kod_pocztowy" value="{$profile->getKodPocztowy()}">

                <label>Miasto</label>
                <input class="form-control" type="text" name="miasto" value="{$profile->getMiasto()}">

                <label>Kraj</label>
                <input class="form-control" type="text" name="kraj" value="{$profile->getKraj()}">

                <label>Telefon</label>
                <input class="form-control" type="text" name="numer_telefonu" value="{$profile->getNumerTelefonu()}">
                <div class="profile-actions"> <a class="edit-btn" href="/Praktyki-2-master/?page=profile-edit"> Edytuj profil </a> <a class="edit-btn" href="/Praktyki-2-master/?page=change-password"> Zmień hasło </a> <a class="choose-btn" href="/Praktyki-2-master/?page=address-import"> Importuj dane do adresu </a> </div>
            </form>
        {/if}

    </div>

{/block}