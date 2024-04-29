<?php get_header() ?>



<!-- ABC this is the coding for the frontpage for the website-->

<main>

<section class="frontpage_hero">
  <div>
    <?php $heroEmbed = get_field("hero_on_frontpage") ?>
    <img src="<?php echo $heroEmbed["sizes"]["large"] ?>" alt="">
  </div>
</section>

<section class="frontpage_introduction">
  <p><?php the_field("introduction_on_frontpage") ?></p>
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
