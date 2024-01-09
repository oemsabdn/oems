<?php
/**
 * Content - Article List
 * @since Sprint 13
 */
?>

<main id="main" class="page-content spacing-bottom">

	<?php
	// Get the common nav for the discover section.
	include '../parts/discover/discover-nav.php'; ?>

	<!-- Start featured articles block. -->
	<section id="featured-articles" class="spacing-top course-list article-list article-list--featured">
		<div class="row">
			<div class="s12 col">
				<div class="course-list__intro">
					<h2>Featured articles</h2>
				</div>
				<div class="item-list item-list--four-col">
					
					<?php
					include '../parts/cards/article-with-image.php';
					include '../parts/cards/article-with-image.php';
					include '../parts/cards/article.php';?>
				
				</div>
			</div>
		</div>
	</section><!-- /#featured-articles. -->

	<!-- Start first example section block. -->
	<section id="articles-online-study-guides" class="article-list">
		<div class="row">
			<div class="s12 col">
				<div class="article-list__intro spacing-top">
					<h2>Our Engineering online degrees and awards</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem. Aliquam erat volutpat.</p>
				</div>
				<div class="item-list item-list--four-col">
					
					<?php
					include '../parts/cards/article.php';
					include '../parts/cards/article-long-title.php';
					include '../parts/cards/article.php';?>

					<div class="article-list__view-all no-print">
						<a href="#">
							<div class="article-list__view-all__inner">
								<div>
									<span class="fa-duotone fa-axe-battle article-list__view-all__icon"></span>
								</div>
								<p>View all<span class="fa-regular fa-chevron-right"></span></p>
							</div>
						</a>
					</div>

				</div>
			</div>
		</div>
	</section><!-- /#articles-online-study-guides. -->

	<!-- Start first example section block. -->
	<section id="articles-time-management" class="article-list">
		<div class="row">
			<div class="s12 col">
				<div class="article-list__intro article-list__intro--with-border spacing-top">
					<h2>Our Engineering online degrees and awards</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at porttitor sem. Aliquam erat volutpat.</p>
				</div>
				<div class="item-list item-list--four-col">
					
					<?php
					include '../parts/cards/article.php';
					include '../parts/cards/article.php';
					include '../parts/cards/article.php'; ?>

					<div class="article-list__view-all no-print">
						<a href="#">
							<div class="article-list__view-all__inner">
								<div>
									<span class="fa-light fa-alarm-clock article-list__view-all__icon"></span>
								</div>
								<p>View all of our articles on time management<span class="fa-regular fa-chevron-right"></span></p>
							</div>
						</a>
					</div>

				</div>
			</div>
		</div>
	</section><!-- /#articles-time-management. -->

</main>
