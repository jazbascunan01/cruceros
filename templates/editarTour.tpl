{include file="header.tpl"}

<div class="container">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="bg-dark p-4 rounded mt-5 mb-5">
                <h2 class="text-white mb-4">Editar</h2>
                <form action="{BASE_URL}editarTour/{$tour->ID}" method="POST">

                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="destino" class="text-white">Destino</label>
                                <input name="destino" type="text" class="form-control" value="{$tour->destino}">
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="crucero" class="text-white">Crucero</label>
                                <select name="crucero" class="form-control">
                                    {foreach from=$cruceros item=crucero}
                                        <option value="{$crucero->ID}"{if $crucero->ID == {$tour->id_crucero}}selected{/if}>{$crucero->nombre}</option>
                                    {/foreach}
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="fecha_salida" class="text-white">Fecha de salida</label>
                                <input name="fecha_salida" type="date" class="form-control" value="{$tour->fecha_salida}">
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="precio" class="text-white">Precio</label>
                                <input name="precio" type="float" class="form-control" value="{$tour->precio}">
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="descripcion" class="text-white">Descripción</label>
                                <textarea name="descripcion" class="form-control" rows="3">{$tour->descripcion}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="img1" class="text-white">Imagen 1</label>
                                <input name="img1" type="text" class="form-control" value="{$tour->img1}">
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="img2" class="text-white">Imagen 2</label>
                                <input name="img2" type="text" class="form-control" value="{$tour->img2}">
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="detalles" class="text-white">Detalles</label>
                                <textarea name="detalles" class="form-control" rows="3">{$tour->detalles}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

{include file="footer.tpl"}
