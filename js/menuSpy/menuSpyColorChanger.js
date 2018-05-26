var menuSpyColorChanger = null;

$(document).ready(function() {
    menuSpyColorChanger = new MenuSpyColorChanger();
});

function MenuSpyColorChanger() {

    // Configuration
    var blackColorClassName = "menuSpyItemSpan_blackColor";

    // Cache needed elements
    var linkElements = $("header:first").find("a");
    var spanElements = linkElements.find("span");
    var presetionAreaElement = $("#presentationArea:first");

    // Local variables
    // colorChangerThreshold = top side presentation area in pixels + a quarter of its height)
    var colorChangerThreshold = presetionAreaElement.offset().top + presetionAreaElement.outerHeight(true)/4;

    // Every time the user scrolls the page, check his position from the top page
    $(document).scroll( function() {

        var distanceFromTop = $(document).scrollTop();

        // Check if the user goes over the color changer threshold 
        if( distanceFromTop > colorChangerThreshold) {

            // Make every menu item black, if needed
            spanElements.each(function() {

                var thisSpan = $(this);

                if(!thisSpan.hasClass(blackColorClassName)) {
                    spanElements.addClass(blackColorClassName);
                }

            });

            // Make every menu circle black, if needed
            linkElements.each(function() {

                var thisLink = $(this);
                var isBlackAttribute = thisLink.attr("isBlack");
                var isBlack = ( isBlackAttribute == "true" && isBlackAttribute != undefined );

                if(!isBlack) {
                    thisLink.attr("isBlack", "true");
                }

            });

        } else {

            // Make every menu item white, if needed
            spanElements.each(function() {

                var thisSpan = $(this);
                if(thisSpan.hasClass(blackColorClassName)) {
                    thisSpan.removeClass(blackColorClassName);
                }

            })

            // Make every menu circle white, if needed
            linkElements.each(function() {

                var thisLink = $(this);

                if(thisLink.attr("isBlack") == "true") {
                    thisLink.removeAttr("isBlack");
                }

            });

        }

    });
}