{include file="header.tpl"}
<div class="content d-flex justify-content-center align-items-center">
    <div class="alert alert-dismissible bg-dark text-white text-center" style="max-width: 400px; margin: 50px auto; padding-right: 16px;">
        <h4 class="alert-heading">¿Está seguro que quiere eliminar el tour número {$id}?</h4>
        <div class="d-flex justify-content-center mt-4">
            <a href="{BASE_URL}deleteTourConfirm/{$id}" class="btn btn-danger me-2">Sí, eliminar</a>
            <a href="{BASE_URL}AdministrarTours" class="btn btn-secondary">Cancelar</a>
        </div>
    </div>
</div>
{include file="footer.tpl"}
