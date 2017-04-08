jQuery(document).ready(function ($) {
    var $grid = jQuery( '.grid' ).isotope({
        // Options
    });
// filter items on button click
    jQuery('.filter-button-group').on( 'click', 'button', function() {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
    });
});