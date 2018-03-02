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
									<h1>Search</h1>
									<form action="/search" method="get" id="search-api-page-search-form" accept-charset="UTF-8">
										<div role="application">
											<input type="text" v-model="search" class="form-text form-autocomplete live-results-search-textfield" aria-autocomplete="list">
											<!-- <input type="submit" id="edit-submit-1" value="Search" class="form-submit"> -->
											<main-content></main-content>
											<span class="element-invisible" aria-live="assertive" id="edit-keys-1-autocomplete-aria-live"></span>
										</div>
									</form>
									<div class="search-api-page-results">
										<p class="search-performance">The search found 16 results in 0.175 seconds.</p>
										<h2>Search results</h2>
										<ol class="search-results">
											<li class="search-result">
												<h3 class="title">
													<a href="/where-to-buy/band-pro-film-and-digital-inc">Band Pro Film and Digital Inc.</a>
												</h3>
												<div class="search-snippet-info">
													<p class="search-snippet"> Band Pro Film and
														<strong>Digital</strong> Inc. ...
													</p>
												</div>
											</li>
											<li class="search-result">
												<h3 class="title">
													<a href="/products/field-video-recording/video-recording/zoom-q2n-handy-video-recorder">test Q2n Handy Video Recorder</a>
												</h3>
												<div class="search-snippet-info">
													<p class="search-snippet">... role in helping you reach a wider fan base. It’s a
														<strong>digital</strong> world and that means an inspiring performance can take the Internet by ...
													</p>
												</div>
											</li>
										</ol>
									</div>
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
