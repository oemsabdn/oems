<?php
/**
 * Application - Additional information
 * @since Sprint 20
 */

?>

<div class="form__block">
	<div class="js-accordion-title application-accordion__title">
		<a href="#">
			<h2 class="js-accordion-title form__block__title">Additional information</h2>
		</a>
	</div>
	<div class="application-accordion__content">
		<div class="js-accordion-inner form__block__inner application-accordion__inner">
			<p>The University of Aberdeen seeks to promote a diverse and inclusive study environment as we believe this contributes to our goal of ensuring all students have the opportunity to achieve their potential.</p>
			<p>It is important, therefore, that the University monitors the diversity profile of our student community to ensure that our services are appropriate and comply with reporting requirements.</p>

			<?php
			include '../parts/application/form-elements/element-hr.php';
			include '../parts/application/form-elements/element-sex.php';
			include '../parts/application/form-elements/element-trans.php';
			include '../parts/application/form-elements/element-orientation.php';
			include '../parts/application/form-elements/element-ethnicity.php';
			include '../parts/application/form-elements/element-religion.php';
			include '../parts/application/form-elements/element-bsl.php';
			include '../parts/application/form-elements/element-qualification.php';
			include '../parts/application/form-elements/element-dependants.php';
			include '../parts/application/form-elements/element-carer.php';
			include '../parts/application/form-elements/element-care.php';
			include '../parts/application/form-elements/element-service-leaver.php';
			include '../parts/application/form-elements/element-serving-carer.php';
			?>
			
			<div class="form__element form__button-group no-print">
				<button class="button no-print" name="button" value="Submit">Save</button>
			</div>
		</div>
	</div>
</div>