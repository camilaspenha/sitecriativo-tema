<section id="portfolio" class="portfolio bg-dark">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2><?= $args['portfolio_title'] ?></h2>
      <p><?= $args['portfolio_title_description'] ?></p>
    </div>

    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gx-5">

          <div class="col-xl-7">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <?php foreach($args['portfolio_images'] as $img): ?>
                  <div class="swiper-slide">
                    <img src="<?= $img['image']['url']?>" alt="<?= $img['image']['alt']?>" >
                  </div>
                <?php endforeach; ?>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-xl-4">
            <div class="portfolio-description">
                <h2><?= $args['portfolio_name'] ?></h2>
                <?php foreach($args['portfolio_description'] as $text) : ?>
                    <p><?= $text['text']?></p>
                <?php endforeach; ?>
                <?php
                /**
                * Button Primary
                */
                $button_args = array(
                  'label' => 'Visite',
                  'link' =>   $args['portfolio_url'],
                  'target' => '_blank',
                  'title' => 'Abre em nova janela',
                );
                get_template_part( 'parts/template-parts/btn-primary','',$button_args);
                ?>
              </div>
            </div>
          </div>

      </div>
    </section>
  </div>
</section>