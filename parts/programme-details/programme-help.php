<?php
/**
 * Course overview - short
 * @since Sprint 10
 */

?>

<div class="programme-help modal micromodal-slide-from-right micromodal-slide-from-right--is-help" id="programme-help" aria-hidden="true">
	<div class="modal__overlay" tabindex="-1" data-micromodal-close data-scroll-lock-scrollable>
		<div class="modal__container background-white spacing-top fadein" role="dialog" aria-modal="true" aria-labelledby="programme-help-title" data-scroll-lock-scrollable>
			<div class="row">
				<div class="s12 col">
					<button class="js-modal-close reset-button-styles modal__close modal__close--dark" aria-label="Close this dialog window">&times;</button>
				</div>
			</div>

			<header class="programme-help__header spacing-top">
				<div class="row">
					<div class="s12 col">
						<h2 id="programme-help-title">How to plan and pay for your upcoming year</h2>
					</div>
				</div>
			</header>

			<div>

				<?php
				include '../parts/blocks/accordion/accordion.php';
				include '../parts/blocks/accordion/accordion.php';
				include '../parts/blocks/accordion/accordion.php';
				?>

			</div>
			
			<footer class="spacing-bottom">
				<div class="row">
					<div class="s12 col">
						<button aria-label="Close this dialog window" class="js-modal-close button button--medium">Back</button>
					</div>
				</div>
			</footer>

		</div>
	</div>
</div>
