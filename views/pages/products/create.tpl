{extends file="layouts/default.tpl"} {block name="content"}
    <div class="login-container">
        <h1>Dodaj produkt</h1>
        <form method="POST" action="/Praktyki-2-master/?page=products/store" enctype="multipart/form-data"> <label>Nazwa produktu</label> <input type="text" name="name"> <label>Kategoria</label> <input type="text" name="category"> <label>Opis</label> <textarea name="description"></textarea> <label>Cena</label> <input type="number" step="0.01" name="price"> <label>Zdjęcie</label> <input type="file" name="image"> <button type="submit"> Zapisz produkt </button> </form>
    </div>
{/block}