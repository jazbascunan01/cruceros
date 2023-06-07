{include file="header.tpl"}
<h2>Tours</h2>
<section class="adminagregartour">
    <button class="buttonadmin" type="submit">
        <h4>Añadir un tour</h4>
    </button>
</section>
<article class="recuadros" id="recuadrosadmin">


    {foreach from=$tours item=$tour}
    <section class="recuadroadmin">
        <h2 class="link_tour">{$tour->destino}</h2>

        <section class="imagesadmin">
            <img class="foto_menu_admin" src={$tour->img1} alt="Paisaje de montañas">
            <img class="foto_menu_admin" src={$tour->img2} alt="Paisaje de montañas">
        </section>
        <h6>ID del crucero: {$tour->id_crucero} </h6>
        </a>
        <h6>Fecha de salida: {$tour->fecha_salida} </h6>
        <h6>Precio: {$tour->precio} </h6>
        <h6>Descripcion: {$tour->descripcion}</h6>
        <h6>Detalles: {$tour->detalles} </h6>
        <section class="buttons_admin">
            <button class="buttonadmin" type="submit"><img class="logo_nav" id="btnadmin" src="images/logo_borrar.png"
                    alt="logo borrar"></button>
            <button class="buttonadmin" type="submit"><img class="logo_nav" id="btnadmin" src="images/logo_editar.png"
                    alt="logo editar"></button>
        </section>

    </section>
    {{/foreach}}

</article>
{include file="footer.tpl"}