<?php
/**
 * Content block - single item carousel
 * @since Sprint 17
 */

?>

<div class="block block-multi block-multi--is-vertical block-multi--is-single-carousel align-wide background-white">
	<div class="block__inner">
		<div class="block__content block-multi__intro">
			<h3>Single item carousel</h3>
			<p>Our close links with the NHS on the Foresterhill health campus makes Aberdeen the obvious provider of first-class education in all areas of health.</p>
		</div>
		<div class="block-multi__carousel">
			<div class="swiper-container swiper-container--1-col">
				<div class="swiper-wrapper">
					<div class="swiper-slide">

						<?php
						include 'multi-items/multi-item.php'; ?>
							
					</div>
					<div class="swiper-slide">

						<?php
						include 'multi-items/multi-item.php'; ?>
							
					</div>
					<div class="swiper-slide">

						<?php
						include 'multi-items/multi-item.php'; ?>
							
					</div>
					<div class="swiper-slide">

						<?php
						include 'multi-items/multi-item.php'; ?>
							
					</div>
					<div class="swiper-slide">

						<?php
						include 'multi-items/multi-item.php'; ?>
							
					</div>
				</div>
			</div>
			<div class="swiper-pagination"></div>
			<div class="swiper-button-prev no-print"></div>
			<div class="swiper-button-next no-print"></div>
		</div>
	</div>
</div>