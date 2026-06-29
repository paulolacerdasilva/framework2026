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
    
    <link rel="stylesheet" href="<?=URL?>/public/bootstrap/css/bootstrap.min.css"/>
    <script src="<?=URL?>/public/boostrap/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
    include '../app/views/header.php';
    $rotas = new Rota();
    include '../app/views/footer.php';
   // $rotas->url();
    ?>
</body>
</html>