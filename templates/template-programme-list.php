<?php
/**
 * Course Details
 * @since Sprint 10
 */

$bannertype = "banner--has-gradient";
$overlaytype = "banner__overlay--disabled";
// Get the site header.
include '../header-html.php';

// Get the header.
include '../header.php';

// Get the banner.
include '../parts/banners/banner-programme-list.php';

// Get the content.
include '../parts/content/content-programme-list.php';

// Get the filter modal.
include '../parts/search/filters.php';

// Get the sub footer.
include '../parts/footer/sub-footer.php';

// Get the site footer.
include '../footer.php';
