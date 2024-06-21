<?php
/**
 * Title: Home Template
 * Slug: sitecriativo/page-home-template
 * Categories: sitecriativo_page
 * Keywords: starter
 * Block Types: core/post-content
 * Post Types: page, wp_template
 * Viewport width: 1400
 */
  
 $fields = get_fields();

 /**
  * Hero
  */
  $hero = array(
    'hero_title' => $fields['hero_title'],
    'hero_description' => $fields['hero_description'],
    'hero_cards' => $fields['hero_cards'], 
  );
  get_template_part( 'parts/template-parts/hero','', $hero);
?>

<main id="main">

  <?php
   /**
    * About
    */
    $about = array(
      'about_title' => $fields['about_title'],
      'about_title_description' => $fields['about_title_description'],
      'about_description' => $fields['about_description'], 
      'about_image' => $fields['about_image']
    );
    get_template_part( 'parts/template-parts/about','', $about);

    /**
    * Cards
    */
    $cards = array(
      'cards' => $fields['cards']
    );
    get_template_part( 'parts/template-parts/cards','',$cards);

    /**
    * Services
    */
    $services = array(
      'services_title' => $fields['services_title'],
      'services_title_description' => $fields['services_title_description'],
      'services_cards' => $fields['services_cards'],
    );
    get_template_part( 'parts/template-parts/services','',$services);

    /**
    * Cta
    */
    $cta = array(
      'cta_title' => $fields['cta_title'],
      'cta_description' => $fields['cta_description'],
      'cta_button_url' => $fields['cta_button_url'],
      'cta_button_label' => $fields['cta_button_label'],
      'cta_img' => $fields['cta_img'],
    );
    get_template_part( 'parts/template-parts/cta','',$cta);

    /**
    * Portfolio
    */
    $portfolio = array(
      'portfolio_title' => $fields['portfolio_title'],
      'portfolio_title_description' => $fields['portfolio_title_description'],
      'portfolio_images' => $fields['portfolio_images'],
      'portfolio_name' => $fields['portfolio_name'],
      'portfolio_description' => $fields['portfolio_description'],
      'portfolio_url' => $fields['portfolio_url'],
    );
    get_template_part( 'parts/template-parts/portfolio','', $portfolio);

    /**
    * Contact
    */
    get_template_part( 'parts/template-parts/contact');
  ?>

</main>

   
