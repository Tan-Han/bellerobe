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
                src="<?php the_field("about_us_video") ?>?controls=1&controls=0&mute=1&modestbranding=1&disablekb=1&loop=1&playlist=<?php the_field("video_id") ?>"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; controls; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
            </iframe>
        </div>

    </section>

<!-- second section on about us page with drop down menues -->
    <section class="information_drop_downs">
        
    <!-- First dropdowm -->
        <div id="dropdownBtn_about_us" class="dropbtn_about_us">
            <h2>Samarbejdspartnere</h2>
            <i class="fa-solid fa-caret-down"></i>
        </div>
            
        <div id="myDropdown_about_us" class="dropdown_content_about_us">
            <p><?php the_field("samarbejdspartnere_introduction") ?></p>
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
                            <a href="<?php echo esc_url($url_to_collaboration_partner); ?>">
                                <?php the_field("collaboration_partner_job"); // Display the collaboration partners job ?>  
                                <?php the_field("collaboration_partner_name"); // Display the collaboration partners name ?>     
                            </a>
                        </div>

                    <?php endwhile ?>
                    <?php wp_reset_postdata() ?>
                <?php endif; ?>
                
            </div>
        </div>

    <!-- Second dropdowm -->
        <div id="dropdownBtn_about_us" class="dropbtn_about_us">
            <h2>Fortrolighedspolitik</h2>
            <i class="fa-solid fa-caret-down"></i>
        </div>
            
        <div id="myDropdown_about_us" class="dropdown_content_about_us">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div>
        

    <!-- Third dropdowm -->
        <div id="dropdownBtn_about_us" class="dropbtn_about_us">
            <h2>Handelsbetingelser</h2>
            <i class="fa-solid fa-caret-down"></i>
        </div>
            
        <div id="myDropdown_about_us" class="dropdown_content_about_us">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div>

     <!-- Fourth dropdowm -->
        <div id="dropdownBtn_about_us" class="dropbtn_about_us">
            <h2>Kundeoplevelser</h2>
            <i class="fa-solid fa-caret-down"></i>
        </div>
            
        <div id="myDropdown_about_us" class="dropdown_content_about_us">
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
         width: 42%;
    }

    .introduction_video iframe {
        max-width: 100vw;
        /* Max-width af video - for at den ikke går ud over kanten */
        height: 330px;
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

    .dropdown_content_about_us p {
        padding: 17px 24px 25px 24px;
    }

    .dropdown_text_style_about_us {
        padding: 0px 24px 17px 24px;
        display: flex;
    }

    /* Style the links inside the dropdown */
    .dropdown_text_style_about_us a {
        color: var(--brown);
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        transition: 0.3s;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content_about_us a:hover {
        text-decoration: underline;
        transition: 0.3s;
    }

    /* Show the dropdown menu when the button is clicked */
    .show {
        display: block;
    }   

</style>

<?php get_footer() ?>