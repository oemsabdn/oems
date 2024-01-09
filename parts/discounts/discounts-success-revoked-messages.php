<?php
/**
 * Content block - discounts - success and revoked messages
 * @since initial
 */

?>

<div class="block block-accordion">
	<div class="block__inner">
		<div class="block__content">
			<div class="js-accordion accordion">
				<div class="js-accordion-title accordion__title"><a href="#"><h3>Discounts (successs and revoked messages)</h3></a></div>
				<div>
					<div class="js-accordion-inner accordion__inner">
						<div class="discount-item">
							<p>The following discounts are available for this course. If you are eligible for more than one discount, we will automatically apply the biggest discount to your fee.</p>
						</div>
						<div class="discount-item">
							<h4>Alumni dicount revoked</h4>
							<div class="discount-item__validation">
								<span class="discount-revoked"></span>
								<p>We do not believe you are eligible for this discount. If we have made a mistake, please <a href="#">get in touch</a>.</p>
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
							<div class="discount-item__validation">
								<i class="discount-applied"></i>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
							<p class="discount-valid-dates">The current code is valid until 31 July 2020</p>
						</div>
						<form class="form form--discounts no-print">
							<div class="form__block">
								<div class="form__element form__element--code">
									<div class="form__element__fields">
										<label for="discount-code">Enter discount code</label>
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
