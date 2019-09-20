<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario contacto</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet" type='text/css'>
    
</head>
<body>
    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">

            <input type="text" class="form-control" id= "nombre" name="nombre" placeholder="Nombre:" value="<?php if (!$enviado && isset($nombre)) echo $nombre ?>">
            <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo:" value="<?php if (!$enviado && isset($correo)) echo $correo ?>">
            <textarea name="mensaje" class= "form-control" id="mensaje" placeholder="Mensaje"><?php if (!$enviado && isset($mensaje)) echo $mensaje ?></textarea>
            
            <input type="submit" name="submit" class="btn btn-primary" value="Enviar correo">

            <?php if (!empty($errores)): ?>
				<div class="alert error" role="alert">
					<?php echo $errores; ?>
				</div>
			<?php elseif($enviado) : ?>
				<div class="alert success" role="alert">
					<?php echo 'Enviado Correctamente'; ?>
				</div>
			<?php endif; ?>

        </form>
    </div>
</body>
</html>