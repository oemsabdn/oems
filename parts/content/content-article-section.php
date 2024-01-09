<?php
/**
 * Content - Article Section
 * @since Sprint 13
 */
?>

<main id="main" class="page-content">
	
	<?php
	// Get the common nav for the discover section.
	include '../parts/discover/discover-nav.php'; ?>

	<section class="content-area-before-course-list spacing-top">

		<?php
		// Include a short text block.
		include '../parts/blocks/text/text-short.php';

		// An accordion block.
		include '../parts/blocks/accordion/accordion.php';
		include '../parts/blocks/accordion/accordion.php';
		include '../parts/blocks/accordion/accordion.php'; ?>

	</section>

	<!-- Start article list for this section. -->
	<section id="article-list" class="js-show-first-four course-list course-list--has-show-more article-list article-list--section spacing-both">
		<div class="row">
			<div class="s12 col">
				<div class="course-list__intro">
					<div class="row row--nogutter">
						<div class="s12 m10 col">
							<h2>Explore our articles on getting started online</h2>
						</div>
						<div class="s12 m2 col no-print">
							<p class="course-list__results">7 articles</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="s12 col">
				<div class="course-list__items">
					<div class="item-list item-list--four-col">
						
						<?php
						include '../parts/cards/article.php';
						include '../parts/cards/article-long-title.php';
						include '../parts/cards/article.php';
						include '../parts/cards/article.php';
						include '../parts/cards/article.php';
						include '../parts/cards/article.php';
						include '../parts/cards/article-long-title.php'; ?>

					</div>

					<!-- The show/hide all controls. -->
					<div class="course-list__more no-print">
						<a href="#" class="js-show-all course-list__toggle">Show all 7 articles <span class="fa-regular fa-chevron-down"></span></a>
						<a href="#" class="js-hide-all course-list__toggle course-list__toggle--hide">Show fewer articles <span class="fa-regular fa-chevron-up"></span></a>
					</div><!-- End show/hide controls. -->

				</div>
			</div>
		</div>
	</section><!-- /#article-list. -->

	<?php
	// Include another content block - this time just a generic one.
	include '../parts/blocks/multi/multi-one-item-no-bg.php'; ?>

</main>
