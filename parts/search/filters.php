<?php
/**
 * Filters
 * @since initial
 */

?>

<div class="modal filters micromodal-slide" id="modal-filters" aria-hidden="true">
	<div class="modal__overlay" tabindex="-1" data-micromodal-close>
		<div class="modal__container background-dark" role="dialog" aria-modal="true" aria-labelledby="filter-title" data-scroll-lock-scrollable>
			<div class="spacing-both">
				<header class="filters__header">
					<div class="row">
						<div class="s12 col">
							<button class="js-modal-close reset-button-styles modal__close" aria-label="Close this dialog window">&times;</button>

							<!-- To see how this template looks when the user has not selected any filers, add class .no-filters-selected to the h2 below. -->
							<h2 id="filter-title">Filter</h2>

							<!-- To see how this template looks when the user has not selected any filters, remove the block below.-->
							<div class="filters-selected">
								<div class="filters-selected__item">Degrees and awards <button class="reset-button-styles" title="Remove 'Learning mode: Online learning'">Remove</button></div>
								<div class="filters-selected__item">Short courses <button class="reset-button-styles" title="Remove 'Learning mode: Online learning'">Remove</button></div>
								<div class="filters-selected__item">Health <button class="reset-button-styles" title="Remove 'Learning mode: Online learning'">Remove</button></div>
								<button class="filters-selected__clear reset-button-styles">Clear all filters</button>
							</div> <!-- End of selected filters block. Remove up to here. -->
							
						</div>
					</div>
				</header>
				<div class="filters__content">
					<div class="row">
						<div class="s12 m6 l4 col">
							<div class="filters__group">
								<h3>Type</h3>
								<fieldset class="filters__group__type">
									<legend>Filter by type</legend>
									<p>
										<input type="checkbox" id="test1" checked/>
										<label for="test1">Degrees and awards (17)</label>
									</p>
									<p>
										<input type="checkbox" id="test2" />
										<label for="test2">Short courses (49)</label>
									</p>
									<p>
										<input type="checkbox" id="test3" />
										<label for="test3">Articles and support (4)</label>
									</p>
								</fieldset>
							</div>
							<div class="filters__group">
								<h3>Category <button class="filters__group__expand reset-button-styles">Toggle options<span class="fa-light fa-plus"></span></button></h3>
								<fieldset>
									<legend>Filter by category</legend>
									<p>
										<input type="checkbox" id="test7" />
										<label for="test7">Category (4)</label>
									</p>
									<p>
										<input type="checkbox" id="test8" />
										<label for="test8">Category (4)</label>
									</p>
									<p>
										<input type="checkbox" id="test9" />
										<label for="test9">Category (4)</label>
									</p>
									<p>
										<input type="checkbox" id="test10" />
										<label for="test10">Category (4)</label>
									</p>
									<p>
										<input type="checkbox" id="test11" />
										<label for="test11">Category (4)</label>
									</p>
									<p>
										<input type="checkbox" id="test12" />
										<label for="test12">Category (4)</label>
									</p>
								</fieldset>
							</div>
						</div>
						<div class="s12 m6 l4 col">
							<div class="filters__group">
								<h3>Learning mode <button class="filters__group__expand reset-button-styles">Toggle options<span class="fa-light fa-plus"></span></button></h3>
								<fieldset>
									<legend>Filter by learning mode</legend>
									<p>
										<input type="checkbox" id="test13" />
										<label for="test13">Category (4)</label>
									</p>
									<p>
										<input type="checkbox" id="test14" />
										<label for="test14">Category (4)</label>
									</p>
									<p>
										<input type="checkbox" id="test15" />
										<label for="test15">Category (4)</label>
									</p>
								</fieldset>
							</div>
							<div class="filters__group">
								<h3>Study level <button class="filters__group__expand reset-button-styles">Toggle options<span class="fa-light fa-plus"></span></button></h3>
								<fieldset>
									<legend>Filter by study level</legend>
									<p>
										<input type="checkbox" id="test16" />
										<label for="test16">Category (4)</label>
									</p>
									<p>
										<input type="checkbox" id="test17" />
										<label for="test17">Category (4)</label>
									</p>
									<p>
										<input type="checkbox" id="test18" />
										<label for="test18">Category (4)</label>
									</p>
									<p>
										<input type="checkbox" id="test19" />
										<label for="test19">Category (4)</label>
									</p>
									<p>
										<input type="checkbox" id="test20" />
										<label for="test20">Category (4)</label>
									</p>
									<p>
										<input type="checkbox" id="test21" />
										<label for="test21">Category (4)</label>
									</p>
								</fieldset>
							</div>
						</div>
						<div class="s12 m6 l4 col">
							<div class="filters__group">
								<h3>Start date <button class="filters__group__expand reset-button-styles">Toggle options<span class="fa-light fa-plus"></span></button></h3>
								<fieldset>
									<legend>Filter by start date</legend>
									<p>
										<input type="checkbox" id="test22" />
										<label for="test22">Category (4)</label>
									</p>
									<p>
										<input type="checkbox" id="test23" />
										<label for="test23">Category (4)</label>
									</p>
									<p>
										<input type="checkbox" id="test24" />
										<label for="test24">Category (4)</label>
									</p>
									<p>
										<input type="checkbox" id="test25" />
										<label for="test25">Category (4)</label>
									</p>
								</fieldset>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer class="filters__footer background-dark">
			<div class="row">
				<div class="s12 col">
					<button class="js-modal-close button button--full-width">Show 27 results</button>
				</div>
			</div>
		</footer>
	</div>
</div>
