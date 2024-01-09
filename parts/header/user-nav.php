<?php
/**
 * User Nav
 * @since initial
 */

?>

<div class="modal micromodal-slide-from-right micromodal-slide-from-right--is-menu no-print" id="modal-user-nav" aria-hidden="true">
	<div class="modal__overlay" tabindex="-1" data-micromodal-close>
		<div class="modal__container background-dark" role="dialog" aria-modal="true" aria-labelledby="user-nav-label" data-scroll-lock-scrollable>
			<button class="js-modal-close js-on-close reset-button-styles modal__close" aria-label="Close this dialog window">&times;</button>
			<nav id="user-nav" class="nav nav--user no-print">
				<div class="nav__head">
					<span class="nav__sub-title">You are signed in as:</span>
					<p id="user-nav-label" class="nav__title">Ian Clarke</p>
				</div>
				<ul class="nav__small">
					<li class="current"><a href="#">Dashboard</a></li>
					<li><a href="#">Your Learning</a></li>
					<li><a href="#">Wishlist</a></li>
					<li><a href="#">Applications</a></li>
					<li><a href="#">Profile</a></li>
					<li><a href="#">Checkout</a></li>
				</ul>
				<a href="#" class="button button--secondary">Sign out</a>
			</nav>
		</div>
	</div>				
</div>