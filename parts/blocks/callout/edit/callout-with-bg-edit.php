<?php
/**
 * Content block - callout - edit mode
 * @since Sprint 14
 */

?>

<div class="block block-callout" tabindex="0" data-block-id="1008">

	<?php 
	include '../parts/editing/edit-controls.php'; ?>

	<div class="block__inner">
		<div class="block__content">
			<figure class="block-callout__media">
				<img src="/rebrand/img/stock/image.jpg" alt="Alt text." loading="lazy">

				<?php 
				include '../parts/editing/edit-image-code.php'; ?>

			</figure>
			<div class="block-callout__text">
				<div>
					<h3>Callout with background</h3>
					<p>The <a href="#">University of Aberdeen</a> has been named as Scottish University of the Year in the Times and Sunday Times Good University Guide 2019.</p>
					<a class="block-callout__link" href="#">This is a link on a dark content block<span class="fa-regular fa-chevron-right"></span></a>
				</div>
			</div>
		</div>
	</div>
</div>