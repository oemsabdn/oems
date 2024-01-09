<?php
/**
 * Banner - Programme Details - edit mode - live
 * @since Sprint 13
 */

// If the page is being edited, show the toolbar.
// include '../parts/editing/edit-toolbar-live.php' ?>


			<div class="banner__inner">
				
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
							<h1>Edit mode - live template</h1>
							<p>A live page in edit mode. A mixture of published and not published blocks are shown.</p>
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
</div>
</header>
