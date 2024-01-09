<?php
/**
 * Content - Programme Details - blank for editing
 * @since Sprint 18
 */
?>

<main id="main" class="course-details page-content edit-mode edit-mode--is-live">
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
		<div class="block block--is-section-header not-published" data-block-id="1015" tabindex="0">
			<div class="block__inner">
				<div class="block__content">
					<h2>Overview</h2>
				</div>
			</div>
		</div>

		<?php 
		include '../parts/blocks/text/edit/text-short-not-published.php';
		include '../parts/blocks/checklist/edit/checklist-not-published.php';
		include '../parts/blocks/text/edit/text-library.php'; ?>

	</div>
	
	<div id="what" class="js-page-nav content-section">
		<div class="block block--is-section-header not-published" data-block-id="1016" tabindex="0">
			<div class="block__inner">
				<div class="block__content">
					<h2>What will I study?</h2>
				</div>
			</div>
		</div>

		<?php 
		include '../parts/blocks/multi/edit/multi-not-published.php';
		include '../parts/blocks/multi/edit/multi-one-not-published.php';

		// Get the courses associated with this programme.
		include '../parts/programme-details/programme-courses.php'; ?>

	</div> <!-- End #what. -->

	<div id="how" class="js-page-nav content-section">
		<div class="block block--is-section-header not-published" data-block-id="1017" tabindex="0">
			<div class="block__inner">
				<div class="block__content">
					<h2>How will I study?</h2>
				</div>
			</div>
		</div>
	</div> <!-- End #how. -->

	<?php 
	include '../parts/blocks/quote/edit/quote-light-not-published.php';
	include '../parts/blocks/quote/edit/quote-dark-not-published.php';
	include '../parts/blocks/quote/edit/quote-light-carousel-not-published.php';
	include '../parts/blocks/quote/edit/quote-dark-carousel-one-not-published.php'; ?>

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
		include '../parts/programme-details/fees-and-funding.php'; ?>


	</div> <!-- End #fees. -->

	<div id="entry" class="js-page-nav content-section">
		<div class="block block--is-section-header not-published" data-block-id="1018" tabindex="0">
			<div class="block__inner">
				<div class="block__content">
					<h2>Entry requirements</h2>
				</div>
			</div>
		</div>

		<?php 
		include '../parts/blocks/callout/edit/callout-with-bg-edit.php';
		include '../parts/blocks/callout/edit/callout-no-bg-not-published.php'; ?>

		<div class="block spacing-bottom exclude-from-editing no-print">
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

<?php 
include '../parts/editing/edit-modal.php';
include '../parts/editing/edit-modal-library.php';
include '../parts/editing/edit-modal-sub-library.php';
include '../parts/editing/edit-modal-sub-block.php';
