<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4411d10f05.js" crossorigin="anonymous"></script>
    <title><?php bloginfo("name") ?></title>
    <?php wp_head() ?>
</head>

<body>
    <div class="logo-top">
        <img src="https://trshansen.online/bellerobe/wp-content/themes/bellerobe/img/belle-robe.svg" alt="" class="logo">

        <nav>
            <ul>
                <li><a href="/">Forside</a></li>
                <li><a href="/product-category/?product_cat=brudekjoler/">Brudekjoler</a></li>
                <li><a href="/product-category/?product_cat=gallakjoler/">Fest- & Gallakjoler</a></li>
                <li><a href="/product-category/?product_cat=konfirmationskjoler/">Konfirmationskjoler</a></li>
                <li><a href="/product-category/?product_cat=sko/">Sko</a></li>
                <li><a href="/om_os/">Om os</a></li>
                <li><a href="/booking/">Book tid</a></li>
            </ul>
            <div class="cart-btn-outer-box">
                <div class="cart-btn-box">
                    <span id="cartCount"><?php echo count_item_in_cart() ?></span>
                    <a href="/cart/" class="cart-btn">Kurv<i class='fas fa-shopping-basket'></i></a>
                </div>
            </div>

        </nav>
    </div>