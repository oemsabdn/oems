<?php
/**
 * Content block - accordion - edit
 * @since Sprint 18
 */

?>

<div class="block block-accordion" tabindex="0" data-block-id="1005">

	<?php 
	include '../parts/editing/edit-controls.php'; ?>

	<div class="block__inner">
		<div class="block__content">

			<?php 
			include '../parts/editing/edit-library-item.php'; ?>
			
			<div class="js-accordion accordion">
				<div class="js-accordion-title accordion__title"><a href="#"><h3>Accordion</h3></a></div>
				<div>
					<div class="js-accordion-inner accordion__inner">
						<p>My experience on the stats course has been fantastic. I’ve learned from real experts, I’ve been able to apply my learning to my work immediately and <a href="#">I’m already reaping the benefits</a>.</p>
						<h4><a href="#">Sub title</a></h4>
						<p>My experience on the stats course has been fantastic. I’ve learned from real experts, I’ve been able to apply my learning to my work immediately and I’m already reaping the benefits.</p>
						<ul>
							<li>This</li>
							<li>Is</li>
							<li>A list</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
