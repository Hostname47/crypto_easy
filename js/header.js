$("#header-logo-container").on({
    mouseenter: function() {
        $("#header-logo").attr("src", "assets/images/logos/colored-large.png");
    },
    mouseleave: function() {
        $("#header-logo").attr("src", "assets/images/logos/large.png");
    }
});