<?php get_header() ?>

<!-- this is the coding for the frontpage for the website-->

<main>

<!-- coding for the first section on the frontpage with the hero video/picture -->
<section class="frontpage_hero">
  <h1><?php the_field("hero_text_on_frontpage") ?></h1>
  <div class="hero">
    <?php the_field("hero_on_frontpage") ?>
  </div>
</section>

<!-- coding for the second section on the frontpage with the introduction text -->
<section class="section frontpage_introduction">
  <h2><?php the_field("introduction_header_on_frontpage") ?></h2>
  <p><?php the_field("introduction_text_on_frontpage") ?></p>
</section>

<!-- coding for the third section on the frontpage with four categories of products -->
<section class="section frontpage_categories">
  <h2><?php the_field("introduction_to_cards_on_frontpage") ?></h2>
  
  <div>
    <div class="frontpage_cards">
      <a href="/product-category/brudekjoler/">Brudekjoler</a>
    </div>

    <div class="frontpage_cards">
      <a href="/product-category/gallakjoler/">Galla & festkjoler</a>
    </div>

    <div class="frontpage_cards">
      <a href="/product-category/konfirmationskjoler/">Konfirmationskjoler</a>
    </div>

    <div class="frontpage_cards">
      <a href="/product-category/sko/">Sko & tilbehør</a>
    </div>
  </div>
</section>

<!-- coding for the fourth section on the frontpage with the informations of opening hours and map -->
<div class="frontpage_information">
  
  <section class="section frontpage_opening_hours_and_booking">
  </section>

  <section class="frontpage_map">
  </section>

</div>
  
</main>


<!-- this is the styling for the frontpage -->
<style>
  .hero {
    width: 100vw;
    background-size: cover;
    background-position: center;
  }

  .section {
    padding: 20px 0px;
  }

  .frontpage_cards {
    
  }

</style>

<?php get_footer() ?>
