<?php
use RaicesVivas\Config\Parameters;
$base = Parameters::$BASE_URL;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Página no encontrada | Raíces Vivas</title>
    <link rel="stylesheet" href="<?= $base ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $base ?>assets/style.css">
</head>
<body class="error-bg">
    <div class="error-card">
        <div class="error-icono"><i class="bi bi-compass"></i></div>
        <div class="error-numero">404</div>
        <div class="error-separador"></div>
        <p class="error-titulo">Página no encontrada</p>
        <p class="error-texto">
            El sendero que buscas no existe en la Sierra de Gredos.<br>
            Puede que la ruta haya cambiado o nunca haya existido.
        </p>
        <a href="<?= $base ?>index.php?controller=Index&action=showIndex" class="btn-volver">Volver al inicio</a>
    </div>
</body>
</html>