{include file="header.tpl"}
<article class="recuadros">

{foreach from=$tours item=$tour}
    <section class="recuadro">
        <img class="foto_menu" src={$tour->img1} alt="Paisaje de montañas">
        {$tour->ID}
        <a class="link_tour" type="submit" href="tour?id={$tour->ID}"><h4 class="link_tour">{$tour->destino}</h4></a>
        <p>{$tour->descripcion}</p>
        <a class="link_tour" type="submit" href="tour?id={$tour->ID}">Leer mas</a>
    </section>
{{/foreach}}

</article>
{include file="footer.tpl"}