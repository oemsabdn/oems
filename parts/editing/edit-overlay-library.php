<?php
/**
 * Edit overlay - library
 * @since Sprint 18
 */
?>

<div class="edit-overlay">
	<div class="edit-overlay__tabs">
		<ul class="js-edit-tabs">
			<li><a href="#" data-tab="library" class="active">Library item</a></li>
			<li><a href="#" data-tab="layout-library">Layout</a></li>
			<li><a href="#" data-tab="visibility-library">Visibility</a></li>
			<li><a href="#" data-tab="empty">Empty</a></li>
		</ul>
	</div>
	
	<?php
	include 'edit-control-tabs/tab-library.php';
	include 'edit-control-tabs/tab-layout-library.php';
	include 'edit-control-tabs/tab-visibility-library.php';
	include 'edit-control-tabs/tab-empty.php'; ?>

	<div class="edit-overlay__buttons">
		<div>
			<button data-micromodal-close class="button button--small">Save changes</button>
			<button data-micromodal-close class="button button--small button--unstyled button--icon-before"><span class="fa-regular fa-times"></span>Cancel</button>
			<button class="button button--small button--outlined button--icon-before"><span class="fa-regular fa-trash-can"></span>Delete block</button>
		</div>
	</div>
</div>
