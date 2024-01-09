<?php
/**
 * Content block - discounts - signed in, alumni form showing
 * @since initial
 */

?>

<div class="block block-accordion">
	<div class="block__inner">
		<div class="block__content">
			<div class="js-accordion accordion">
				<div class="js-accordion-title accordion__title"><a href="#"><h3>Discounts (user IS signed in alumni form showing)</h3></a></div>
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
									<div class="form__element">
										<label for="name">What was your full name when you studied with us?</label>
										<input type="text" id="name">
									</div>
									<div class="form__element">
										<fieldset class="dob">
											<legend>Date of birth</legend>
											<div class="dob__part">
												<label for="day">Day</label>
												<input id="day" class="js-dob" type="tel" maxlength="2" placeholder="DD">
											</div>
											<div class="dob__part">
												<label for="month">Month</label>
												<input id="month" class="js-dob" type="tel" maxlength="2" placeholder="MM">
											</div>
											<div class="dob__part dob__part--year">
												<label for="year">Year</label>
												<input id="year" class="js-dob" type="tel" maxlength="4" placeholder="YYYY">
											</div>
										</fieldset>
									</div>
									<div class="form__element">
										<label for="yearcompleted">What year did you complete your studies?</label>
										<input type="text" class="short" id="yearcompleted">
									</div>
									<div class="form__element">
										<label for="study">What did you study?</label>
										<input type="text" id="study">
									</div>
									<div class="form__element form__button-group">
										<input type="submit" id="confirm" value="Confirm alumni discount" class="no-print">
									</div>
								</div>
							</form>
						</div>
						<hr class="discount-separator">
						<div class="discount-item">
							<h4>10% NHS Grampian / Highland discount</h4>
							<p>NHS Grampian and NHS Highland staff receive 10% off online postgraduate courses and degrees offered by our School of Medicine, Medical Sciences and Nutrition. To get your discount code, visit your NHS staff learning portal.</p>
							<p class="discount-valid-dates">Valid for start dates between 1 January 2019 and 31 December 2019</p>
						</div>
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
