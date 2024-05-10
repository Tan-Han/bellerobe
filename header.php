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
        <img src="https://trshansen.online/bellerobe/wp-content/themes/bellerobe/img/belle-robe.svg" alt=""
            class="logo">


        <nav>
            <a href="javascript:void(0);" class="menu-icon" onclick="mobileMenu()">
                <i class="fa fa-bars"></i>
            </a>
            <div class="menu" id="menuLinks">

                <ul>
                    <li><a href="/">Forside</a></li>
                    <li class="dropdown">
                        <p class="dropbtn" onclick="dropdownMenuBrudekjoler()">Brudekjoler<i class="fa-solid fa-caret-down"></i>
                        </p>
                        <div class="dropdown-content" id="dropContentBrudekjoler">
                            <a href="/vare-kategori/brudekjoler/">Brudekjoler</a>
                            <a href="/vare-kategori/brudekjoler/brudekjoler-til-leje/">Bæredygtige brudekjoler</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <p class="dropbtn" onclick="dropdownMenuFestGallakjoler()">Fest- & Gallakjoler<i
                                class="fa-solid fa-caret-down"></i></p>
                        <div class="dropdown-content" id="dropContentGallakjoler">
                            <a href="/vare-kategori/gallakjoler/korte-kjoler/">Korte kjoler</a>
                            <a href="/vare-kategori/gallakjoler/lange-kjoler/">Lange kjoler</a>
                            <a href="/vare-kategori/gallakjoler/">Alle fest- & gallakjoler</a>
                        </div>
                    </li>
                    <li><a href="/vare-kategori/konfirmationskjoler/">Konfirmationskjoler</a></li>
                    <li><a href="/vare-kategori/sko/">Sko</a></li>
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

    <script>
        function mobileMenu() {
            var menu = document.getElementById("menuLinks");
            menu.classList.toggle("show");
        }

        // Add event listener to the menu icon
        document.getElementById("menuIcon").addEventListener("click", mobileMenu);

        // Add event listeners to menu items to close menu when clicked
        var menuItems = document.querySelectorAll("#menuLinks ul li a");
        menuItems.forEach(function (item) {
            item.addEventListener("click", function () {
                var menu = document.getElementById("menuLinks");
                menu.classList.remove("show");
            });
        });


        // Function to toggle dropdown content for Brudekjoler
        function dropdownMenuBrudekjoler() {
            var dropdownContent = document.getElementById("dropContentBrudekjoler");
            dropdownContent.classList.toggle("show");
        }

        // Function to toggle dropdown content for Fest- & Gallakjoler
        function dropdownMenuFestGallakjoler() {
            var dropdownContent = document.getElementById("dropContentGallakjoler");
            dropdownContent.classList.toggle("show");
        }

        // Add event listener to the menu icon
        document.querySelector(".menu-icon").addEventListener("click", mobileMenu);

        // Add event listener to close dropdown menus when clicking outside
        window.onclick = function (event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>