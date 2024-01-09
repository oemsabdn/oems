<?php
/**
 * Content block - apply
 * @since initial
 */

?>

<div class="apply block block--with-background background-dark stroke-bottom centered color-white no-print">
	<div class="row">
		<div class="s12 m8 offset-m2 l6 offset-l3 col">
			<h2>Apply for this course</h2>
		</div>
	</div>
	<div class="row">
		<div class="s12 m6 offset-m3 col">
			
			<?php
			// If the course has a fixed start date, show this.
			// include '../parts/course-details/apply-fixed-start-date.php';

			// If the course has multiple start dates, show this.
			// include '../parts/course-details/apply-multi-start-date.php';

			// If the course has multiple start dates, show this.
			// include '../parts/course-details/apply-has-last-registration.php';

			// If the course has a discount applied, show this.
			include '../parts/course-details/apply-has-discount.php'; ?>

			<button class="button">Apply now</button>
			<p class="apply__post">You must have completed the learning part of this course and be signed in before you can purchase this assessment.</p>
			<div class="add-to-wishlist">
				<button class="js-wishlist-toggle no-print"><span class="fa-regular fa-star"></span><span class="js-wishlist-message-add">Not ready? Add to your wishlist</span></button>
				<span class="js-added-to-wishlist add-to-wishlist__message">Added to your <a href="#">wishlist</a></span>
			</div>
		</div>
	</div>
</div>
