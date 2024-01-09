<?php
/**
 * Application - step 3 - completed
 * @since Sprint 13
 */

?>

<div class="form__block form__block--first form__block--current">
	<div class="js-accordion-title application-accordion__title">
		<a href="#">
			<h2 class="form__block__title">Personal information</h2>
		</a>
	</div>
	<div class="application-accordion__content">
		<div class="js-accordion-inner form__block__inner application-accordion__inner">
			
			<?php
			include '../parts/application/data/data-about-you.php';
			include '../parts/application/data/data-personal-details.php';
			?>
			
			<div class="form__element form__button-group no-print">
				<a href="#" class="button button--cancel">Edit personal details</a>
			</div>
		</div>
	</div>
</div>
