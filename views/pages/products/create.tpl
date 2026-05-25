{extends file="layouts/default.tpl"}

{block name="content"}

<div class="admin-product-wrapper">

    <form
        action="/Praktyki-2-master/?page=products/store"
        method="POST"
        enctype="multipart/form-data"
        class="product-form"
    >

        {* LEWA STRONA *}
        <div class="left-panel">

            <div class="image-box">

                <img
                    id="previewImage"
                    src="/Praktyki-2-master/uploads/default.jpg"
                    class="preview-image"
                >

            </div>

            <div class="form-group">

                <label>Zdjęcie produktu</label>

                <input
                    type="file"
                    name="image"
                    id="imageInput"
                >

            </div>

        </div>

        {* PRAWA STRONA *}
        <div class="right-panel">

            <h1 class="form-title">
                Dodaj produkt
            </h1>

            <div class="form-section">

                <h3>Dane produktu</h3>

                <div class="form-group">

                    <label>Nazwa produktu</label>

                    <input
                        type="text"
                        name="name"
                        required
                    >

                </div>

                <div class="form-group">

                    <label>Kategoria</label>

                    <input
                        type="text"
                        name="category"
                        required
                    >

                </div>

                <div class="form-group">

                    <label>Opis</label>

                    <textarea
                        name="description"
                        rows="6"
                        required
                    ></textarea>

                </div>

            </div>

            <div class="form-section">

                <h3>Wariant produktu</h3>

                <div class="variant-card">

                    <div class="form-group">

                        <label>Nazwa wariantu</label>

                        <input
                            type="text"
                            name="variant_name"
                            placeholder="np. Czarny"
                            required
                        >

                    </div>

                    <div class="form-group">

                        <label>Cena</label>

                        <input
                            type="number"
                            step="0.01"
                            name="price"
                            required
                        >

                    </div>

                    <div class="form-group">

                        <label>EAN13</label>

                        <input
                            type="text"
                            name="ean13"
                            value="0000000000000"
                        >

                    </div>

                </div>

            </div>

            <button type="submit" class="save-btn">

                Zapisz produkt

            </button>

        </div>

    </form>

</div>

<script>

const imageInput =
    document.getElementById('imageInput');

const previewImage =
    document.getElementById('previewImage');

imageInput.addEventListener('change', function(e){

    const file = e.target.files[0];

    if(file){

        previewImage.src =
            URL.createObjectURL(file);

    }

});

</script>

{/block}
