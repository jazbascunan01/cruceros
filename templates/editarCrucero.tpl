{include file="header.tpl"}

<div class="container">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="bg-dark p-4 rounded mt-5 mb-5">
                <h2 class="text-white mb-4">Editar</h2>
                <form action="{BASE_URL}editarCruceros/{$crucero->ID}" method="POST">

                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="nombre" class="text-white">Nombre</label>
                                <input name="nombre" type="text" class="form-control" value="{$crucero->nombre}">
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="compania" class="text-white">Compañia</label>
                                <input name="compania" type="text" class="form-control" value="{$crucero->compania}">
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="capacidad" class="text-white">Capacidad</label>
                                <input name="capacidad" type="int" class="form-control" value="{$crucero->capacidad}">
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="origen" class="text-white">Origen</label>
                                <input name="origen" type="text" class="form-control" value="{$crucero->origen}">
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="img1" class="text-white">Imagen 1</label>
                                <input name="img1" type="text" class="form-control" value="{$crucero->img1}">
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="img2" class="text-white">Imagen 2</label>
                                <input name="img2" type="text" class="form-control" value="{$crucero->img2}">
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="descripcion" class="text-white">Descripción</label>
                                <textarea name="descripcion" class="form-control" rows="3">{$crucero->descripcion}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="detalles" class="text-white">Detalles</label>
                                <textarea name="detalles" class="form-control" rows="3">{$crucero->detalles}</textarea>
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
