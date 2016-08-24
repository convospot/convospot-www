(function($) {

    "use strict";

    $("header").headroom({
        "offset": 100,
        "tolerance": 5,
        "classes": {
            "initial": "animated",
            "pinned": "slideDown",
            "unpinned": "slideUp"
        }
    });

    var nav = responsiveNav(".nav-collapse");
    $(window).resize(function() {
        nav.close();
    });

})(jQuery);
