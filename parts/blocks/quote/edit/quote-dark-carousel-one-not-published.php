<?php
/**
 * Content block - dark carousel with quote - one not published
 * @since Sprint 18
 */
?>

<div class="block block--with-background block--is-wide block-quote block-quote--has-image block-quote--dark block-quote--is-carousel" tabindex="0" data-block-id="1011">

	<?php 
	include '../parts/editing/edit-controls.php'; ?>
	
	<div class="block__inner">
		<div class="block__content">
			<div class="swiper-container swiper-container--1-col">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="block-quote__item not-published">
							
							<?php 
							include '../parts/blocks/quote/quotes/quote-short-with-image-edit.php'; ?>

						</div>
					</div>
					<div class="swiper-slide">
						<div class="block-quote__item">
							
							<?php 
							include '../parts/blocks/quote/quotes/quote-short-with-image-edit.php'; ?>

						</div>
					</div>
					<div class="swiper-slide">
						<div class="block-quote__item">
							
							<?php 
							include '../parts/blocks/quote/quotes/quote-short-with-image-edit.php'; ?>

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
