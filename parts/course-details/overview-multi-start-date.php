<?php
/**
 * Course info - multiple start dates
 * @since initial
 */

?>

<div class="banner__info-container">
	<div class="banner__info">
		<h2 class="banner__info__title">Key info</h2>
		<dl class="banner__data-table banner__data-table--first">
			<dt>Study mode</dt>
			<dd>Online learning</dd>
			<dt>Credits</dt>
			<dd>15 <a href="#" class="no-print" title="What are credits?">What are credits?</a></dd>
			<dt>Duration</dt>
			<dd>6 weeks</dd>
			<dt>Time commitment</dt>
			<dd>10/15 hours per week</dd>
			<dt class="has-select"><label for="start">Start date</label></dt>
			<dd class="has-select">
				<select id="start">
					<option value="date1">14th September 2018</option>
					<option value="date2">15th November 2018</option>
					<option value="date3">16th February 2018</option>
				</select>
			</dd>
			<dt>Last registration</dt>
			<dd class="is-light">16th February 2018</dd>
		</dl>

		<dl class="banner__data-table banner__data-table--last">
			<dt class="highlight">Discount applied</dt>
			<dd>20% Alumni discount</dd>
			<dt class="highlight">Cost</dt>
			<dd><span aria-label="Discounted price">£840</span> <del aria-label="Original price">£1775</del></dd>
		</dl>
		<form>
			<button class="button button--external no-print">Apply now <span class="fa-solid fa-external-link-alt"></span></button>
		</form>
	</div>
</div>
