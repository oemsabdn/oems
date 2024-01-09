<?php
/**
 * Sitemap
 * @since Sprint 13
 */

$bannertype = "banner--has-gradient";
$overlaytype = "banner__overlay--disabled";
// Get the site header.
include '../header-html.php';
include '../header.php'; ?>

		<div class="row">
			<div class="s12 col">
				<div class="banner__inner">
					
					<h1>Sitemap</h1>
				</div>
			</div>
		</div>
	</div>
</div>
</header>

<main id="sitemap" class="page-content spacing-both">
	<div class="content-block spacing-bottom">
		<div class="row">
			<div class="s12 col">
				<div class="content-block__text">
					<h2><a href="#">Home</a></h2>
					<ul>
						<li><a href="#">Sign in</a></li>
						<li><a href="#">Create account</a></li>
						<li><a href="#">Reset your password</a></li>
			  		</ul>
	                <h2><a href="#">Short courses</a></h2>
					<ul>
						<li><a href="#">Access Course in English - SCQF 6</a></li>
						<li><a href="#">Access Course in Maths - SCQF 5</a></li>
						<li><a href="#">Access Course in Maths - SCQF 6</a></li>
						<li>etc. (all public courses in alpha order)</li>
					</ul>
					<h2><a href="#">Degrees and Awards</a></h2>
					<ul>
						<li><a href="#">Clinical Nutrition</a></li>
						<li><a href="#">Data Science</a></li>
						<li><a href="#">Decommissioning</a></li>
						<li>etc. (all public programmes in alpha order)</li>
					</ul>
					<h2><a href="#">Categories</a></h2>
					<ul>
						<li><a href="#">Access Higher Education</a></li>
						<li><a href="#">Anatomy</a></li>
						<li><a href="#">Business</a></li>
						<li>etc. (all public categories in alpha order)</li>
					</ul>
					<h2><a href="#">Discover</a> sections</h2>
					<ul>
						<li><a href="#">Application help</a></li>
						<li><a href="#">Case studies</a></li>
						<li><a href="#">How online learning works</a></li>
						<li>etc. (all public sections in alpha order)</li>
					</ul>
					<h2><a href="#">Discover</a> articles</h2>
					<ul>
						<li><a href="#">Assessment and exams explained</a></li>
						<li><a href="#">Blended learning explained</a></li>
						<li><a href="#">Career change in the pipeline</a></li>
						<li>etc. (all public articles in alpha order)</li>
					</ul>
					<h2>Other pages</h2>
					<ul>
						<li><a href="#">Short course route to LLM Dispute Resolution</a></li>
						<li><a href="#">Short course route to MSc Clinical Nutrition</a></li>
						<li><a href="#">Short course route to MSc Renewable Energy Engineering</a></li>
						<li>etc. (all public landing pages in alpha order)</li>
					</ul>
					<h2><a href="#">Ask us a question</a></h2>
				</div>
			</div>
		</div>
	</div>
</main>

<?php
// Get the sub footer.
include '../parts/footer/sub-footer.php';

// Get the site footer.
include '../footer.php';
