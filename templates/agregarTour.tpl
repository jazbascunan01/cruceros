{include file="header.tpl"}
<h2>Añadir un tour</h2>
<article class="recuadros" id="recuadrosadmin">
    <form action="ConfirmarAgregar" method="POST" >

        <div class="row">
            <div>
                <div class="form-group">
                    <label>Destino</label>
                    <input name="destino" type="text" class="form-control">
                </div>
            </div>
            <div>
                <div class="form-group">
                    <label>Crucero: </label>
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
                    <input name="precio" type="float" class="form-control">
                </div>
                <div class="form-group">
                    <label>Descripcion</label>
                    <textarea name="descripcion" class="form-control" rows="3"></textarea>
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
                <label>Detalles</label>
                <textarea name="detalles" class="form-control" rows="3"></textarea>
            </div>
            </div>
        </div>



        <button type="submit" class="btn btn-primary">Guardar</button>

    </form>

</article>
{include file="footer.tpl"}