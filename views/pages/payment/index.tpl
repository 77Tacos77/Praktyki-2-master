{extends file="layouts/default.tpl"}

{block name="content"}

<div class="payment-page">

    <h1>Przetwarzanie płatności...</h1>

    <div class="loader"></div>

    <p>Proszę czekać, trwa realizacja zamówienia</p>

</div>

<script>
    setTimeout(() => {
        window.location.href = "/Praktyki-2-master/?page=cart/thankyou";
    }, 2000);
</script>

{/block}
