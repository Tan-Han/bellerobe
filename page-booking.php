<?php get_header() ?>


<main>

    <section>
        <h1 class="booking-headline">Book tid</h1>
        <div class="booking-list">
            <div class="booking-card">
                <?php
                $bookingWeddingDress = get_field('provning_af_brudekjole');
                if ($bookingWeddingDress): ?>

                    <div class="img-box">
                        <img class="booking-img"
                            src="<?php echo esc_url($bookingWeddingDress['dress_img']['sizes']['medium']); ?>" alt="">
                    </div>
                    <div class="booking-info">
                        <div class="booking-card-headline">
                            <h3><?php echo $bookingWeddingDress['booking_headline']; ?></h3>

                            <div class="price-time">
                                <?php if (!empty($bookingWeddingDress['booking_price'])): ?>
                                    <p>DKK <?php echo $bookingWeddingDress['booking_price']; ?> |&nbsp;</p>
                                <?php endif ?>
                                <p><?php echo $bookingWeddingDress['booking_time'] ?></p>
                            </div>

                        </div>
                        <p class="booking-description"><?php echo $bookingWeddingDress['booking_description']; ?></p>
                        <div class="booking-btn">
                            <!-- Google Calendar Appointment Scheduling begin -->
                            <link href="https://calendar.google.com/calendar/scheduling-button-script.css" rel="stylesheet">
                            <script src="https://calendar.google.com/calendar/scheduling-button-script.js" async></script>
                            <script>
                                (function () {
                                    var target = document.currentScript;
                                    window.addEventListener('load', function () {
                                        calendar.schedulingButton.load({
                                            url: 'https://calendar.google.com/calendar/appointments/schedules/AcZssZ3rgkfC1es-OaLCs0claeBuIIy4neu6WscyHa7LYYbgm8ulq4kQINGqZuL8PLHzoya-HcC_aiEM?gv=true',
                                            color: '#039BE5',
                                            label: "Book pr\xF8vning",
                                            target,
                                        });
                                    });
                                })();
                            </script>
                            <!-- end Google Calendar Appointment Scheduling -->
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <div class="booking-card">
                <?php
                $bookingWeddingDressOutlet = get_field('provning_af_outlet_brudekjole');
                if ($bookingWeddingDressOutlet): ?>

                    <div class="img-box">
                        <img class="booking-img"
                            src="<?php echo esc_url($bookingWeddingDressOutlet['dress_img']['sizes']['medium']); ?>" alt="">
                    </div>
                    <div class="booking-info">
                        <div class="booking-card-headline">
                            <h3><?php echo $bookingWeddingDressOutlet['booking_headline']; ?></h3>

                            <div class="price-time">
                                <?php if (!empty($bookingWeddingDressOutlet['booking_price'])): ?>
                                    <p>DKK <?php echo $bookingWeddingDressOutlet['booking_price']; ?> |&nbsp;</p>
                                <?php endif ?>
                                <p><?php echo $bookingWeddingDressOutlet['booking_time'] ?></p>
                            </div>

                        </div>
                        <p class="booking-description"><?php echo $bookingWeddingDressOutlet['booking_description']; ?></p>
                        <div class="booking-btn">
                            <!-- Google Calendar Appointment Scheduling begin -->
                            <link href="https://calendar.google.com/calendar/scheduling-button-script.css" rel="stylesheet">
                            <script src="https://calendar.google.com/calendar/scheduling-button-script.js" async></script>
                            <script>
                                (function () {
                                    var target = document.currentScript;
                                    window.addEventListener('load', function () {
                                        calendar.schedulingButton.load({
                                            url: 'https://calendar.google.com/calendar/appointments/schedules/AcZssZ3rgkfC1es-OaLCs0claeBuIIy4neu6WscyHa7LYYbgm8ulq4kQINGqZuL8PLHzoya-HcC_aiEM?gv=true',
                                            color: '#039BE5',
                                            label: "Book pr\xF8vning",
                                            target,
                                        });
                                    });
                                })();
                            </script>
                            <!-- end Google Calendar Appointment Scheduling -->
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <div class="booking-card">
                <?php
                $bookingGallaDress = get_field('provning_af_gallakjole');
                if ($bookingGallaDress): ?>

                    <div class="img-box">
                        <img class="booking-img"
                            src="<?php echo esc_url($bookingGallaDress['dress_img']['sizes']['medium']); ?>" alt="">
                    </div>
                    <div class="booking-info">
                        <div class="booking-card-headline">
                            <h3><?php echo $bookingGallaDress['booking_headline']; ?></h3>

                            <div class="price-time">
                                <?php if (!empty($bookingGallaDress['booking_price'])): ?>
                                    <p>DKK <?php echo $bookingGallaDress['booking_price']; ?> |&nbsp;</p>
                                <?php endif ?>
                                <p><?php echo $bookingGallaDress['booking_time'] ?></p>
                            </div>

                        </div>
                        <p class="booking-description"><?php echo $bookingGallaDress['booking_description']; ?></p>
                        <div class="booking-btn">
                            <!-- Google Calendar Appointment Scheduling begin -->
                            <link href="https://calendar.google.com/calendar/scheduling-button-script.css" rel="stylesheet">
                            <script src="https://calendar.google.com/calendar/scheduling-button-script.js" async></script>
                            <script>
                                (function () {
                                    var target = document.currentScript;
                                    window.addEventListener('load', function () {
                                        calendar.schedulingButton.load({
                                            url: 'https://calendar.google.com/calendar/appointments/schedules/AcZssZ3rgkfC1es-OaLCs0claeBuIIy4neu6WscyHa7LYYbgm8ulq4kQINGqZuL8PLHzoya-HcC_aiEM?gv=true',
                                            color: '#039BE5',
                                            label: "Book pr\xF8vning",
                                            target,
                                        });
                                    });
                                })();
                            </script>
                            <!-- end Google Calendar Appointment Scheduling -->
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <div class="booking-card">
                <?php
                $bookingGallaGroup = get_field('provning_af_gallakjole_gruppe');
                if ($bookingGallaGroup): ?>

                    <div class="img-box">
                        <img class="booking-img"
                            src="<?php echo esc_url($bookingGallaGroup['dress_img']['sizes']['medium']); ?>" alt="">
                    </div>
                    <div class="booking-info">
                        <div class="booking-card-headline">
                            <h3><?php echo $bookingGallaGroup['booking_headline']; ?></h3>

                            <div class="price-time">
                                <?php if (!empty($bookingGallaGroup['booking_price'])): ?>
                                    <p>DKK <?php echo $bookingGallaGroup['booking_price']; ?> |&nbsp;</p>
                                <?php endif ?>
                                <p><?php echo $bookingGallaGroup['booking_time'] ?></p>
                            </div>

                        </div>
                        <p class="booking-description"><?php echo $bookingGallaGroup['booking_description']; ?></p>
                        <div class="booking-btn">
                            <!-- Google Calendar Appointment Scheduling begin -->
                            <link href="https://calendar.google.com/calendar/scheduling-button-script.css" rel="stylesheet">
                            <script src="https://calendar.google.com/calendar/scheduling-button-script.js" async></script>
                            <script>
                                (function () {
                                    var target = document.currentScript;
                                    window.addEventListener('load', function () {
                                        calendar.schedulingButton.load({
                                            url: 'https://calendar.google.com/calendar/appointments/schedules/AcZssZ3rgkfC1es-OaLCs0claeBuIIy4neu6WscyHa7LYYbgm8ulq4kQINGqZuL8PLHzoya-HcC_aiEM?gv=true',
                                            color: '#039BE5',
                                            label: "Book pr\xF8vning",
                                            target,
                                        });
                                    });
                                })();
                            </script>
                            <!-- end Google Calendar Appointment Scheduling -->
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <div class="booking-card">
                <?php
                $bookingPickup = get_field('afhentning_kjole');
                if ($bookingPickup): ?>

                    <div class="img-box">
                        <img class="booking-img"
                            src="<?php echo esc_url($bookingPickup['dress_img']['sizes']['medium']); ?>" alt="">
                    </div>
                    <div class="booking-info">
                        <div class="booking-card-headline">
                            <h3><?php echo $bookingPickup['booking_headline']; ?></h3>

                            <div class="price-time">
                                <?php if (!empty($bookingPickup['booking_price'])): ?>
                                    <p>DKK <?php echo $bookingPickup['booking_price']; ?> |&nbsp;</p>
                                <?php endif ?>
                                <p><?php echo $bookingPickup['booking_time'] ?></p>
                            </div>

                        </div>
                        <p class="booking-description"><?php echo $bookingPickup['booking_description']; ?></p>
                        <div class="booking-btn">
                            <!-- Google Calendar Appointment Scheduling begin -->
                            <link href="https://calendar.google.com/calendar/scheduling-button-script.css" rel="stylesheet">
                            <script src="https://calendar.google.com/calendar/scheduling-button-script.js" async></script>
                            <script>
                                (function () {
                                    var target = document.currentScript;
                                    window.addEventListener('load', function () {
                                        calendar.schedulingButton.load({
                                            url: 'https://calendar.google.com/calendar/appointments/schedules/AcZssZ3rgkfC1es-OaLCs0claeBuIIy4neu6WscyHa7LYYbgm8ulq4kQINGqZuL8PLHzoya-HcC_aiEM?gv=true',
                                            color: '#039BE5',
                                            label: "Book pr\xF8vning",
                                            target,
                                        });
                                    });
                                })();
                            </script>
                            <!-- end Google Calendar Appointment Scheduling -->
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <div class="booking-card">
                <?php
                $bookingConfirmationDress = get_field('provning_konfirmationskjole');
                if ($bookingConfirmationDress): ?>

                    <div class="img-box">
                        <img class="booking-img"
                            src="<?php echo esc_url($bookingConfirmationDress['dress_img']['sizes']['medium']); ?>" alt="">
                    </div>
                    <div class="booking-info">
                        <div class="booking-card-headline">
                            <h3><?php echo $bookingConfirmationDress['booking_headline']; ?></h3>

                            <div class="price-time">
                                <?php if (!empty($bookingConfirmationDress['booking_price'])): ?>
                                    <p>DKK <?php echo $bookingConfirmationDress['booking_price']; ?> |&nbsp;</p>
                                <?php endif ?>
                                <p><?php echo $bookingConfirmationDress['booking_time'] ?></p>
                            </div>

                        </div>
                        <p class="booking-description"><?php echo $bookingConfirmationDress['booking_description']; ?></p>
                        <div class="booking-btn">
                            <!-- Google Calendar Appointment Scheduling begin -->
                            <link href="https://calendar.google.com/calendar/scheduling-button-script.css" rel="stylesheet">
                            <script src="https://calendar.google.com/calendar/scheduling-button-script.js" async></script>
                            <script>
                                (function () {
                                    var target = document.currentScript;
                                    window.addEventListener('load', function () {
                                        calendar.schedulingButton.load({
                                            url: 'https://calendar.google.com/calendar/appointments/schedules/AcZssZ3rgkfC1es-OaLCs0claeBuIIy4neu6WscyHa7LYYbgm8ulq4kQINGqZuL8PLHzoya-HcC_aiEM?gv=true',
                                            color: '#039BE5',
                                            label: "Book pr\xF8vning",
                                            target,
                                        });
                                    });
                                })();
                            </script>
                            <!-- end Google Calendar Appointment Scheduling -->
                        </div>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </section>

    <section class="store-info">

        <div class="contact-info">
            <h2 class="booking-headline">Kontakt os</h2>

            <div class="contact-info-box">
                <p>Ring til os eller send os en mail</p>
                <div class="phone">
                    <b>Telefon:&nbsp;</b>
                    <a href="tel:<?php the_field("phone_number") ?>">
                        <p><?php the_field("phone_number") ?></p>
                    </a>
                </div>
                <button id="contactBtn">Skriv til os</button>
                <div id="contactForm" class="contact_form_box">
                    <div class="contact_form">
                        <span class="close">&times;</span>
                        <div class="contact">
                            <h3>Send os en besked</h3>
                            <?php echo do_shortcode('[contact-form-7 id="8a0404d" title="Belle Robe Contact Form"]') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="opening-hours">
            <h2 class="booking-headline">Åbningstider</h2>
            <div class="opening-hours-box info-box">
            <?php $productLoop = new WP_Query(array("post_type" => "open_hours", "posts_per_page" => -1)) ?>
        <?php while ($productLoop->have_posts()):
            $productLoop->the_post() ?>

            <div class="card">
                <?php $image = get_field("produkt_billede") ?>
                <img src="<?php echo $image["sizes"]["medium"] ?>" class="card-img-top" alt="<?php echo $image["alt"] ?>">
                <div class="hours">
                    <b><?php the_title() ?>:&nbsp;</b>
                    <p><?php the_field("open") ?>&nbsp;</p>
                    <p>- <?php the_field("close") ?></p>
                    <?php $openingHours = get_field('open_later');
                    if ($openingHours): ?>
                    <p>&nbsp;& <?php echo $openingHours['open_later'] ?></p>
                    <p>- <?php echo $openingHours['close_later'] ?></p>
                    <?php endif; ?>
                    <p><?php the_field("closed") ?></p>
                    <p><?php the_field("book") ?></p>
                </div>
            </div>

        <?php endwhile ?>
            </div>
        </div>

        <div class="address">
            <h2 class="booking-headline">Adresse</h2>
            <div class="address-box info-box">
                <?php
                $address = get_field('location');
                if ($address): ?>
                    <p class="store-address"><?php echo $address['address'] ?></p>

                    <iframe class="maps"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4505.774172981708!2d8.478445877117661!3d55.621380402105835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464b1e67d2f3d7db%3A0x1edb8a96de66a4e9!2sBelle%20Robe%20bridal%20and%20party%20dresses!5e0!3m2!1sen!2sdk!4v1714492742855!5m2!1sen!2sdk"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                <?php endif; ?>
            </div>
        </div>
    </section>

</main>

<style>
    main {
        display: grid;
        justify-items: center;
        grid-template-columns: repeat(2, 1fr);
    }

    .booking-headline {
        font-size: 35px;
        padding-bottom: 1rem;
    }

    /* Booking cards */

    .booking-list {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .booking-card {
        background-color: var(--secondary-color);
        border-radius: 10px;
        overflow: hidden;
        display: flex;
        height: 200px;
        align-items: center;
        box-shadow: 3px 3px 5px #5C48337D;
    }

    .img-box {
        width: 25%;
        height: 100%;
    }

    .booking-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: top;
    }

    .booking-info {
        padding: 1.5rem;
        display: flex;
        flex-direction: column;
        gap: 1rem;
        width: 75%;
    }

    .booking-card-headline {
        display: flex;
        gap: 1.5rem;
        align-items: first baseline;
        padding: 0 1rem;
    }

    .booking-card-headline h3 {
        font-size: 22px;
    }

    .price-time {
        display: flex;
        font-size: 16px;
    }

    .booking-description {
        -webkit-box-orient: vertical;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: normal;
        padding: 0 1rem;
    }

    .booking-btn {
        padding: 0 1rem;
    }

    .qxCTlb {
        color: var(--white) !important;
        background-color: var(--quaternary-color) !important;
        font-weight: 700;
        border-radius: 10px !important;
        padding: .5rem 1rem !important;
        font-family: proxima-nova, sans-serif !important;
        line-height: normal !important;
        letter-spacing: normal !important;
        font-size: 16px;
    }

    .qxCTlb:hover {
        color: var(--brown) !important;
        background-color: var(--primary-color) !important;
    }

    /* OPENING HOURS AND ADDRESS */

    .store-info {
        display: flex;
        flex-direction: column;
        gap: 5rem;
    }

    /* Opening hours */

    .opening-hours-box {
        background-image: url('https://trshansen.online/bellerobe/wp-content/themes/bellerobe/img/open.svg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        padding: 1.5rem 2rem;
        border-radius: 10px;
        box-shadow: 3px 3px 5px #5C48337D;
        color: var(--brown);
    }

    .hours {
        display: flex;
        font-size: 20px;
        padding: .5rem 0;
    }

    .more-times {
        font-style: italic;
        padding: .5rem 0;
    }

    /* CONTACT INFO */

    .contact-info-box {
        background-color: var(--tertiary-color);
        padding: 1.5rem 2rem;
        border-radius: 10px;
        box-shadow: 3px 3px 5px #5C48337D;
        color: var(--white);
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .contact-info-box p {
        font-style: italic;
        font-size: 20px;
    }

    .phone {
        display: flex;
        align-items: baseline;
    }

    .phone b,
    .phone p {
        font-size: 18px;
        font-style: normal;
    }

    .phone a {
        color: var(--white);
    }

    #contactBtn {
        width: fit-content;
        font-size: 16px;
        color: var(--brown);
        background-color: var(--primary-color);
    }

    #contactBtn:hover {
        background-color: var(--quinary-color);
        color: var(--brown);
    }

    /* Contact form */

    .contact {
        padding: 2rem;
    }

    .contact h3 {
        text-align: center;
        padding-bottom: 1.5rem;
        font-size: 35px;
    }

    .wpcf7-form {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .wpcf7-form br {
        display: none;
    }

    .wpcf7-form input,
    .client_message {
        width: 100%;
        border-radius: 10px;
        border: 1px solid var(--quaternary-color);
        padding: .5rem;
        font-size: 18px;
        color: var(--brown);
        background-color: var(--forms);
        font-family: proxima-nova, sans-serif;
    }

    /* For Firefox */
    @-moz-document url-prefix() {

        .wpcf7-form input,
        .client_message {
            max-width: -moz-available;
        }
    }

    /* For Chrome and other WebKit-based browsers */
    @media screen and (-webkit-min-device-pixel-ratio:0) {
        /* Safari and Chrome */
        @supports (-webkit-appearance:none) {

            .wpcf7-form input,
            .client_message {
                max-width: -webkit-fill-available;
            }
        }
    }

    .client_box {
        display: flex;
        gap: 1rem;
    }

    .client_name_box,
    .client_contact_box {
        width: 50%;
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .client_message_box {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .submit_btn {
        font-family: proxima-nova, sans-serif;
        font-weight: 700;
        font-style: normal;
        width: fit-content !important;
        padding: .5rem 1rem !important;
        border: none !important;
        border-radius: 10px;
        box-shadow: 3px 3px 5px #5C48337D;
        cursor: pointer;
        font-size: 16px;
        background-color: var(--secondary-color) !important;
        /* Change cursor to pointer on hover */
    }

    .submit_btn:hover {
        color: var(--white);
        background-color: var(--quaternary-color) !important;
        /* Change cursor to pointer on hover */
    }

    .wpcf7-form p {
        position: relative;
        text-align: center;
    }

    .wpcf7-spinner {
        position: absolute;
        top: 25%;
    }

    .wpcf7-not-valid-tip {
        text-align: start;
    }

    .wpcf7-response-output {
        margin: 0 !important;
        border: none !important;
        color: #dc3232;
        text-align: center;
        font-family: proxima-nova, sans-serif;
    }

    /* Contact form modal (Pop-up contact form)*/

    /* The Modal (background) */
    .contact_form_box {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }

    /* Modal Content/Box */
    .contact_form {
        position: relative;
        background-color: var(--primary-color);
        margin: 6% auto;
        /* 6% from the top and centered */
        padding: 20px;
        border-radius: 10px;
        width: 50%;
        /* Could be more or less, depending on screen size */
    }

    /* The Close Button */
    .close {
        position: absolute;
        top: 0;
        right: 1.5rem;
        color: var(--quaternary-color);
        float: right;
        font-size: 55px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: var(--tertiary-color);
        text-decoration: none;
        cursor: pointer;
    }

    /* ADDRESS AND MAPS */

    .store-address {
        padding-bottom: 1.5rem;
    }

    .maps {
        border-radius: 10px;
        border: 1px solid var(--quaternary-color) !important;
        box-shadow: 3px 3px 5px #5C48337D;
        height: 350px;
    }
</style>

<script>
    // Get the modal
    var modal = document.getElementById("contactForm");

    // Get the button that opens the modal
    var btn = document.getElementById("contactBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function () {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    } 
</script>

<?php get_footer() ?>