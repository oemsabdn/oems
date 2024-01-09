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

	<div id="overview" class="js-page-nav content-section content-section">
		<div class="block block--without-spacing block-callout block-callout--reverse block--with--background background-dark spacing-both">
			<div class="block__inner">
				<div class="block__content">
					<figure class="block-callout__media">
						<img src="/rebrand/img/icons/icon.png" alt="Alt text.">
					</figure>
					<div class="block-callout__text">
						<div>
							<h3>You are enrolled on MSc Clinical Nutrition</h3>
							<p>Check your course status, view and edit your schedule and pay for future courses in Your Learning.</p>
							<a class="button button--is-full-on-small no-print" href="#">Go to Your Learning</a>
						</div>
					</div>
				</div>
			</div>
		</div>

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

		<?php include '../parts/blocks/checklist/checklist.php'; ?>

		<div class="block spacing-top background-white">

			<?php include '../parts/programme-details/study-history-alt-1.php'; ?>
			
		</div>

		<?php
		// Get the courses associated with this programme.
		include '../parts/programme-details/programme-courses.php'; ?>

	</div> <!-- End #what. -->

	<?php
	// Show related content.
	include '../parts/cards/related-programmes.php';

	// Get the course overview.
	include '../parts/programme-details/course-overview.php'; ?>

</main>