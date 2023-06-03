{include file="header.tpl"}
<div id="content">
    <article class="contenido">

        <article class="recuadros">
            {foreach from=$cruceros item=$crucero}

                <section class="recuadro">
                    <img class="foto_menu" src={$crucero->img1} alt="Paisaje de montañas">
                    <h4>{$crucero->nombre}</h4>
                    <p>{$crucero->descripcion}
                    </p>
                </section>
            {{/foreach}}

        </article>
    </article>
</div>
{include file="footer.tpl"}