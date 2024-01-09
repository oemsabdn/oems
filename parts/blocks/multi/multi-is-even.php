<?php
/**
 * Content block - grid of multiple items
 * @since Sprint 11
 */

?>

<div class="block block-multi block--with-background background-grey centered align-left-on-mobile">
	<div class="block__inner">
		<div class="block__content block-multi__intro">
			<h3>Multi block - has 4 items</h3>
			<p>Our close links with the NHS on the Foresterhill health campus makes Aberdeen the obvious provider of first-class education in all areas of health.</p>
		</div>
		<div class="block-multi__items">

			<?php
			include 'multi-items/multi-item-circle.php';
			include 'multi-items/multi-item.php';
			include 'multi-items/multi-item.php';
			include 'multi-items/multi-item-rounded-corners.php';
			?>

		</div>
	</div>
</div>
