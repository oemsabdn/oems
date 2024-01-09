<?php
/**
 * Edit control - visibility tab
 * @since Sprint 18
 */
?>

<div id="visibility" class="edit-tab-content">
	<form class="form">
		<div class="form__element">
			<fieldset>
				<legend>Display on</legend>
				<div>
					<input type="checkbox" name="edit-course-page" id="edit-course-page">
					<label for="edit-course-page">Course page</label>
				</div>
				<div>
					<input type="checkbox" name="edit-programme-page" id="edit-programme-page">
					<label for="edit-programme-page">Programme page</label>
				</div>
			</fieldset>
		</div>
		<div class="form__element">
			<fieldset>
				<legend>Visibility</legend>
				<div>
					<input type="checkbox" name="edit-visibility" id="hidden">
					<label for="hidden">Hide content block</label>
				</div>
			</fieldset>
		</div>
		<div class="form__element">
			<fieldset>
				<legend>Search</legend>
				<div>
					<input type="checkbox" name="edit-exclude-search" id="exclude-search">
					<label for="exclude-search">Exclude from search</label>
				</div>
			</fieldset>
		</div>
	</form>
</div>
