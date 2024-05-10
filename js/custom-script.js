(function($) {
    $(document).ready(function() {
        function mobileMenu() {
            var menu = $("#menuLinks");
            menu.toggleClass("show");
        }

        $("#menuIcon").on("click", mobileMenu);
    });
})(jQuery);
