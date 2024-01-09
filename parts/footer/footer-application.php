<?php
/**
 * Footer
 * @since initial
 */

?>

			</div><!-- Main content. -->
		</div><!-- Top of page. -->

		

		<?php
		// Get the footer content.
		include '../parts/footer/footer-content.php';

		// The search form.
		include '../parts/search/search-form.php'; ?>

		<script src="/rebrand/resources/js/vendor/modernizr.custom.js"></script>
		<script src="/rebrand/resources/js/vendor/jquery-3.5.1.min.js"></script>

		<!-- // If we're on the application template, load the select2 library. -->
		<script src="/rebrand/resources/js/vendor/select2.min.js"></script>

        <?php
        if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false)) : ?>

			<script src="/rebrand/resources/js/vendor/micromodal-040.js"></script>

		<?php
		else: ?>

			<script src="/rebrand/resources/js/vendor/micromodal-046.js"></script>

		<?php
		endif; ?>

		<link rel="stylesheet" href="/rebrand/resources/css/vendor/select2.css">
		<script src="/rebrand/js/application.js"></script>
		<script src="/rebrand/js/main.js"></script>

	</body>

</html>
