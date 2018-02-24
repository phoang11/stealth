<?php

	//Root directory.
	define('BASEPATH', dirname(dirname(__DIR__)));

	//Page title.
	$page_title = 'Loudspeaker Cables';

	//Meta description.
	$meta_description = '';

	//Header.
	require_once BASEPATH . '/includes/header.php';

	//Main.
	require_once BASEPATH . '/includes/listing_content.php';

	//Footer.
 	require_once BASEPATH . '/includes/footer.php';

?>

	</div>
	<!-- #page -->

	<!-- Data source -->
	<script type="text/javascript">
		var apiURL = 'http://admin.stealthaudiocables.com/?q=products&cat=loudspeaker_cables';
	</script>
	<script type="text/javascript" src="/sites/all/themes/stealth/js/site/content.listing.js"></script>

</body>
</html>
