<footer>
    <div class="footer_columns">
        <div class="footer_contact">
            <img src="https://trshansen.online/bellerobe/wp-content/themes/bellerobe/img/bellerobe_u_cirkel.svg" alt=""
                class="footer_logo">

            <?php $productLoop = new WP_Query(
                array(
                    "post_type" => "address",
                    "posts_per_page" => -1,
                )
            ) ?>

            <?php while ($productLoop->have_posts()):
                $productLoop->the_post() ?>

                <div class="address_footer">
                    <p>Belle Robe Brude- & Festkjoler</p>
                    <p><?php the_field('street_number') ?>,</p>
                    <p><?php the_field('postal_code') ?></p>
                </div>

                <div class="contact_footer">
                    <p><a href="tel:<?php the_field('phone_number') ?>">
                            +45 <?php the_field('phone_number') ?>
                        </a></p>
                    <a href="mailto:<?php the_field('mail') ?>">
                        <p>
                            <?php the_field('mail') ?>
                        </p>
                    </a>
                </div>

            <?php endwhile ?>
        </div>

        <div class="footer_cat_links">
            <a href="/brudekjoler/">Brudekjoler</a>
            <a href="/gallakjoler/">Fest- & Gallakjoler</a>
            <a href="/konfirmationskjoler/">Konfirmationskjoler</a>
            <a href="/sko/">Sko</a>
        </div>

        <div class="footer_info_links">
            <a href="/booking/">Book tid</a>
            <a href="/om_os/">Om os</a>
            <a href="">Handelsbetingelser</a>
            <a href="">Privatlivspolitik</a>
        </div>

        <div class="footer_follow">
            <p>Følg os</p>
            <div class="social_icons">

                <?php $productLoop = new WP_Query(
                    array(
                        "post_type" => "social_media",
                        "posts_per_page" => -1,
                    )
                ) ?>

                <?php while ($productLoop->have_posts()):
                    $productLoop->the_post() ?>

                    <a href="<?php the_field("facebook") ?>" target=”_blank” class="facebook-link">
                        <div class="facebook">
                            <i class="fa-brands fa-facebook-f"></i>
                        </div>
                    </a>
                    <a href="<?php the_field("instagram") ?>" target=”_blank” class="instagram-link">
                        <div class="instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                    </a>
                    <a href="<?php the_field("tiktok") ?>" target=”_blank” class="tiktok-link">
                        <div class="tiktok">
                            <i class="fa-brands fa-tiktok"></i>
                        </div>
                    </a>
                </div>

            <?php endwhile ?>

        </div>
    </div>

    <div class="footer_copy_rights">
        <p>© Belle Robe</p>
        <p>CVR: 33827857</p>
    </div>

    <div class="footer_payment">
        <i class="fa-brands fa-cc-visa"></i>
        <i class="fa-brands fa-cc-mastercard"></i>
        <i class="fa-brands fa-cc-discover"></i>
        <i class="fa-brands fa-cc-diners-club"></i>
        <i class="fa-brands fa-cc-jcb"></i>
    </div>
</footer>

<?php wp_footer() ?>

</body>

</html>