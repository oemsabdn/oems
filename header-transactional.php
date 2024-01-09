<?php
/**
 * Header - application
 * @since initial
 */

include '../parts/header/main-nav.php';
include '../parts/header/user-nav.php';
include '../parts/header/admin-nav.php';
include '../parts/notifications/notifications-menu-logged-in.php';
include '../parts/search/search-form.php'; ?>

<div id="top" class="container">

	<!-- Header for transactional pages. -->
	<header id="site-head" class="site-head site-head-transactional">
		<div class="row">
			<div class="s6 col">
				<a href="/rebrand/">
					<img class="site-head__logo" src="/rebrand/img/logo-uoa-odl.svg" alt="University of Aberdeen logo." width="200" height="56" loading="lazy">
				</a>
			</div>
			<div class="s6 col">
				<div class="site-nav-holder">
				<ul class="site-head__links">
					<li>
						<a class="js-search-open no-reformat" data-micromodal-trigger="modal-search" href="#" aria-label="Search"><span class="fa-light fa-search"></span></a>
					</li>
					<!--<li>
						<a class="js-nav-open no-reformat" data-micromodal-trigger="modal-admin-nav" href="#" aria-label="Admin navigation"><span class="fa-light fa-tools"></span></a>
					</li>-->
					<li>
						<a class="js-nav-open no-reformat" data-micromodal-trigger="modal-notifications" href="#" aria-label="Notifications"><span class="fa-light fa-bell"></span></a>
					</li>
					<li>
						<a class="js-nav-open no-reformat" data-micromodal-trigger="modal-user-nav" href="#" aria-label="User navigation"><span class="fa-light fa-user-circle"></span></a>
					</li>
					<li>
						<a class="js-nav-open no-reformat" data-micromodal-trigger="modal-main-nav" href="#" aria-label="Site navigation"><span class="fa-light fa-bars"></span></a>
					</li>
				</ul>
				</div>
			</div>
		</div>
	</header>

	<div id="main-content">
