{include file="header.tpl"}
<div id="content">
    <article class="contenido">

        <article class="recuadros">
            {foreach from=$cruceros item=$crucero}

                <section class="recuadro">
                    <img class="foto_menu" src={$crucero->img1} alt="Paisaje de montañas">
                    <a class="link_tour" type="submit" href="crucero?id={$crucero->ID}"><h4>{$crucero->nombre}</h4></a>
                    <p>{$crucero->descripcion}</p>
                    <a class="link_tour" type="submit" href="crucero?id={$crucero->ID}">Leer mas</a>
                </section>
            {{/foreach}}

        </article>
    </article>
</div>
{include file="footer.tpl"}