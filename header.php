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
        <a href="/" class="logo-link"><img src="https://trshansen.online/bellerobe/wp-content/themes/bellerobe/img/belle-robe.svg" alt=""
                class="logo"></a>


        <nav class="navbar">

            <i class="fa fa-bars" id="menuIcon" onclick="mobileMenu()"></i>


            <div class="menu" id="menuLinks">

                <ul>
                    <li><a href="/">Forside</a></li>
                    <li class="dropdown">
                        <p class="dropbtn" onclick="dropdownMenuBrudekjoler()">Brudekjoler<i
                                class="fa-solid fa-caret-down"></i>
                        </p>
                        <div class="dropdown-content" id="dropContentBrudekjoler">
                            <a href="/vare-kategori/brudekjoler/">Brudekjoler</a>
                            <a href="/vare-kategori/brudekjoler/brudekjoler-til-leje/">Bæredygtige brudekjoler</a>
                            <a href="/vare-kategori/brudekjoler/kun-fysisk-brudekjoler/">Kun i butikken</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <p class="dropbtn" onclick="dropdownMenuFestGallakjoler()">Fest- & Galla<i
                                class="fa-solid fa-caret-down"></i></p>
                        <div class="dropdown-content" id="dropContentGallakjoler">
                            <a href="/vare-kategori/gallakjoler/korte-kjoler/">Korte kjoler</a>
                            <a href="/vare-kategori/gallakjoler/lange-kjoler/">Lange kjoler</a>
                            <a href="/vare-kategori/gallakjoler/kun-fysisk-gallakjoler/">Kun i butikken</a>
                            <a href="/vare-kategori/gallakjoler/">Alle fest- & gallakjoler</a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <p class="dropbtn" onclick="dropdownMenuKonfirmation()">Konfirmation<i
                                class="fa-solid fa-caret-down"></i></p>
                        <div class="dropdown-content" id="dropContentKonfirmation">
                        <a href="/vare-kategori/konfirmation/konfirmationskjoler/">Konfirmation</a>
                        <a href="/vare-kategori/konfirmation/kun-fysisk-konfirmationskjoler/">Kun i butikken</a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <p class="dropbtn" onclick="dropdownMenuSko()">Sko & Tilbehør<i
                                class="fa-solid fa-caret-down"></i></p>
                        <div class="dropdown-content" id="dropContentSko">
                            <a href="/vare-kategori/sko-tilbehor/sko/">Sko</a>
                            <a href="/vare-kategori/sko-tilbehor/tilbehor/">Tilbehør</a>
                            <a href="/vare-kategori/sko-tilbehor/kun-fysisk-sko-tilbehor/">Sko & Tilbehør - Kun i butikken</a>
                        </div>
                    </li>
                    <li><a href="/om_os/">Om os</a></li>
                    <li><a href="/booking/">Book tid</a></li>
                </ul>

                <div class="cart-btn-outer-box">
                    <div class="cart-btn-box">
                        <span id="cartCount"><?php echo count_item_in_cart() ?></span>
                        <a href="/cart/" class="cart-btn">Kurv<i class='fas fa-shopping-basket'></i></a>
                    </div>
                </div>

            </div>
        </nav>
    </div>