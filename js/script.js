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

// Close the dropdown if the user clicks outside of it
window.onclick = function (e) {
    if (!e.target.matches('.dropbtn')) {
        var myDropdown = document.getElementsByClassName("dropdown-content");
        if (myDropdown.classList.contains('show')) {
            myDropdown.classList.remove('show');
        }
    }
}

jQuery(document).ready(function($) {
    // Hide filter on screens under 1100px wide
    if ($(window).width() < 1100) {
        $('.product_filter').hide();
    }

    // Toggle filter visibility when filter button is clicked
    $('.filter-button').click(function() {
        $('.product_filter').slideToggle();
    });
});
