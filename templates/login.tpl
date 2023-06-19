{include 'templates/header.tpl'}
<div class="content d-flex justify-content-center align-items-center">
    <div class="alert alert-dismissible bg-dark text-white text-center shadow-lg" style="max-width: 800px; width: 100%; margin: 50px auto; padding: 60px;">
        <h3 class="text-white mb-5">Inicie sesión para continuar</h3>
        <form action="verify" method="POST">
            <div class="form-group mb-5">
                <label class="text-white h4">Usuario (email)</label>
                <input type="email" name="username" class="form-control form-control-lg" placeholder="Ingrese email">
            </div>
            <div class="form-group mb-5">
                <label class="text-white h4">Password</label>
                <input type="password" name="password" class="form-control form-control-lg" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary btn-lg">Ingresar</button>
        </form>
    </div>
</div>
{include 'templates/footer.tpl'}
