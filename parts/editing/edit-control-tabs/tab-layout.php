<?php
/**
 * Edit control - layout tab
 * @since Sprint 18
 */
?>

<div id="layout" class="edit-tab-content">
	<form class="form">
		<div class="form__element">
			<fieldset>
				<legend class="visually-hidden">Layout</legend>
				<input type="radio" name="block-type" id="standard">
				<label class="has-icon-after" for="standard">Standard<span class="fa-solid fa-align-left"></span></label>
				<input type="radio" name="block-type" id="callout">
				<label class="has-icon-after" for="callout">Callout<span class="fa-solid fa-message-image"></span></label>
				<input type="radio" name="block-type" id="quote">
				<label class="has-icon-after" for="quote">Quote<span class="fa-solid fa-quotes"></span></label>
				<input type="radio" name="block-type" id="accordion">
				<label class="has-icon-after" for="accordion">Accordion<span class="fa-solid fa-list-dropdown"></span></label>
				<input type="radio" name="block-type" id="checklist">
				<label class="has-icon-after" for="checklist">Checklist<span class="fa-solid fa-check-double"></span></label>
				<input type="radio" name="block-type" id="multi">
				<label class="has-icon-after" for="multi">Multi-block<span class="fa-solid fa-list-ul"></span></label>
			</fieldset>
		</div>
		<div class="form__element">
			<fieldset>
				<legend>Layout options</legend>
				<input type="radio" name="block-media-pos" id="below">
				<label class="is-small" for="below">Media below text</label>
				<input type="radio" name="block-media-pos" id="above">
				<label class="is-small" for="above">Media above text</label>
			</fieldset>
		</div>
	</form>
</div>
