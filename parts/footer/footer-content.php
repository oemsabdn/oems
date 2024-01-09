<?php
/**
 * Footer content
 * @since Sprint 14
 */

?>

<footer id="site-foot" class="site-foot">
	<div class="row">
		<div class="s12 m6 col">
			<img class="site-foot__logo no-print" src="/rebrand/img/logo-footer.svg" alt="University of Aberdeen." width="175" height="51" loading="lazy">
			<div class="print-disclaimer only-print">
				<p>Page URL: <?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?></p>
				<p>Information correct at time of printing.</p>
			</div>
		</div>
		<div class="s12 m6 col no-print">
			<ul class="site-foot__social">
				<li><a href="#" target="_blank" aria-label="View our YouTube channel"><span class="fa-brands fa-youtube"></span></a></li>
				<li><a href="#" target="_blank" aria-label="Follow us on X"><span class="fa-brands fa-x-twitter"></span></a></li>
				<li><a href="#" target="_blank" aria-label="Follow us on Instagram"><span class="fa-brands fa-instagram"></span></a></li>
				<li><a href="#" target="_blank" aria-label="Like us on Facebook"><span class="fa-brands fa-facebook-square"></span></a></li>
				<li><a href="#" target="_blank" aria-label="Visit us on LinkedIn"><span class="fa-brands fa-linkedin"></span></a></li>
			</ul>
		</div>
	</div>
	<div class="row no-print">
		<div class="s12 col">
			<nav id="footer-nav" class="site-foot__nav">
				<ul>
					<li><a href="#">Privacy Statement</a></li>
					<li><a href="#">Accessibility</a></li>
					<li><a href="#">Cookies</a></li>
					<li><a href="#">Slavery &amp; Human Trafficking Statement</a></li>
					<li><a href="#">Freedom of Information</a></li>
				</ul>
			</nav>
			<p class="site-foot__info">The University of Aberdeen is a charity registered in Scotland, No.SC013683</p>
		</div>
	</div>
	<a href="#top-of-page" class="site-foot__top" aria-label="Go to the top of the page."></a>
</footer>
