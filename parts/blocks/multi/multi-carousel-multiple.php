<?php
/**
 * Content block - multi item carousel
 * @since Sprint 17
 */

?>

<div class="block block--with-background background-grey block-multi block-multi--is-multi-carousel align-wide align-left-on-mobile">
	<div class="block__inner">
		<div class="block__content block-multi__intro">
			<h3>Grid of items?</h3>
			<p>Our close links with the NHS on the Foresterhill health campus makes Aberdeen the obvious provider of first-class education in all areas of health.</p>
		</div>
		<div class="block-multi__carousel">
			<div class="swiper-container swiper-container--3-col">
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
				<div class="swiper-scrollbar no-print">
					<div class="swiper-scrollbar-drag swiper-scrollbar-drag-1"></div>
				</div>
			</div>
			<div class="swiper-pagination"></div>
			<div class="swiper-button-prev no-print"></div>
			<div class="swiper-button-next no-print"></div>
		</div>
	</div>
</div>
