<?php
/**
 * Search form
 * @since initial
 */

?>

<div class="modal micromodal-slide no-print" id="modal-search" aria-hidden="true">
	<div class="modal__overlay" tabindex="-1" data-micromodal-close>
		<div class="modal__container background-dark spacing-both" role="dialog" aria-modal="true" aria-labelledby="search-label" data-scroll-lock-scrollable>
			<div class="row">
				<div class="s12 col">
					<button class="js-modal-close js-on-close reset-button-styles modal__close" aria-label="Close this dialog window">&times;</button>
				</div>
			</div>
			<div class="search-form">
				<div class="row">
					<div class="s12 col">
						<form>
						<div class="search-form__inner">
							<label id="search-label" for="search">What would you like to learn?</label>
							<div class="search-form__container">
								<input id="search" class="js-search-field search-form__search" type="search" placeholder="Search for..." autofocus="autofocus" autocomplete="on">

								<!-- Reset search. -->
								<a href="#" class="js-reset-search button button--search search-form__reset reset-button-styles" aria-label="Clear"><span class="fa-light fa-xmark"></span></a>

								<!-- Submit search. -->
								<button class="button button--search reset-button-styles" aria-label="Search"><span class="fa-light fa-chevron-circle-right"></span></button>
							</div>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>				
</div>
