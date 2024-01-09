<?php
/**
 * Content - Home
 * @since Sprint 13
 */
?>

<main id="home" class="home-page background-grey spacing-top">
	<div class="course-list spacing-bottom">
		<div class="row">
			<div class="s12 col">
				<div class="course-list__intro course-list__intro--with-link">
					<h2>Featured online degrees and awards</h2>
					<p class="course-list__view-all no-print"><a href="#">View all degrees <span class="fa-light fa-chevron-right"></span></a></p>
				</div>

				<?php
				// Include a degrees carousel.
				include '../parts/cards/degree-carousel.php';?>

				<a href="#" class="button button--full-width no-print">View all degrees</a>
			</div>
		</div>
	</div>
	<div class="course-list spacing-bottom">
		<div class="row">
			<div class="s12 col">
				<div class="course-list__intro course-list__intro--with-link">
					<h2>Featured online short courses</h2>
					<p class="course-list__view-all no-print"><a href="#">View all short courses <span class="fa-light fa-chevron-right"></span></a></p>
				</div>

				<?php
				// Include a short courses carousel.
				include '../parts/cards/course-carousel.php';?>

				<a href="#" class="button button--full-width no-print">View all short courses</a>
			</div>
		</div>
	</div>
</main>
