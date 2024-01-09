<?php
/**
 * Content block - grid of three items on white
 * @since initial
 */

?>

<div class="block block-multi centered align-left-on-mobile">
	<div class="block__inner">
		<div class="block__content block-multi__intro">
			<h3>Multi block with no background</h3>
			<p>Here's a few important links to help you out throughout your time studying with us.</p>
		</div>
		<div class="block-multi__items">

			<?php
			include 'multi-items/multi-item.php';
			include 'multi-items/multi-item.php';
			include 'multi-items/multi-item.php'; ?>

		</div>
	</div>
</div>
