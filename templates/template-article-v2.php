<?php
/**
 * Article v2
 * @since Sprint 11
 */
$bannertype = "banner--has-gradient";
$overlaytype = "banner__overlay--disabled";
// Get the site header.
include '../header-html.php';

// Get the header
include '../header.php';
?>

<!-- Progress bar. -->
<progress class="js-page-progress progress progress--page" value="0"></progress>

<?php
// Get the banner.
include '../parts/banners/banner-article.php';

// Get the main content.
include '../parts/content/content-article.php';

// Get the sub footer.
include '../parts/footer/sub-footer.php';

// Get the site footer.
include '../footer.php';
