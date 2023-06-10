{include file="header.tpl"}
<h2>Elija una opción</h2>
<article class="recuadros">
    <section class="recuadro">
        <img class="foto_menu_options" src={$imagen_crucero} alt="Paisaje de montañas">
        <a class="link_tour" type="submit" href="AdministrarCruceros">
            <h2 class="link_tour">{$cruceros}</h2>
        </a>
    </section>
    <section class="recuadro">
        <img class="foto_menu_options" src={$imagen_tours} alt="Paisaje de montañas">
        <a class="link_tour" type="submit" href="AdministrarTours">
            <h2 class="link_tour">{$tours}</h2>
        </a>
    </section>
</article>
{include file="footer.tpl"}