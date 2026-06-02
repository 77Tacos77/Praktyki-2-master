{extends file="layouts/default.tpl"}

{block name="content"}

    <div class="login-container text-center">

        <h1 class="mb-4">Mój profil</h1>
        <div class="profile-wrapper">

            {if !$edit}

                <div class="profile-card">

                    <div class="profile-header">
                        <div class="avatar"><img src="/Praktyki-2-master/profile_default.jpg" alt="Avatar"></div>
                        <h3>{$profile->getImie()} {$profile->getNazwisko()}</h3>
                    </div>

                    <div class="profile-row">
                        <span>Imię</span>
                        <strong>{$profile->getImie()}</strong>
                    </div>

                    <div class="profile-row">
                        <span>Nazwisko</span>
                        <strong>{$profile->getNazwisko()}</strong>
                    </div>


                    <div class="profile-row">
                        <span>Ulica</span>
                        <strong>{$profile->getUlica()}</strong>
                    </div>

                    <div class="profile-row">
                        <span>Kod pocztowy</span>
                        <strong>{$profile->getKodPocztowy()}</strong>
                    </div>

                    <div class="profile-row">
                        <span>Miasto</span>
                        <strong>{$profile->getMiasto()}</strong>
                    </div>

                    <div class="profile-row">
                        <span>Kraj</span>
                        <strong>{$profile->getKraj()}</strong>
                    </div>

                    <div class="profile-row">
                        <span>Telefon</span>
                        <strong>{$profile->getNumerTelefonu()}</strong>
                    </div>

                </div>

                <!-- ✅ TO MUSI BYĆ OBOK -->
                <div class="profile-side">

                    <a class="profile-btn" href="/Praktyki-2-master/profile-edit">
                        ✏️ Edytuj profil
                    </a>

                    <a class="profile-btn" href="/Praktyki-2-master/change-password">
                        🔒 Zmień hasło
                    </a>

                    <a class="profile-btn secondary" href="/Praktyki-2-master/address-import">
                        ⬇️ Importuj dane
                    </a>

                </div>

            {/if}

        </div>
        {if $edit}
            <form method="POST" class="text-start">

                <div class="profile-header">
                    <div class="avatar"><img src="/Praktyki-2-master/profile_default.jpg" alt="Avatar"></div>
                    <h3>{$profile->getImie()} {$profile->getNazwisko()}</h3>
                </div>
                <hr>
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

                <button type="submit" class="profile-btn save">
                    💾 Zapisz zmiany
                </button>

            </form>
        {/if}

    </div>

{/block}