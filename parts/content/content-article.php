<?php
/**
 * Content - Article
 * @since Sprint 13
 */
?>

<main id="main" class="page-content">

	<?php
	// Get the common nav for the discover section.
	include '../parts/discover/discover-nav.php'; ?>

	<article class="article spacing-bottom">
		<div class="row">
			<div class="s12 m8 offset-m2 col">

				<!-- Start article header. -->
				<header id="article-header" class="article__head background-white">
					<div class="article__meta">
						<p><span class="fa-regular fa-clock"></span> 4 minute read</p>
					</div>
					<h1>Scientists explore African biodiversity to create life-saving drugs</h1>
				</header><!-- /#article-header. -->
				
			</div>
		</div>

		<!-- Start content block area. -->
		
		<?php
		// The text block.
		include '../parts/blocks/text/text.php';

		// The multiple items block with a vertical layout.
		include '../parts/blocks/multi/multi-vertical.php';

		// A text/image block.
		include '../parts/blocks/callout/callout-with-bg.php';

		// A light text/image block.
		include '../parts/blocks/callout/callout-no-bg.php';

		// The multiple items block with > 3 items.
		include '../parts/blocks/multi/multi.php';

		// The grid of three items block.
		include '../parts/blocks/multi/multi-one-item-no-bg.php'; ?>

		<!-- End content block area. -->

	</article>

	<!-- Start related article. -->
	<section id="related-articles" class="course-list background-white spacing-bottom no-print">
		<div class="row">
			<div class="s12 col">
				<div class="course-list__intro">
					<h2>Our other online study guides</h2>
				</div>
				
				<?php
				// Get the related articles carousel.
				include '../parts/cards/article-carousel.php'; ?>

			</div>
		</div>
	</section>
	<!-- /#related-articles. -->

</main>
