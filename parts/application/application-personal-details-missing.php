<?php
/**
 * Application - personal details - missing info
 * @since Sprint 20
 */

?>

<div class="form__block form__block--first form__block--missing">
	<div class="js-accordion-title application-accordion__title">
		<a href="#">
			<h2 class="form__block__title">Personal details</h2>
		</a>
	</div>
	<div class="application-accordion__content">
		<div class="js-accordion-inner form__block__inner application-accordion__inner">
			
			<?php include '../parts/application/data/data-about-you.php'; ?>
			
			<h3 class="application-accordion__sub-title">Personal information</h3>
			<dl class="application__info application__info--is-returning-application">
				<div>
					<dt>Address</dt>
					<dd>1 Street Name<br>Newcastle upon Tyne</dd>
				</div>
				<div class="is-missing" aria-invalid="true">
					<dt>Country</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>Postcode</dt>
					<dd>NE15 8TA</dd>
				</div>
				<div>
					<dt>Telephone</dt>
					<dd>+44191 222 2222</dd>
				</div>
			</dl>
			<div class="form__element form__button-group no-print">
				<button class="button" value="submit">Edit personal information</button>
			</div>
		</div>
	</div>
</div>
