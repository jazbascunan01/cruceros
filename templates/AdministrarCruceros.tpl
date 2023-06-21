{include file="header.tpl"}
<h2>Cruceros</h2>
<section class="adminagregartour">
    <form action="AgregarCrucero">
        <button class="buttonadmin" type="submit">
            <h4>Añadir un crucero</h4>
        </button>
</section>
</form>
<article class="recuadros" id="recuadrosadmin">


    {foreach from=$cruceros item=$crucero}
        <section class="recuadroadmin">
            <h2 class="link_tour">{$crucero->nombre}</h2>

            <section class="imagesadmin">
                <img class="foto_menu_admin" src={$crucero->img1}>
                <img class="foto_menu_admin" src={$crucero->img2}>
            </section>
            <h6>Tours que ofrece:
                <ul>
                    {foreach $tours as $tour}

                        {if $tour->id_crucero == $crucero->ID}
                            <li>{$tour->destino}</li>
                        {/if}
                    {/foreach}
                </ul>
            </h6>
            <h6>Compañía: {$crucero->compania} </h6>
            <h6>Capacidad: {$crucero->capacidad} </h6>
            <h6>Origen: {$crucero->origen}</h6>
            <h6>Detalles: {$crucero->descripcion} </h6>
            <h6>Detalles: {$crucero->detalles} </h6>
            <section class="buttons_admin">
                <button class="buttonadmin" type="submit"><a href="{BASE_URL}eliminarCrucero/{$crucero->ID}"><img class="logo_nav" id="btnadmin"
                            src="{BASE_URL}images/logo_borrar.png" alt="logo borrar"></a></button>
                <button class="buttonadmin" type="submit"><a href="{BASE_URL}editarCrucero/{$crucero->ID}"><img class="logo_nav" id="btnadmin"
                            src="{BASE_URL}images/logo_editar.png" alt="logo editar"></a></button>
            </section>

        </section>
    {{/foreach}}

</article>
{include file="footer.tpl"}