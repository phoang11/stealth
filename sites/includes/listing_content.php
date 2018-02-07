<!-- ______________________ MAIN _______________________ -->

<div id="main" class="sub-cat-page">

	<div class="region region-content">
		<div id="block-system-main" class="block block-system block-odd first last clearfix">
			<div class="block-inner">

				<div class="content">
					<div class="view view-taxonomy-term view-id-taxonomy_term view-display-id-page view-dom-id-b13da6e20344bef3c09ab8e52b61c954">
						<div class="view-header">
							<div id="block-menu_block-2-sticky-wrapper" class="sticky-wrapper" style="height: 74px;">
								<div id="block-menu_block-2" class="product-menu">
									<div class="container">
										<div class="product-logo">
											<h1 class="product-name"><?php print $page_title; ?></h1>
										</div>
										<!-- .product-logo -->
									</div>
									<!-- .container -->
								</div>
							</div>
							<!-- .product-menu -->
						</div>

						<div id="stealthApp" class="view-content">
                <div v-for="item in items" class="sub-cat-row">
                  <div class="row">
                    <div class="span4">
                      <div class="sub-cat-img"><a :href="item.url"><img :src=" item.image ? item.image['src'] : http://via.placeholder.com/500x500" :alt="item.image ? item.image['alt'] : null "></a></div>
                    </div>
                    <!-- .span4 -->
                    <div class="span8">
                      <div class="sub-cat-name">{{ item.title }}</div>
                      <div class="sub-cat-description">{{ item.sub_title }}</div>
                      <div class="sub-cat-summary">
                        <p>{{ item.summary }}</p>
                      </div>
                      <div class="sub-cat-see-all"><a :href="item.url">See All Features</a></div>
                    </div>
                    <!-- .span8 -->
                  </div>
                  <!-- .row -->
                </div>
						</div>

					</div>
				</div>

			</div>
		</div>
		<!-- /block-inner /block -->
	</div>
</div>

<!-- #main -->
