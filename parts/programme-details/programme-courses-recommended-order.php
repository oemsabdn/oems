<?php
/**
 * Programme courses - recommended order alert
 * @since Sprint 21
 */

?>

<div id="programme-courses" class="programme-courses programme-courses--is-selection">
	<div class="content-block background-grey">
		<div class="programme-courses__progress">
			<div class="row">
				<div class="s12 col">
					<div class="programme-courses__progress__inner">
						<div class="no-print">
							<label for="credits-selected">105 of 180 credits selected</label>
							<progress id="credits-selected" class="progress progress--credits" value="105" max="180"></progress>
						</div>
						<button class="js-deactivate-on-click button button--small button--icon-before no-print"><span class="fa-solid fa-save"></span>Save changes</button>
					</div>
				</div>
			</div>
		</div>
		<div class="programme-courses__message programme-courses__message--is-info">
			<div class="row">
				<div class="s12 col">
					<div class="programme-courses__message__inner">
						<span class="fa-regular fa-circle-info"></span>
						<div>
							<p>We recommend you study these courses in a different order.</p>
						</div>
						<a class="button button--outlined button--medium" href="#">Sort in recommended order</a>
					</div>
				</div>
			</div>
		</div>
	
		<?php
		// Get a selection of schedule tiles.
		include '../parts/programme-details/schedule-selection-alt.php'; ?>

		<div class="programme-courses__message programme-courses__message--is-info">
			<div class="row">
				<div class="s12 col">
					<div class="programme-courses__message__inner">
						<span class="fa-regular fa-circle-info"></span>
						<div>
							<p>We recommend you study these courses in a different order.</p>
						</div>
						<a class="button button--outlined button--medium" href="#">Sort in recommended order</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
