<?php
/**
 * Content block - grid of three items - vertical
 * @since Sprint 11
 */

?>

<div class="block block-multi block-multi--is-vertical">
	<div class="block__inner">
		<div class="block-multi__intro block__content">
			<h3>Multi block - vertical</h3>
			<p>Our close links with the NHS on the Foresterhill health campus makes Aberdeen the obvious provider of first-class education in all areas of health.</p>
		</div>
		<div class="block-multi__items">
			
			<?php
			include 'multi-items/multi-item.php';
			include 'multi-items/multi-item.php';
			include 'multi-items/multi-item-no-image.php';
			include 'multi-items/multi-item.php'; ?>

		</div>
	</div>
</div>
