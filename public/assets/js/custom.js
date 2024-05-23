
// TABS JS

function makeTabActive() {

    var url = window.location.href;

    var indexof = url.indexOf("#");

    if (indexof > 0) {

        var activeTab = url.substring(indexof + 1);

        if (typeof activeTab != 'undefined' && activeTab != '' && activeTab != '#') {

            // to dispaly give tab content

            jQuery(".tab-pane").removeClass("active in show");

            jQuery("#" + activeTab).addClass("active in show")

            // to make active given tab

            jQuery(".nav-tabs li a").removeClass("active");

            jQuery(".nav-tabs li a[href='#" + activeTab + "']").addClass("active");
        }
    }
}

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 500) {
        $(".header").addClass("sticky_header");
        $('.header_logo').attr({ 'src': `assets/images/logo.png`, 'alt': 'New Image Description'
    });
} else {
        $('.header_logo').attr({ 'src': `assets/images/logo-white.png`, 'alt': 'New Image Description'});
        $(".header").removeClass("sticky_header");
    }
});