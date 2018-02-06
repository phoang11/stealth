<?php
	if (empty($block_header)) {
		$block_header = '';
	}
?>
<!-- ______________________ MAIN _______________________ -->

<div id="main" class="basic-page">
	<?php print $block_header; ?>
	<div class="field-collection-container clearfix"> </div>
	<div class="container">
		<div class="row">

			<section class="span12">

				<div id="content-area">
					<div class="region region-content">
						<div id="block-system-main" class="block block-system block-odd first clearfix">
							<div class="block-inner">

								<div id="stealthApp" class="content">
									<article id="" class="node node-page node-odd">
										<main-content></main-content>
										<template id="main-content">
											  <div>
											    <header>
											      <h1 class="title">{{ title }}</h1>
											    </header>

											    <div v-html="body" class="content"></div>
											  </div>
										</template>
									</article>
									<!-- /article #node -->
								</div>

							</div>
						</div>
						<!-- /block-inner /block -->
					</div>
				</div>

			</section>
			<!-- /content-inner /content -->

			<!-- /sidebar-first -->

			<!-- /sidebar-second -->
		</div>
		<!-- .row -->
	</div>
	<!-- .container -->
</div>

<!-- #main -->
