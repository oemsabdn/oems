<?php
/**
 * Content block - discounts - valid code, not for this course
 * @since initial
 */

?>

<div class="block block-accordion block-accordion--is-last">
	<div class="block__inner">
		<div class="block__content">
			<div class="js-accordion accordion">
				<div class="js-accordion-title accordion__title"><a href="#"><h3>Discounts (invalid code) - not applicable</h3></a></div>
				<div>
					<div class="js-accordion-inner accordion__inner">
						<div class="discount-item">
							<p>The following discounts are available for this course. If you are eligible for more than one discount, we will automatically apply the biggest discount to your fee.</p>
						</div>
						<div class="discount-item">
							<h4>20% Alumni Discount</h4>
							<p>University of Aberdeen alum receive 20% off our postgraduate taught short courses and degrees.</p>
							<form class="form form--discounts no-print">
								<div class="form__block">
									<div class="form__element">
										<fieldset>
											<p>Are you an alumna/alumnus of the University of Aberdeen?</p>
											<input type="radio" name="yes" id="yes">
											<label for="yes">Yes</label>
											<input type="radio" name="no" id="no">
											<label for="no">No</label>
										</fieldset>
									</div>
								</div>
							</form>
						</div>
						<hr class="discount-separator">
						<div class="discount-item">
							<h4>10% NHS discount</h4>
							<p>Our records show that you are not eligible for this discount. If we have made a mistake, please get in touch.</p>
							<p class="discount-valid-dates">Valid for start dates between 1 September 2019 and 31 January 2020</p>
						</div>
						<div class="discount-item">
							<h4>10% BP discount</h4>
							<p>BP staff receive 10% off selected postgraduate courses. To get your discount code, speak to Mandy in HR.</p>
							<p class="discount-valid-dates">Valid for start dates between 1 September 2019 and 31 January 2020</p>
						</div>
						<form class="form form--discounts no-print">
							<div class="form__block">
								<div class="form__element form__element--code form__element--invalid">
									<div class="form__element__fields">
										<label for="discount-code">Enter discount code</label>
										<input id="discount-code" type="text" value="VALIDCODE">
										<input type="submit" value="Verify code" class="no-print">
									</div>
									<div class="form__validation">
										<p>Sorry, the code you entered does not apply to this course.</p>
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
