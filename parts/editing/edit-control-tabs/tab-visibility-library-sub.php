<?php
/**
 * Edit control - visibility tab - library item - sub block
 * @since Sprint 18
 */
?>

<div id="visibility-library-sub" class="edit-tab-content">
	<form class="form">
		<div class="form__element">
			<fieldset>
				<legend>Display on</legend>
				<div>
					<input type="checkbox" name="library-edit-course-page-sub" id="library-edit-course-page-sub">
					<label for="library-edit-course-page-sub">Course page</label>
				</div>
				<div>
					<input type="checkbox" name="library-edit-programme-page-sub" id="library-edit-programme-page-sub">
					<label for="library-edit-programme-page-sub">Programme page</label>
				</div>
			</fieldset>
		</div>
		<div class="form__element">
			<fieldset>
				<legend>Visibility</legend>
				<div>
					<input type="checkbox" name="library-edit-visibility-sub" id="library-hidden-sub">
					<label for="library-hidden-sub">Hide content block</label>
				</div>
			</fieldset>
		</div>
		<div class="form__element">
			<fieldset>
				<legend>Search</legend>
				<div>
					<input type="checkbox" name="library-exclude-search-sub" id="library-exclude-search-sub">
					<label for="library-exclude-search-sub">Exclude from search</label>
				</div>
			</fieldset>
		</div>
	</form>
</div>
