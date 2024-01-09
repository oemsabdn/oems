<?php
/**
 * Content - Single Category
 * @since Sprint 13
 */
?>

<main id="category-listing">
	
	<?php include '../parts/categories/related-categories.php'; ?>

	<!-- Degrees & awards. -->
	<section id="degrees-awards" class="js-show-first-three page-content course-list course-list--has-show-more background-grey spacing-both">
		<div class="row">
			<div class="s12 col">
				<div class="course-list__intro">
					<div class="row">
						<div class="s12 m10 col">
							<h2>Degrees and awards</h2>
						</div>
						<div class="s12 m2 col no-print">
							<p class="course-list__results">12 results</p>
						</div>
					</div>
					<div class="course-list__intro__description">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem. Aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem. Aliquam erat volutpat.</p>
					</div>
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
						include '../parts/cards/degree-with-options.php'; ?>

					</div>

					<div class="course-list__more no-print">
						<a href="#" class="js-show-all course-list__toggle">Show all 7 degrees and awards <span class="fa-regular fa-chevron-down"></span></a>
						<a href="#" class="js-hide-all course-list__toggle course-list__toggle--hide">Show fewer degrees and awards <span class="fa-regular fa-chevron-up"></span></a>
					</div>
				</div>
			</div>
		</div>
	</section><!-- !#degrees-awards. -->
	
	<!-- Short courses. -->
	<section id="short-courses" class="js-show-first-four page-content course-list course-list--has-show-more background-grey spacing-bottom">
		<div class="row">
			<div class="s12 col">
				<div class="course-list__intro">
					<div class="row">
						<div class="s12 m10 col">
							<h2>Short courses</h2>
						</div>
						<div class="s12 m2 col no-print">
							<p class="course-list__results">12 results</p>
						</div>
					</div>
					<div class="row">
						<div class="s12 col">
							<div class="course-list__intro__description">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem. Aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem. Aliquam erat volutpat.</p>
							</div>
						</div>
					</div>
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
						include '../parts/cards/short-course-long-desc.php';
						include '../parts/cards/short-course.php';
						include '../parts/cards/short-course.php';
						include '../parts/cards/short-course.php';
						include '../parts/cards/short-course-long-desc.php'; ?>

					</div>

					<div class="course-list__more no-print">
						<a href="#" class="js-show-all course-list__toggle">Show all 12 short courses <span class="fa-regular fa-chevron-down"></span></a>
						<a href="#" class="js-hide-all course-list__toggle course-list__toggle--hide">Show fewer short courses <span class="fa-regular fa-chevron-up"></span></a>
					</div>
				</div>
			</div>
		</div>
	</section><!-- !#short-courses. -->

	<div class="block block--without-spacing block-text background-grey">
		<div class="block__inner">
			<div class="block__content">
				<h3>Geared for Success</h3>
				<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</div>

</main>