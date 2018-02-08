<!-- ______________________ MAIN _______________________ -->
<div id="main" class="product-template">
  <div id="stealthApp">
    <div class="region region-content">
      <div id="block-system-main" class="block block-system block-odd first last clearfix">
        <div class="block-inner">

          <div class="content">
            <div id="block-menu_block-2-sticky-wrapper" class="sticky-wrapper" style="height: 74px;">
              <div id="block-menu_block-2" class="fake-block block block-menu-block product-menu block-menu">
                <div class="block-inner">
                  <div class="product-logo">
                    <h1 class="product-name">
                    <div class="field field-name-field-product-short-name field-type-text field-label-hidden">
                    <div class="field-items">
                      <div class="field-item even">{{ title }}</div>
                    </div>
                  </div>
                  </h1>
                  </div>
                </div>
              </div>
            </div>
            <!-- #block-menu_block-2 -->

            <div class="clearfix"> </div>
            <article id="" class="node node-product node-odd">

              <section class="section-head white">
                <div class="container">
                  <div class="hero-image">
                    <div class="field field-name-field-hero-image field-type-image field-label-hidden">
                      <div class="field-items">
                        <div class="field-item even"><img :src=" imageSRC ? imageSRC : 'http://via.placeholder.com/500/fff/000'" :alt="imageALT"></div>
                      </div>
                    </div>
                  </div>
                  <!-- .hero-image -->
                  <h2 class="product-head">
                    <span class="product-headline">{{ title }}</span>
                    <span class="product-sub-headline">{{ subTitle }}</span>
                  </h2>
                </div>
                <!-- .container -->
              </section>
              <!-- .section-head -->

              <section class="section white">
                <div class="container" v-html="body">

                </div>
                <!-- .container -->
              </section>
              <!-- . section -->

            </article>
          </div>

        </div>
      </div>
      <!-- /block-inner /block -->
    </div>
  </div>
  <!-- stealthApp -->
</div>
<!-- #main -->
