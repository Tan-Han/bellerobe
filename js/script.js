// MOBILE MENU

function mobileMenu() {
    var menu = document.getElementById("menuLinks");
    if (menu.style.display === "block") {
        menu.style.display = "none";
    } else {
        menu.style.display = "block";
    }
}

window.onclick = function(event) {
    var menu = document.getElementById("menuLinks");
    var icon = document.getElementById("menuIcon");
    var menuLinks = document.querySelectorAll("#menuLinks a"); // Select all menu links

    // Check if the clicked element is not the menu or menu icon
    if (event.target !== menu && event.target !== icon) {
        // Check if the clicked element is not a menu link
        var isMenuLink = false;
        for (var i = 0; i < menuLinks.length; i++) {
            if (event.target === menuLinks[i]) {
                isMenuLink = true;
                break;
            }
        }
        // Close the menu only if the clicked element is not a menu link
        if (!isMenuLink) {
            menu.style.display = "none";
        }
    }
}

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

function toggleProductFilter() {
    var filter = document.getElementById("productFilter");
    var button = document.querySelector(".filter-button");
    if (filter.style.display === "none" || filter.style.display === "") {
        filter.style.display = "block";
        button.innerHTML = "Luk filter"; // Change button text
    } else {
        filter.style.display = "none";
        button.innerHTML = "Filter"; // Change button text
    }
}

// DROPDOWN MENU - OM OS PAGE

// Get the dropdown button and content
var dropdownBtn_about_us = document.getElementById("dropdownBtn_about_us");
var dropdownContent_about_us = document.getElementById("myDropdown_about_us");

// Toggle the dropdown content when the button is clicked
dropdownBtn_about_us.addEventListener("click", function () {
    dropdownContent_about_us.classList.toggle("show");
});

// Close the dropdown content if the user clicks outside of it
window.addEventListener("click", function (event) {
    if (!event.target.matches("#dropdownBtn_about_us")) {
        if (dropdownContent_about_us.classList.contains("show")) {
            dropdownContent_about_us.classList.remove("show");
        }
    }
});


