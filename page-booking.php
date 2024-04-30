<?php get_header() ?>


<main>

    <section>
        <h2>Book tid</h2>
        <div class="booking-card">
            <?php
            $bookingWeddingDress = get_field('provning_af_brudekjole');
            if( $bookingWeddingDress ): ?>

            <img src="<?php echo esc_url( $bookingWeddingDress['dress_img']['sizes']['thumbnail'] ); ?>" alt="">
            <div class="booking-info">
                <div class="booking-card-headline">
                    <h3><?php the_sub_field("booking_headline")?></h3>
                    <p>DKK <?php the_sub_field("booking_price")?> | <?php the_sub_field("booking_time")?></p>
                </div>
                <p><?php the_sub_field("booking_description")?></p>
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
    </section>

</main>

<style>



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