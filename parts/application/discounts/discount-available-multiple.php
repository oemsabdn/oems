<?php
/**
 * Discount - multiple available
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
						<p>The following discounts are available for this course. If you are eligible for more than one discount, we will automatically apply the biggest discount to your fee.</p>
					</div>
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
					<div class="form__element no-print">
						<div class="form__element__fields">
							<label for="discount-code">If you have a discount code, enter it here</label>
							<input id="discount-code" type="text">
							<button class="button">Verify code</button>
						</div>
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
				<li><a href="ic-discounts-application7.php">request to pay by invoice</a></li>
			</ul>
		</div>
	</div>
</div>