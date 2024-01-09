<?php
/**
 * Content - Programme List
 * @since Sprint 14
 */
?>

<main id="programme-list" class="background-grey">

	<section id="featured-programmes" class="course-list spacing-both">
		<div class="row">
			<div class="s12 col">
				<div class="course-list__intro">
					<h2>Featured degrees and awards</h2>
				</div>

				<?php
				// Include a degrees carousel.
				include '../parts/cards/degree-carousel.php'; ?>

			</div>
		</div>
	</section>

	<section id="all-programmes" class="course-list spacing-bottom">
		<div class="row">
			<div class="s12 col">
				<div class="course-list__intro">
					<h2>Browse our degrees and awards</h2>
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
					<div class="js-enable-favourite-toggle item-list item-list--three-col">
						
						<?php
						include '../parts/cards/degree.php';
						include '../parts/cards/degree-with-options.php';
						include '../parts/cards/degree.php';
						include '../parts/cards/degree.php';
						include '../parts/cards/degree.php';
						include '../parts/cards/degree.php';
						include '../parts/cards/degree-with-options.php';
						include '../parts/cards/degree.php';
						include '../parts/cards/degree.php';
						include '../parts/cards/degree.php';
						include '../parts/cards/degree.php';
						include '../parts/cards/degree.php'; ?>

					</div>
				</div>
			</div>
		</div>
		<div class="row no-print">
			<div class="s12 m6 offset-m3 l4 offset-l4 col">
				<p class="course-list__results-count">Showing <strong>12</strong> of <strong>48</strong> results</p>
				<button class="button button--outlined button--full-width">Load more</button>
				<div class="course-list__back-to-top">
					<a href="#all-programmes">Back to top</a>
				</div>
			</div>
		</div>
		<div class="row no-print">
			<div class="s12 col">
				<div class="course-list__search-full-site align-center">
					<a href="https://www.abdn.ac.uk/search/results.php?query=keyword" target="_blank">View all our on-campus degrees on the full University of Aberdeen site<span class="fa-regular fa-chevron-right"></span></a>
				</div>
			</div>
		</div>
	</section>
</main>