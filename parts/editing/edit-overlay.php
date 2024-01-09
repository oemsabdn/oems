<?php
/**
 * Edit overlay
 * @since Sprint 18
 */
?>

<div class="edit-overlay">
	<div class="edit-overlay__tabs">
		<ul class="js-edit-tabs">
			<li><a href="#" data-tab="text" class="active">Text</a></li>
			<li><a href="#" data-tab="layout">Layout</a></li>
			<li><a href="#" data-tab="media">Media</a></li>
			<li><a href="#" data-tab="links">Links</a></li>
			<li><a href="#" data-tab="visibility">Visibility</a></li>
			<li><a href="#" data-tab="sub-block">Sub-block</a></li>
		</ul>
	</div>
	
	<?php 
	include 'edit-control-tabs/tab-text.php';
	include 'edit-control-tabs/tab-layout.php';
	include 'edit-control-tabs/tab-media.php';
	include 'edit-control-tabs/tab-links.php';
	include 'edit-control-tabs/tab-visibility.php';
	include 'edit-control-tabs/tab-sub-block.php'; ?>

	<div class="edit-overlay__buttons">
		<div>
			<button data-micromodal-close class="js-hide-edit-controls button button--small">Save changes</button>
			<button data-micromodal-close class="button button--small button--unstyled button--icon-before"><span class="fa-regular fa-times"></span>Cancel</button>
			<button class="button button--small button--outlined button--icon-before"><span class="fa-regular fa-trash-can"></span>Delete block</button>
		</div>
	</div>
</div>