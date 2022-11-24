<h1 class="nombre-pagina">Recuperar tu contraseña</h1>
<p class="descripcion-pagina">Modificá tu contraseña</p>

<?php include_once __DIR__ . "/../templates/alertas.php"; ?>

<?php if($error) return null; ?>
<form class="formulario" method="POST">
    
    <div class="campo">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Tu Nuevo Password" name="password">
    </div>
        <input type="submit" class="boton" value="Reestablecer contraseña">
</form>

<div class="acciones">
        <a href="/">¿Ya tenés una cuenta? Iniciar Sesión</a>
        <a href="/crear-cuenta">¿No tenés cuenta? Crear Cuenta</a>
    </div>