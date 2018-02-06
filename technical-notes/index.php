<?php

	//Page title.
	$page_title = 'Technical Notes';

	//Meta description.
	$meta_description = '';

	//Header.
	include  $_SERVER['DOCUMENT_ROOT'] . '/sites/includes/header.php';

	$block_header = '
	<div id="main" class="basic-page">
		<div id="block-menu_block-2-sticky-wrapper" class="sticky-wrapper" style="height: 74px;">
			<div id="block-menu_block-2" class="fake-block block block-menu-block product-menu block-menu" style="">
				<div class="block-inner">
					<div class="content">
						<div class="menu-block-wrapper menu-block-2 menu-name-main-menu parent-mlid-0 menu-level-2">
							<ul class="menu">
								<li class="leaf"><a href="#tuning">Tuning Collars</a></li>
								<li class="leaf"><a href="#xlr-rca">XLR vs. RCA</a></li>
								<li class="leaf"><a href="#retermination">Retermination</a></li>
								<li class="leaf"><a href="#bi-wiring">Bi-Wire</a></li>
								<li class="leaf"><a href="#banana-plugs">Banana Plugs</a></li>
								<li class="leaf"><a href="#multistranded">Multistranded Wire</a></li>
								<li class="leaf"><a href="#burn-in">Burn-in Process</a></li>
								<li class="leaf"><a href="#power-cord">AC Power Cords</a></li>
								<li class="leaf"><a href="#directionality">Directionality</a></li>
								<li class="leaf"><a href="#revisions">Cables Revisions</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	';

	//Main.
	include  $_SERVER['DOCUMENT_ROOT'] . '/sites/includes/basic_content.php';

	//Footer.
 	include  $_SERVER['DOCUMENT_ROOT'] . '/sites/includes/footer.php';

?>

	</div>
	<!-- #page -->

	<!-- Data source -->
	<script type="text/javascript">
		var apiURL = 'http://admin.stealthaudiocables.com/?q=nid&nid=6';
		$(document).ready(function(){
			// Add smooth scrolling to all links
			$("a").on('click', function(event) {

				// Make sure this.hash has a value before overriding default behavior
				if (this.hash !== "") {
					// Prevent default anchor click behavior
					event.preventDefault();

					// Store hash
					var hash = this.hash;

					// Using jQuery's animate() method to add smooth page scroll
					// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
					$('html, body').animate({
						scrollTop: $(hash).offset().top-100
					}, 800, function(){

						// Add hash (#) to URL when done scrolling (default click behavior)
						// window.location.hash = hash;
					});
				} // End if
			});
			});
	</script>
	<script type="text/javascript" src="/sites/all/themes/stealth/js/site/content.js"></script>

</body>
</html>
