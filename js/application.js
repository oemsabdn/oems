/*------------------------------------*\
  Application-specific functions.
\*------------------------------------*/


/**
 * Set the width of select2 elements to be the full width of
 * their container.
 *
 */

function recalcSelectWidth() {
	$('.form__element').each(function() {
		var formGroup = $(this),
			formgroupWidth = formGroup.outerWidth();

		formGroup.find('.select2-container').css('width', formgroupWidth);

	});
}






/**
 * Select2
 *
 * Initialise the secect2 library.
 *
 */

 // Set up a select field with search.
$('.js-select').select2({
	placeholder: 'Select from list...',
	width: '100%',
});

$('.js-select--auto-width').select2({
	placeholder: 'Select from list...',
});

// Set up a select field with no search.
$('.js-select--no-search').select2({
	minimumResultsForSearch: -1,
	placeholder: 'Select from list...',
	width: '100%',
});

$('.js-select--no-search--auto-width').select2({
	minimumResultsForSearch: -1,
	placeholder: 'Select from list...',
});






$(window).on('resize', function() {

	/**
	 * Recalculate the width of select2 elements.
	 *
	 */

	recalcSelectWidth();

});
