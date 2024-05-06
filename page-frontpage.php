<?php get_header() ?>

<!-- this is the coding for the frontpage for the website-->

<main>

<!-- coding for the first section on the frontpage with the hero video/picture -->
<section class="section frontpage_hero">
  <h1><?php the_field("hero_text_on_frontpage") ?></h1>
  <?php the_field("hero_on_frontpage") 
  
  ?>
</section>

<!-- coding for the second section on the frontpage with the introduction text -->
<section class="section frontpage_introduction">
  <h2><?php the_field("introduction_header_on_frontpage") ?></h2>
  <p><?php the_field("introduction_text_on_frontpage") ?></p>
</section>

<!-- coding for the third section on the frontpage with four categories of products -->
<section class="section frontpage_categories">
  <h2><?php the_field("introduction_to_cards_on_frontpage") ?></h2>
  
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
  .section {
    padding: 20px 0px;
  }

</style>

<?php get_footer() ?>
