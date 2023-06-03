{include file="header.tpl"}
<section class="tour">
    <h2>
        {$tour->destino}
    </h2>
    <img class="foto_1tour" src={$tour->img1} alt="imagen del destino">
    <img class="foto_1tour" src={$tour->img2} alt="imagen del destino">
    <h3>
        {$tour->detalles}
    </h3>
</section>

</main>
{include file="footer.tpl"}