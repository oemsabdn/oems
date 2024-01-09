<?php
/**
 * Date selection
 * @since Sprint 12
 */

?>

<div class="modal course-overview course-overview--date-selection micromodal-slide-from-right micromodal-slide-from-right--is-date-selection" id="date-selection" aria-hidden="true">
	<div class="modal__overlay" tabindex="-1" data-micromodal-close data-scroll-lock-scrollable>
		<div class="modal__container background-white spacing-top" role="dialog" aria-modal="true" aria-labelledby="date-selection-title" data-scroll-lock-scrollable>
			<div class="row">
				<div class="s12 col">
					<button class="js-modal-close reset-button-styles modal__close modal__close--dark" aria-label="Close this dialog window">&times;</button>
				</div>
			</div>

			<header id="date-selection-header" class="course-overview__header spacing-top">
				<div class="row">
					<div class="s12 col">
						<p class="course-overview__header__credits">15 Credits</p>
						<h1 id="date-selection-title" class="course-overview__header__title">Applied Statistics</h1>
						<p>This text can be added if any explanation is needed, e.g. when you should do it. This is specific to the prescription not the course.</p>
						<form class="form form--date-selection">
							<div class="form__element">
								<fieldset>
									<h2>Study this course in:</h2>
									<input type="radio" id="january-22" name="schedule-date-selection">
									<label for="january-22">January 2022</label><br>
									<input type="radio" id="january-23" name="schedule-date-selection">
									<label for="january-23">January 2023</label><br>
									<input type="radio" id="january-24" name="schedule-date-selection">
									<label for="january-24">January 2024</label><br>
								</fieldset>
							</div>
							<div class="form__element form__button-group">
								<button class="button">Done</button>
								<button class="button button--outlined"><span class="fa-regular fa-trash"></span>Remove course</button>
							</div>
						</form>
					</div>
				</div>
			</header>

		</div>
	</div>
</div>
