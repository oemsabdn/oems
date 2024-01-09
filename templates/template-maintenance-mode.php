<?php
/**
 * Maintenance Mode
 * @since Sprint 13
 */

$bannertype = "banner-error";
$overlaytype = "banner__overlay--disabled";
// Get the site header.
include '../header-html.php';
include '../header.php'; ?>
</div>
</div>
</header>
<main id="main" class="error-page">
	<div class="row">
		<div class="s12 col">
			
		</div>
	</div>
	<div class="error-page__inner">
		<div class="row">
			<div class="s12 m7 col">
				<h1>Maintenance mode.</h1>
				<p>We have temporarily disabled your login to protect your data while we update our systems.</p>
				<p>We will be back to normal as soon as possible.</p>
				<p>Thanks for your patience.</p>
			</div>
			<div class="s12 m5 col">
				<img class="error-page__image" src="/rebrand/img/maintenance-mode.svg" alt="Unplugged computer.">
			</div>
		</div>
	</div>
</main>

<?php
// Get the sub footer.
include '../parts/footer/sub-footer.php';

// Get the site footer.
include '../footer.php';
