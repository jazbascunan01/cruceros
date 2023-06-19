{include file="header.tpl"}
<div id="content">
    <h2>Descubre nuestros emocionantes Tours</h2>
    <h4>Explora una amplia variedad de tours que te llevarán a destinos impresionantes. Sumérgete en nuevas experiencias, descubre culturas fascinantes y crea recuerdos inolvidables en tus viajes.</h4>

    <form method="get" action="filtrar" class="formfilter">
        <label class="labelfiltro" for="crucero">Seleccionar Crucero:</label>
        <select class="selectfiltro" name="crucero" id="crucero">
            {foreach from=$cruceros item=crucero}
                <option value="{$crucero->ID}">{$crucero->nombre}</option>
            {/foreach}
        </select>

        <button class="buttonfiltro" type="submit"><img class= "logo_nav" id= "btnfilter"src="images/6488674.png" alt="logo filtrar"></button>
    </form>
    
    <article class="recuadros">
        {foreach from=$tours item=$tour}
            <section class="recuadro">
                <img class="foto_menu" src={$tour->img1} alt="Paisaje de montañas">
                <a class="link_tour" type="submit" href="tour/{$tour->ID}">
                    <h4 class="link_tour">{$tour->destino}</h4>
                </a>
                <p>{$tour->descripcion}</p>
                <a class="link_tour" type="submit" href="tour/{$tour->ID}">Leer más</a>
            </section>
        {{/foreach}}
    </article>
</div>
{include file="footer.tpl"}
