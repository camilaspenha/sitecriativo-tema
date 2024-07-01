<?php
/**
 * Title: Footer with colophon, 4 columns
 * Slug: sitecriativo/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
define( 'ASSETS' , get_template_directory_uri() . '/assets');
?>
<footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-md-6">
              <div class="footer-info">
                <img src="<?= ASSETS . '/img/logo/logo_alt_w.svg' ?>" alt="Logo Branco do Site Criativo | Empresa de Criação de Sites para Pequenas Empresas e Profissionais Autônomos" class="img-fluid logo-w" width="180px">
                <h2 class="my-4">Desenvolvimento e Web Design </h2>
                <p><strong>Telefone:</strong> <?= get_theme_mod('social-whatsapp') ?></p>
                <p><strong>E-mail:</strong> <?= get_theme_mod('social-email') ?></p>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
              <h4>Links</h4>
                <?php
                  $args = array(
                    'menu' => 'footer',
                    'container' => 'ul',
                    'before' => '<i class="bx bx-chevron-right"></i>',
                    'theme_location' => 'my-footer-menu-links',
                    'menu_class' => '',
                  );
                  wp_nav_menu( $args );
                ?> 
            </div>
            <div class="col-lg-3">
              <h4>Desenvolvido por</h4>
              <div class="team">
                <div class="member d-lg-flex flex-column">
                  <div class="member-img">
                    <img src="<?= ASSETS . '/img/profile.jpg' ?>" class="img-fluid" alt="" width="90px">
                  </div>
                  <div class="member-info">
                    <h6 class="mt-3 p-0">Camila Penha</h6>
                    <span>Desenvolvedora e Web Designer</span>

                    <div class="social-links mt-3">
                      <a title="Abre Página Externa - Github" target="_blank" href="<?= get_theme_mod('social-github') ?>" class="github"><i class="bx bxl-github"></i></a>
                      <a title="Abre Página Externa - LinkedIn" target="_blank" href="<?= get_theme_mod('social-linkedin') ?>" class="google-plus"><i class="bx bxl-linkedin"></i></a>
                      <a target="_blank" title="Abre Página Externa - Whatsapp Web" href="<?= get_theme_mod('social-whatsapp-api') ?>" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
                    </div>
                    
                  </div>
                </div>
              </div>
              
          </div>

            <div class="col-lg-4 col-md-6 ">
              <h4>Newsletter</h4>
              <p>Inscreva-se para acompanhar as novidades sobre nossos projetos!</p>
              
              <form action="<?= ASSETS. '/forms/newsletter.php' ?>" method="post" role="form" id="news" class="php-email-form">


                <div class="form-group">
                  <div class="row g-lg-0">
                    <div class="col-lg-8 d-flex flex-column justify-content-center">
                      <input type="email" name="email" class="form-control h-100 my-3 my-lg-0" placeholder="E-mail" required>
                    </div>
                    <div class="col-lg-4 d-flex flex-column justify-content-center">
                      <button class="btn d-flex justify-content-around h-100" type="submit">Inscrever 
                        <span class="loading"></span>
                      </button>
                    </div>
                  </div>
                </div>

                <div class="mt-5">
                  <div class="alert alert-danger error-message"></div>
                  <div class="sent-message">
                    Inscrição realizada com sucesso, obrigada! 
                  </div>
                </div>
               
              </form>
            </div>
          </div>
        </div>
      </div>

      
      <div class="container">
        <div class="copyright">
          &copy; 2024 <strong><span> <a href="<?= get_bloginfo('url') ?>">Site Criativo</a> </span></strong>
        </div>
      </div>
    </footer>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS -->
    <script src="<?= ASSETS . '/vendor/aos/aos.js' ?>"></script>
    <script src="<?= ASSETS . '/vendor/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
    <script src="<?= ASSETS . '/vendor/swiper/swiper-bundle.min.js' ?>"></script>
    <script src="<?= ASSETS . '/vendor/php-email-form/validate.js' ?>"></script>

    <!-- Main JS  -->
    <script src="<?= ASSETS . '/js/main.js' ?>"></script>

  </body>
</html>