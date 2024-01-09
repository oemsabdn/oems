<?php
/**
 * Course List - v2
 * @since Sprint 10
 */
$bannertype = "banner--has-gradient";
$overlaytype = "banner__overlay--disabled";
// Get the site header.
include '../header-html.php';

// Get the header.
include '../header.php';

// Get the banner.
include '../parts/banners/banner-course-list.php';

// Get the content.
include '../parts/content/content-course-list.php';

// Get the filter modal.
include '../parts/search/filters.php';

// Get the sub footer.
include '../parts/footer/sub-footer.php';

// Get the site footer.
include '../footer.php';
