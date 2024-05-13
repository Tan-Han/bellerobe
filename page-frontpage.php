<?php get_header() ?>

<!-- this is the coding for the frontpage for the website-->

<main>

  <!-- first section on the frontpage with the hero video/picture -->
  <section class="frontpage_hero">
    <h1><?php the_field("hero_text_on_frontpage") ?></h1>
    <iframe
      src="<?php the_field("hero_on_frontpage") ?>?autoplay=1&controls=0&mute=1&modestbranding=1&disablekb=1&loop=1&playlist=<?php the_field("video_id") ?>"
      title="YouTube video player" frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
    </iframe>
    <!-- Har slettet div, da den var unødvendig og lavet den om til URL i ACF. Der er tilføjet lidt kode efter linket for at autoplay, loop og fjerne Youtube controls -->
  </section>

  <!--padding for på siderne for alt andet end hero -->
  <div class="frontpage_pading">

    <!-- second section on the frontpage with the introduction text -->
    <section class="section frontpage_introduction">
      <h2><?php the_field("introduction_header_on_frontpage") ?></h2>
      <p><?php the_field("introduction_text_on_frontpage") ?></p>
    </section>

    <!-- third section on the frontpage with four categories of products -->
    <section class="section">
      <h2 class="big_h2 centered_text_frontpage"><?php the_field("introduction_to_cards_on_frontpage") ?></h2>
      <p class="centered_text_frontpage"><?php the_field("text_under_introduction_to_cards") ?></p>

      <div class="frontpage_cards_container">

        <!--first card-->
        <a href="/product-category/brudekjoler/">
          <div class="frontpage_cards">
            <p class="p_cards">Brudekjoler</p>
            <?php $image = get_field("brudekjole_card_image") ?>
            <img class="img_cards" src="<?php echo $image["sizes"]["medium"] ?>" alt="<?php echo $image["alt"] ?>">
          </div>
        </a>

        <!--second card-->
        <a href="/product-category/gallakjoler/">
          <div class="frontpage_cards">
            <p class="p_cards">Fest- & gallekjoler</p>
            <?php $image = get_field("galla_og_festkjoler_card_image") ?>
            <img class="img_cards" src="<?php echo $image["sizes"]["medium"] ?>" alt="<?php echo $image["alt"] ?>">
          </div>
        </a>

        <!--third card-->
        <a href="/product-category/konfirmationskjoler/">
          <div class="frontpage_cards">
            <p class="p_cards">Konfirmationskjoler</p>
            <?php $image = get_field("konfirmationskjoler_card_image") ?>
            <img class="img_cards" src="<?php echo $image["sizes"]["medium"] ?>" alt="<?php echo $image["alt"] ?>">
          </div>
        </a>

        <!--fourth card-->
        <a href="/product-category/sko/">
          <div class="frontpage_cards">
            <p class="p_cards">Sko & tilbehør</p>
            <?php $image = get_field("sko_og_tilbehor_card_image") ?>
            <img class="img_cards" src="<?php echo $image["sizes"]["medium"] ?>" alt="<?php echo $image["alt"] ?>">
          </div>
        </a>

      </div>
    </section>

    <!-- fourth section on the frontpage with the informations of opening hours and map -->

    <section class="section frontpage_opening_hours_and_booking">
      <div class="opening_hours_container">
        <h3>Åbningstider</h3>
        <div>

        </div>
        <div>
          <p><?php the_field("tekst_til_book_tid") ?></p>
          <button><a href="/booking/">Book tid</a></button>
        </div>
      </div>

      <div class="adress_section_container">
        <div>
          <h3>Find vej</h3>
          <p><?php the_field("adressen_pa_forsiden") ?></p>
        </div>
        <div>
          <iframe src="<?php the_field("google_maps_link") ?>" width="600" height="450" style="border:0;"
            allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>

    </section>



  </div>

</main>


<!-- this is the styling for the frontpage -->
<style>
  /* General styling for frontpage */
  main {
    padding: 0 !important;
    margin: 0 !important;
    /* Har sat padding til 0 for at kunne sætte videoen helt ud til kanten (!important for at den overwriter den anden padding)*/
  }

  .section {
    padding-top: 40px;
  }

  .frontpage_pading {
    padding: 0 8rem;
  }

  .big_h2 {
    font-size: 35px;
  }

  /* First section styling */

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

  /* Third section styling */

  .centered_text_frontpage {
    text-align: center;
  }

  .frontpage_cards_container {
    display: flex;
    justify-content: space-between;
    margin: 30px 0;
  }

  .frontpage_cards {
    border-radius: 10px;
    position: relative;
  }

  .p_cards{
    font-size: 20px;
    font-family: "garamond-premier-pro", serif;
    font-weight: 700;
    font-style: normal;
    color: var(--white);
    text-shadow: 1px 1px 2px var(--brown);
    position: absolute;
    z-index: 1;
    font-size: 25px;
    bottom: 2rem;
    Left: 2rem;
    overflow:hidden;
  }

  .p_cards:hover{
    color: var(--secondary-color);
    transition: 0.4s;
  }


  .img_cards {
    object-fit: cover;
    border-radius: 10px;
    box-shadow: 3px 3px 5px #5C48337D;
    height: 25rem;
    width: 270px;
  }

  /* Fourth section styling */
  .frontpage_opening_hours_and_booking {
    display: flex;
    justify-content: space-between;
    padding-bottom: 40px;
  }

  .opening_hours_container {
    width: 45%;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  .adress_section_container {
    width: 45%;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
</style>

<?php get_footer() ?>