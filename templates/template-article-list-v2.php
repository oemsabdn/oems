<?php
/**
 * Article List v2
 * @since Sprint 11
 */
$bannertype = "banner--has-gradient";
$overlaytype = "banner__overlay--disabled";

// Get the site header.
include '../header-html.php';

// Get the header.
include '../header.php';

// Get the banner.
include '../parts/banners/banner-article-list.php';

// Get the main content.
include '../parts/content/content-article-list.php';

// Get the sub footer.
include '../parts/footer/sub-footer.php';

// Get the site footer.
include '../footer.php';
