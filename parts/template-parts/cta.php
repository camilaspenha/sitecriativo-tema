<section id="cta" class="cta">
  <div class="container" data-aos="zoom-in">

    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center p-4 p-lg-5 order-2 order-lg-1">
        <div class="text-center text-lg-start">
          <h3><?= $args['cta_title'] ?></h3>
          <h4><?= $args['cta_description'] ?></h4>
          <?php
          /**
          * Button Outline Light
          */
          $button_args = array(
            'label' => $args['cta_button_label'],
            'link' =>   $args['cta_button_url'],
          );
          get_template_part( 'parts/template-parts/btn-outline-light','',$button_args);
          ?>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 p-4 d-flex flex-column align-items-center">
        <?php if($args['cta_img']): ?>
          <img src="<?= $args['cta_img']?>" alt="" class="img-fluid" width="300px">
        <?php endif; ?>
      </div>
    </div>

  </div>
</section>