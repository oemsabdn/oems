<?php
/**
 * Login
 * @since initial
 */

// Get the site header.
include '../header-html.php'; ?>

	<div class="container">
		<main id="main" class="login" style="background-image:url(/rebrand/img/stock/image.jpg);">
			<a class="login__close"></a>
			<div class="row">
				<div class="s12 m4 push-m8 l4 push-l8 col">
					<img class="login__logo" src="/rebrand/img/logo-on-demand.svg" alt="On-demand Learning logo.">
				</div>
				<div class="s12 m8 pull-m4 l5 pull-l4 col">
					<div class="form form--login">
						<h1 class="form__header">Sign in</h1>

						<form class="js-login-container-email login__method login-method__email">
							<div class="login__switch login__switch--id">
								<a class="js-toggle-login-method-id button button--full-width button--outlined button--thin-border button--medium"><img src="/rebrand/img/icon-abdn-shield.png" alt="University of Aberdeen logo."><img class="dark-mode" src="/rebrand/img/icon-abdn-shield-mono.svg" alt="University of Aberdeen logo.">Sign in with student username</a>
								<div>
									<p>or</p>
								</div>
							</div>
							<div class="form__element">
								<label for="email">Email</label>
								<input id="email" type="email" placeholder="Your email address" autocomplete="email">
								<p class="form__error">Please enter a valid email address.</p>
							</div>
							<div class="form__element">
								<label for="password">Password</label>
								<input id="password" type="password" placeholder="Your password" autocomplete="current-password">
								<div class="form__help">
									<p><a href="#">Forgot password?</a></p>
								</div>
							</div>
							<div class="form__element form__button-group">
								<button class="button button--full-width">Sign in</button>
							</div>
							<div class="form__element">
								<div class="form__info">
									<h2>New to On-demand Learning?</h2>
									<p><a href="#">Create an account</a></p>
								</div>
							</div>
						</form>

						<form class="js-login-container-id login__method login__method--id">
							<div class="form__element">
								<label for="email">Email</label>
								<input id="email" type="email" placeholder="e.g. t99jb19">
							</div>
							<div class="form__element">
								<label for="password">Password</label>
								<input id="password" type="password" placeholder="Your password" autocomplete="current-password">
								<div class="form__help">
									<p><a href="#">Forgot password?</a></p>
								</div>
							</div>
							<div class="form__element form__button-group">
								<button class="button button--full-width">Sign in</button>
							</div>
							<div class="login__switch login__switch--email">
								<div>
									<p>or</p>
								</div>
								<a class="js-toggle-login-method-email button button--full-width button--outlined button--thin-border button--medium"><span class="fa-solid fa-envelope"></span>Sign in with personal email address</a>
							</div>
						</form>
					</div>
				</div>
			</div>
			<p class="login__credit">The Duncan Rice Library, Old Aberdeen</p>
		</main>
	</div>

<?php
// Get the site footer.
include '../footer.php';
