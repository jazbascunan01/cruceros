{include file="header.tpl"}
<section class="tour">
    <h2>{$tour->destino}</h2>
    <div class="fotos_destino_tour">
        <img class="foto_1tour" src="{$tour->img1}" alt="imagen del destino">
        <img class="foto_1tour" src="{$tour->img2}" alt="imagen del destino">
    </div>

    <h6 class="tour_detalles">{$tour->detalles}</h6>
    <h2>Acerca del viaje...</h2>
    <h6 class="tour_detalles">
        El tour sale el día {$tour->fecha_salida}. En el crucero {$crucero->nombre} de la compañía {$crucero->compania}
        a un increible costo de ${$tour->precio} por persona.
        Este crucero tiene una capacidad de {$crucero->capacidad} tripulantes. Sale desde {$crucero->origen} y va hacia 
        {$tour->destino}
    </h6>
    <div class="fotos_destino_tour">
    <img class="foto_1tour" src="{$crucero->img1}" alt="imagen del destino">
    <img class="foto_1tour" src="{$crucero->img2}" alt="imagen del destino">
</div>
</section>

</main>
{include file="footer.tpl"}