<?php
/**
 * Banner - Programme Details
 * @since Sprint 13
 */
?>

			<div class="breadcrumbs no-print">
				<div class="row">
					<div class="s12 col">
						<ul>
							<li><a href="#">On demand learning</a></li>
							<li><a href="#">Category</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="banner__inner">
				
				<div class="row">
					<div class="s8 col">
						<div class="add-to-wishlist">
							<button class="js-wishlist-toggle no-print"><span class="fa-regular fa-star"></span><span class="js-wishlist-message-add">Add to your wishlist</span></button>
							<span class="js-added-to-wishlist add-to-wishlist__message">Added to your <a href="#">wishlist</a></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="s12 m6 l6 col">
						<div class="banner__content">
							<p class="banner__award-types">MSc &bullet; PgDip &bullet; PgCert</p>
							<h1>Clinical Nutrition</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<div class="banner__buttons no-print">
								<h2>Qualifications</h2>
								<a class="js-programme-tab button button--disabled" data-tab="msc" href="#">MSc</a>
								<a class="js-programme-tab button button--secondary" data-tab="pgdip" href="#">PgDip</a>
								<a class="js-programme-tab button button--disabled" data-tab="pgcert" href="#">PgCert</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
	// Programme overview.
	//include '/parts/programme-details/overview.php';
	include '../parts/programme-details/overview-multi-start-date.php'; ?>

</header>
