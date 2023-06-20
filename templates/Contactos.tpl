{include file="header.tpl"}
<article class="contenido">
    <article class="primer_imagen_de_fondo" id="contactos">
        <h2>Contacto</h2>
    </article>
    <h3>¡Trabajemos Juntos!</h3>
    <p>Si deseas consultar mayor información sobre nuestros servicios o tienes alguna duda al respecto, no dudes en
        solicitar una consultoría gratuita y uno de nuestros asesores te contactará a la brevedad
    </p>
    <article class="gran_container">
        <article class="contenedor" id="contacto">
            <!--api de FormSubmit para permitir enviar el formulario a un correo electronico-->
            <form id="form_cargar_datos" action="https://formsubmit.co/oceandream01ok@gmail.com" method="post">
                <label for="Nombre">Nombre</label>
                <input type="text" name="name">

                <label for="email">Correo Electrónico</label>
                <input type="email" name="email">

                <label for="comments">Comentarios</label>
                <textarea name="comments" cols="15" rows="5"></textarea>


                <button type="submit" value="Enviar">Enviar</button>

                <input type="hidden" name="_next"
                    value="{BASE_URL}Contactos">
                <input type="hidden" name="_captcha" value="false">
            </form>
        </article>


        <article class="contenedor_redes">
            <h4 class="contactarnos">Si lo prefieres puedes contactarnos directamente!!!</h4>
            <section class="redes_sociales">
                <img class="red_social" src="images/40316.png" alt="logo de telefono">
                <p class="red">+54-9-2262-353733</p>
            </section>
            <section class="redes_sociales">
                <img class="red_social" src="images/5a4e2ef62da5ad73df7efe6e.png" alt="logo de whatsapp">
                <a href="https://wa.me/5492262353733">Enviar WhatsApp</a>
            </section>
            <section class="redes_sociales">
                <img class="red_social" id="gmail" src="images/60543.png" alt="logo de gmail">
                <a href="mailto:oceandream01ok@gmail.com@gmail.com">Enviar correo electrónico</a>
            </section>
            <section class="redes_sociales">
                <img class="red_social" src="images/20673.png" alt="logo de facebook">
                <a href="https://www.facebook.com/profile.php?id=100094097671878">ODcruceros OceanDream</a>
            </section>
            <section class="redes_sociales">
                <img class="red_social" src="images/87390.png" alt="logo de instagram">
                <a href="https://www.instagram.com/oceandreamcruceros/">@oceandreamcruceros</a>
            </section>
            <section class="redes_sociales">
                <img class="red_social" src="images/81725.png" alt="logo de twiter">
                <a href="https://twitter.com/oceandream01ok">@oceandream01ok</a>
            </section>
            <section class="redes_sociales">
                <img class="red_social" src="images/619.png" alt="logo de maps">
                <a>72 nº 3766</a>
            </section>
        </article>
    </article>

    <h3>Puedes visitarnos en nuestro local y nuestros guías te ayudaran a hacer realidad tu sueño de viajar</h3>
    <section class="ubicacion">
        <div id="map"></div>
    </section>
</article>
{include file="footer.tpl"}