<?php
/**
 * Checkout item
 * @since Sprint 20
 */
?>

<div class="checkout__item">
	<div class="checkout__title">
		<h3>Mental Health and Wellbeing in the Workplace</h3>
		<p class="checkout__price">£920</p>
	</div>
	<div class="checkout__info">
		<p>Start date: 18th September 2023</p>
		<button class="js-enable-undo-course button button--unstyled button--icon-before" data-micromodal-trigger="modal-confirm-course-remove"><span class="fa fa-regular fa-trash"></span>Remove</button>
	</div>
	<div class="checkout__toggle-details">
		<button class="js-toggle-checkout-item-details button button--unstyled button--icon-before"><span class="fa fa-regular fa-plus"></span>Details</button>
	</div>
	<div class="js-checkout-item-details checkout__details">

		<?php include '../parts/application/data/data-course-details.php'; ?>

	</div>
</div>
