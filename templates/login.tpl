{include 'templates/header.tpl'}
<div class="container">
    <form action="verify" method="POST" class="col-md-4 offset-md-4 mt-4">


        <div class="form-group">
            <label>Usuario (email)</label>
            <input type="email" name="username" class="form-control" placeholder="Ingrese email">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password">
        </div>



        <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>

</div>
{include 'templates/footer.tpl'}