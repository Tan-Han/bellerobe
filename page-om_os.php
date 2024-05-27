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
                src="<?php the_field("about_us_video") ?>?controls=1&modestbranding=1&disablekb=1"
                title="Belle Robe - Om os video" frameborder="0"
                allow="accelerometer; controls; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
            </iframe>
        </div>

    </section>

<!-- second section on about us page with drop down menues -->
<section class="information_drop_downs">
    <!-- First dropdown -->
    <div id="dropdownBtn_about_us_1" class="dropbtn_about_us">
        <h2>Samarbejdspartnere</h2>
        <i class="fa-solid fa-caret-down"></i>
    </div>
    <div id="myDropdown_about_us_1" class="dropdown_content_about_us">
        <p class="dropdown_introduction_text"><?php the_field("samarbejdspartnere_introduction") ?></p>
        <div class="dropdown_text_style_about_us">
            <!-- Collaboration partners loop code start -->
            <?php $collaborationLoop = new WP_Query(
                array(
                    "post_type" => "collaboration",
                    "posts_per_page" => -1,
                    "orderby" => "date",  // Order by date
                    "order" => "ASC"     // Reverse order (latest posts first)
                )
            ) ?>
            <?php if ($collaborationLoop->have_posts()): ?>
                <?php while ($collaborationLoop->have_posts()): $collaborationLoop->the_post(); 
                    $url_to_collaboration_partner = get_field('partner_url'); // Retrieve the URL from ACF field
                ?>
                    <div class="collaboration_partner">
                        <a href="<?php echo esc_url($url_to_collaboration_partner); ?>" target="_blank">
                            <div class="collaboration_partner_text">
                                <p class="fat_p_about_us"><?php the_field("collaboration_partner_job"); ?>:</p>
                                <p><?php the_field("collaboration_partner_name"); ?></p> 
                            </div>     
                        </a>
                    </div>
                <?php endwhile ?>
                <?php wp_reset_postdata() ?>
            <?php endif; ?>
        </div>
    </div>

    <!-- Second dropdown -->
    <div id="dropdownBtn_about_us_2" class="dropbtn_about_us">
        <h2>Fortrolighedspolitik</h2>
        <i class="fa-solid fa-caret-down"></i>
    </div>
    <div id="myDropdown_about_us_2" class="dropdown_content_about_us">
        <p class=".dropdown_introduction_text"><?php the_field("fortrolighedspolitik_tekst"); ?></p>
    </div>

    <!-- Third dropdown -->
    <div id="dropdownBtn_about_us_3" class="dropbtn_about_us">
        <h2>Handelsbetingelser</h2>
        <i class="fa-solid fa-caret-down"></i>
    </div>
    <div id="myDropdown_about_us_3" class="dropdown_content_about_us">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
    </div>

    <!-- Fourth dropdown -->
    <div id="dropdownBtn_about_us_4" class="dropbtn_about_us">
        <h2>Kundeoplevelser</h2>
        <i class="fa-solid fa-caret-down"></i>
    </div>
    <div id="myDropdown_about_us_4" class="dropdown_content_about_us">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
    </div>
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
        height: 25rem;
        width: 100%;
        /* 100% vidde på videoen, så den fylder fra kant til kant */
        border-radius: 10px;
        box-shadow: 3px 3px 5px #5C48337D;
    }

/* Styling for the second section on the about us page with drop down menues */

    .information_drop_downs {
        margin-top: 80px;
        margin-bottom: 5px;
    }

    /* Style the dropdown button */
    .dropbtn_about_us {
        background-color: var(--forms);
        width: 100%;
        border: 0.4px solid var(--brown);
        cursor: pointer;
        margin-top: 15px;
        display: flex;
        justify-content: space-between;
        box-shadow: 3px 3px 5px #5C48337D;
        border-radius: 10px;
    }

    .dropbtn_about_us h2 {
        color: var(--brown);
        font-size: 22px;
        font-family: "garamond-premier-pro", serif !important;
        font-weight: 700;
        margin: 17px 24px;
    }

    .dropbtn_about_us .fa-caret-down {
        padding: 0;
        margin: 17px 24px;
        font-size: 21px;
    }

    /* Style the dropdown content (hidden by default) */
    .dropdown_content_about_us {
        display: none;
        background-color: var(--forms);
        width: 100%;
        box-shadow: 3px 3px 5px #5C48337D;
        z-index: 1;
        border-left: 0.4px solid var(--brown);
        border-right: 0.4px solid var(--brown);
        border-bottom: 0.4px solid var(--brown);
        border-radius: 0 0 10px 10px;
    }

    .dropdown_introduction_text {
        padding: 2.5rem 4rem 1rem 4rem;
    }

    .collaboration_partner_text {
        display: flex;
    }

    .fat_p_about_us {
        font-weight: 700;
        padding: 0px 5px 0 0;
        font-family: "garamond-premier-pro", serif;
        font-size: 18px;
    }

    .dropdown_text_style_about_us {
        padding: .5rem 4rem 2rem 4rem;
    }

    /* Style the links inside the dropdown */
    .dropdown_text_style_about_us a {
        
        padding: 10px 40px 10px 0px;
        text-decoration: none;
        display: block;
        transition: 0.3s;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content_about_us a:hover {
        text-decoration: underline;
        color: var(--brown);
        transition: 0.3s;
    }

    /* Show the dropdown menu when the button is clicked */
    .show {
        display: block;
    }   


    @media screen and (max-width: 1500px) {
        .introduction_video iframe {
        height: 22rem;
        }   
    }

    @media screen and (max-width: 1200px) {

        .introduction_text_and_video {
            flex-direction: column;
        }

        .introduction_text {
            width: 100%;
            margin-top: 5rem;
        }

        .introduction_video {
            width: 100%;
            display: flex;
            justify-content: center;
            margin-top: 3rem;
            margin-bottom: 1rem;
        }

        .introduction_video iframe {
            width: 70%;
            height: 25rem;
        }
    }



    @media screen and (max-width: 900px) {

        .introduction_video {
            margin-bottom: 0rem;
        }

        .introduction_video iframe {
            width: 80%;
            height: 23rem;
        }
    }

    @media screen and (max-width: 700px) {


        .introduction_video iframe {
            width: 90%;
            height: 20rem;
        }
    }

    @media screen and (max-width: 600px) {
        .introduction_video iframe {
            width: 100%;
            height: 18rem;
        }
    }

    @media screen and (max-width: 500px) { 
        .introduction_video iframe {
            height: 15rem;
        }
    }



</style>

<?php get_footer() ?>