<?php
/**
 * Edit overlay - library - sub block
 * @since Sprint 18
 */
?>

<div class="edit-overlay">
	<div class="edit-overlay__top">
		<button data-micromodal-close class="button button--small button--unstyled button--icon-before"><span class="fa-regular fa-chevron-left"></span>Back to parent</button>
	</div>
	<div class="edit-overlay__tabs">
		<ul class="js-edit-tabs">
			<li><a href="#" data-tab="library-sub" class="active">Library item</a></li>
			<li><a href="#" data-tab="layout-library-sub">Layout</a></li>
			<li><a href="#" data-tab="visibility-library-sub">Visibility</a></li>
		</ul>
	</div>
	
	<?php
	include 'edit-control-tabs/tab-library-sub.php';
	include 'edit-control-tabs/tab-layout-library-sub.php';
	include 'edit-control-tabs/tab-visibility-library-sub.php'; ?>

	<div class="edit-overlay__buttons">
		<div>
			<button data-micromodal-close class="button button--small button--unstyled button--icon-before"><span class="fa-regular fa-chevron-left"></span>Back to parent</button>
			<button class="button button--small button--outlined button--icon-before"><span class="fa-regular fa-trash-can"></span>Delete sub-block</button>
		</div>
	</div>
</div>
