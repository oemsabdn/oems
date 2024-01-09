<?php
/**
 * Content - Landing Page
 * @since Sprint 13
 */
?>

<main id="landing-page" class="spacing-top">

	<?php
	// The text block.
	include '../parts/blocks/text/text-short.php';
	include '../parts/blocks/multi/multi-no-bg.php'; ?>

	<section id="degrees" class="background-grey course-list spacing-bottom">

		<div class="row">
			<div class="s12 col">
				<div class="course-list__intro spacing-top">
					<h2>Our Engineering online degrees and awards</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem. Aliquam erat volutpat.</p>
				</div>

				<?php
				// Include a degrees carousel.
				include '../parts/cards/degree-carousel.php'; ?>

			</div>
		</div>

		<div class="row">
			<div class="s12 col">
				<div class="course-list__intro spacing-top">
					<h2>Our Engineering online degrees and awards</h2>
				</div>

				<?php
				// Include a short courses carousel.
				include '../parts/cards/course-carousel.php'; ?>

			</div>
		</div>

	</section>

	<div class="content-area-after-course-list">

		<?php
		// The grid of three items block.
		include '../parts/blocks/multi/multi-one-item-no-bg.php'; ?>

	</div>
</main>
