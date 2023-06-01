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
                    <img class="anterior" id="anterior" src="images/318477.png" alt="Botón de anterior">
                </figure>
                <figure class="image">
                    <img class="imag" id="imag" src="images/imagen0.jpg" alt="Familia en silla aérea">
                </figure>
                <figure class="contenedor_fig">
                    <img class="siguiente" id="siguiente" src="images/318476.png" alt="Botón de siguiente">
                </figure>
            </section>

            <section class="galeria">
                <!--imagenes una al lado de la otra tipo galería-->
                <figure class="imagenes">
                    <img class="imagen" src="images/imagen0.jpg" alt="Familia en la nieve" />
                </figure>
                <figure class="imagenes">
                    <img class="imagen" src="images/imagen1.jpg" alt="Pareja conociendo lugares" />
                </figure>
                <figure class="imagenes">
                    <img class="imagen" src="images/imagen2.jpg" alt="Pareja en un lago" />
                </figure>
                <figure class="imagenes">
                    <img class="imagen" src="images/imagen3.jpg" alt="Amigas en la playa" />
                </figure>
                <figure class="imagenes">
                    <img class="imagen" src="images/imagen4.jpg" alt="Pareja en la playa" />
                </figure>
                <figure class="imagenes">
                    <img class="imagen" src="images/imagen5.jpg" alt="Hombre con un globo terraqueo" />
                </figure>
            </section>
        </article>
        <article class="servicios">

            <h3 class="titulo_largo">
                Conocé nuestra increíble oferta de vuelos, hoteles, paquetes turísticos, alquiler de autos, actividades,
                cruceros,
                trenes y seguros para tu viaje. Contamos con excelentes promociones a los mejores destinos para tus
                vacaciones.
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