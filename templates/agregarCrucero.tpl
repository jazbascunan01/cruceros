{include file="header.tpl"}
<h2>Añadir un crucero</h2>
<article class="recuadros" id="recuadrosadmin">
    <form action="ConfirmarAgregarCrucero" method="POST">

        <div class="row">
            <div>
                <div class="form-group">
                    <label>Nombre</label>
                    <input name="nombre" type="text" class="form-control">
                </div>
            </div>
            <div>

                <div class="form-group">
                    <label>Compañia</label>
                    <input name="compania" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Capacidad</label>
                    <input name="capacidad" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Origen</label>
                    <input name="origen" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Imagen</label>
                    <input name="img1" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Imagen</label>
                    <input name="img2" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Descripcion</label>
                    <textarea name="descripcion" class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label>Detalles</label>
                    <textarea name="detalles" class="form-control" rows="3"></textarea>
                </div>
            </div>
        </div>



        <button type="submit" class="btn btn-primary">Guardar</button>

    </form>

</article>
{include file="footer.tpl"}