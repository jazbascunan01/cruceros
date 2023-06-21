{include file="header.tpl"}

<div class="container">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="bg-dark p-4 rounded mt-5 mb-5">
                <h2 class="text-white mb-4">Añadir un tour</h2>
                <form action="ConfirmarAgregar" method="POST" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label for="destino" class="form-label text-white">Destino</label>
                        <input name="destino" type="text" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="crucero" class="form-label text-white">Crucero:</label>
                        <select name="crucero" class="form-select" required>
                            {foreach from=$cruceros item=crucero}
                                <option value="{$crucero->ID}">{$crucero->nombre}</option>
                            {/foreach}
                        </select>
                        
                    </div>

                    <div class="mb-3">
                        <label for="fecha_salida" class="form-label text-white">Fecha de salida</label>
                        <input name="fecha_salida" type="date" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="precio" class="form-label text-white">Precio</label>
                        <input name="precio" type="number" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="descripcion" class="form-label text-white">Descripción</label>
                        <textarea name="descripcion" class="form-control" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="detalles" class="form-label text-white">Detalles</label>
                        <textarea name="detalles" class="form-control" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="imagen" class="form-label text-white">Imagen 1</label>
                        <input type="file" name="imagen" class="form-control-file form-control-sm" style="
                        color: white;" accept="image/*" required>
                    </div>

                    <div class="mb-3">
                        <label for="imagen2" class="form-label text-white">Imagen 2</label>
                        <div class="input-group">
                            <input type="file" name="imagen2" class="form-control-file form-control-sm"
                                style="color: white;" accept="image/*" required>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-light">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{include file="footer.tpl"}