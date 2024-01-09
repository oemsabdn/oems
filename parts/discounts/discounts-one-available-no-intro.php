<?php
/**
 * Content block - discounts - signed in
 * @since initial
 */

?>

<div class="block block-accordion">
	<div class="block__inner">
		<div class="block__content">
			<div class="js-accordion accordion">
				<div class="js-accordion-title accordion__title"><a href="#"><h3>Discounts (only one available - no intro para)</h3></a></div>
				<div>
					<div class="js-accordion-inner accordion__inner">
						<div class="discount-item">
							<h4>10% BP discount</h4>
							<p>BP staff receive 10% off selected postgraduate courses. To get your discount code, speak to Mandy in HR.</p>
							<p class="discount-valid-dates">Valid for start dates between 1 September 2019 and 31 January 2020</p>
						</div>
						<form class="form form--discounts no-print">
							<div class="form__block">
								<div class="form__element form__element--code">
									<div class="form__element__fields">
										<label for="discount-code">If you have a discount code, enter it here</label>
										<input id="discount-code" type="text">
										<input type="submit" value="Verify code" class="no-print">
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
