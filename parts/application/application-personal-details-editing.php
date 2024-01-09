<?php
/**
 * Application - step 3 - completed
 * @since Sprint 20
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
			
			<?php include '../parts/application/data/data-about-you.php'; ?>
			
			<p>If you need to change any of this information, please email <a href="mailto:studentrecords@abdn.ac.uk">studentrecords@abdn.ac.uk</a> and we can make these changes for you.</p>

			<?php include '../parts/application/form-elements/element-hr.php'; ?>

			<h3>Contact details</h3>

			<?php
			include '../parts/application/form-elements/element-address-line-1.php';
			include '../parts/application/form-elements/element-address-line-2.php';
			include '../parts/application/form-elements/element-address-line-3.php';
			include '../parts/application/form-elements/element-address-line-4.php';
			include '../parts/application/form-elements/element-country.php';
			include '../parts/application/form-elements/element-postcode.php';
			include '../parts/application/form-elements/element-phone.php';
			?>
			
			<div class="form__element form__button-group">
				<button class="button no-print" name="button" value="Submit">Save changes</button>
				<a href="#" class="button button--cancel">Cancel changes</a>
			</div>
		</div>
	</div>
</div>
