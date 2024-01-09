<?php
/**
 * Categories
 * @since initial
 */
$bannertype = "banner--category banner--has-gradient";
$overlaytype = "banner__overlay--disabled";

// Get the site header.
include '../header-html.php';

// Get the header
include '../header.php';

// Get the banner.
include '../parts/banners/banner-categories.php';

// Get the main content.
include '../parts/content/content-categories.php';

// Get the sub footer.
include '../parts/footer/sub-footer.php';

// Get the site footer.
include '../footer.php';
