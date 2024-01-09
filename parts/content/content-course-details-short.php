<?php
/**
 * Content - Course Details - short
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
		// The text block.
		include '../parts/content-blocks/text.php'; ?>

	</div>
	
	<div id="what" class="js-page-nav content-section">
		<div class="block">
			<div class="row">
				<div class="s12 m8 offset-m2 col">
					<h2 class="block-title">What will I study?</h2>
				</div>
			</div>
		</div>

		<?php
		// The text block.
		include '../parts/content-blocks/text.php';

		// The checklist block.
		include '../parts/content-blocks/checklist.php'; ?>

	</div>

	<div id="how" class="js-page-nav content-section">
		<div class="block">
			<div class="row">
				<div class="s12 m8 offset-m2 col">
					<h2 class="block-title">How will I study?</h2>
				</div>
			</div>
		</div>
		
		<?php
		// The text block.
		include '../parts/content-blocks/text.php';

		// The multiple items block with a vertical layout.
		include '../parts/content-blocks/grid-of-multiple-items-vertical.php';

		// A light text/image block.
		include '../parts/content-blocks/text-image-light.php';

		// The multiple items block with > 3 items.
		include '../parts/content-blocks/grid-of-multiple-items.php';

		// The text/image block.
		include '../parts/content-blocks/text-image.php';

		// The various options for the quote block.
		include '../parts/content-blocks/light-with-quote.php';
		include '../parts/content-blocks/light-with-quote-image-left.php';
		include '../parts/content-blocks/light-with-quote-image-right.php';
		include '../parts/content-blocks/dark-with-quote.php';
		include '../parts/content-blocks/dark-with-quote-image-left.php';
		include '../parts/content-blocks/dark-with-quote-image-right.php'; ?>

	</div>

	<div id="where" class="js-page-nav content-section">
		<div class="block">
			<div class="row">
				<div class="s12 m8 offset-m2 col">
					<h2 class="block-title">Where will this take me?</h2>
				</div>
			</div>
		</div>
		
		<?php
		// The banner with text block.
		include '../parts/content-blocks/banner-text.php';

		// The dark quote block.
		include '../parts/content-blocks/dark-with-text.php';

		// The text/video block.
		include '../parts/content-blocks/text-video.php';

		// The multi block.
		include '../parts/content-blocks/grid-of-three-items.php'; ?>
	
	</div>

	<div id="ready" class="js-page-nav content-section">
		<div class="block">
			<div class="row">
				<div class="s12 m8 offset-m2 col">
					<h2 class="block-title">Am I ready?</h2>
				</div>
			</div>
		</div>

		<?php
		// The text block.
		include '../parts/content-blocks/text.php';

		// The accordion block.
		include '../parts/content-blocks/accordion.php'; ?>

	</div>

	<div id="apply">
		<div class="block no-print">
			<div class="block__inner">
				<div class="block__content">
					<a class="ask-a-question" href="#">Still not sure? Ask us a question</a>
				</div>
			</div>
		</div>

		<?php
		// The apply block.
		include '../parts/content-blocks/apply.php'; ?>

	</div>

	<?php 
	// Show related content.
	include '../parts/cards/related-courses.php'; ?>

</main>