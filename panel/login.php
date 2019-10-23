<div class="card shadow center mx-auto mt-5" style="width: 18rem;">
    <div class="card-header">
        Iniciar sesión
    </div>


    <form action="validar_usuario.php" method="post" enctype="multipart/form-data" class="p-3" id="former1">
        <div class="form-group">
            <label for="usuario">Nombre:</label>
            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese su nombre aquí...">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese su contraseña aquí...">
        </div>
        
        <input type="hidden" name="url_destino" value="<?php echo $_SERVER['PHP_SELF']; ?>">
        
        <button type="submit" class="btn btn-success" onclick="document.getElementById('former1').submit()">Entrar</button>
    </form>

</div>