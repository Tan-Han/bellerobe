<?php get_header() ?>


<main>

    <section>
        <h2>Book tid</h2>
        <div class="booking-list">
            <div class="booking-card">
                <?php
                $bookingWeddingDress = get_field('provning_af_brudekjole');
                if ($bookingWeddingDress): ?>

                    <img class="booking-img"
                        src="<?php echo esc_url($bookingWeddingDress['dress_img']['sizes']['medium']); ?>" alt="">
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
                        <p><?php echo $bookingWeddingDress['booking_description']; ?></p>
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
            <div class="booking-card"></div>
            <div class="booking-card"></div>
            <div class="booking-card"></div>
            <div class="booking-card"></div>
        </div>
    </section>
    <section>
        <div class="opening-hours">
        <h2>Åbningstider</h2>
            <div class="address-box">
                <?php
                $openingHours = get_field('opening_hours');
                if ($openingHours): ?>
                    <p>Mandag: <?php echo $openingHours['mandag'] ?></p>
                    <p>Tirsdag: <?php echo $openingHours['tirsdag'] ?></p>
                    <p>Onsdag: <?php echo $openingHours['onsdag'] ?></p>
                    <p>Torsdag: <?php echo $openingHours['torsdag'] ?></p>
                    <p>Fredag: <?php echo $openingHours['fredag'] ?></p>
                    <p>Lørdag: <?php echo $openingHours['lordag'] ?></p>
                    <p>Søndag og helligdage: <?php echo $openingHours['sondag'] ?></p>
                <?php endif; ?>
        </div>
        <div class="address">
            <h2>Adresse</h2>
            <div class="address-box">
                <?php
                $address = get_field('location');
                if ($address): ?>
                    <p><?php echo $address['address'] ?></p>
                    <div class="embedded-maps">
                        <?php echo $address['google_maps'] ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

</main>

<style>
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
        height: 150px;
    }

    .booking-img {
        width: 20%;
        height: 100%;
        object-fit: cover;
    }

    .booking-info {
        padding: 1.5rem;
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .booking-card-headline {
        display: flex;
        gap: 1rem;
    }

    .price-time {
        display: flex;
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
</style>

<?php get_footer() ?>