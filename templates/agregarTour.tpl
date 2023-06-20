{include file="header.tpl"}
<h2>Añadir un tour</h2>
<article class="recuadros" id="recuadrosadmin">
    <form action="ConfirmarAgregar" method="POST" enctype="multipart/form-data">

        <div class="row">
            <div>
                <div class="form-group">
                    <label>Destino</label>
                    <input name="destino" type="text" class="form-control">
                </div>
            </div>
            <div>
                <div class="form-group">
                    <label>Crucero:</label>
                    <select name="crucero" class="form-control">
                        {foreach from=$cruceros item=crucero}
                            <option value="{$crucero->ID}">{$crucero->nombre}</option>
                        {/foreach}
                    </select>
                </div>

                <div class="form-group">
                    <label>Fecha de salida</label>
                    <input name="fecha_salida" type="date" class="form-control">
                </div>
                <div class="form-group">
                    <label>Precio</label>
                    <input name="precio" type="number" class="form-control">
                </div>
            </div>
            <div>
                <div class="form-group">
                    <label>Descripción</label>
                    <textarea name="descripcion" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Detalles</label>
                    <textarea name="detalles" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Imagen 1</label>
                    <input type="file" name="imagen" accept="image/*" required>
                </div>

                <div class="form-group">
                    <label>Imagen 2</label>
                    <input type="file" name="imagen2" accept="image/*" required>
                </div>
                <input type="submit" class="btn btn-success" value="Guardar">
            </div>
        </div>
    </form>
</article>
{include file="footer.tpl"}