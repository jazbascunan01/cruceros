{include file="header.tpl"}
<h2>Editar</h2>
<article class="recuadros" id="recuadrosadmin">
    <form action="{BASE_URL}editarCruceros/{$crucero->ID}" method="POST">

        <div class="row">
            <div>
                <div class="form-group">
                    <label>Nombre</label>
                    <input name="nombre" type="text" class="form-control" value="{$crucero->nombre}">
                </div>
            </div>
            <div>

                <div class="form-group">
                    <label>Compañia</label>
                    <input name="compania" type="text" class="form-control" value={$crucero->compania}>
                </div>
                <div class="form-group">
                    <label>capacidad</label>
                    <input name="capacidad" type="int" class="form-control" value={$crucero->capacidad}>
                </div>
                <div class="form-group">
                    <label>Origen</label>
                    <input name="origen" type="text" class="form-control" value={$crucero->origen}>
                </div>
                <div class="form-group">
                    <label>Imagen</label>
                    <input name="img1" type="text" class="form-control" value="{$crucero->img1}">
                </div>
                <div class="form-group">
                    <label>Imagen</label>
                    <input name="img2" type="text" class="form-control" value={$crucero->img2}>
                </div>
                <div class="form-group">
                    <label>Descripcion</label>
                    <textarea name="descripcion" class="form-control" rows="3">{$crucero->descripcion}</textarea>
                </div>
                <div class="form-group">
                    <label>Detalles</label>
                    <textarea name="detalles" class="form-control" rows="3">{$crucero->detalles}</textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</article>
{include file="footer.tpl"}