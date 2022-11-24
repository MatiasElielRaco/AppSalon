<h1 class="nombre-pagina">Reestablece tu Contraseña</h1>
<p class="descripcion-pagina">Completá los datos</p>

<?php include_once __DIR__ . "/../templates/alertas.php"; ?>

<form action="/olvide" class="formaulario" method="POST">

    <div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Tu Email" name="email">
    </div>

    <input type="submit" class="boton" value="Reestablecer Contraseña">

</form>

    <div class="acciones">
        <a href="/">¿Ya tenés una cuenta? Iniciar Sesión</a>
        <a href="/crear-cuenta">¿No tenés cuenta? Crear Cuenta</a>
    </div>