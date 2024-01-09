<?php
/**
 * Application - Confirmation
 * @since Sprint 20
 */

?>

<div class="form__block form__block--last">
	<div class="js-accordion-title application-accordion__title">
		<a href="#">
			<h2 class="js-accordion-title form__block__title">Confirm</h2>
		</a>
	</div>
	<div class="application-accordion__content">
		<div class="js-accordion-inner form__block__inner application-accordion__inner">
			
			<?php include '../parts/application/form-elements/element-confirmation.php'; ?>

			<div class="form__element form__button-group no-print">
				<button id="continue-to-terms" class="button" name="button" value="Submit">Continue to terms and conditions</button>
			</div>
		</div>
	</div>
</div>