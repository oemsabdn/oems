<?php
/**
 * Course Selection
 * @since Sprint 12
 */

?>

<div class="programme-courses__block spacing-top">
	<div class="row">
		<div class="s12 col">
			<div class="programme-courses__block__title">
				<h3>Compulsory courses</h3>
			</div>
			<div class="js-swiper-container--only-mobile swiper-container swiper-container--only-mobile">
				<div class="swiper-wrapper">
					<div class="swiper-slide">

						<?php
						include '../parts/cards/programme-course-compulsory.php'; ?>

					</div>
					<div class="swiper-slide">

						<?php
						include '../parts/cards/programme-course-compulsory-no-link.php'; ?>

					</div>
					<div class="swiper-slide">

						<?php
						include '../parts/cards/programme-course-add.php'; ?>

					</div>
					<div class="swiper-slide">

						<?php
						include '../parts/cards/programme-course-remove.php'; ?>

					</div>
				</div>
				<!-- If we need scrollbar -->
				<div class="swiper-scrollbar no-print">
					<div class="swiper-scrollbar-drag swiper-scrollbar-drag-1"></div>
				</div>
			</div>
			<div class="programme-courses__notification">
				<div class="programme-courses__notification__item">
					<span class="fa-solid fa-lock-keyhole"></span>
					<p>You must select Economic Evaluation - Principles and Frameworks before you can study Economic Evaluation - Application and Policy.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="programme-courses__block spacing-top">
	<div class="row">
		<div class="s12 col">
			<div class="programme-courses__block__title">
				<h3>All tiles with style changes in Sprint 15</h3>
			</div>
			<div class="js-swiper-container--only-mobile swiper-container swiper-container--only-mobile">
				<div class="swiper-wrapper">
					<div class="swiper-slide">

						<?php
						include '../parts/cards/programme-course-achieved-selection.php'; ?>

					</div>
					<div class="swiper-slide">

						<?php
						include '../parts/cards/programme-course-registered-selection.php'; ?>

					</div>
					<div class="swiper-slide">

						<?php
						include '../parts/cards/programme-course-equivalent.php'; ?>

					</div>
				</div>
				<!-- If we need scrollbar -->
				<div class="swiper-scrollbar no-print">
					<div class="swiper-scrollbar-drag swiper-scrollbar-drag-1"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="programme-courses__block">
	<div class="row">
		<div class="s12 col">
			<div class="programme-courses__block__title">
				<h3>Second block of courses</h3>
				<p>Including some descriptive text to test that it looks alright.</p>
			</div>
			<div class="js-swiper-container--only-mobile swiper-container swiper-container--only-mobile">
				<div class="swiper-wrapper">
					<div class="swiper-slide">

						<?php
						include '../parts/cards/programme-course-in-progress.php'; ?>

					</div>
					<div class="swiper-slide">

						<?php
						include '../parts/cards/programme-course-failed.php'; ?>

					</div>
					<div class="swiper-slide">

						<?php
						include '../parts/cards/programme-course-prerequisite.php'; ?>

					</div>
					<div class="swiper-slide">

						<?php
						include '../parts/cards/programme-course-achieved-selection.php'; ?>

					</div>
					<div class="swiper-slide">

						<?php
						include '../parts/cards/programme-course-limit-reached.php'; ?>

					</div>
					<div class="swiper-slide">

						<?php
						include '../parts/cards/programme-course-alternate.php'; ?>

					</div>
				</div>
				<!-- If we need scrollbar -->
				<div class="swiper-scrollbar no-print">
					<div class="swiper-scrollbar-drag swiper-scrollbar-drag-1"></div>
				</div>
			</div>
			<div class="programme-courses__notification">
				<div class="programme-courses__notification__item">
					<span class="fa-solid fa-lock-keyhole"></span>
					<p>You must select Economic Evaluation - Principles and Frameworks before you can study Economic Evaluation - Application and Policy.</p>
				</div>
				<div class="programme-courses__notification__item">
					<span class="fa-regular fa-right-left is-alternative"></span>
					<p>You can't choose Applied Statistics if you have already studied Health Informatics.</p>
				</div>
			</div>
		</div>
	</div>
</div>