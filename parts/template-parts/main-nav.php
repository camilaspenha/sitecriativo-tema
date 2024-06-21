<?php
define( 'ASSETS' , get_template_directory_uri() . '/assets');
?>
<header id="header" class="fixed-top ">
  <div class="container d-flex align-items-center justify-content-lg-between">

    <a href="<?= get_bloginfo('url')?>" class="logo me-auto me-lg-0">
      <img src="<?= ASSETS . '/img/logo/logo_alt_w.svg' ?>" alt="Logo Branco do Site Criativo | Empresa de Criação de Sites para Pequenas Empresas e Profissionais Autônomos" class="img-fluid logo-w" width="180px">
      <img src="<?= ASSETS . '/img/logo/logo_alt.svg' ?>" alt="Logo do Site Criativo | Empresa de Criação de Sites para Pequenas Empresas e Profissionais Autônomos" class="img-fluid logo-default" width="180px">
    </a>

    <div class="d-flex align-items-center">
      <nav id="navbar" class="navbar order-last order-lg-0">
        <?php
          $args = array(
            'menu' => 'principal',
            'container' => 'ul',
            'theme_location' => 'my-custom-menu',
            'menu_class' => '',
          );
          wp_nav_menu( $args );
        ?> 
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

      <a href="#contact" class="get-started-btn scrollto mx-lg-4">
        Contato
      </a>
    </div>
    
  </div>
</header>