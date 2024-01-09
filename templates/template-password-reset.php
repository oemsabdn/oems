<?php
/**
 * Password reset
 * @since initial
 */

// Get the simplified site header used on transactional pages.
include '../header-html.php';
include '../header-transactional.php'; ?>

<!-- The main content. -->
<main id="main" class="user-area spacing-both">
	<div class="row">
		<div class="s12 m8 offset-m2 col">
			<form class="form form--password">
				<h1 class="form__heading">Change your password</h1>
				<div class="form__element">
					<label for="old-password">Confirm old password</label>
					<input id="old-password" type="password" placeholder="Your old password">
				</div>
				<div class="form__element">
					<label for="new-password">New password</label>
					<input id="new-password" type="password" placeholder="Your new password">
					<div class="form__help">
						<p>Your password must contain at least:</p>
						<ul>
							<li>one lowercase character</li>
							<li>one uppercase character</li>
							<li>one number</li>
							<li>be 8 or more characters in length</li>
						</ul>
					</div>
				</div>
				<div class="form__element">
					<label for="confirm-password">Confirm new password</label>
					<input id="confirm-password" type="password" placeholder="Confirm your new password">
				</div>
				<div class="form__element">
					<fieldset class="form__checkbox-group">
						<legend>Please select if you would like to receive information about programmes and courses provided by the University.</legend>
						<div class="form__checkbox-group__item">
							<input type="checkbox" name="checkbox" id="checkbox1" value="value1">
							<label for="checkbox1">by email</label>
						</div>
						<div class="form__checkbox-group__item">
							<input type="checkbox" name="checkbox" id="checkbox2" value="value2">
							<label for="checkbox2">by phone</label>
						</div>
						<div class="form__checkbox-group__item">
							<input type="checkbox" name="checkbox" id="checkbox3" value="value3">
							<label for="checkbox3">by social media</label>
						</div>
						<div class="form__checkbox-group__item">
							<input type="checkbox" name="checkbox" id="checkbox4" value="value4">
							<label for="checkbox4">by SMS</label>
						</div>
					</fieldset>
				</div>
				<div class="form__button-group">
					<button class="button">Save changes</button>
					<button class="button--cancel">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</main>

<?php
// Get the site footer.
include '../footer.php';
