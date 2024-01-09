<?php
/**
 * Content - Course Details
 * @since Sprint 13
 */
?>

<main id="main" class="course-details page-content">
	<nav id="page-nav" class="js-sticky js-sticky-course-details sticky-nav sticky-nav--is-course-details no-print">
		<div class="row">
			<div class="s12 col">
				<div class="sticky-nav__mobile">
					<a class="js-sticky-toggle js-sticky-toggle-course-details sticky-nav__toggle">Overview</a>
					<ul>
						<li><a href="#overview" class="visually-hidden" tabindex="-1">Overview</a></li>
						<li><a href="#what">What will I study?</a></li>
						<li><a href="#how">How will I study?</a></li>
						<li><a href="#where">Where will this take me?</a></li>
						<li><a href="#ready">Am I ready?</a></li>
					</ul>
				</div>
				<div class="sticky-nav__desktop">
					<ul>
						<li><a href="#what">What will I study?</a></li>
						<li><a href="#how">How will I study?</a></li>
						<li><a href="#where">Where will this take me?</a></li>
						<li><a href="#ready">Am I ready?</a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>

	<div id="overview" class="js-page-nav content-section content-section--first">

		<?php
		// The text with video block.
		include '../parts/blocks/text/text-with-video.php'; ?>

	</div>
	
	<div id="what" class="js-page-nav content-section">
		<div class="block block--is-section-header">
			<div class="block__inner">
				<div class="block__content">
					<h2>What will I study?</h2>
				</div>
			</div>
		</div>

		<?php
		// The text block.
		include '../parts/blocks/text/text.php';

		// The checklist block.
		include '../parts/blocks/checklist/checklist.php'; ?>

	</div>

	<div id="how" class="js-page-nav content-section">
		<div class="block block--is-section-header">
			<div class="block__inner">
				<div class="block__content">
					<h2>How will I study?</h2>
				</div>
			</div>
		</div>
		
		<?php
		include '../parts/blocks/text/text.php';
		include '../parts/blocks/multi/multi-vertical.php';
		include '../parts/blocks/callout/callout-no-bg.php';
		include '../parts/blocks/multi/multi.php';
		include '../parts/blocks/multi/multu-caousel-single.php';
		include '../parts/blocks/multi/multi-carousel-multiple.php';
		include '../parts/blocks/text/text-with-image.php';
		include '../parts/blocks/quote/quote-light.php';
		include '../parts/blocks/quote/quote-light-image-left.php';
		include '../parts/blocks/quote/quote-light-image-right.php';
		include '../parts/blocks/quote/quote-dark.php';
		include '../parts/blocks/quote/quote-dark-image-left.php';
		include '../parts/blocks/quote/quote-dark-image-right.php';
		include '../parts/blocks/quote/quote-dark-carousel.php';
		include '../parts/blocks/quote/quote-light-carousel.php'; ?>

	</div>

	<div id="where" class="js-page-nav content-section">
		<div class="block block--is-section-header">
			<div class="block__inner">
				<div class="block__content">
					<h2>Where will this take me?</h2>
				</div>
			</div>
		</div>
		
		<?php
		include '../parts/blocks/text/text.php';
		include '../parts/blocks/text/text-with-video.php'; ?>
	
	</div>

	<div id="ready" class="js-page-nav content-section">
		<div class="block block--is-section-header">
			<div class="block__inner">
				<div class="block__content">
					<h2>Am I ready?</h2>
				</div>
			</div>
		</div>

		<?php
		include '../parts/content-blocks/text.php';
		include '../parts/blocks/accordion/accordion-last.php';

		// The various discount content blocks.
		include '../parts/discounts/discounts-signed-out.php';
		include '../parts/discounts/discounts-signed-in.php';
		include '../parts/discounts/discounts-one-available-no-intro.php';
		include '../parts/discounts/discounts-signed-in-alumni-form.php';
		include '../parts/discounts/discounts-success-revoked-messages.php';
		include '../parts/discounts/discounts-invalid-code.php';
		include '../parts/discounts/discounts-expired-code.php';
		include '../parts/discounts/discounts-valid-code-not-applicable.php'; ?>

	</div>

	<div id="apply">
		<div class="block block--without-spacing no-print">
			<div class="block__inner">
				<div class="block__content">
					<a class="ask-a-question" href="#">Still not sure? Ask us a question</a>
				</div>
			</div>
		</div>

		<?php
		include '../parts/course-details/apply.php'; ?>

	</div>

	<?php 
	// Show related content.
	include '../parts/cards/related-courses.php'; ?>

</main>