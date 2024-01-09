<?php
/**
 * Category Carousel
 * @since Sprint 13
 */
?>

<div class="swiper-container swiper-container--4-col">
	<!-- Additional required wrapper -->
	<div class="swiper-wrapper">
		<!-- Slides -->
		<div class="swiper-slide">
			
			<?php
			include '../parts/cards/category.php';
			?>

		</div>
		<div class="swiper-slide">
        	
        	<?php
			include '../parts/cards/category.php';
			?>

		</div>
		<div class="swiper-slide">
        	
        	<?php
			include '../parts/cards/category.php';
			?>

		</div>
		<div class="swiper-slide">
        	
        	<?php
			include '../parts/cards/category.php';
			?>

		</div>
		<div class="swiper-slide">
        	
        	<?php
			include '../parts/cards/category.php';
			?>

		</div>
		<div class="swiper-slide">
        	
			<?php
			include '../parts/cards/category.php';
			?>

		</div>
    </div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar swiper-scrollbar-1 no-print">
    	<div class="swiper-scrollbar-drag swiper-scrollbar-drag-1"></div>
    </div>
</div>

<!-- If we need navigation buttons -->
<div class="swiper-button-prev swiper-button-prev-1 no-print"></div>
<div class="swiper-button-next swiper-button-next-1 no-print"></div>
