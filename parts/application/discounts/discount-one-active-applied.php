<?php
/**
 * Discount - one discount active and applied
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
						<h4>10% BP discount</h4>
						<div class="discount-item__validation">
							<span class="discount-applied"></span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
						<p class="discount-valid-dates">The current code is valid until 31 July 2020</p>
					</div>
					<div class="discount-item">
						<h4>10% NHS Grampian / Highland discount</h4>
						<p>NHS Grampian and NHS Highland staff receive 10% off online postgraduate courses and degrees offered by our School of Medicine, Medical Sciences and Nutrition. To get your discount code, visit your NHS staff learning portal.</p>
						<p class="discount-valid-dates">Valid for start dates between 1 January 2019 and 31 December 2019</p>
					</div>
					<div class="form__element no-print">
						<div class="form__element__fields">
							<label for="discount-code">Enter discount code</label>
							<input id="discount-code" type="text">
							<button class="button">Verify code</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<dl class="total-cost">
			<dt>Discount applied</dt>
			<dd>10% BP discount</dd>
			<dt>TOTAL COST</dt>
			<dd><span aria-label="Discounted price">£840</span> <del aria-label="Original price">£1775</del></dd>
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
