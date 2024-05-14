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