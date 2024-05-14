// MOBILE MENU

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

// DROPDOWN MENU

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
window.addEventListener('click', function (event) {
    // Close all dropdowns except the one clicked
    var dropdowns = document.getElementsByClassName("dropdown-content");
    for (var i = 0; i < dropdowns.length; i++) {
        var dropdown = dropdowns[i];
        if (event.target.closest('.dropbtn') !== dropdown.previousElementSibling && dropdown.classList.contains('show')) {
            dropdown.classList.remove('show');
        }
    }
});

// PRODUCT FILTER - OPEN AND CLOSE ON SMALLER SCREENS

// Function to toggle product filter visibility and update button text

document.addEventListener('DOMContentLoaded', function () {
    function toggleProductFilter() {
        var productFilter = document.querySelector('product_filter');
        var filterButton = document.querySelector('.filter-button');
        productFilter.classList.toggle('show');
        // Change button text based on filter visibility
        if (productFilter.classList.contains('show')) {
            filterButton.textContent = 'Luk filter';
        } else {
            filterButton.textContent = 'Filter';
        }
    }

    // Close the product filter when clicking outside of it
    window.onclick = function (event) {
        if (!event.target.matches('.filter-button')) {
            var productFilter = document.querySelector('.product_filter');
            var filterButton = document.querySelector('.filter-button');
            if (productFilter.classList.contains('show')) {
                productFilter.classList.remove('show');
                filterButton.textContent = 'Filter'; // Change button text back to 'Filter'
            }
        }
    };
});


// Dropdown menues for about us page
// Get the dropdown button and content
// var dropdownBtnAbout = document.getElementById("dropdownBtn_about_us");
// var dropdownContentAbout = document.getElementById("myDropdown_about_us");

// // Toggle the dropdown content when the button is clicked
// dropdownBtnAbout.addEventListener("click", function () {
//     dropdownContentAbout.classList.toggle("show");
// });

// // Close the dropdown content if the user clicks outside of it
// window.addEventListener("click", function (event) {
//     if (!event.target.matches("#dropdownBtn_about_us")) {
//         if (dropdownContentAbout.classList.contains("show")) {
//             dropdownContentAbout.classList.remove("show");
//         }
//     }
// });


