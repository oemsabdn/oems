<?php
/**
 * Content - Library item
 * @since Sprint 18
 */
?>

</div>
</div>
</header>

<main id="main" class="course-details page-content library">

	<div class="library-toggle-view">
		<div class="library-toggle-view__inner">
			<div>
				<a href="editing/template-edit-programme-details-draft.php" class="button button--unstyled button--unstyled-white button--icon-before"><span class="fa-regular fa-arrow-left"></span>Back to library</a>
				<button class="js-toggle-edit-controls button button--small button--outlined-white button--thin-border">Update library item</button>
			</div>
		</div>
	</div>

	<div class="library__item">
		<div class="js-block-preview active">

			<?php
			include '../parts/blocks/callout/callout-with-bg-single.php'; ?>

			<div class="library__meta">
				<div>
					<dl>
						<dt>Library Id:</dt>
						<dd>C-20167.</dd>
						<dt>Name:</dt>
						<dd>Simon Parson - Outstanding expertise call out</dd>
					</dl>
				</div>
			</div>
		</div>
		<div class="library__edit">

			<?php 
			include '../parts/editing/edit-overlay.php'; ?>

		</div>
	</div>

	<?php 
	include '../parts/editing/edit-library-table.php'; ?>

</main>