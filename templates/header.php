<?php 
include_once("helpers/url.php");
include_once("data/categories.php");
include_once("posts/posts.php");
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
    <a href="<?php $BASE_URL ?>index.php" id="logo">
  <img src="<?php $BASE_URL ?>img/logo.svg" alt=""></a>

  <nav>
    <ul id="navbar">
      <li> <a href="<?= $BASE_URL ?>index.php" class="nav-link">Home</a></li>
      <li> <a href="#" class="nav-link">Categorias</a></li>
      <li> <a href="<?= $BASE_URL ?>" class="nav-link">Sobre</a></li>
      <li> <a href="<?= $BASE_URL ?>contato.php" class="nav-link">Contato</a></li>
    </ul>
  </nav>
  </header>