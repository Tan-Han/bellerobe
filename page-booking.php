<?php get_header() ?>


<main>

<!-- Knap til brudekjole prøvning -->
    <!-- Google Calendar Appointment Scheduling begin -->
    <link href="https://calendar.google.com/calendar/scheduling-button-script.css" rel="stylesheet" class="wedding-dress-btn">
    <script src="https://calendar.google.com/calendar/scheduling-button-script.js" async></script>
    <script>
    (function() {
    var target = document.currentScript;
    window.addEventListener('load', function() {
        calendar.schedulingButton.load({
        url: 'https://calendar.google.com/calendar/appointments/schedules/AcZssZ3dfzNhX3Dbm8eYZF1PHTrTYGqW7ZPnZOdHddNivtZhD6Jk_XccNHxsNS-UHsuHj-VfqhIcBd8w?gv=true',
        color: '#ff0000',
        label: "Book pr\xF8vning af brudekjole",
        target,
        });
    });
    })();
    </script>
    <!-- end Google Calendar Appointment Scheduling -->

</main>

<style>
.qxCTlb {
    color: var(--white);
    background-color: var(--tertiary-color)!important;
    font-weight: 700;
    border-radius: 10px!important;
    padding: .8rem!important 1rem!important;
}
</style>

<?php get_footer() ?>