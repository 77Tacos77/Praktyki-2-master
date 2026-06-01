{extends file="layouts/default.tpl"}

{block name="content" class="czarny"}

    <div class="admin-product-wrapper">

        <form method="POST" enctype="multipart/form-data" class="product-form">

            <div class="left-panel">

                <img src="/Praktyki-2-master/uploads/default.jpg" class="preview-image">

                <div class="form-group">

                    <label>Zdjęcie produktu</label>

                    <input type="file" name="image">

                </div>

            </div>

            <div class="right-panel">

                <h1 class="form-title">
                    Dodaj produkt
                </h1>
                <hr>
                <div class="form-section">

                    <h3>Dane produktu</h3>

                    <div class="form-group">
                        <label>Nazwa produktu</label>
                        <input type="text" name="name">
                    </div>

                    <div class="form-group">
                        <label>Kategoria</label>
                        <input type="text" name="category">
                    </div>

                    <div class="form-group">
                        <label>Opis</label>
                        <textarea name="description"></textarea>
                    </div>

                </div>

                <div class="form-section">

                    <h3>Wariant produktu</h3>

                    <div class="variant-card">

                        <div class="form-group">
                            <label>Nazwa wariantu</label>
                            <input type="text" name="variant_name">
                        </div>

                        <div class="form-group">
                            <label>Cena</label>
                            <input type="text" name="price">
                        </div>

                        <div class="form-group">
                            <label>EAN13</label>
                            <input type="text" name="ean13">
                        </div>

                    </div>

                </div>

                <button class="save-btn">
                    Zapisz produkts
                </button>

            </div>

        </form>

    </div>
{/block}