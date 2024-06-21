<section id="cards" class="cards section bg-dark">
  <div class="container">
    <div class="row no-gutters">
      <?php $i = 1; foreach($args['cards'] as $card): ?>
        <div class="col-lg-4 col-md-6 card" data-aos="fade-up" data-aos-delay="100">
          <span><?= $i >= 10 ? $i : '0' . $i ?></span>
          <h4><?= $card['title']; ?></h4>
          <p><?= $card['description']; ?></p>
        </div>
      <?php $i++; endforeach; ?>
    </div>
</section>