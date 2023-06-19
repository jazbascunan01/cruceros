{include file="header.tpl"}
<div class="content d-flex justify-content-center align-items-center">
    <div class="alert alert-dismissible bg-dark text-white text-center" style="max-width: 400px; margin: 50px auto; padding-right: 16px;">
        <h4 class="alert-heading">¿Está seguro que quiere eliminar el crucero número {$id}?</h4>
        <p class="mb-0">AVISO: se eliminarán también los tours asignados al crucero.</p>
        <div class="d-flex justify-content-center mt-4">
            <a href="{BASE_URL}deleteCruceroConfirm/{$id}" class="btn btn-danger me-2">Sí, eliminar</a>
            <a href="{BASE_URL}AdministrarCruceros" class="btn btn-secondary">Cancelar</a>
        </div>
    </div>
</div>
{include file="footer.tpl"}
