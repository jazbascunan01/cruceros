{include file="header.tpl"}
<form method="get" action="filtrar">
    <label for="crucero">Seleccionar Crucero:</label>
    <select name="crucero" id="crucero">
        {foreach from=$cruceros item=crucero}
            <option value="{$crucero->ID}">{$crucero->nombre}</option>
        {/foreach}
    </select>

    <button type="submit">Filtrar</button>
</form>
<article class="recuadros">

    {foreach from=$tours item=$tour}
        <section class="recuadro">
            <img class="foto_menu" src={$tour->img1} alt="Paisaje de montañas">
            {$tour->ID}
            <a class="link_tour" type="submit" href="tour?id={$tour->ID}">
                <h4 class="link_tour">{$tour->destino}</h4>
            </a>
            <p>{$tour->descripcion}</p>
            <a class="link_tour" type="submit" href="tour?id={$tour->ID}">Leer mas</a>
        </section>
    {{/foreach}}

</article>
{include file="footer.tpl"}