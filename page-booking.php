<?php get_header() ?>


<main>

    <section>
        <h2 class="booking-headline">Book tid</h2>
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
    <section>
        <div class="opening-hours">
            <h2 class="booking-headline">Åbningstider</h2>
            <div class="opening-hours-box info-box">
                <?php
                $openingHours = get_field('opening_hours');
                if ($openingHours): ?>
                    <b>Mandag:&nbsp;</b>
                    <p><?php echo $openingHours['mandag'] ?></p>
                    <b>Tirsdag:&nbsp;</b>
                    <p><?php echo $openingHours['tirsdag'] ?></p>
                    <b>Onsdag:&nbsp;</b>
                    <p><?php echo $openingHours['onsdag'] ?></p>
                    <b>Torsdag:&nbsp;</b>
                    <p><?php echo $openingHours['torsdag'] ?></p>
                    <b>Fredag:&nbsp;</b>
                    <p><?php echo $openingHours['fredag'] ?></p>
                    <b>Lørdag:&nbsp;</b>
                    <p><?php echo $openingHours['lordag'] ?></p>
                    <b>Søndag og helligdage:&nbsp;</b>
                    <p><?php echo $openingHours['sondag'] ?></p>
                    <p class="more-times"><?php echo $openingHours['flere-tider'] ?></p>
                <?php endif; ?>
            </div>
            <div class="address">
                <h2 class="booking-headline">Adresse</h2>
                <div class="address-box info-box">
                    <?php
                    $address = get_field('location');
                    if ($address): ?>
                        <p><?php echo $address['address'] ?></p>

                        <iframe
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
    }

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
        height: 250px;
        align-items: center;
    }

    .img-box {
        width: 20%;
        height: 100%;
    }

    .booking-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .booking-info {
        padding: 1.5rem;
        display: flex;
        flex-direction: column;
        gap: 1rem;
        width: 80%;
    }

    .booking-card-headline {
        display: flex;
        gap: 1rem;
        align-items: first baseline;
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
        -webkit-line-clamp: 3;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: normal;
    }

    .qxCTlb {
        color: var(--white);
        background-color: var(--tertiary-color) !important;
        font-weight: 700;
        border-radius: 10px !important;
        padding: .8rem 1rem !important;
        font-family: proxima-nova, sans-serif !important;
        line-height: normal !important;
        letter-spacing: normal !important;
        font-size: 18px;
    }

    .opening-hours-box {
        background-color: var(--secondary-color);

    }

    .more-times {
        font-style: italic;
    }
</style>

<?php get_footer() ?>