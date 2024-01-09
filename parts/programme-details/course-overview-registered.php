<?php
/**
 * Course overview - short
 * @since Sprint 10
 */

?>

<div class="modal course-overview micromodal-slide-from-right" id="modal-course-overview-registered" aria-hidden="true">
	<div class="modal__overlay" tabindex="-1" data-micromodal-close data-scroll-lock-scrollable>
		<div class="modal__container background-white spacing-top fadein" role="dialog" aria-modal="true" aria-labelledby="course-overlay-title" data-scroll-lock-scrollable>
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
						<p class="course-overview__header__date"><span class="fa-regular fas fa-user-plus"></span>Registered</p>
					</div>
				</div>
			</header>

			<div class="spacing-top">

				<?php
				// The text block.
				include '../parts/content-blocks/text.php';

				// The multiple items block with a vertical layout.
				include '../parts/content-blocks/grid-of-multiple-items-vertical.php';

				// A text/image block.
				include '../parts/content-blocks/text-image.php';
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
