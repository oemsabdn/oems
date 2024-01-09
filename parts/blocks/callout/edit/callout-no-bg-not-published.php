<?php
/**
 * Content block - callout - not published
 * @since Sprint 14
 */

?>

<div class="block block-callout block-callout--reverse not-published" tabindex="0" data-block-id="1007">

	<?php 
	include '../parts/editing/edit-controls.php'; ?>

	<div class="block__inner">
		<div class="block__content">

			<?php 
			include '../parts/editing/edit-library-item.php'; ?>

			<figure class="block-callout__media">
				<img src="/rebrand/img/stock/image.jpg" alt="Alt text." loading="lazy">

				<?php 
				include '../parts/editing/edit-image-code.php'; ?>

			</figure>
			<div class="block-callout__text">
				<div>
					<h3>Callout with background</h3>
					<p>Whether the callout text has a background or not, it will be shown as transparent in edit mode so that the striped background is visible and it is obvious the block has not been published. Up for debate whether this is the best way to do it?</p>
				</div>
			</div>
		</div>
	</div>
</div>