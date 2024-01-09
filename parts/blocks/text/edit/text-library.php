<?php
/**
 * Content block - text with image - library item
 * @since initial
 */

?>

<div class="block block-text is-library" tabindex="0" data-block-id="1002">

	<?php 
	include '../parts/editing/edit-controls.php'; ?>
	
	<div class="block__inner">
		<div class="block__content">

			<?php 
			include '../parts/editing/edit-library-item.php'; ?>

			<figure class="block-text__image">
				<img src="/rebrand/img/stock/image.jpg" alt="Alt text." loading="lazy">

				<?php 
				include '../parts/editing/edit-image-code.php'; ?>

			</figure>
			<h3><a href="#">Text with image block</a>, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</h3>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore.</p>
		</div>
	</div>
</div>
