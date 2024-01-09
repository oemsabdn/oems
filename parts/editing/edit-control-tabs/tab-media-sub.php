<?php
/**
 * Edit control - media tab - sub-block
 * @since Sprint 18
 */
?>

<div id="media-sub" class="edit-tab-content">
	<form class="form">
		<div class="form__element">
			<label for="edit-image-sub">Image<a href="#" class="js-toggle-help label__info" title="Get help on this field."><span class="fa-solid fa-info"></span></a></label>
			<div class="js-form-help form__pre-help">
				<p>Some help text for the image field.</p>
			</div>
			<input id="edit-image-sub" type="text">
		</div>
		<div class="form__element">
			<fieldset>
				<legend class="visually-hidden">png options</legend>
				<input type="checkbox" name="block-media-pos-sub" id="edit-dont-invert-sub">
				<label for="edit-dont-invert-sub">Don't invert png</label>
			</fieldset>
		</div>
		<div class="form__element">
			<label for="edit-image-alt-sub">Image alt text</label>
			<input id="edit-image-alt-sub" type="text">
		</div>
		<div class="form__element">
			<label for="edit-video-sub">Video<a href="#" class="js-toggle-help label__info" title="Get help on this field."><span class="fa-solid fa-info"></span></a></label>
			<div class="js-form-help form__pre-help">
				<p>Some help text for the video field.</p>
			</div>
			<input id="edit-video-sub" type="text">
		</div>
		<div class="form__element">
			<label for="edit-embed-code-sub">Video embed code</label>
			<input id="edit-embed-code-sub" type="text">
		</div>
	</form>
</div>
