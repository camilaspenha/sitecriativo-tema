<?php
define( 'ASSETS' , get_template_directory_uri() . '/assets');
$img_url = $args['about_image']['url'] ? $args['about_image']['url'] : ASSETS . '/img/about.svg';
?>
<section id="about" class="about">
  <div class="container" data-aos="fade-up">
    <div class="row">
      <div class="col-lg-6 p-lg-5 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
        <img src="<?= $img_url ?>" class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 pt-4 p-lg-5 order-2 order-lg-1 content d-flex flex-column justify-content-center" data-aos="fade-right" data-aos-delay="100">
        <div>
          <div class="section-title">
            <h2><?= $args['about_title'] ?></h2>
            <p><?= $args['about_title_description'] ?></p>
            <h4 class="py-4"><?= $args['about_description'] ?></h4>
          </div>              
        </div>
      </div>
    </div>
  </div>
</section>