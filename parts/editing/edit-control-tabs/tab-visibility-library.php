<?php
/**
 * Edit control - visibility tab - librsry item
 * @since Sprint 18
 */
?>

<div id="visibility-library" class="edit-tab-content">
	<form class="form">
		<div class="form__element">
			<fieldset>
				<legend>Display on</legend>
				<div>
					<input type="checkbox" name="library-edit-course-page" id="library-edit-course-page">
					<label for="library-edit-course-page">Course page</label>
				</div>
				<div>
					<input type="checkbox" name="library-edit-programme-page" id="library-edit-programme-page">
					<label for="library-edit-programme-page">Programme page</label>
				</div>
			</fieldset>
		</div>
		<div class="form__element">
			<fieldset>
				<legend>Visibility</legend>
				<div>
					<input type="checkbox" name="library-edit-visibility" id="library-hidden">
					<label for="library-hidden">Hide content block</label>
				</div>
			</fieldset>
		</div>
		<div class="form__element">
			<fieldset>
				<legend>Search</legend>
				<div>
					<input type="checkbox" name="library-exclude-search" id="library-exclude-search">
					<label for="library-exclude-search">Exclude from search</label>
				</div>
			</fieldset>
		</div>
	</form>
</div>
