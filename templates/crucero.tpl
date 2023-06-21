{include file="header.tpl"}
<section class="crucero">
    <h2>{$cruc->nombre}</h2>
    <div class="fotos_crucero">
        <img class="foto_1crucero" src="{$cruc->img1}" alt="imagen del crucero">
        <img class="foto_1crucero" src="{$cruc->img2}" alt="imagen del crucero">
    </div>
    <h6 class="crucero_detalles">
        {$cruc->detalles}
        <br>Este crucero pertenece a la compañia {$cruc->compania}, y parte desde {$cruc->origen}. Cuenta con una capacidad de
        {$cruc->capacidad} personas.
    </h6>

    <h2>Tours que ofrece el {$cruc->nombre}</h2>
    <article class="recuadros">

        {foreach from=$tours item=$tour}
            <section class="recuadro">
                <img class="foto_menu" src={$tour->img1} alt="Paisaje de montañas">
                <a class="link_tour" type="submit" href="{BASE_URL}tour/{$tour->ID}">
                    <h4 class="link_tour">{$tour->destino}</h4>
                </a>
                <p>{$tour->descripcion}</p>
                <a class="link_tour" type="submit" href="{BASE_URL}tour/{$tour->ID}">Leer mas</a>
            </section>
        {{/foreach}}

    </article>
</section>

</main>
{include file="footer.tpl"}