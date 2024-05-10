<?php get_header() ?>

<!-- this is the coding for the frontpage for the website-->

<main>

  <!-- coding for the first section on the frontpage with the hero video/picture -->
  <section class="frontpage_hero">
    <h1><?php the_field("hero_text_on_frontpage") ?></h1>
    <iframe
      src="<?php the_field("hero_on_frontpage") ?>?autoplay=1&controls=0&mute=1&modestbranding=1&disablekb=1&loop=1&playlist=<?php the_field("video_id")?>" title="YouTube video player" frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    <!-- Har slettet div, da den var unødvendig og lavet den om til URL i ACF. Jeg har tilføjet lidt kode efter linket for at autoplay, loop og fjerne YT controls -->

<div class="frontpage_pading">
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

</div>

</div>
  
</main>


<!-- this is the styling for the frontpage -->
<style>
  main {
    padding: 0 !important;
    /* Har sat padding til 0 for at kunne sætte videoen helt ud til kanten (!important for at den overwriter den anden padding)*/
  }

  .frontpage_hero {
    position: relative;
    /* For at kunne sætte teksen oven på videoen */
    width: 100%;
  }

  .frontpage_hero h1 {
    position: absolute;
    /* For at kunne sætte teksen oven på videoen */
    z-index: 1;
    /* For at kunne sætte teksen oven på videoen */
    top: 50%;
    /* For at placere tekst midt i */
    left: 50%;
    /* For at placere tekst midt i */
    transform: translate(-50%, -50%);
    /* For at placere tekst midt i */
    text-shadow: 3px 3px 5px var(--brown);
    color: var(--white);
    font-size: 55px;
  }

  .frontpage_hero iframe {
    max-width: 100vw;
    /* Max-width af video - for at den ikke går ud over kanten */
    height: 600px;
    /* Sæt højden som ønsket - 600px er bare et eksempel */
    width: 100%;
    /* 100% vidde på videoen, så den fylder fra kant til kant */
  }

  .frontpage_introduction, .frontpage_categories {
    padding: 0 8rem;
  }

  .section {
    padding: 20px 0px;
  }

  .frontpage_pading {
    padding: 0 8rem;
  }

  .frontpage_cards {

  }

  .frontpage_cards {}
</style>

<?php get_footer() ?>