<?php
/**
 * Title: Header
 * Slug: sitecriativo/header
 * Categories: 
 * Viewport width: 1400
 */
 define( 'ASSETS' , get_template_directory_uri() . '/assets');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >

  <meta name="description" content="Empresa de Criação de Sites para Pequenas Empresas e Profissionais Autônomos">
  <meta name="keywords" content="Criação de Site, Web Design, Desenvolvimento Web, Meu Site, Quero um Site, Quero Criar um Site, Site Criativo, Como Fazer meu Site, Empresa de Criação de Site, Site Wordpress, Quero Criar meu Portfólio">
  
  <meta name="robots" content="index, follow">
  <meta name="author" content="Camila Penha - Web Designer e Desenvolvedora Web Front-End">

  <meta property="og:title" content="Site Criativo | Criação de Sites para Pequenas e Médias Empresas">
  <meta property="og:description" content="Empresa de Criação de Sites para Pequenas Empresas e Profissionais Autônomos">
  <meta property="og:image" content="<?= ASSETS . '/img/site_image.png' ?>">
  <meta property="og:url" content="">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Site Criativo | Criação de Sites para Pequenas e Médias Empresas">
  <meta name="twitter:description" content="Empresa de Criação de Sites para Pequenas Empresas e Profissionais Autônomos">
  <meta name="twitter:image" content="<?= ASSETS . '/img/site_image.png' ?>">

  <title>Site Criativo | Criação de Sites para Pequenas e Médias Empresas</title>

  <!-- Favicons -->
  <link href="<?= ASSETS . '/img/logo/icon.svg' ?>" rel="icon">
  <link href="<?= ASSETS . '/img/logo/icon.svg' ?>" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= ASSETS . '/vendor/aos/aos.css' ?>" rel="stylesheet">
  <link href="<?= ASSETS . '/vendor/bootstrap/css/bootstrap.min.css' ?>" rel="stylesheet">
  <link href="<?= ASSETS . '/vendor/bootstrap-icons/bootstrap-icons.css' ?>" rel="stylesheet">
  <link href="<?= ASSETS . '/vendor/boxicons/css/boxicons.min.css' ?>" rel="stylesheet">
  <link href="<?= ASSETS . '/vendor/remixicon/remixicon.css' ?>" rel="stylesheet">
  <link href="<?= ASSETS . '/vendor/swiper/swiper-bundle.min.css' ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= ASSETS . '/css/style.css' ?>" rel="stylesheet">

</head>
<body>
<?php
/**
 * Main Nav
 */
get_template_part( 'parts/template-parts/main-nav');