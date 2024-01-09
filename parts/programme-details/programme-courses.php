<?php
/**
 * Programme courses
 * @since Sprint 10
 */

?>

<div id="programme-courses" class="programme-courses">
	<ul class="programme-courses__tabs no-print">
		<li><a href="#" class="js-programme-tab" data-tab="msc">MSc</a></li>
		<li><a href="#" class="js-programme-tab active" data-tab="pgdip">PgDip</a></li>
		<li><a href="#" class="js-programme-tab" data-tab="pgcert">PgCert</a></li>
		<li><a href="#" class="js-programme-tab" data-tab="short-courses">Short courses</a></li>
	</ul>
	<div class="content-block background-grey spacing-both">
		

		<div id="msc" class="tab-content">
			<div class="row">
				<div class="s12 m8 offset-m2 col">
					<h2>MSc</h2>
					<p>Intentionally empty.</p>
				</div>
			</div>
		</div>

		<div id="pgdip" class="tab-content current course-list">
			<header class="programme-courses__header">
				<div class="row">
					<div class="s12 m8 offset-m2 col">
						<h2>Postgraduate Diploma - 120 Credits</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
			</header>
			<div class="programme-courses__block">
				<div class="row">
					<div class="s12 col">
						<div class="programme-courses__block__title">
							<h3>Compulsory courses</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<ul>
								<li>Checking that this block</li>
								<li>Can handle</li>
								<li>More complex content if it's needed</li>
							</ul>
							<p>These courses are required for the PgDip.</p>
						</div>
						<div class="item-list item-list--four-col">

							<?php
							include '../parts/cards/programme-course.php';
							include '../parts/cards/programme-course-no-link.php'; ?>

						</div>
					</div>
				</div>
			</div>
			<div class="programme-courses__block">
				<div class="row">
					<div class="s12 col">
						<div class="programme-courses__block__title">
							<h3>Sprint 15-specific tiles</h3>
							<p>This section contains the new tiles introduced in Sprint 15.</p>
						</div>
						<div class="item-list item-list--four-col">

							<?php
							include '../parts/cards/programme-course-achieved.php';
							include '../parts/cards/programme-course-registered.php'; 
							include '../parts/cards/programme-course-equivalent-registered.php'; 
							include '../parts/cards/programme-course-not-achieved.php'; ?>

						</div>
					</div>
				</div>
			</div>
			<div class="programme-courses__block">
				<div class="row">
					<div class="s12 col">
						<div class="programme-courses__block__title">
							<h3>Nutrition focussed courses</h3>
						</div>
						<div class="item-list item-list--four-col">

							<?php
							include '../parts/cards/programme-course-multi-start-month.php';
							include '../parts/cards/programme-course-short-title.php';
							include '../parts/cards/programme-course.php'; ?>

						</div>
					</div>
				</div>
			</div>
			<div class="programme-courses__block">
				<div class="row">
					<div class="s12 col">
						<div class="programme-courses__block__title">
							<h3>Applied health courses</h3>
							<p>Make up the rest of your credit total from these courses.</p>
						</div>
						<div class="item-list item-list--four-col">

							<?php
							include '../parts/cards/programme-course.php';
							include '../parts/cards/programme-course.php';
							include '../parts/cards/programme-course-short-title.php';
							include '../parts/cards/programme-course-short-title.php';
							include '../parts/cards/programme-course.php';
							include '../parts/cards/programme-course.php'; ?>

						</div>
					</div>
				</div>
				<div class="row">
					<div class="s12 m8 offset-m2 col">
						<div class="info-message">
							<span class="fa-solid fa-circle-info"></span>
							<p>We will endeavour to make all course options available; however, these may be subject to change. <a href="#">Further information about potential changes can be viewed here</a>.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="pgcert" class="tab-content">
			<header class="programme-courses__header">
				<div class="row">
					<div class="s12 m8 offset-m2 col">
						<h2>Postgraduate Certificate - 120 credits</h2>
						<p>You'll work through eight 15-credit courses and a 60-credit project to gain your MSc. Ar least 60 credits must come from Health Economics courses.</p>
						<p>Our online degrees are flexible, so you can progress at a pace that suits you.</p>
						<form class="form form--course-choices form--course-choices--is-prescription no-print">
							<div class="form__block">
								<div class="form__element">
									<fieldset class="js-prescription-options prescription-options">
										<legend>Study option</legend>
										<button class="active">PgCert in Mediation</button>
										<button>PgCert in International Arbitration</button>
									</fieldset>
								</div>
								<div class="form__element">
									<fieldset class="js-prescription-options prescription-options">
										<legend>Study mode</legend>
										<button class="active">Full-time</button>
										<button>Part-time</button>
									</fieldset>
								</div>
							</div>
						</form>
						<h3 class="js-selected-prescription">PgCert in Mediation</h3>
						<p>You'll work through two 30-credit courses to gain this specialist arbitration qualification.</p>
						<p>This PgCert is:</p>
						<ul>
							<li>only available to students with a law degree from a common law jurisdiction</li>
							<li>recognised by the Chartered Institute of Arbitrators. With this qualification, you'll be exempt from CIArb's membership exams on the International Arbitration pathway.</li>
						</ul>
						<p>Our recommended programmes are flexible, so you can progress at a pace that suits you. To study part-time, we recommend you take no more than 30 credits per term.</p>
					</div>
				</div>
			</header>
			<div class="programme-courses__block">
				<div class="row">
					<div class="s12 col">
						<div class="programme-courses__block__title">
							<h3>Courses</h3>
						</div>
						<div class="item-list item-list--four-col">

							<?php
							include '../parts/cards/programme-course.php';
							include '../parts/cards/programme-course-no-link.php'; ?>

						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="short-courses" class="js-enable-favourite-toggle tab-content">
			<header class="programme-courses__header">
				<div class="row">
					<div class="s12 m8 offset-m2 col">
						<h2>Clinical Nutrition short courses</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
			</header>
			<section class="programme-courses__block course-list">
				<div class="row">
					<div class="s12 col">
						<div class="item-list item-list--four-col">

							<?php
							include '../parts/cards/short-course.php';
							include '../parts/cards/short-course.php';
							include '../parts/cards/short-course-long-desc.php';
							include '../parts/cards/short-course.php';
							include '../parts/cards/short-course-long-desc.php';
							include '../parts/cards/short-course.php';
							include '../parts/cards/short-course.php';
							include '../parts/cards/short-course.php'; ?>

						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>
