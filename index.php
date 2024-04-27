<?php get_header() ?>
<main>
    <?php while (have_posts()):
        the_post() ?>
        <?php the_content() ?>
    <?php endwhile ?>
</main>


<script>
    $(".flex-viewport")
  // tile mouse actions
  .on("mouseover", function() {
    $(this)
      .children(".woocommerce-product-gallery__image img")
      .css({ transform: "scale(" + $(this).attr("data-scale") + ")" });
  })
  .on("mouseout", function() {
    $(this)
      .children(".woocommerce-product-gallery__image img")
      .css({ transform: "scale(1)" });
  })
  .on("mousemove", function(e) {
    $(this)
      .children(".woocommerce-product-gallery__image img")
      .css({
        "transform-origin":
          ((e.pageX - $(this).offset().left) / $(this).width()) * 100 +
          "% " +
          ((e.pageY - $(this).offset().top) / $(this).height()) * 100 +
          "%"
      });
  });

</script>

<?php get_footer() ?>