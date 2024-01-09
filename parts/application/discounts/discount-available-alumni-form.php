<?php
/**
 * Discount - alumnus form visible
 * @since initial
 */

?>

<div class="form__block form__block--step-7 form__block--cost form__block--disabled">
	<h2 class="form__block__title">Payment options</h2>
	<div class="form__block__inner">
		<div class="form__block__first">
			<p>The last step is to pay for your course.</p>
		</div>
		<p>You will need to pay in full before you can access your course.</p>
		<p>Our secure online payment portal accepts all major debit and credit cards except American Express.</p>
		<p>You can pay now or return and pay later – your application has been saved.</p>

		<div class="js-accordion accordion discounts-accordion">
			<div class="js-accordion-title accordion__title"><a href="#"><h4>Discounts</h4></a></div>
			<div>
				<div class="js-accordion-inner accordion__inner">
					<div class="discount-item">
						<h4>20% Alumni Discount</h4>
						<p>University of Aberdeen alum receive 20% off our postgraduate taught short courses and degrees.</p>
						<div class="form__element no-print">
							<fieldset>
								<p>Are you an alumna/alumnus of the University of Aberdeen?</p>
								<input type="radio" name="yes" id="yes">
								<label for="yes">Yes</label>
								<input type="radio" name="no" id="no">
								<label for="no">No</label>
							</fieldset>
						</div>
						<div class="form__element no-print">
							<label for="name">What was your full name when you studied with us?</label>
							<input type="text" id="name">
						</div>
						<div class="form__element no-print">
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
						<div class="form__element no-print">
							<label for="yearcompleted">What year did you complete your studies?</label>
							<input type="text" class="short" id="yearcompleted">
						</div>
						<div class="form__element no-print">
							<label for="study">What did you study?</label>
							<input type="text" id="study">
						</div>
						<div class="form__element form__button-group no-print">
							<input type="button" class="button" id="confirm" value="Confirm alumni discount">
						</div>
						<hr class="discount-separator">
					</div>
				</div>
			</div>
		</div>
		<dl class="total-cost">
			<dt>TOTAL COST</dt>
			<dd>£775</dd>
		</dl>
		<a class="button button--full-width no-print" href="#">Continue to checkout</a>
		<div class="sponsor-fee">
			<p>Is a sponsor paying some or all of your fee? They can:</p>
			<ul>
				<li>pay in full by debit or credit card by continuing to checkout above</li>
				<li><a href="#">request to pay by invoice</a></li>
			</ul>
		</div>
	</div>
</div>