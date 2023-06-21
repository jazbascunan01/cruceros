{include file="header.tpl"}
<div id="content">
    <article class="contenido">
        <!--gran contenedor para  todo el contenido de la pagina web-->
        <article class="primer_imagen_de_fondo">
            <h2>Infórmate acerca de viajes con nuestros expertos</h2>
            <!--fondo de chica con remo-->
        </article>

        <article class="fotos_de_vacaciones">
            <h3 class="titulo_corto">Empezá a disfrutar ahora de tu viaje comprando con el mejor precio y la mejor
                financiación</h3>
            <section class="contenedor_imagenes">
                <figure class="contenedor_fig">
                    <img class="anterior" id="anterior" src="{BASE_URL}images/318477.png" alt="Botón de anterior">
                </figure>
                <figure class="image">
                    <img class="imag" id="imag" src="{BASE_URL}images/imagen0.jpg" alt="Familia en silla aérea">
                </figure>
                <figure class="contenedor_fig">
                    <img class="siguiente" id="siguiente" src="{BASE_URL}images/318476.png" alt="Botón de siguiente">
                </figure>
            </section>

            <section class="galeria">
                <!--imagenes una al lado de la otra tipo galería-->
                <figure class="imagenes">
                    <img class="imagen" src="{BASE_URL}images/imagen0.jpg"/>
                </figure>
                <figure class="imagenes">
                    <img class="imagen" src="{BASE_URL}images/imagen1.jpg"/>
                </figure>
                <figure class="imagenes">
                    <img class="imagen" src="{BASE_URL}images/imagen2.jpg"/>
                </figure>
                <figure class="imagenes">
                    <img class="imagen" src="{BASE_URL}images/imagen3.jpg"/>
                </figure>
                <figure class="imagenes">
                    <img class="imagen" src="{BASE_URL}images/imagen4.jpg"/>
                </figure>
                <figure class="imagenes">
                    <img class="imagen" src="{BASE_URL}images/imagen5.jpg"/>
                </figure>
            </section>
        </article>
        <article class="servicios">

            <h3 class="titulo_largo">
                ¡Descubre nuestra increíble oferta de cruceros! En Ocean Dream, te ofrecemos una amplia selección de
                emocionantes travesías marítimas. Sumérgete en una experiencia única mientras exploras destinos
                fascinantes a bordo de nuestros lujosos cruceros.
            </h3>
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

    </article>
</div>
{include file="footer.tpl"}