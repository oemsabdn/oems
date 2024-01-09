<?php
/**
 * Edit control - text tab - sub block
 * @since Sprint 18
 */
?>

<div id="text-sub" class="edit-tab-content edit-tab-content--sub current">
	<form class="form">
		<div class="form__element form__element--has-hidden-options">
			<label for="edit-text-sub">Title - <span class="js-current-option">heading 2</span><a href="#" class="js-toggle-hidden-options reset-button-styles toggle-hidden fa-regular fa-pen-to-square" title="Toggle options"></a></label>
			<fieldset class="js-hidden-options display-none">
				<legend class="visually-hidden">Layout options</legend>
				<input type="radio" name="heading-to-use-sub" id="h2-sub" checked>
				<label class="is-small" for="h2-sub">heading 2</label>
				<input type="radio" name="heading-to-use-sub" id="h3-sub">
				<label class="is-small" for="h3-sub">heading 3</label>
				<input type="radio" name="heading-to-use-sub" id="h4-sub">
				<label class="is-small" for="h4-sub">heading 4</label>
			</fieldset>
			<input id="edit-text-sub" type="text">
		</div>
		<div class="form__element">
			<label for="edit-textarea-sub">Content</label>
			<textarea id="edit-textarea-sub">DA to add WYSIWYG library here to replace textarea.</textarea>
		</div>
	</form>
</div>
