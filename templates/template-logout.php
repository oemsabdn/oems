<?php
/**
 * Logout
 * @since initial
 */

// Get the site header.
include '../header-html.php'; ?>

	<a class="skip-main" href="#main-content" aria-label="Skip to content">Skip to content</a>
	<div class="container">
		<main id="main" class="login" style="background-image:url(/rebrand/img/stock/image.jpg);">
			<a class="login__close" aria-label="Close this form."></a>
			<div class="row">
				<div class="s12 m4 push-m8 l4 push-l8 col">
					<img class="login__logo" src="/rebrand/img/logo-on-demand.svg" alt="On-demand Learning logo.">
				</div>
				<div class="s12 m8 pull-m4 l4 pull-l4 col">
					<form class="form form--login">
						<h1 class="form__heading">You've signed out.<br>Haste ye back!</h1>
						<div class="form__element form__button-group">
							<button class="button">Back to homepage</button>
						</div>
						<div class="form__element">
							<div class="form__info">
								<br>
								<h2>Didn't mean to sign out?</h2>
								<p><a href="#">Sign in again</a></p>
							</div>
						</div>
					</form>
				</div>
			</div>
			<p class="login__credit">The Duncan Rice Library, Old Aberdeen</p>
		</main>
	</div>

<?php
// Get the site footer.
include '../footer.php';
