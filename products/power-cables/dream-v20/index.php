<?php

	//Root directory.
	define('BASEPATH', dirname(dirname(dirname(__DIR__))));

	//Page title.
	$page_title = 'Dream V20';

	//Meta description.
	$meta_description = '';

	//Header.
	require_once BASEPATH . '/includes/header.php';

	//Main.
	require_once BASEPATH . '/includes/product_content.php';

	//Footer.
 	require_once BASEPATH . '/includes/footer.php';

?>

	</div>
	<!-- #page -->

	<!-- Data source -->
	<script type="text/javascript">
		var apiURL = 'http://admin.stealthaudiocables.com/?q=product&nid=46';
	</script>
	<script type="text/javascript" src="/sites/all/themes/stealth/js/site/content.product.js"></script>

</body>
</html>