<?php
/**
 * Feed and funding - Schedule
 * @since Sprint 12
 */

?>

<div class="block not-editable">
	<div class="block__inner">
		<div class="block__content">
			<div class="fees">
				<div class="fees__item">
					<div class="fees__course">
						<h3 class="fees__course-name">Master of Science</h3>
						<p class="fees__course-credits">180 Credits remaining</p>
					</div>
					<div class="fees__variations">
						<div class="fees__variation-item">
							<p class="fees__variation-cost">£9,7400</p>
						</div>
					</div>
					<div class="fees__description">
						<p>Fees increment annually. This fee is calculated on the basis of 180 credits over 2 years starting 2019/20 academic year.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="block block-text block-accordion--is-last">
	<div class="block__inner">
		<div class="block__content">
			<h3>Your personal schedule cost breakdown</h3>
			<p>Message here</p>
			<div class="fees fees--schedule-is-complete">
				<div class="fees__item">
					<h3 class="fees__item__title">2021/22</h3>
					<div class="fees__item__section">
						<h4>September 2021</h4>
						<div class="fees__item__row">
							<p>Introduction to Economics and Health Economics (15 credits)</p>
							<p>£1,145</p>
						</div>
						<div class="fees__item__row">
							<p>Fundamentals of research design</p>
							<p>£1,145</p>
						</div>
						<div class="fees__item__total">
							<p>Balance due in September 2021</p>
							<p>£2,290</p>
						</div>
					</div>
					<div class="fees__item__section">
						<h4>January 2022</h4>
						<div class="fees__item__row">
							<p>Applied Statistics (15 credits)</p>
							<p>£1,145</p>
						</div>
						<div class="fees__item__row">
							<p>Economic Evaluation - Principles and Frameworks (15 credits)</p>
							<p>£1,145</p>
						</div>
						<div class="fees__item__total">
							<p>Balance due in January 2022</p>
							<p>£2,290</p>
						</div>
					</div>
				</div>
				<div class="fees__item">
					<h3 class="fees__item__title">2022/23</h3>
					<div class="fees__item__section">
						<h4>September 2022</h4>
						<div class="fees__item__row">
							<p>Evidence-Based Health (15 credits)</p>
							<p>£1,145</p>
						</div>
						<div class="fees__item__row">
							<p>Qualitative Health Research (15 credits)</p>
							<p>£1,145</p>
						</div>
						<div class="fees__item__total">
							<p>Balance due in September 2022</p>
							<p>£2,290</p>
						</div>
					</div>
					<div class="fees__item__section">
						<h4>January 2023</h4>
						<div class="fees__item__row">
							<p>Health Care Systems and Policy (15 credits)</p>
							<p class="fees-cost"><span aria-label="Discounted price">£1,145</span> <del aria-label="Original price">£1775</del></p>
						</div>
						<div class="fees__item__row">
							<p>Economics of Health Behaviour (15 credits)</p>
							<p class="fees-cost"><span aria-label="Discounted price">£1,145</span> <del aria-label="Original price">£1775</del></p>
						</div>
						<div class="fees__item__total">
							<p>Balance due in January 2023</p>
							<p class="fees-cost"><span aria-label="Discounted price">£1,145</span> <del aria-label="Original price">£1775</del></p>
						</div>
					</div>
					<div class="fees__item__section">
						<h4>March 2023</h4>
						<div class="fees__item__row">
							<p>Health Economics for Health Professionals Project (60 credits)</p>
							<p class="fees-cost"><span aria-label="Discounted price">£1,145</span> <del aria-label="Original price">£1775</del></p>
						</div>
						<div class="fees__item__total">
							<p>Balance due in January 2023</p>
							<p class="fees-cost"><span aria-label="Discounted price">£1,145</span> <del aria-label="Original price">£1775</del></p>
						</div>
					</div>
				</div>
				<div class="fees__total">
					<div class="fees__total__item">
						<p>Discount applied</p>
						<p class="fees-cost">10% NHS Discount</p>
					</div>
					<div class="fees__total__item">
						<p>Total due for MSc (180 credits)</p>
						<p class="fees-cost"><span aria-label="Discounted price">£11,145</span> <del aria-label="Original price">£12,775</del></p>
					</div>
				</div>
			</div>
			<form class="form form--course-choices">
				<div class="form__element">
					<div class="form__element__fields form__element__spaced">
						<input id="agreed" name="agreed" type="checkbox" value="true">
						<label for="agreed">Tick here to confirm the above information is correct</label>
					</div>
				</div>
				<div class="form__button-group form__button-group--centred">
					<button class="button button--disabled">Continue to personal details</button>
				</div>
			</form>
		</div>
	</div>
</div>

<?php
include '../parts/content-blocks/question.php'; ?>
