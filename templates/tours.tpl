{include file="header.tpl"}
<article class="recuadros">
{foreach from=$tours item=$tour key=$key}
    <section class="recuadro">
        <img class="foto_menu" src={$tour->img1} alt="Paisaje de montañas">
        <a class="link_tour" type="submit" href="tour?id={$key}"><h4 class="link_tour">{$tour->destino}</h4></a>
        <p>{$tour->descripcion}</p>
        <a class="link_tour" type="submit" href="tour?id={$key}">Leer mas</a>
    </section>
{{/foreach}}

</article>
{include file="footer.tpl"}