<?php
/**
 * Content block - multi vertical - one not published
 * @since Sprint 18
 */

?>

<div class="block block-multi block-multi--is-vertical centered align-left-on-mobile" tabindex="0" data-block-id="1010">

	<?php 
	include '../parts/editing/edit-controls.php'; ?>

	<div class="block__inner">
		<div class="block-multi__intro block__content">
			<h3>Multi block - with 3 items</h3>
			<p>Our close links with the NHS on the Foresterhill health campus makes Aberdeen the obvious provider of first-class education in all areas of health.</p>
		</div>
		<div class="block-multi__items">
			
			<?php
			include '../parts/blocks/multi/multi-items/multi-item-not-published.php';
			include '../parts/blocks/multi/multi-items/multi-item-library.php';
			include '../parts/blocks/multi/multi-items/multi-item-edit.php'; ?>
			
		</div>
	</div>
</div>
