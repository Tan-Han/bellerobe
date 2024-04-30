<?php get_header() ?>



<!-- this is the coding for the frontpage for the website-->

<main>

<section class="frontpage_hero">
  <h1><?php the_field("hero_text_on_frontpage") ?></h1>
  <?php the_field("hero_on_frontpage") ?>
</section>

<section class="frontpage_introduction">
  <h2><?php the_field("introduction_header_on_frontpage") ?></h2>
  <p><?php the_field("introduction_text_on_frontpage") ?></p>
</section>

<section class="frontpage_categories">

</section>

<div class="frontpage_information">
  <section class="frontpage_opening_hours_and_booking">
  </section>

  <section class="frontpage_map">
  </section>
</div>
  
</main>


<!-- this is the styling for the frontpage -->
<style>

</style>

<?php get_footer() ?>
