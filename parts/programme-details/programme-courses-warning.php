<?php
/**
 * Programme courses - warnings
 * @since Sprint 21
 */

?>

<div id="programme-courses" class="programme-courses programme-courses--is-selection">
	<ul class="programme-courses__tabs no-print">
		<li><a href="#" class="js-programme-tab active" data-tab="courses"><span class="fa-solid fa-table-cells-large"></span>Courses</a></li>
		<li><a href="#" class="js-programme-tab" data-tab="schedule"><span class="fa-solid fa-calendar-range"></span>Schedule</a></li>
	</ul>
	<div class="content-block background-grey">
		<div class="programme-courses__message programme-courses__message--is-alert programme-courses__message--is-sticky">
			<div class="row">
				<div class="s12 col">
					<div class="programme-courses__message__inner">
						<span class="fa-regular fa-triangle-exclamation"></span>
						<div>
							<p>There are errors in your schedule that must be fixed.</p>
							<ul>
								<li>Economic Evaluation - Application and Policy could not be scheduled</li>
								<li>You must study a credit-bearing course in your first term</li>
							</ul>
						</div>
						<a class="button button--outlined button--medium" href="#">Undo last action</a>
					</div>
				</div>
			</div>
		</div>
		<div id="courses" class="tab-content current course-list spacing-bottom">
			
			<?php
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
						<div class="programme-courses__button-group no-print">
							<a class="button" href="#">Review your study and payment schedule</a>
						</div>

					</div>
				</div>
			</div>
		</div>

		<div id="schedule" class="tab-content">
	
			<?php
			// Get a selection of schedule tiles.
			include '../parts/programme-details/schedule-selection-alt.php'; ?>

		</div>
	</div>
</div>
