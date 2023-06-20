{include file="header.tpl"}
<h2>Añadir un crucero</h2>
<article class="recuadros" id="recuadrosadmin">
    <form action="ConfirmarAgregarCrucero" method="POST" enctype="multipart/form-data">

        <div class="row">
            <div>
                <div class="form-group">
                    <label>Nombre</label>
                    <input name="nombre" type="text" class="form-control" required>
                </div>
            </div>
            <div>

                <div class="form-group">
                    <label>Compañia</label>
                    <input name="compania" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Capacidad</label>
                    <input name="capacidad" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Origen</label>
                    <input name="origen" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Imagen 1</label>
                    <input type="file" name="imagen" accept="image/*" required>
                </div>

                <div class="form-group">
                    <label>Imagen 2</label>
                    <input type="file" name="imagen2" accept="image/*" required>
                </div>
                <div class="form-group">
                    <label>Descripcion</label>
                    <textarea name="descripcion" class="form-control" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label>Detalles</label>
                    <textarea name="detalles" class="form-control" rows="3" required></textarea>
                </div>
            </div>
        </div>



        <button type="submit" class="btn btn-primary">Guardar</button>

    </form>

</article>
{include file="footer.tpl"}