<?php
/**
 * Course carousel
 * @since Sprint 12
 */

?>


<div class="js-enable-favourite-toggle swiper-container swiper-container--4-col">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">

        	<?php
        	include '../parts/cards/short-course.php'; ?>
        	
		</div>
		<div class="swiper-slide">

        	<?php
        	include '../parts/cards/short-course.php'; ?>
        	
		</div>
		<div class="swiper-slide">

        	<?php
        	include '../parts/cards/short-course-long-desc.php'; ?>
        	
		</div>
		<div class="swiper-slide">

        	<?php
        	include '../parts/cards/short-course-long-desc.php'; ?>
        	
		</div>
		<div class="swiper-slide">

        	<?php
        	include '../parts/cards/short-course.php'; ?>
        	
		</div>
		<div class="swiper-slide">

        	<?php
        	include '../parts/cards/short-course.php'; ?>
        	
		</div>
		<div class="swiper-slide">

        	<?php
        	include '../parts/cards/short-course-long-desc.php'; ?>
        	
		</div>
    </div>
    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar no-print">
    	<div class="swiper-scrollbar-drag swiper-scrollbar-drag-1"></div>
    </div>
</div>
<!-- If we need navigation buttons -->
<div class="swiper-button-prev no-print"></div>
<div class="swiper-button-next no-print"></div>
