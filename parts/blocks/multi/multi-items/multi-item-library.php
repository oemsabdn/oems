<?php
/**
 * Page link item
 * @since Sprint 11
 */

?>

<div class="block-multi__item is-library">

	<?php 
	include '../parts/editing/edit-library-item.php'; ?>

	<figure>
		<img src="/rebrand/img/stock/image.jpg" alt="Alt text." loading="lazy">

		<?php 
		include '../parts/editing/edit-image-code.php'; ?>
		
	</figure>
	<div class="block-multi__inner">
		<h4>Title</h4>
		<p>Our research in public health was rated top in Scotland in the most recent National Research Excellence Framework.</p>
		<a class="button no-print" href="#">View Case Study Another Test Link<span class="fa-regular fa-chevron-right"></span></a>
	</div>
</div>