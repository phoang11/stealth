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
                      <input type="text" v-model="searchQuery" class="form-text form-autocomplete live-results-search-textfield" aria-autocomplete="list">
                      <span class="element-invisible" aria-live="assertive" id="edit-keys-1-autocomplete-aria-live"></span>
                    </div>
                  </form>
                  <div class="search-api-page-results">
                    <h2>Search results</h2>
                    <ol class="search-results">
                      <li v-for="node in nodes" class="search-result">
                        <h3 class="title">
                          <a :href="node.URL" target="_blank">{{ node.title }}</a>
                        </h3>
                        <div class="search-snippet-info">
                          <p class="search-snippet" v-html="node.body"></p>
                        </div>
                        <div class="search-category">
                          {{ node.category }}
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
