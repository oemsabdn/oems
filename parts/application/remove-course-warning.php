<?php
/**
 * Remove course alert
 * @since Sprint 20
 */

?>

<div class="modal warning-modal micromodal-center no-print" id="modal-confirm-course-remove" aria-hidden="true">
	<div class="modal__overlay" tabindex="-1">
		<div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="remove-course-label" data-scroll-lock-scrollable>
			<div class="warning-modal__content">
				<p id="remove-course-label" class="js-course-title-in-modal">Are you sure you want to remove title from your checkout?</p>
				<p>You can add it back to checkout any time from your applications</p>
				<div class="warning-modal__button-group">
					<button class="js-confirm-course-remove button button--red button--medium button--icon-before"><span class="fa-regular fa-trash"></span>Confirm remove course</button>
					<button class="js-cancel-course-remove button button--medium button--outlined">Cancel</button>
				</div>
			</div>
		</div>
	</div>				
</div>