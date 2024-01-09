<?php
/**
 * Content block - grid of three items
 * @since initial
 */

?>

<div class="block block-multi block--with-background background-grey centered align-left-on-mobile">
	<div class="block__inner">
		<div class="block__content block-multi__intro">
			<h3>Multi block - with 3 items</h3>
			<p>Our close links with the NHS on the Foresterhill health campus makes Aberdeen the obvious provider of first-class education in all areas of health.</p>
		</div>
		<div class="block-multi__items">
			
			<?php
			include 'multi-items/multi-item-broken-image.php';
			include 'multi-items/multi-item.php';
			include 'multi-items/multi-item.php'; ?>
			
		</div>
	</div>
</div>
