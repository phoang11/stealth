<?php

	//Root directory.
	define('BASEPATH', dirname(__DIR__));

	//Page title.
	$page_title = 'Search';

	//Meta description.
	$meta_description = '';

	//Header.
	require_once BASEPATH . '/includes/header.php';

	//Main.
	require_once BASEPATH . '/includes/search_content.php';

	//Footer.
 	require_once BASEPATH . '/includes/footer.php';

?>

	</div>
	<!-- #page -->

	<!-- Data source -->
	<script type="text/javascript">
		var apiURL = 'http://admin.stealthaudiocables.com/?q=nid&nid=20';
	</script>
	<script type="text/javascript" src="/sites/all/themes/stealth/js/site/content.search.js"></script>

</body>
</html>
