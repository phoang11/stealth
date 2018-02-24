<?php

	//Root directory.
	define('BASEPATH', dirname(dirname(dirname(__DIR__))));

	//Page title.
	$page_title = 'PGS-V16';

	//Meta description.
	$meta_description = '';

	//Header.
	require_once BASEPATH . '/sites/includes/header.php';

	//Main.
	require_once BASEPATH . '/sites/includes/product_content.php';

	//Footer.
 	require_once BASEPATH . '/sites/includes/footer.php';

?>

	</div>
	<!-- #page -->

	<!-- Data source -->
	<script type="text/javascript">
		var apiURL = 'http://admin.stealthaudiocables.com/?q=product&nid=29';
	</script>
	<script type="text/javascript" src="/sites/all/themes/stealth/js/site/content.product.js"></script>

</body>
</html>
