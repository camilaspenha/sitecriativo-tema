<?php
  define( 'FORM_URL' , get_template_directory_uri() . '/assets/forms/contact.php');
?>
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>orçamento</h2>
      <p>entre em contato</p>
    </div>
    <div class="row mt-5">

      <div class="col-lg-4">
        <div class="info">
          <div class="address">
            <i class="bi bi-envelope"></i>
            <h4>E-mail:</h4>
            <p><a itle="Link para Enviar um E-mail" href=""><?= get_theme_mod('social-email') ?></a></p>
          </div>
          <div class="phone">
            <i class="bi bi-whatsapp"></i>
            <h4>Whatsapp:</h4>
            <p><a target="_blank" title="Abre Página Externa - Whatsapp Web" href="<?= get_theme_mod('social-whatsapp-api') ?>">
              <?= get_theme_mod('social-whatsapp') ?>
            </a></p>
          </div>
        </div>

      </div>

      <div class="col-lg-8 mt-5 mt-lg-0">
        <form action="<?= FORM_URL ?>" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-xl-4">
              <div class="form-group mt-3 mt-xl-0">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nome" required>
              </div>
            </div>
            <div class="col-xl-5">
              <div class="form-group mt-3 mt-xl-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>
              </div>
            </div>
            <div class="col-xl-3">
              <div class="form-group mt-3 mt-xl-0">
                <input type="text" class="form-control" name="phone" id="phone" data-js="input" placeholder="Telefone">
              </div>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea id="message" class="form-control" name="message" rows="5" placeholder="Messagem"></textarea>
          </div>
          <div class="row">
            <div class="col-md-8  d-flex flex-column d-md-block align-items-center my-3 my-md-0">
              <!--
                <div class="g-recaptcha" data-sitekey="6Le_Pv0pAAAAAEPiTFeF3FjE5KajW9xNhF_sW8kZ"></div>
              -->
            </div>
            <div class="col-md-4 d-flex flex-column justify-content-center">
              <button class="btn d-flex justify-content-around" type="submit">
                Solicitar Orçamento
                <span class="loading"></span>
              </button></div>
          </div>
          <div class="mt-5">
            <div class="alert alert-danger error-message"></div>
            <div class="sent-message">
               Mensagem enviada. Em breve retornaremos seu contato, obrigada!
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>