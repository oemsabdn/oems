<?php
/**
 * Error
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
				<h1>Sorry!</h1>
				<h2>We couldn’t find that course.</h2>
				<p>Use the links below to continue to browse the site or <a href="#">go back to the homepage</a>.</p>
			</div>
			<div class="s12 m5 col">
				<img class="error-page__image" src="/rebrand/img/error-message.svg" alt="Unplugged computer." loading="lazy">
			</div>
		</div>
	</div>
</main>

<?php
// Get the sub footer.
include '../parts/footer/sub-footer.php';

// Get the site footer.
include '../footer.php';
