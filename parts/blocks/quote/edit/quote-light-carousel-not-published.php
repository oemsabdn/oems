<?php
/**
 * Content block - light carousel with quote - not published
 * @since Sprint 18
 */
?>

<div class="block block--is-wide block-quote block-quote--has-image block-quote--light block-quote--is-carousel not-published is-library" tabindex="0" data-block-id="1013">

	<?php 
	include '../parts/editing/edit-controls.php'; ?>

	<div class="block__inner">
		<div class="block__content">

			<?php 
			include '../parts/editing/edit-library-item.php'; ?>
			
			<div class="swiper-container swiper-container--1-col">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="block-quote__item">
							
							<?php 
							include '../parts/blocks/quote/quotes/quote-long-with-image-edit.php'; ?>

						</div>
					</div>
					<div class="swiper-slide">
						<div class="block-quote__item">
							
							<?php 
							include '../parts/blocks/quote/quotes/quote-long-with-image-edit.php'; ?>
							
						</div>
					</div>
				</div>
			</div>
			<div class="swiper-pagination"></div>
			<div class="swiper-button-prev no-print"></div>
			<div class="swiper-button-next no-print"></div>
		</div>
	</div>
</div>
