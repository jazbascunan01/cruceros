{include file="header.tpl"}

<div class="container">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="bg-dark p-4 rounded mt-5 mb-5">
                <h2 class="text-white mb-4">Añadir un crucero</h2>
                <form action="ConfirmarAgregarCrucero" method="POST" enctype="multipart/form-data">

                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="nombre" class="text-white">Nombre</label>
                                <input name="nombre" type="text" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="compania" class="text-white">Compañia</label>
                                <input name="compania" type="text" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="capacidad" class="text-white">Capacidad</label>
                                <input name="capacidad" type="text" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="origen" class="text-white">Origen</label>
                                <input name="origen" type="text" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="imagen" class="text-white">Imagen 1</label>
                                <input type="file" name="imagen" class="form-control-file form-control-sm" accept="image/*" style="color: white;" required>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="imagen2" class="text-white">Imagen 2</label>
                                <div class="input-group">
                                    <input type="file" name="imagen2" class="form-control-file form-control-sm" accept="image/*" style="color: white;" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="descripcion" class="text-white">Descripción</label>
                                <textarea name="descripcion" class="form-control" rows="3" required></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="detalles" class="text-white">Detalles</label>
                                <textarea name="detalles" class="form-control" rows="3" required></textarea>
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
