<?php
/**
 * Filters
 * @since Sprint 10
 */

?>

<div class="modal course-overview micromodal-slide-from-right" id="modal-course-overview" aria-hidden="true">
	<div class="modal__overlay" tabindex="-1" data-micromodal-close data-scroll-lock-scrollable>
		<div class="modal__container course-overview__container spacing-top fadein" role="dialog" aria-modal="true" aria-labelledby="course-overlay-title" data-scroll-lock-scrollable>
			<div class="row">
				<div class="s12 col">
					<button class="js-modal-close reset-button-styles modal__close modal__close--dark" aria-label="Close this dialog window">&times;</button>
				</div>
			</div>

			<header id="course-overview-header" class="course-overview__header spacing-top">
				<div class="row">
					<div class="s12 col">
						<p class="course-overview__header__credits">15 Credits</p>
						<h2 id="course-overlay-title" class="course-overview__header__title">Fundamentals of Human Nutrition and Metabolism</h2>
						<p class="course-overview__header__date"><span class="fa-regular fa-calendar-range"></span>September</p>
						<div class="course-overview__notification">
							<div class="course-overview__notification-item">
								<span class="fa-solid fa-lock-keyhole"></span>
								<p>You must select Economic Evaluation - Principles and Frameworks before you can study Economic Evaluation - Application and Policy.</p>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div>

				<?php
				// The text block.
				include '../parts/blocks/text/text.php';
				include '../parts/blocks/multi/multi-vertical.php';
				include '../parts/blocks/callout/callout-with-bg.php';
				include '../parts/blocks/callout/callout-no-bg.php';
				include '../parts/blocks/multi/multi.php';
				include '../parts/blocks/checklist/checklist.php';
				include '../parts/blocks/accordion/accordion.php';
				include '../parts/blocks/accordion/accordion.php';
				include '../parts/blocks/accordion/accordion-last.php';
				include '../parts/blocks/callout/callout-with-bg.php';
				include '../parts/blocks/multi/multi-carousel-single.php';
				include '../parts/blocks/multi/multi-carousel-multiple.php';
				include '../parts/blocks/quote/quote-light.php';
				include '../parts/blocks/quote/quote-light-image-left.php';
				include '../parts/blocks/quote/quote-light-image-right.php';
				include '../parts/blocks/quote/quote-dark.php';
				include '../parts/blocks/quote/quote-dark-image-left.php';
				include '../parts/blocks/quote/quote-dark-image-right.php';
				include '../parts/blocks/quote/quote-dark-carousel.php';
				include '../parts/blocks/quote/quote-light-carousel.php';
				include '../parts/blocks/text/text-with-image.php';
				include '../parts/blocks/checklist/checklist.php';
				?>

			</div>
			
			<footer id="course-overview-footer" class="spacing-bottom">
				<div class="row">
					<div class="s12 col">
						<button aria-label="Close this dialog window" class="js-modal-close button button--outlined button--full-width">Close</button>
					</div>
				</div>
			</footer>

		</div>
	</div>
</div>
