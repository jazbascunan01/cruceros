{include file="header.tpl"}

<form action="tourByCrucero" method="GET">
<select name="crucero_id">
    <option value="">Todos los cruceros</option>
    {if $cruceros}
        {foreach $cruceros as $crucero}
            <option value="{$crucero->ID}" {if $cruceroSeleccionado == $crucero->ID}selected{/if}>{$crucero->nombre}</option>
        {/foreach}
    {/if}
</select>

    <input type="submit" value="Mostrar Tours">
</form>


<article class="recuadros">
    {foreach from=$tours item=$tour}
        <section class="recuadro">
            <img class="foto_menu" src="{$tour->img1}" alt="Paisaje de montañas">
            {$tour->ID}
            <a class="link_tour" href="tour?id={$tour->ID}">
                <h4 class="link_tour">{$tour->destino}</h4>
            </a>
            <p>{$tour->descripcion}</p>
            <a class="link_tour" href="tour?id={$tour->ID}">Leer mas</a>
        </section>
    {/foreach}
</article>

{include file="footer.tpl"}
