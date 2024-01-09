<?php
/**
 * Application - step 3
 * @since Sprint 13
 */

?>

<div class="form__block form__block--first form__block--current">
	<div class="js-accordion-title application-accordion__title">
		<h2 class="form__block__title">Personal details</h2>
	</div>
	<div class="application-accordion__content">
		<div class="js-accordion-inner form__block__inner application-accordion__inner force-show">
			<p>This is the information we need about you to enrol you on our student records system.</p>
			<p>The names supplied below will be those used by University of Aberdeen systems and shown on your certificate or other formal documentation realting to your studies.</p>
			<p>Our student record system can only accept Western characters. Names cannot include the special characters !&():;?@£, or . We apologise for any inconvenience caused.</p>
			<h3>About you</h3>
			
			<?php
			include '../parts/application/form-elements/element-title.php';
			include '../parts/application/form-elements/element-forenames.php';
			include '../parts/application/form-elements/element-surname.php';
			include '../parts/application/form-elements/element-dob.php';
			include '../parts/application/form-elements/element-hr.php';
			?>

			<h3>Your nationality and domicile</h3>

			<?php
			include '../parts/application/form-elements/element-nationality.php';
			include '../parts/application/form-elements/element-domicile.php';
			include '../parts/application/form-elements/element-domicile-uk.php';
			include '../parts/application/form-elements/element-domicile-country.php';
			include '../parts/application/form-elements/element-hr.php';
			?>
			
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
				<button class="button no-print" name="button" value="Submit">Save</button>
			</div>
		</div>
	</div>
</div>