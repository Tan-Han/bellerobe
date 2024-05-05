<footer>
    <div class="footer_columns">
        <div class="footer_contact">
            <img src="https://trshansen.online/bellerobe/wp-content/themes/bellerobe/img/Belle%20Robe%20logo.svg" alt="">
            <div class="adress">
                <p>Belle Robe Brude- & Festkjoler</p>
                <?php $address = get_field('location');
                if ($address): ?>
                    <p class="store-address"><?php echo $address['address'] ?></p>
                <?php endif ?>
            </div>
            <div class="contact">
                <a href="tel:<?php the_field("phone_number") ?>">
                    <p><?php the_field("phone_number") ?></p>
                </a>
                <a href="mailto:<?php the_field("mail") ?>">
                    <p><?php the_field("mail") ?></p>
                </a>
            </div>
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
        </div>

        <div class="footer_follow">
            <p>Følg os</p>
            <div class="social_icons">
                <a href="" class="facebook-link">
                    <div class="facebook">
                    <i class="fa-brands fa-facebook-f"></i>
                    </div>
                </a>
                <a href="" class="instagram-link">
                    <div class="instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                </a>
                <a href="" class="tiktok-link">
                    <div class="tiktok">
                        <i class="fa-brands fa-tiktok"></i>
                    </div>
                </a>
            </div>
            <a href="">Handelsbetingelser</a>
            <a href="">Privatlivspolitik</a>
        </div>

        <div class="footer_copy_rights">
                    <p>© Belle Robe</p>
                    <p>CVR: 33827857</p>
        </div>

        <div class="footer_payment">
                    <p>Icons - Payment</p>
        </div>
</footer>



<?php wp_footer() ?>

</body>

</html>