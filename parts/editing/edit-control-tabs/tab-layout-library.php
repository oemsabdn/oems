<?php
/**
 * Edit control - layout tab - library item
 * @since Sprint 18
 */
?>

<div id="layout-library" class="edit-tab-content">
	<form class="form">
		<div class="form__element">
			<label>Layout options</label>
			<fieldset>
				<legend class="visually-hidden">Add background</legend>
				<input type="radio" name="bg" id="background">
				<label class="is-small" for="background">Background</label>
				<input type="radio" name="bg" id="no-background">
				<label class="is-small" for="no-background">No background</label>
			</fieldset>
			<fieldset>
				<legend class="visually-hidden">Content direction</legend>
				<input type="radio" name="direction" id="horizontal">
				<label class="is-small" for="horizontal">Horizontal</label>
				<input type="radio" name="direction" id="vertical">
				<label class="is-small" for="vertical">Vertical</label>
			</fieldset>
			<fieldset>
				<legend class="visually-hidden">Multi-block or carousel</legend>
				<input type="radio" name="block-type" id="type-multi">
				<label class="is-small" for="type-multi">Multi-block</label>
				<input type="radio" name="block-type" id="type-carousel">
				<label class="is-small" for="type-carousel">Carousel</label>
			</fieldset>
		</div>
		<div class="form__element">
			<fieldset>
				<legend>Sub-block images</legend>
				<input type="radio" name="sub-image-type" id="square">
				<label class="is-small" for="square">Square</label>
				<input type="radio" name="sub-image-type" id="rounded">
				<label class="is-small" for="rounded">Rounded</label>
				<input type="radio" name="sub-image-type" id="circle">
				<label class="is-small" for="circle">Circle</label>
			</fieldset>
		</div>
	</form>
</div>
