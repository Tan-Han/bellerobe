<?php get_header() ?>



<!-- this is the coding for the frontpage for the website-->

<main>

<section class="frontpage_hero">
  <h1><?php the_field("hero_text_on_frontpage") ?></h1>
  <div>
    <iframe width="966" height="543" src="https://www.youtube.com/embed/Tc6T3JF4UJw" title="The Prince of Egypt  // Danish National Symphony Orchestra, Concert Choir &amp; DR Big Band (Live)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
  </div>
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
