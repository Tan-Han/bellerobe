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

function toggleProductFilter() {
    var filter = document.getElementById("productFilter");
    var button = document.querySelector(".filter-button");
    if (filter.style.display === "none") {
      filter.style.display = "block";
      button.innerHTML = "Luk filter"; // Change button text
    } else {
      filter.style.display = "none";
      button.innerHTML = "Filter"; // Change button text
    }
  }

// DROPDOWN MENU - OM OS PAGE

// Get the dropdown button and content
var dropdownBtnAbout = document.getElementById("dropdownBtn_about_us");
var dropdownContentAbout = document.getElementById("myDropdown_about_us");

// Toggle the dropdown content when the button is clicked
dropdownBtnAbout.addEventListener("click", function () {
    dropdownContentAbout.classList.toggle("show");
});

// Close the dropdown content if the user clicks outside of it
window.addEventListener("click", function (event) {
    if (!event.target.matches("#dropdownBtn_about_us")) {
        if (dropdownContentAbout.classList.contains("show")) {
            dropdownContentAbout.classList.remove("show");
        }
    }
});