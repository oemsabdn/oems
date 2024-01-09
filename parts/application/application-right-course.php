<?php
/**
 * Application - step 2
 * @since Sprint 13
 */

?>

<div class="form__block">
	<div class="form__block__inner">
		<h2>The right course for you?</h2>
		<p><strong>We want you to be sure that this is the right course for you.</strong></p>
		<p>This course has no formal entry requirements. You decide if it's suitable for you.
		</p>
		<p>The course is delivered at Masters level. At this level, you'd usually have at least:
		</p>
		<ul>
			<li>a 2:2 (second-class) undergraduate degree
			</li>
			<li>or relevant experience that supports this level of study.
			</li>
		</ul>
		<p>For entry to this course, you do not have to provide formal proof of your qualifications. However, we ask you to consider the following statements before you apply:
		</p>
		<ul>
			<li>I declare that I consider myself academically suitable to undertake this course.</li>
			<li>I declare that my language skills meet the <a href="#"> requirements</a> for this course.</li>
			<li>I acknowledge that registration is self-selecting, and that the University of Aberdeen has not participated in any judgement concerning my suitability to undertake this course.
			</li>
		</ul>
		
		<?php
		include '../parts/application/form-elements/element-declaration.php';
		include '../parts/application/form-elements/element-hr.php';
		include '../parts/application/form-elements/element-primary-reason.php';
		?>
		
		<div class="form__element">
			<button class="button button--disabled no-print" name="button" value="Submit" disabled>Save and continue</button>
		</div>
		
		<?php include '../parts/application/form-elements/element-hr.php'; ?>

	</div>
</div>
