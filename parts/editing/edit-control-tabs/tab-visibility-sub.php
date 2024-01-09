<?php
/**
 * Edit control - visibility tab - sub
 * @since Sprint 18
 */
?>

<div id="visibility-sub" class="edit-tab-content">
	<form class="form">
		<div class="form__element">
			<fieldset>
				<legend>Display on</legend>
				<div>
					<input type="checkbox" name="edit-course-page" id="edit-course-page-sub">
					<label for="edit-course-page-sub">Course page</label>
				</div>
				<div>
					<input type="checkbox" name="edit-programme-page-sub" id="edit-programme-page-sub">
					<label for="edit-programme-page-sub">Programme page</label>
				</div>
			</fieldset>
		</div>
		<div class="form__element">
			<fieldset>
				<legend>Visibility</legend>
				<div>
					<input type="checkbox" name="edit-visibility-sub" id="hidden-sub">
					<label for="hidden-sub">Hide content block</label>
				</div>
			</fieldset>
		</div>
		<div class="form__element">
			<fieldset>
				<legend>Search</legend>
				<div>
					<input type="checkbox" name="edit-exclude-search-sub" id="exclude-search-sub">
					<label for="exclude-search-sub">Exclude from search</label>
				</div>
			</fieldset>
		</div>
	</form>
</div>
