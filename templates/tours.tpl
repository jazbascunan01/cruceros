{include file="header.tpl"}
<article class="recuadros">
{foreach from=$tours item=$tour}

    <section class="recuadro">
        <img class="foto_menu" src={$tour->img1} alt="Paisaje de montañas">
        <h4>{$tour->destino}</h4>
        <p>{$tour->descripcion}
        </p>
    </section>
{{/foreach}}

</article>
{include file="footer.tpl"}