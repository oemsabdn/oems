<?php
/**
 * Programme courses
 * @since Sprint 12
 */

?>

<div id="programme-courses" class="programme-courses programme-courses--is-selection">
	<ul class="programme-courses__tabs no-print">
		<li><a href="#" class="js-programme-tab active" data-tab="courses"><span class="fa-solid fa-table-cells-large"></span>Courses</a></li>
		<li><a href="#" class="js-programme-tab" data-tab="schedule"><span class="fa-solid fa-calendar-range"></span>Schedule</a></li>
	</ul>
	<div class="content-block background-grey">
		<div class="programme-courses__progress programme-courses__progress--is-complete">
			<div class="row">
				<div class="s12 col">
					<div class="programme-courses__progress__inner">
						<div class="no-print">
							<label for="credits-selected">180 of 180 credits selected</label>
							<progress id="credits-selected" class="progress progress--credits" value="180" max="180"></progress>
						</div>
						<button class="js-deactivate-on-click js-show-tooltip button button--small button--icon-before no-print"><span class="fa-solid fa-save"></span>Save changes</button>
						<div class="js-progress-saved-tooltip programme-courses__tooltip">
							<p><a href="#">Sign in or register</a> to save your schedule to your Wishlist permanently.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="courses" class="tab-content current course-list spacing-bottom">
			
			<?php
			// Show an alert message.
			include '../parts/programme-details/alert-order.php';
			
			// Get a selection of course titles in two blocks.
			include '../parts/programme-details/course-selection.php'; ?>

			<div class="programme-courses__block">
				<div class="row">
					<div class="s12 m8 offset-m2 col">
						<div class="info-message">
							<span class="fa-solid fa-circle-info"></span>
							<div>
								<p>We will endeavour to make all course options available; however, these may be subject to change. <a href="#">Further information about potential changes can be viewed here</a>.</p>
								<p>Fees increase at the start of each academic year. Fees marked with * are provisional fees and subject to change.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="schedule" class="tab-content">
			<div class="programme-courses__message programme-courses__message--is-alert">
				<div class="row">
					<div class="s12 col">
						<div class="programme-courses__message__inner">
							<span class="fa-regular fa-triangle-exclamation"></span>
							<div>
								<p>These couses aren't in a preferred order, and may not be available as shown here.</p>
							</div>
							<button class="button button--outlined button--medium no-print">Sort in recommended order</button>
						</div>
					</div>
				</div>
			</div>
					
			<?php
			// Get a selection of schedule tiles.
			include '../parts/programme-details/schedule-selection.php'; ?>

			<div class="programme-courses__block">
				<div class="row">
					<div class="s12 m8 offset-m2 col">
						<div class="info-message spacing-bottom">
							<span class="fa-solid fa-circle-info"></span>
							<div>
								<p>We will endeavour to make all course options available; however, these may be subject to change. <a href="#">Further information about potential changes can be viewed here</a>.</p>
								<p>Fees increase at the start of each academic year. Fees marked with * are provisional fees and subject to change.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
