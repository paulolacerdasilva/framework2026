<?php
include '../app/configuracao.php';
include '../app/Libraries/Rota.php';
include '../app/Libraries/Controller.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NAME ?> </title>
    <link rel="stylesheet" href="<?=URL?>/public/css/estilo.css"/>
</head>
<body>
    <?php
    $rotas = new Rota();
   // $rotas->url();
    ?>
</body>
</html>