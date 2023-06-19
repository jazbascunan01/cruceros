{include file="header.tpl"}
<div class="content">
    <h2>Está seguro que quiere eliminar el crucero numero {$id}?</h2>
    <h3>AVISO: se eliminarán también los tours asignados al crucero.</h3>
    <a href="{BASE_URL}deleteCruceroConfirm/{$id}">Sí, eliminar.</a>
    <a href="{BASE_URL}AdministrarCruceros">Cancelar</a>
</div>
{include file="footer.tpl"}