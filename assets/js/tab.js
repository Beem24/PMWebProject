$(document).ready(function() {
    jQuery('.tabs_2 .tab_2-links a').on('click', function(e)  {
        var currentAttrValue = jQuery(this).attr('href');
 
        // Show/Hide Tabs
       $('.tabs_2 ' + currentAttrValue).fadeIn(1000).siblings().hide();
 
        // Change/remove current tab to active
        $(this).parent('li').addClass('active').siblings().removeClass('active');
 
        e.preventDefault();
    });
});