{include file="header.tpl"}
<div id="content">
    <article class="contenido">

    <h2>¡Descubre nuestros increíbles cruceros!</h2>
    <h4>Te invitamos a explorar una amplia selección de cruceros que te llevarán a destinos fascinantes alrededor del mundo. Disfruta de experiencias únicas y momentos inolvidables a bordo de nuestros lujosos barcos.</h4>

    <article class="recuadros">
        {foreach from=$cruceros item=$crucero}

            <section class="recuadro">
                <img class="foto_menu" src={$crucero->img1} alt="Paisaje de montañas">
                <a class="link_tour" type="submit" href="crucero?id={$crucero->ID}"><h4>{$crucero->nombre}</h4></a>
                <p>{$crucero->descripcion}</p>
                <a class="link_tour" type="submit" href="crucero?id={$crucero->ID}">Leer más</a>
            </section>
        {{/foreach}}

    </article>
    </article>
</div>
{include file="footer.tpl"}