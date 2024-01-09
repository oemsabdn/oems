<?php
/**
 * Content block - light carousel with quote
 * @since Sprint 17
 */
?>

<div class="block block--is-wide block-quote block-quote--has-image block-quote--light block-quote--is-carousel background-white">
	<div class="block__inner">
		<div class="block__content">
			<div class="swiper-container swiper-container--1-col">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="block-quote__item">
							
							<?php 
							include 'quotes/quote-long-with-image.php'; ?>

						</div>
					</div>
					<div class="swiper-slide">
						<div class="block-quote__item">
							
							<?php 
							include 'quotes/quote-long-with-image.php'; ?>
							
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
