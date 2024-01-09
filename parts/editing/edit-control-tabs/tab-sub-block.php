<?php
/**
 * Edit control - sub-block tab
 * @since Sprint 18
 */
?>

<div id="sub-block" class="js-toggle-sub-block edit-tab-content">
	<div class="edit-sub-block">
	   <button class="reset-button-styles" data-micromodal-trigger="modal-edit-sub-library"><span class="fa-regular fa-grip-dots-vertical"></span>Pioneering research<span class="edit-sub-block__status fa-solid fa-book"></span></button>
	   <button class="reset-button-styles" data-micromodal-trigger="modal-edit-sub-block-content"><span class="fa-regular fa-grip-dots-vertical"></span>First in the UK<span class="edit-sub-block__status fa-solid fa-eye-slash"></span></button>
	   <button class="reset-button-styles"><span class="fa-regular fa-grip-dots-vertical"></span>Unique expertise</button>
   	</div>

	<?php
	include '../parts/editing/edit-modal-sub-library.php';
	include '../parts/editing/edit-modal-sub-block.php'; ?>

</div>
