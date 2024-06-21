<section id="hero" class="d-flex align-items-center justify-content-center">
  <div class="container" data-aos="fade-up">

    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
      <div class="col-xl-6 col-lg-8">
        <h1><?= $args['hero_title'] ?></h1>
        <h2><?= $args['hero_description'] ?><span>.</span></h2>
      </div>
    </div>

    <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
      <?php if($args['hero_cards']): foreach($args['hero_cards'] as $card): ?>
          <div class="col-xl-2 col-md-4">
            <div class="icon-box">
            <?= $card['icon'] ?>
              <h3><a href="#services"><?= $card['title'] ?></a></h3>
            </div>  
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>

  </div>
</section>