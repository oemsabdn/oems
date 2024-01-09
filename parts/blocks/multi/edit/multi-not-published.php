<?php
/**
 * Content block - multi - not published
 * @since Sprint 18
 */

?>

<div class="block block-multi block--with-background background-grey centered align-left-on-mobile not-published is-library" tabindex="0" data-block-id="1009">

	<?php 
	include '../parts/editing/edit-controls.php'; ?>

	<div class="block__inner">

		<?php 
		include '../parts/editing/edit-library-item.php'; ?>
		
		<div class="block__content block-multi__intro">
			<h3>Multi block - with 3 items</h3>
			<p>Our close links with the NHS on the Foresterhill health campus makes Aberdeen the obvious provider of first-class education in all areas of health.</p>
		</div>
		<div class="block-multi__items">
			
			<?php
			include '../parts/blocks/multi/multi-items/multi-item-edit.php';
			include '../parts/blocks/multi/multi-items/multi-item-edit.php';
			include '../parts/blocks/multi/multi-items/multi-item-edit.php'; ?>
			
		</div>
	</div>
</div>
