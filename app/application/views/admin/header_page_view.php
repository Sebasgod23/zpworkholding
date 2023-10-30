<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title><?= $titulo ?></title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- icono Superior-->
  <link href="<?= base_url() ?>static/images/indice.ico" rel="shortcut icon">
  <link rel="stylesheet" href="<?= base_url() ?>static/fontawesome/css/all.min.css">
  <!--   ESTILOS DE BOOSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <!-- ICONOS BOOSTRAP -->

  <!-- CICLO IF PARA colorcar diseños CSS -->
  <?php
  if (isset($css)) :
    foreach ($css as $estilos) :
  ?>
      <link rel="stylesheet" href="<?= base_url() ?>static/css/<?= $estilos ?>.css">
  <?php
    endforeach;
  endif;
  ?>

  <script src="<?= base_url() ?>static/js/jquery-3.6.1.min.js"></script>
  <script src="<?= base_url() ?>static/js/mensajes.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  
  <!-- <script src="<?= base_url() ?>static/js/librerias/bootstrap.min.js" ></script>
  <script src="<?= base_url() ?>static/js/librerias/bootstrap.bundle.min.js" ></script> -->
  <!-- <link href="<?= base_url() ?>static/css/librerias/bootstrap-css/css/bootstrap.css" rel="stylesheet" >
  <link rel="stylesheet" href="<?= base_url() ?>static/css/librerias/bootstrap-icons/font/bootstrap-icons.css"> -->

  <!-- CICLO IF PARA COLOCAR ARCHIVOS JS -->
  <?php
  if (isset($js)) :
    foreach ($js as $script) :
  ?>
      <script src="<?= base_url() ?>static/js/<?= $script ?>.js"></script>
  <?php
    endforeach;
  endif;
  ?>
</head>

<body>
  <div id="mensaje" class="d-flex flex-column position-fixed" style="font-size: 12px; top: 8px; left: 36%; transform: translateX(-50%); z-index: 2000;"></div>