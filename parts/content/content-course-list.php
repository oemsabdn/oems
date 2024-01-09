<?php
/**
 * Content - Course List
 * @since Sprint 14
 */
?>

<main id="course-list" class="background-grey">

	<section id="featured-courses" class="course-list spacing-both">
		<div class="row">
			<div class="s12 col">
				<div class="course-list__intro">
					<h2>Featured online short courses</h2>
					<p>This is a test.</p>
				</div>

				<?php
				// Include a courses carousel.
				include '../parts/cards/course-carousel.php'; ?>

			</div>
		</div>
	</section>

	<section id="all-courses" class="course-list">
		<div class="row">
			<div class="s12 col">
				<div class="course-list__intro">
					<h2>Browse our short courses</h2>
				</div>
			</div>
		</div>
		<div class="course-list__filter no-print">
			<div class="row">
				<div class="s8 col">
					<button data-micromodal-trigger="modal-filters" class="js-filters-open button button--filter">Filter <span class="fa-regular fa-sliders"></span></button>
				</div>
				<div class="s4 col">
					<p class="course-list__results">48 results</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="s12 col">
				<div class="course-list__items">
					<div class="js-enable-favourite-toggle item-list item-list--four-col">
						
						<?php
						include '../parts/cards/short-course.php';
						include '../parts/cards/short-course-long-desc.php';
						include '../parts/cards/short-course.php';
						include '../parts/cards/short-course.php';
						include '../parts/cards/short-course.php';
						include '../parts/cards/short-course.php';
						include '../parts/cards/short-course-long-desc.php';
						include '../parts/cards/short-course.php';
						include '../parts/cards/short-course.php';
						include '../parts/cards/short-course.php';
						include '../parts/cards/short-course.php';
						include '../parts/cards/short-course.php'; ?>

					</div>
				</div>
			</div>
		</div>
		<div class="row no-print">
			<div class="s12 m6 offset-m3 l4 offset-l4 col">
				<p class="course-list__results-count">Showing <strong>12</strong> of <strong>48</strong> results</p>
				<button class="button button--outlined button--full-width">Load more</button>
				<div class="course-list__back-to-top">
					<a href="#all-courses">Back to top</a>
				</div>
			</div>
		</div>
	</section>
</main>