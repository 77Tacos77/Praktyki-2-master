{extends file="layouts/default.tpl"}

{block name="content"}

<h1>Dodaj produkt</h1>

<form action="/Praktyki-2-master/index.php?page=products/store" method="POST">

    <label>Nazwa produktu</label>
    <input type="text" name="name" required>

    <label>Opis</label>
    <textarea name="description" required></textarea>

    <label>Kategoria</label>
    <input type="text" name="category" required>

    <label>Cena</label>
    <input type="number" name="price" step="0.01" required>

    <label>Zdjęcie</label>
    <input type="file" name="image" required>

    <button type="submit">Zapisz</button>

</form>

{/block}
