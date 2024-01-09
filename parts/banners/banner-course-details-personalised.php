<?php
/**
 * Banner - Course Details - Personalised
 * @since Sprint 21
 */
?>

<header id="top" class="top course-details">
	<div id="banner" class="banner banner--course-details" style="background-image:url(/img/stock/image.jpg);">
		<div class="banner__overlay">
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
				<a href="#" class="no-print banner__logo">
					<img src="/rebrand/img/logo-on-demand.svg" alt="On-demand Learning logo." loading="lazy">
				</a>
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
	include '../parts/course-details/overview-personalised.php'; ?>

</header>