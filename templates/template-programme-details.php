<?php
/**
 * Programme Details
 * @since Sprint 10
 */
$bannertype = "banner--course-details responsive-background-image";
$overlaytype = "";
// Get the site header.
include '../header-html.php';
include '../header.php'; ?>

<!-- Progress bar. -->
<progress class="js-page-progress progress progress--page" value="0"></progress>

<?php
// Get the banner.
include '../parts/banners/banner-programme-details.php';

// Get the main content.
include '../parts/content/content-programme-details.php';

// Get the sub footer.
include '../parts/footer/sub-footer.php';

// Get the site footer.
include '../footer.php';
?>
<style>
    .responsive-background-image { background-image: url(https://on.abdn.ac.uk/resources/59a/A9uLhg0bBGPcdmPwgV0yHQ84irlk-1600w.jpg); }
</style>