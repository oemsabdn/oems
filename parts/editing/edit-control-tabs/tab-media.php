<?php
/**
 * Edit control - media tab
 * @since Sprint 18
 */
?>

<div id="media" class="edit-tab-content">
	<form class="form">
		<div class="form__element">
			<label for="edit-image">Image<a href="#" class="js-toggle-help label__info" title="Get help on this field."><span class="fa-solid fa-info"></span></a></label>
			<div class="js-form-help form__pre-help">
				<p>Some help text for the image field.</p>
			</div>
			<input id="edit-image" type="text">
		</div>
		<div class="form__element">
			<fieldset>
				<legend class="visually-hidden">png options</legend>
				<input type="checkbox" name="block-media-pos" id="edit-dont-invert">
				<label for="edit-dont-invert">Don't invert png</label>
			</fieldset>
		</div>
		<div class="form__element">
			<label for="edit-image-alt">Image alt text</label>
			<input id="edit-image-alt" type="text">
		</div>
		<div class="form__element">
			<label for="edit-video">Video<a href="#" class="js-toggle-help label__info" title="Get help on this field."><span class="fa-solid fa-info"></span></a></label>
			<div class="js-form-help form__pre-help">
				<p>Some help text for the video field.</p>
			</div>
			<input id="edit-video" type="text">
		</div>
		<div class="form__element">
			<label for="edit-embed-code">Video embed code</label>
			<input id="edit-embed-code" type="text">
		</div>
	</form>
</div>
