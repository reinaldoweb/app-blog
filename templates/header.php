<?php 
include_once("helpers/url.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog R1WebDigital</title>
  <!-- ESTILOS DO PROJETO -->
  <link rel="stylesheet" href="<?php $BASE_URL?>css/style.css">
  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <a href=" <?php $BASE_URL ?> " id="LOGO">
  <img src="<?php $BASE_URL ?>img/logo.svg" alt=""></a>

  <nav>
    <ul id="navbar">
      <li> <a href="<? $BASE_URL ?>index.php">Home</a></li>
      <li> <a href="#">Categorias</a></li>
      <li> <a href="<? $BASE_URL ?>">Sobre</a></li>
      <li> <a href="<? $BASE_URL ?>contato.php">Contato</a></li>
    </ul>
  </nav>
  </header>