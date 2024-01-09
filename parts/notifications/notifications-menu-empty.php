<?php
/**
 * Notifications
 * @since Sprint 13
 */

?>

<div class="modal micromodal-slide-from-right micromodal-slide-from-right--is-menu no-print" id="modal-notifications-empty" aria-hidden="true">
	<div class="modal__overlay" tabindex="-1" data-micromodal-close>
		<div class="modal__container background-dark" role="dialog" aria-modal="true" aria-labelledby="notifications-label" data-scroll-lock-scrollable>
			<button class="js-modal-close js-on-close reset-button-styles modal__close" aria-label="Close this dialog window">&times;</button>
			<nav id="notifications-nav" class="nav nav--notifications notifications no-print">
				<div class="nav__head">
					<p id="notifications-label" class="nav__title">Notifications</p>
				</div>
				
				<?php
				include '../parts/notifications/notifications-empty.php';
				?>
				
			</nav>
		</div>
	</div>				
</div>