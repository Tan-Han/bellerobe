<?php get_header() ?>

<main>
<!--first section on about us page with text and video-->
    <section class="introduction_text_and_video">

        <!--Code for text-->
        <div class="introduction_text">
            <h1><?php the_field("introduction_header_on_frontpage") ?></h1>
            <p><?php the_field("introduction_text_on_frontpage") ?></p>
        </div>

        <!--Code for video-->
        <div class="introduction_video">
            <iframe
                src="<?php the_field("about_us_video") ?>?autoplay=1&controls=0&mute=1&modestbranding=1&disablekb=1&loop=1&playlist=<?php the_field("video_id") ?>"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
            </iframe>
        </div>

    </section>

<!-- second section on about us page with drop down menues -->
    <section class="information_drop_downs">

    </section>

</main>


<style>

/* Styling for the first section on the about us page with text and video */
   .introduction_text_and_video {
       display: flex;
       justify-content: space-between;
   }

   .introduction_text {
       width: 45%;
   }

   .introduction_text h1 {
         font-size: 35px;
   }

    .introduction_video {
         width: 45%;
    }

    .introduction_video iframe {
    max-width: 100vw;
    /* Max-width af video - for at den ikke går ud over kanten */
    height: 300px;
    /* Sæt højden som ønsket - 600px er bare et eksempel */
    width: 100%;
    /* 100% vidde på videoen, så den fylder fra kant til kant */
    border-radius: 10px;
    box-shadow: 3px 3px 5px #5C48337D;
  }




</style>

<?php get_footer() ?>