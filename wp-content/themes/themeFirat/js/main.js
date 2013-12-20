jQuery(document).ready(function() {


	function getHeightWidthElements() {
		jQuery("#main-content").width(jQuery(".wrapper").width()-(jQuery("#sidebar-left").width()+jQuery("#sidebar-right").width()));
	}
    getHeightWidthElements();
    jQuery(window).resize(function() {
        getHeightWidthElements();
    });
    jQuery(window).on("orientationchange", function() {

    });
});
