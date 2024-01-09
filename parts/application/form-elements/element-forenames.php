<?php
/**
 * Form element - Forenames
 * @since Sprint 20
 */

?>

<div class="form__element">
	<ul class="block-grid two-up mobile-one-up">
		<li>
			<label for="forename">Forename</label>
			<input type="text" id="forename">
		</li>
		<li>
			<label for="forename2">Additional name <span class="label__optional">(optional)</span></label>
			<input type="text" id="forename2">
		</li>
	</ul>
	<div class="form__help">
		<p>15 characters maximum per name</p>
	</div>
</div>
