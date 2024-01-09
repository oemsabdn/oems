<?php
/**
 * Application - Disabiltiy information
 * @since Sprint 20
 */

?>

<div class="form__block form__block--done">
	<div class="js-accordion-title application-accordion__title">
		<a href="#">
			<h2 class="form__block__title">Disability information</h2>
		</a>
	</div>
	<div class="application-accordion__content">
		<div class="js-accordion-inner form__block__inner application-accordion__inner">
			<p>If you require any disability-related adjustments or support, it is helpful if you inform the University at an early stage. The information provided will be treated confidentially.</p>
			<p>If you wish to discuss your situation confidentiality before deciding whether or not to disclose, please contact a Disability Advisor at <a href="mailto:student.disability@abdn.ac.uk">student.disability@abdn.ac.uk</a></p>
			
			<?php
			include '../parts/application/form-elements/element-hr.php';
			include '../parts/application/form-elements/element-disability.php';
			?>
			
			<div class="form__element form__button-group">
				<button class="button no-print" name="button" value="Submit">Save</button>
			</div>
		</div>
	</div>
</div>
