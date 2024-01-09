<?php
/**
 * Home - v2
 * @since Sprint 10
 */

$bannertype = "banner--home banner--has-gradient";
$overlaytype = "banner__overlay--disabled";
// Get the site header.
include '../header-html.php';

// Get the header.
include '../header.php';

// Get the banner.
include '../parts/banners/banner-home.php';

// Get the main content.
include '../parts/content/content-home.php';

// Get the filter modal.
include '../parts/search/filters.php';

// The search form.
include '../parts/search/search-form.php';

// Get the sub footer.
include '../parts/footer/sub-footer.php';

// Get the site footer.
include '../footer.php';
