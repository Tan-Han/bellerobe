<?php get_header() ?>


<main>
<!-- Google Calendar Appointment Scheduling begin -->
<link href="https://calendar.google.com/calendar/scheduling-button-script.css" rel="stylesheet">
<script src="https://calendar.google.com/calendar/scheduling-button-script.js" async></script>
<script>
(function() {
  var target = document.currentScript;
  window.addEventListener('load', function() {
    calendar.schedulingButton.load({
      url: 'https://calendar.google.com/calendar/appointments/schedules/AcZssZ3dfzNhX3Dbm8eYZF1PHTrTYGqW7ZPnZOdHddNivtZhD6Jk_XccNHxsNS-UHsuHj-VfqhIcBd8w?gv=true',
      color: '#779a66',
      label: "Book pr\xF8vning",
      target,
    });
  });
})();
</script>
<!-- end Google Calendar Appointment Scheduling -->



<!-- Google Calendar Appointment Scheduling begin -->
<iframe src="https://calendar.google.com/calendar/appointments/schedules/AcZssZ3dfzNhX3Dbm8eYZF1PHTrTYGqW7ZPnZOdHddNivtZhD6Jk_XccNHxsNS-UHsuHj-VfqhIcBd8w?gv=true" style="border: 0" width="100%" height="600" frameborder="0"></iframe>
<!-- end Google Calendar Appointment Scheduling -->

</main>

<style>

</style>

<?php get_footer() ?>