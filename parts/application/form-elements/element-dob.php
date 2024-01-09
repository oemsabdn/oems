<?php
/**
 * Form element - DOB
 * @since Sprint 20
 */

?>

<div class="form__element">
	<fieldset class="dob">
		<legend>Date of birth</legend>
		<div class="dob__part">
			<label for="day">Day</label>
			<input id="day" class="js-dob" type="tel" maxlength="2" placeholder="DD">
		</div>
		<div class="dob__part">
			<label for="month">Month</label>
			<input id="month" class="js-dob" type="tel" maxlength="2" placeholder="MM">
		</div>
		<div class="dob__part dob__part--year">
			<label for="year">Year</label>
			<input id="year" class="js-dob" type="tel" maxlength="4" placeholder="YYYY">
		</div>
	</fieldset>
</div>
