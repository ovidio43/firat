jQuery(document).ready(function() {
    function getHeightWidthElements() {
        if (jQuery("#sidebar-right").css('top') == "auto") {
            var w = jQuery(".wrapper").width() - (jQuery(".enabled_twitter_box").width() + jQuery("#sidebar-right").width());

            jQuery("#main-content").css("max-width", w - 2);
            jQuery("#main-content").width(w);
        } else {
            var w = jQuery(".wrapper").width() - (jQuery(".enabled_twitter_box").width());
            jQuery("#main-content").css("max-width", w - 1);
            jQuery("#main-content").width(w);
        }
     
    }
    getHeightWidthElements();
    jQuery(window).resize(function() {
        getHeightWidthElements();
    });
    jQuery(window).on("orientationchange", function() {

    });
    function activeMenuMobile(selectorMain, selectorHidden) {
        jQuery(selectorMain).bind('click', function() {

            if (jQuery(this).attr('rel') == 'nav-hidden') {
                jQuery('.active-block').css('display', 'none');
                jQuery('.active-nav').removeClass('active-nav');
                jQuery('.mob-nav-item').attr('rel', 'nav-hidden');
                jQuery(selectorHidden).css('display', 'block').addClass('active-block');
                jQuery(this).attr('rel', 'nav-show').addClass('active-nav');
            } else {
                jQuery(selectorHidden).css('display', 'none').removeClass('active-block');
                jQuery(this).attr('rel', 'nav-hidden').removeClass('active-nav');
            }
        });
    }
    activeMenuMobile('.mob-menu', '.menu-main-menu-container');
    activeMenuMobile('.tweets', '#sidebar-left');
    activeMenuMobile('.test-dates-btb', '#sidebar-right');
    activeMenuMobile('.login-btb', '.login');



});
