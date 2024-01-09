
<?php
/**
 * Kitchen sink
 * @since Sprint 18
 */
$bannertype = "banner--has-gradient";
$overlaytype = "banner__overlay--disabled";
// Get the site header.
include '../header-html.php';
include '../header.php'; ?>

<!-- Progress bar. -->
<progress class="js-page-progress progress progress--page" value="0"></progress>

<?php
include '../parts/content/content-kitchen-sink.php';
include '../footer.php';
