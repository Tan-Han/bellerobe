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

// Product filter script

// Function to toggle product filter visibility
function toggleProductFilter() {
    var productFilter = document.getElementById("productFilter");
    productFilter.classList.toggle("show");
}

// Function to hide product filter on screens less than 1100px wide
function hideProductFilterOnSmallScreen() {
    var screenWidth = window.innerWidth;
    var productFilter = document.getElementById("productFilter");
    if (screenWidth < 1100) {
        productFilter.classList.remove("show");
    }
}

// Close the product filter if the user clicks outside of it
window.onclick = function (e) {
    if (!e.target.matches('.filter-button')) {
        var productFilter = document.getElementById("productFilter");
        if (productFilter.classList.contains('show')) {
            productFilter.classList.remove('show');
        }
    }
}

// Event listener for window resize
window.addEventListener('resize', function(event){
    hideProductFilterOnSmallScreen();
});

// Initially hide product filter on page load if screen width is less than 1100px
document.addEventListener('DOMContentLoaded', function() {
    hideProductFilterOnSmallScreen();
});

