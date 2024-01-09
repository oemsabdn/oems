<?php
/**
 * Banner - Course Details
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
							<p class="banner__award-types">Short course</p>
							<h1>Access Mathematics</h1>
							<p>Designed around the principle of flexibility, this course is fully online: from registration to <a href="#">course completion</a> - enabling you to undertake your studies wherever you want.</p>
							<div class="banner__buttons no-print">
								<h2>Study options</h2>
								<a class="button button--secondary" href="#">SCQF Level 5</a>
								<a class="button button--disabled" href="#">SCQF Level 5</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
	// If the course has a fixed start date, show this.
	// include '../parts/course-details/overview-fixed-start-date.php';

	// If the course has multiple start dates, show this.
	include '../parts/course-details/overview-multi-start-date.php'; ?>

</header>