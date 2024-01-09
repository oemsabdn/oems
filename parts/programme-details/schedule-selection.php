<?php
/**
 * Schedule Selection
 * @since Sprint 12
 */

?>

<div class="spacing-top">
	<div class="row">
		<div class="s12 col">
			<div class="programme-courses__schedule-block">
				<h2>Your learning on this programme</h2>
			</div>

			<?php 
			include '../parts/user-area/learning-history-table.php'; ?>

		</div>
	</div>
</div>

<div class="spacing-top">
	<div class="row">
		<div class="s12 col">
			<div class="programme-courses__schedule-block">
				<h2>Manage your schedule</h2>
				<p>Courses you are currently registered on cannot be changed. You can edit when you want to study future courses by selecting their tiles below.</p>
			</div>
			<div class="swiper-container js-swiper-container--only-mobile swiper-container--only-mobile swiper-container--only-mobile--three-col">
				<div class="swiper-wrapper">
					<div class="swiper-slide">

						<?php
						include '../parts/cards/schedule-blocked.php'; ?>

					</div>
					<div class="swiper-slide">

						<?php
						include '../parts/cards/schedule-two-items-registered.php'; ?>

					</div>
					<div class="swiper-slide">

						<?php
						include '../parts/cards/schedule-no-items.php'; ?>

					</div>
				</div>
				<!-- If we need scrollbar -->
				<div class="swiper-scrollbar no-print">
					<div class="swiper-scrollbar-drag"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div>
	<div class="row">
		<div class="s12 col">
			<div class="swiper-container js-swiper-container--only-mobile swiper-container--only-mobile swiper-container--only-mobile--three-col">
				<div class="swiper-wrapper">
					<div class="swiper-slide">

						<?php
						include '../parts/cards/schedule-two-items.php'; ?>

					</div>
					<div class="swiper-slide">

						<?php
						include '../parts/cards/schedule-no-items.php'; ?>

					</div>
				</div>
				<!-- If we need scrollbar -->
				<div class="swiper-scrollbar no-print">
					<div class="swiper-scrollbar-drag"></div>
				</div>
			</div>
		</div>
	</div>
</div>
