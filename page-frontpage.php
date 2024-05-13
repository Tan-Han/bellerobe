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
    <!-- kode efter linket gør, at man kan autoplay og fjerne Youtube controls -->
  </section>

  <!-- padding for på siderne for alt andet end hero -->
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
      
    <!-- Code for opening hours on frontpage begins -->
    <div class="opening_hours_container">
        <h3 class="h3_frontpage">Åbningstider</h3>
        <p><?php the_field("opening_hours_description") ?></p>
        
        <!-- Div box for "åbningstider" with loop -->
        <div class="opening_hours_loop_frontpage">
  
        <?php $openHoursLoop = new WP_Query(
                    array(
                        "post_type" => "open_hours",
                        "posts_per_page" => -1,
                        "orderby" => "date",  // Order by date
                        "order" => "ASC"     // Reverse order (latest posts first)
                    )
                ) ?>

                <?php while ($openHoursLoop->have_posts()):
                    $openHoursLoop->the_post() ?>

                    <div class="hours_frontpage">
                        <b><?php the_title() ?>:&nbsp;</b>

                        <?php if (!get_field('closed')) {
                            if (get_field("open") && get_field("close")): ?>
                                <p><?php the_field("open"); ?>&nbsp;-&nbsp;</p>
                                <p><?php the_field("close"); ?></p>
                            <?php endif;
                        } ?>

                        <?php
                        if (!get_field('closed')) {
                            $openingHours = get_field('open_later');
                            if (!empty($openingHours['open_later']) && !empty($openingHours['close_later'])): ?>
                                <p><?php echo '&nbsp;&&nbsp;'; ?></p>
                                <p><?php echo $openingHours['open_late']; ?></p>
                                <p><?php echo '&nbsp;-&nbsp;'; ?></p>
                                <p><?php echo $openingHours['close_late']; ?></p>
                            <?php endif;
                        } ?>

                        <?php if (get_field('closed')) {
                            echo '<p>Lukket</p>';
                        }

                        if (get_field('book')) {
                            echo '<p>Se tider ved booking</p>';
                        }
                        ?>
                    </div>

                <?php endwhile ?>
                <?php wp_reset_postdata() ?>
        </div>
        
        <!-- div box for "book tid"-->
        <div class="book_div_box">
          <p><?php the_field("tekst_til_book_tid") ?></p>
          <button class="book_tid_button"><a href="/booking/">Book tid</a></button>
        </div>

    </div>

      <!-- Code for opening hours on frontpage ends -->

      <!-- Code for adress area on frontpage begins -->
      <div class="adress_section_container">
          
          <h3 class="h3_frontpage">Find vej</h3> 

          <div>
            <?php $addressLoop = new WP_Query(
                array(
                    "post_type" => "address",
                    "posts_per_page" => -1,
                )
            ) ?>

            <?php while ($addressLoop->have_posts()):
                $addressLoop->the_post() ?>

                <p class="store-address"><?php the_field('street_number') ?>, <?php the_field('postal_code') ?></p>

                <iframe class="maps"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4505.774172981708!2d8.478445877117661!3d55.621380402105835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464b1e67d2f3d7db%3A0x1edb8a96de66a4e9!2sBelle%20Robe%20bridal%20and%20party%20dresses!5e0!3m2!1sen!2sdk!4v1715084743677!5m2!1sen!2sdk"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php endwhile ?>
            <?php wp_reset_postdata() ?>
          </div>

      </div>
      <!-- Code for adress area on frontpage ends -->

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


  .img_cards {
    object-fit: cover;
    border-radius: 10px;
    box-shadow: 3px 3px 5px #5C48337D;
    height: 25rem;
    width: 270px;
    transition: 0.4s;
  }

  .img_cards:hover {
    -webkit-transform: scale(1.05);
    transform: scale(1.05);
    transition: 0.4s;
  }

/* Fourth section styling */
  .frontpage_opening_hours_and_booking {
    display: flex;
    justify-content: space-between;
    padding-bottom: 100px;
    margin-top: 50px;
  }

  .h3_frontpage {
    font-size: 25px;
  }

  /* opening hours area styling */
  .opening_hours_container {
    width: 45%;
  }

  .opening_hours_loop_frontpage {
    background-color: var(--tertiary-color);
    border-radius: 10px;
    box-shadow: 3px 3px 5px #5C48337D;
    padding: 20px;
    margin-top: 18px;
    background-image: url('https://trshansen.online/bellerobe/wp-content/themes/bellerobe/img/book_dark_green.svg');
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
  }

  .hours_frontpage {
    display: flex;
    font-size: 17px;
    padding: 4px 0;
    color: var(--white);
  }


  /* book tid styling */
  .book_div_box {
    background-color: var(--tertiary-color);
    border-radius: 10px;
    box-shadow: 3px 3px 5px #5C48337D;
    padding: 20px;
    margin-top: 20px;
  }

  .book_tid_button {
    background-color: var(--white);
    border: none;
    border-radius: 10px;
    color: var(--brown);
    padding: 10px 20px;
    font-size: 18px;
    font-weight: 700;
    margin-top: 10px;
  }

  .book_tid_button:hover {
    background-color: var(--brown);
    color: var(--white)!important; 
  }

  /* adress area styling */
  .adress_section_container {
    width: 45%;
  }

  .maps {
    border-radius: 10px;
    border: none !important;
    box-shadow: 3px 3px 5px #5C48337D;
    height: 350px;
    width: 100%;
    margin-top: 18px;
  }


  @media screen and (max-width: 1500px) {
    .img_cards {
    height: 22rem;
    width: 220px;
    }

    .p_cards{
    font-size: 20px;
  }

  }


</style>

<?php get_footer() ?>