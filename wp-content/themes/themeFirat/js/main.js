jQuery(document).ready(function() {


	function getHeightWidthElements() {
        if(jQuery("#sidebar-right").css('top')=="auto"){
            jQuery("#main-content").width(jQuery(".wrapper").width()-(jQuery("#sidebar-left").width()+jQuery("#sidebar-right").width()));
        }else{
            jQuery("#main-content").width(jQuery(".wrapper").width()-(jQuery("#sidebar-left").width()));
        }
	}
    getHeightWidthElements();
    jQuery(window).resize(function() {
        getHeightWidthElements();
    });
    jQuery(window).on("orientationchange", function() {

    });

    jQuery('.mob-menu').bind('click', function(){
    	if(jQuery(this).attr('rel')=='nav-hidden'){
    		jQuery('.menu-main-menu-container').css('display','block');
    		jQuery(this).attr('rel','nav-show').addClass('active-nav'); 		
    	}else{
    		jQuery('.menu-main-menu-container').css('display','none');
    		jQuery(this).attr('rel','nav-hidden').removeClass('active-nav');  
    	}
    });
    jQuery('.tweets').bind('click', function(){
    	if(jQuery(this).attr('rel')=='nav-hidden'){
    		jQuery('#sidebar-left').css('display','block');
    		jQuery(this).attr('rel','nav-show').addClass('active-nav'); 		
    	}else{
    		jQuery('#sidebar-left').css('display','none');
    		jQuery(this).attr('rel','nav-hidden').removeClass('active-nav'); 
    	}
    }); 
    jQuery('.test-dates-btb').bind('click', function(){
        if(jQuery(this).attr('rel')=='nav-hidden'){
            jQuery('#sidebar-right').css('display','block');
            jQuery(this).attr('rel','nav-show').addClass('active-nav');         
        }else{
            jQuery('#sidebar-right').css('display','none');
            jQuery(this).attr('rel','nav-hidden').removeClass('active-nav'); 
        }
    }); 
       
    
});
