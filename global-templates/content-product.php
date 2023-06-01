
<?php
/**
 * Right sidebar check
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="bgi box-tap-description mt-5 mb-5 w-100" >
	<ul class="nav nav-pills  mb-3" id="pills-tab" role="tablist">
		<li class="nav-item" role="presentation">
			<button class="nav-btn active" id="pills-home-tab" data-toggle="pill" data-target="#descriprtion" type="button" role="tab" aria-controls="pills-home" aria-selected="true">lorem</button>
		</li>
		<li class="nav-item" role="presentation">
			<button class="nav-btn" id="pills-profile-tab" data-toggle="pill" data-target="#data-counter" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">lorem</button>
		</li>
		<!--<li class="nav-item" role="presentation">
			<button class="nav-link" id="pills-contact-tab" data-toggle="pill" data-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
		</li>-->
	</ul>
	<div class="tab-content" id="pills-tabContent">
		<div class="tab-pane fade show active" id="descriprtion" role="tabpanel" aria-labelledby="descriprtion-tab">
			<div class="box-tap-content">
				lorem
			</div>
		</div>
		<div class="tab-pane fade" id="data-counter" role="tabpanel" aria-labelledby="pills-profile-tab">
			<div class="box-tap-content">
				lorem
			</div>
		</div>
	</div>
</div>
