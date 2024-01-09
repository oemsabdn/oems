<?php
/**
 * Edit control - layout tab - library item - sub-block
 * @since Sprint 18
 */
?>

<div id="layout-library-sub" class="edit-tab-content">
	<form class="form">
		<div class="form__element">
			<label>Layout options</label>
			<fieldset>
				<legend class="visually-hidden">Add background</legend>
				<input type="radio" name="bg-sub" id="background-sub">
				<label class="is-small" for="background-sub">Background</label>
				<input type="radio" name="bg-sub" id="no-background-sub">
				<label class="is-small" for="no-background-sub">No background</label>
			</fieldset>
			<fieldset>
				<legend class="visually-hidden">Content direction</legend>
				<input type="radio" name="direction-sub" id="horizontal-sub">
				<label class="is-small" for="horizontal-sub">Horizontal</label>
				<input type="radio" name="direction-sub" id="vertical-sub">
				<label class="is-small" for="vertical-sub">Vertical</label>
			</fieldset>
			<fieldset>
				<legend class="visually-hidden">Multi-block or carousel</legend>
				<input type="radio" name="block-type-sub" id="type-multi-sub">
				<label class="is-small" for="type-multi-sub">Multi-block</label>
				<input type="radio" name="block-type-sub" id="type-carousel-sub">
				<label class="is-small" for="type-carousel-sub">Carousel</label>
			</fieldset>
		</div>
		<div class="form__element">
			<fieldset>
				<legend>Sub-block images</legend>
				<input type="radio" name="sub-image-type-sub" id="square-sub">
				<label class="is-small" for="square-sub">Square</label>
				<input type="radio" name="sub-image-type-sub" id="rounded-sub">
				<label class="is-small" for="rounded-sub">Rounded</label>
				<input type="radio" name="sub-image-type-sub" id="circle-sub">
				<label class="is-small" for="circle-sub">Circle</label>
			</fieldset>
		</div>
	</form>
</div>
