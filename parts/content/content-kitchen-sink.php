<?php
/**
 * Content - Kitchen Sink
 * @since Sprint 18
 */
?>
</div>
</header>
<main id="main" class="course-details page-content">
	<div class="content-section content-section--first">
		<div class="block block--is-section-header">
			<div class="block__inner">
				<div class="block__content">
					<h2>Index</h2>
				</div>
			</div>
		</div>
		<div class="block block-text">
			<div class="block__inner">
				<div class="block__content">
					<p>This template contains every implementation of every block. Use the links below to jump to a specific group of blocks.</p>
					<ul>
						<li><a href="#text">Text blocks</a>
							<ul>
								<li>Text</li>
								<li>Basic</li>
								<li>With full width image</li>
								<li>With video and anchors</li>
								<li>With HTML embeds</li>
							</ul>
						</li>
						<li><a href="#checklist">Checklist</a></li>
						<li><a href="#multi">Multi blocks</a>
							<ul>
								<li>Three items - no bg</li>
								<li>Three items - with bg</li>
								<li>Vertical</li>
								<li>Even number of items</li>
								<li>Single item - no bg</li>
								<li>Single item - with bg</li>
								<li>Carousel - one item</li>
								<li>Carousel - three items</li>
							</ul>
						</li>
						<li><a href="#quote">Quotes</a>
							<ul>
								<li>No bg</li>
								<li>With bg</li>
								<li>Image left no bg</li>
								<li>Image left with bg</li>
								<li>Image right no bg</li>
								<li>Image right with bg</li>
								<li>Carousel no bg</li>
								<li>Carousel with bg</li>
							</ul>
						</li>
						<li><a href="#callout">Callouts</a>
							<ul>
								<li>With bg</li>
								<li>With bg - reverse</li>
								<li>No bg</li>
								<li>No bg - reverse</li>
								<li>Video</li>
								<li>Video - reverse</li>
								<li>Embed - SoundCloud</li>
								<li>Embed - SlideShare</li>
								<li>Embed - Instagram</li>
								<li>Embed - Twitter</li>
								<li>Embed - Facebook - single image</li>
								<li>Embed - Facebook - video no iframe</li>
								<li>Embed - Facebook - multiple images</li>
								<li>Embed - LinkedIn - image</li>
								<li>Embed - LinkedIn - video</li>
							</ul>
						</li>
						<li><a href="#accordion">Accordions</a>
							<ul>
								<li>Standard content</li>
								<li>Facebook embed</li>
								<li>Instagram embed</li>
								<li>Twitter embed</li>
								<li>Slideshare embed</li>
							</ul>
						</li>
						<li><a href="#republished">Republished articles</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div id="text" class="content-section">
		<div class="block block--is-section-header">
			<div class="block__inner">
				<div class="block__content">
					<h2>Text blocks</h2>
				</div>
			</div>
		</div>

		<?php
		// Text.
		include '../parts/blocks/text/text.php';
		include '../parts/blocks/text/text-on-dark.php';
		include '../parts/blocks/text/text-with-image.php';
		include '../parts/blocks/text/text-with-video.php';
		include '../parts/blocks/text/text-with-html.php'; ?>

	</div>

	<div id="checklist" class="content-section">
		<div class="block block--is-section-header">
			<div class="block__inner">
				<div class="block__content">
					<h2>Checklist</h2>
				</div>
			</div>
		</div>

		<?php
		include '../parts/blocks/checklist/checklist.php'; ?>

	</div>

	<div id="multi" class="content-section">
		<div class="block block--is-section-header">
			<div class="block__inner">
				<div class="block__content">
					<h2>Multi blocks</h2>
				</div>
			</div>
		</div>

		<?php
		include '../parts/blocks/multi/multi-no-bg.php';
		include '../parts/blocks/multi/multi.php';
		include '../parts/blocks/multi/multi-vertical.php';
		include '../parts/blocks/multi/multi-is-even.php';
		include '../parts/blocks/multi/multi-one-item-no-bg.php'; 
		include '../parts/blocks/multi/multi-one-item.php';
		include '../parts/blocks/multi/multi-carousel-single.php';
		include '../parts/blocks/multi/multi-carousel-multiple.php'; ?>

	</div>

	<div id="quote" class="content-section">
		<div class="block block--is-section-header">
			<div class="block__inner">
				<div class="block__content">
					<h2>Quotes</h2>
				</div>
			</div>
		</div>

		<?php
		include '../parts/blocks/quote/quote-light.php';
		include '../parts/blocks/quote/quote-dark.php';
		include '../parts/blocks/quote/quote-light-image-left.php';
		include '../parts/blocks/quote/quote-dark-image-left.php';
		include '../parts/blocks/quote/quote-light-image-right.php';
		include '../parts/blocks/quote/quote-dark-image-right.php';
		include '../parts/blocks/quote/quote-light-carousel.php';
		include '../parts/blocks/quote/quote-dark-carousel.php'; ?>

	</div>

	<div id="callout" class="content-section">
		<div class="block block--is-section-header">
			<div class="block__inner">
				<div class="block__content">
					<h2>Callout</h2>
				</div>
			</div>
		</div>

		<?php 
		include '../parts/blocks/callout/callout-with-bg.php';
		include '../parts/blocks/callout/callout-no-bg.php';
		include '../parts/blocks/callout/callout-video.php';
		include '../parts/blocks/callout/callout-embed.php'; ?>

	</div>

	<div id="accordion" class="content-section">
		<div class="block block--is-section-header">
			<div class="block__inner">
				<div class="block__content">
					<h2>Accordions</h2>
				</div>
			</div>
		</div>

		<?php 
		include '../parts/blocks/accordion/accordion.php';
		include '../parts/blocks/accordion/accordion-with-html.php'; ?>

	</div>

	<div id="republished" class="content-section">
		<div class="block block--is-section-header">
			<div class="block__inner">
				<div class="block__content">
					<h2>Republished article</h2>
				</div>
			</div>
		</div>

		<?php 
		include '../parts/blocks/other/republished-article.php'; ?>

	</div>
</main>