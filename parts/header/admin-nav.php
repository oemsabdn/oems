<?php
/**
 * Admin Nav
 * @since Sprint 11
 */

?>

<div class="modal micromodal-slide-from-right micromodal-slide-from-right--is-menu micromodal-slide-from-right--is-admin-menu no-print" id="modal-admin-nav" aria-hidden="true">
	<div class="modal__overlay" tabindex="-1" data-micromodal-close>
		<div class="modal__container background-dark" role="dialog" aria-modal="true" aria-labelledby="admin-nav-label" data-scroll-lock-scrollable>
			<button class="js-modal-close js-on-close reset-button-styles modal__close" aria-label="Close this dialog window">&times;</button>
			<nav id="admin-nav" class="nav nav--admin no-print">
				<div class="nav__head">
					<p id="admin-nav-label" class="nav__title">Admin menu</p>
				</div>
				<div class="nav__sections">
					<div class="nav__section">
						<ul>
							<li class="current"><a href="#">Courses</a></li>
							<li><a href="#">Programmes</a></li>
							<li><a href="#">Categories</a></li>
							<li><a href="#">Articles</a></li>
							<li><a href="#">Landing pages</a></li>
						</ul>
					</div>
					<div class="nav__section">
						<ul>
							<li><a href="#">Content library</a></li>
							<li><a href="#">Self-evaluation statements</a></li>
							<li><a href="#">Self-evaluation disclaimers</a></li>
							<li><a href="#">Discounts</a></li>
							<li><a href="#">Prerequisites</a></li>
						</ul>
					</div>
					<div class="nav__section">
						<ul>
							<li><a href="#">User accounts</a></li>
							<li><a href="#">All applications</a></li>
							<li><a href="#">Invoice requests</a></li>
							<li><a href="#">Alumni</a></li>
							<li><a href="#">Users with discounts</a></li>
						</ul>
					</div>
					<div class="nav__section">
						<ul>
							<li><a href="#">Announcements</a></li>
							<li><a href="#">Funnelback interface</a></li>
							<li><a href="#">API lookups</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</div>				
</div>