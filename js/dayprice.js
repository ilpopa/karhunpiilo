
jQuery(document).ready( function() {
    jQuery( ".date_available" ).click(function() {
        var $price = jQuery('.datepick-days-row .datepick-current-day').length*45
        console.log(  $price );
    });
});