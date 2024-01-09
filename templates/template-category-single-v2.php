<?php
/**
 * Category - Single
 * @since Sprint 10
 */

$bannertype = "banner--category responsive-background-image";
$overlaytype = "";

// Get the site header.
include '../header-html.php';

// Get the header
include '../header.php';

// Get the banner.
include '../parts/banners/banner-category-single.php';

// Get the main content.
include '../parts/content/content-category-single.php';

// Get the sub footer.
include '../parts/footer/sub-footer.php';

// Get the site footer.
include '../footer.php';
?>
<style>
    .responsive-background-image { background-image: url(https://on.abdn.ac.uk/resources/59a/A9uLhg0bBGPcdmPwgV0yHQ84irlk-1600w.jpg); }
</style>