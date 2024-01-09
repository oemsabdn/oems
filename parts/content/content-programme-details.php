<?php
/**
 * Content - Programme Details
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
						<li><a href="#overview" class="visually-hidden">Overview</a></li>
						<li><a href="#what">What will I study?</a></li>
						<li><a href="#how">How will I study?</a></li>
						<li><a href="#where">Where will this take me?</a></li>
						<li><a href="#fees">Fees and funding</a></li>
						<li><a href="#entry">Entry requirements</a></li>
					</ul>
				</div>
				<div class="sticky-nav__desktop">
					<ul>
						<li><a href="#what">What will I study?</a></li>
						<li><a href="#how">How will I study?</a></li>
						<li><a href="#where">Where will this take me?</a></li>
						<li><a href="#fees">Fees and funding</a></li>
						<li><a href="#entry">Entry requirements</a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>

	<div id="overview" class="js-page-nav content-section content-section--first">

		<?php
		include '../parts/blocks/text/text-short.php'; ?>

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
		include '../parts/blocks/checklist/checklist.php';

		// Get the courses associated with this programme.
		include '../parts/programme-details/programme-courses.php'; ?>

	</div> <!-- End #what. -->

	<div id="how" class="js-page-nav content-section">
		<div class="block block--is-section-header spacing-top">
			<div class="block__inner">
				<div class="block__content">
					<h2>How will I study?</h2>
				</div>
			</div>
		</div>
		
		<?php
		include '../parts/blocks/text/text.php';
		include '../parts/blocks/accordion/accordion.php';
		include '../parts/blocks/accordion/accordion.php';
		include '../parts/blocks/accordion/accordion.php';
		include '../parts/blocks/accordion/accordion-last.php';
		include '../parts/blocks/text/text-with-video.php';
		include '../parts/blocks/multi/multi.php'; ?>

	</div> <!-- End #how. -->

	<div id="where" class="js-page-nav content-section">
		<div class="block block--is-section-header">
			<div class="block__inner">
				<div class="block__content">
					<h2>Where will this take me?</h2>
				</div>
			</div>
		</div>
		
		<?php
		include '../parts/blocks/text/text-short.php';
		include '../parts/blocks/multi/multi-vertical.php'; ?>
	
	</div> <!-- End #where. -->

	<div id="fees" class="js-page-nav content-section">
		<div class="block block--is-section-header">
			<div class="block__inner">
				<div class="block__content">
					<h2>Fees and funding</h2>
				</div>
			</div>
		</div>

		<?php
		// The fees and funding info block.
		include '../parts/programme-details/fees-and-funding.php';

		include '../parts/blocks/callout/callout-no-bg.php';
		include '../parts/blocks/text/text-short.php';
		include '../parts/blocks/accordion/accordion.php';
		include '../parts/blocks/accordion/accordion.php';
		include '../parts/blocks/accordion/accordion.php';
		include '../parts/blocks/accordion/accordion.php'; ?>


	</div> <!-- End #fees. -->

	<div id="entry" class="js-page-nav content-section">
		<div class="block block--is-section-header">
			<div class="block__inner">
				<div class="block__content">
					<h2>Entry requirements</h2>
				</div>
			</div>
		</div>

		<?php
		include '../parts/blocks/text/text-short.php';
		include '../parts/blocks/accordion/accordion.php';
		include '../parts/blocks/accordion/accordion.php';
		include '../parts/blocks/accordion/accordion.php'; ?>

		<div class="block no-print">
			<div class="block__inner">
				<div class="block__content">
					<a class="ask-a-question" href="#">Still not sure? Ask us a question</a>
				</div>
			</div>
		</div>

		<?php
		// The apply block.
		include '../parts/programme-details/apply.php'; ?>

	</div> <!-- End #entry. -->

	<?php
	// Show related content.
	include '../parts/cards/related-programmes.php';

	// Get the course overview.
	include '../parts/programme-details/course-overview.php'; ?>

</main>