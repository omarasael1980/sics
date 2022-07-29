<?php require 'app/views/modules/header.php';?>
<!-- body  -->
<div class="container">
    <div class="row">
        <div class="col-3">
            <!--Login-->
            <form action="" autocomplete="off">
                <div class="form-group">
                    <input class="form-control" type="text" name="username" placeholder="Usuario">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Contraseña">
                </div>
                <button class="btn btn-primary" type="submit">Entrar</button>
            </form>
        </div>
        <div class="col-9"></div>
    </div>
</div>

<?php require 'app/views/modules/footer.php';?>