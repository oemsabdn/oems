<?php
/**
 * Edit control - text tab
 * @since Sprint 18
 */
?>

<div id="text" class="edit-tab-content current">
	<form class="form">
		<div class="form__element form__element--has-hidden-options">
			<label for="edit-text">Title - <span class="js-current-option">heading 2</span><a href="#" class="js-toggle-hidden-options reset-button-styles toggle-hidden fa-regular fa-pen-to-square" title="Toggle options"></a></label>
			<fieldset class="js-hidden-options display-none">
				<legend class="visually-hidden">Layout options</legend>
				<input type="radio" name="heading-to-use" id="h2" checked>
				<label class="is-small" for="h2">heading 2</label>
				<input type="radio" name="heading-to-use" id="h3">
				<label class="is-small" for="h3">heading 3</label>
				<input type="radio" name="heading-to-use" id="h4">
				<label class="is-small" for="h4">heading 4</label>
			</fieldset>
			<input id="edit-text" type="text">
		</div>
		<div class="form__element">
			<label for="edit-textarea">Content</label>
			<textarea id="edit-textarea">DA to add WYSIWYG library here to replace textarea.</textarea>
		</div>
	</form>
</div>
