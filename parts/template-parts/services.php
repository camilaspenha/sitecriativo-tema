<section id="services" class="services">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2><?= $args['services_title'] ?></h2>
      <p><?= $args['services_title_description'] ?></p>
    </div>

    <div class="row">

      <?php foreach($args['services_cards'] as $card): ?>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">

          <div class="icon-box">
            <div class="icon"><?= $card['icon'] ?></div>
              <h4><?= $card['title'] ?></h4>
              <p><?= $card['description'] ?></p>
                <?php
                  /**
                  * Button Outline Secondary
                  */
                  $button_args = array(
                    'label' => $card['label'],
                    'link' =>   $card['link'],
                  );

                  if($card['action']) {
                    $button_args['action'] = $card['action'];
                  }
                  get_template_part( 'parts/template-parts/btn-outline-secondary','',$button_args);
                ?>
            </div>
          </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>