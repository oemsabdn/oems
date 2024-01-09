<?php
/**
 * Search results
 * @since Sprint 10
 */

$bannertype = "banner--has-gradient";
$overlaytype = "banner__overlay--disabled";
// Get the site header.
include '../header-html.php';
include '../header.php'; ?>

		<div class="row">
			<div class="s12 col">
				<div class="banner__inner">
					
					<h1>Search results</h1>
					<div class="banner__search-container no-print">
						<form>
							<label for="search-banner" class="hidden">Search</label>
							
							<!-- Is valid. -->
							<input id="search-banner" type="search" class="js-search-field banner__search" value="nutrition">

							<!-- Is invalid.
							<input id="search-banner" type="search" class="js-search-field banner__search is-invalid" value="">

							<p class="banner__search__error">Please enter a search term.</p> -->

							<!-- Reset search. -->
							<a href="#" class="js-reset-search button button--search banner__button banner__button--reset reset-button-styles" aria-label="Clear"><span class="fa-light fa-xmark"></span></a>

							<!-- Submit search. -->
							<button class="button button--search banner__button reset-button-styles" aria-label="Search"><span class="fa-light fa-chevron-circle-right"></span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</header>

<main id="search-and-filters" class="background-grey course-list course-list--search-results spacing-bottom">

	<!-- Remove this block when viewing template with no results. -->
	<div class="course-list__filter no-print">
		<div class="row">
			<div class="s8 m4 offset-m2 col">
				<button data-micromodal-trigger="modal-filters" class="js-filters-open button button--filter">Filter <span class="fa-regular fa-sliders"></span></button>
			</div>
			<div class="s4 m4 col">
				<p class="course-list__results">27 results</p>
			</div>
		</div>
	</div> <!-- End filters. -->


	<!-- Remove this block to see template without filters applied. -->
	<div class="row no-print">
		<div class="s12 m8 offset-m2 col">
			<div class="filters-selected filters-selected--dark">
				<div class="filters-selected__item">Degrees and awards <button class="reset-button-styles" title="Remove 'Learning mode: Online learning'">Remove</button></div>
				<div class="filters-selected__item">Short courses <button class="reset-button-styles" title="Remove 'Learning mode: Online learning'">Remove</button></div>
				<div class="filters-selected__item">Health <button class="reset-button-styles" title="Remove 'Learning mode: Online learning'">Remove</button></div>
				<button class="filters-selected__clear reset-button-styles">Clear all filters</button>
			</div>
		</div>
	</div> <!-- End of filters applied block. -->

	<!-- If has results. -->
	<section id="search-results">
		<div class="row">
			<div class="s12 m8 offset-m2 col">
				<div class="js-enable-favourite-toggle course-list__items">
						
					<?php
					include '../parts/cards/search-result-degree.php';
					include '../parts/cards/search-result-course.php';
					include '../parts/cards/search-result-article.php';
					include '../parts/cards/search-result-degree.php'; ?>

				</div>
			</div>
		</div>
		<div class="row no-print">
			<div class="s12 m6 offset-m3 l4 offset-l4 col">
				<p class="course-list__results-count">Showing <strong>12</strong> of <strong>48</strong> results</p>
				<button class="button button--outlined button--full-width">Load more</button>
				<div class="course-list__back-to-top">
					<a href="#top-of-page">Back to top</a>
				</div>
			</div>
		</div>
		<div class="row no-print">
			<div class="s12 col">
				<div class="course-list__search-full-site align-center">
					<p>Looking for undergraduate, research or more on-campus results?</p>
					<a href="https://www.abdn.ac.uk/search/results.php?query=keyword" target="_blank">Search the full University of Aberdeen site for %keyword%<span class="fa-regular fa-chevron-right"></span></a>
				</div>
			</div>
		</div>
	</section> <!-- End search results. -->

	<!-- If has no results.
	<section id="no-results" class="search-no-results">
		<div class="row">
			<div class="s12 m8 offset-m2 col">
				<h2 class="align-center">No results found</h2>
			</div>
		</div>
		<div class="row no-print">
			<div class="s12 col">
				<div class="course-list__search-full-site align-center">
					<p>Looking for undergraduate, research or more on-campus results?</p>
					<a href="https://www.abdn.ac.uk/search/results.php?query=keyword" target="_blank">Search the full University of Aberdeen site for %keyword%<span class="fa-regular fa-chevron-right"></span></a>
				</div>
			</div>
		</div>
		<div class="search-no-results__tips no-print">
			<div class="row">
				<div class="s12 m4 offset-m2 col">
					<h3>Check that your search is:</h3>
					<ul>
						<li>spelt correctly</li>
						<li>using suitable keywords</li>
						<li>not using too many keywords</li>
					</ul>
				</div>
				<div class="s12 m4 col">
					<h3>Or alternatively:</h3>
					<ul>
						<li><a href="#">Browse by category</a></li>
						<li><a href="#">View degrees and awards</a></li>
						<li><a href="#">View short courses</a></li>
						<li><a href="#">Read our helpful articles</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section> End has no results. -->

</main>

<?php
// Get the filter modal.
include '../parts/search/filters.php';

// Get the sub footer.
include '../parts/footer/sub-footer.php';

// Get the site footer.
include '../footer.php';
