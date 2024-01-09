<?php
/**
 * Edit overlay - sub-block
 * @since Sprint 18
 */
?>

<div class="edit-overlay">
	<div class="edit-overlay__top">
		<button data-micromodal-close class="button button--small button--unstyled button--icon-before"><span class="fa-regular fa-chevron-left"></span>Back to parent</button>
	</div>
	<div class="edit-overlay__tabs">
		<ul class="js-edit-tabs">
			<li><a href="#" data-tab="text-sub" class="active">Text</a></li>
			<li><a href="#" data-tab="media-sub">Media</a></li>
			<li><a href="#" data-tab="links-sub">Links</a></li>
			<li><a href="#" data-tab="visibility-sub">Visibility</a></li>
		</ul>
	</div>
	
	<?php 
	include 'edit-control-tabs/tab-text-sub.php';
	include 'edit-control-tabs/tab-media-sub.php';
	include 'edit-control-tabs/tab-links-sub.php';
	include 'edit-control-tabs/tab-visibility-sub.php'; ?>

	<div class="edit-overlay__buttons">
		<div>
			<button data-micromodal-close class="button button--small button--unstyled button--icon-before"><span class="fa-regular fa-chevron-left"></span>Back to parent</button>
			<button class="button button--small button--outlined button--icon-before"><span class="fa-regular fa-trash-can"></span>Delete sub-block</button>
		</div>
	</div>
</div>