<?php

	//Root directory.
	define('BASEPATH', dirname(__DIR__));

	//Page title.
	$page_title = 'Pricing';

	//Meta description.
	$meta_description = '';

	//Header.
	require_once BASEPATH . '/sites/includes/header.php';

	//Main.
	require_once BASEPATH . '/sites/includes/basic_content.php';

	//Footer.
 	require_once BASEPATH . '/sites/includes/footer.php';

?>

	</div>
	<!-- #page -->

	<!-- Data source -->
	<script type="text/javascript">
		var apiURL = 'http://admin.stealthaudiocables.com/?q=nid&nid=7';
	</script>
	<script type="text/javascript" src="/sites/all/themes/stealth/js/site/content.js"></script>

</body>
</html>
