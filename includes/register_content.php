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

      <section class="span9">

        <div id="content-area">
          <div class="region region-content">
            <div id="block-system-main" class="block block-system block-odd first clearfix">
              <div class="block-inner">

                <div id="stealthApp" class="content">
                  <article id="" class="node node-page node-odd">
                    <main-content></main-content>

                    <?php if(!empty($emailSent)): ?>
                        <div class="content">
                            <div class="alert alert-success text-center"><?php echo $config->get('messages.success'); ?></div>
                        </div>
                    <?php else: ?>
                       <?php if(!empty($hasError)): ?>
                        <div class="content">
                            <div class="alert alert-danger text-center"><?php echo $config->get('messages.error'); ?></div>
                        </div>
                        <?php endif; ?>
                       <div class="content">
                         <form class="webform-client-form" action="/register" method="post" id="form-register" accept-charset="UTF-8">
                         	<div>
                         		<fieldset class="webform-component-fieldset form-wrapper">
                         			<legend>
                         				<span class="fieldset-legend">Customer Information</span>
                         			</legend>
                         			<div class="fieldset-wrapper">
                         				<div class="form-item">
                         					<label for="form-name">Name
                         						<span class="form-required" title="This field is required.">*</span>
                         					</label>
                         					<input required="required" type="text" id="form-name" name="form-name" value="" size="60" maxlength="128" class="form-text required">
                         				</div>
                                <div class="form-group form-item">
                                  <label for="form-address">Address <span class="form-required" title="This field is required.">*</span></label>
                                  <input type="search" class="form-control" id="form-address" placeholder="Where do you live?" />
                                </div>
                                <div class="form-group form-item">
                                  <label for="form-address2">Address 2</label>
                                  <input type="text" class="form-control" id="form-address2" placeholder="Street number and name" />
                                </div>
                                <div class="form-group form-item">
                                  <label for="form-city">City <span class="form-required" title="This field is required.">*</span></label>
                                  <input type="text" class="form-control" id="form-city" placeholder="City">
                                </div>
                                <div class="form-group form-item">
                                  <label for="form-zip">ZIP code <span class="form-required" title="This field is required.">*</span></label>
                                  <input type="text" class="form-control" id="form-zip" placeholder="ZIP code">
                                </div>
                         				<div class="form-item">
                         					<label for="form-email">Email Address </label>
                         					<input class="email form-text form-email" type="email" id="form-email" name="form-email" size="60">
                         				</div>
                         			</div>
                         		</fieldset>
                         		<fieldset class="webform-component-fieldset form-wrapper">
                         			<legend>
                         				<span class="fieldset-legend">Product Information</span>
                         			</legend>
                         			<div class="fieldset-wrapper">
                         				<div class="form-item webform-component webform-component-select">
                         					<label for="edit-submitted-product-information-select-product-to-be-registered">Select product to be registered
                         												<span class="form-required" title="This field is required.">*</span>
                         											</label>
                         					<select required="required" id="edit-submitted-product-information-select-product-to-be-registered" name="submitted[product_information][select_product_to_be_registered]" class="form-select required">
                         												<option value="" selected="selected">- Select -</option>
                         												<option value="A2">A2 Acoustic Effects Pedal</option>
                         												<option value="A2.1u">A2.1u Acoustic Effects Pedal with USB and Expression Pedal</option>
                         												<option value="XYH-5">XYH-5 Shock Mounted Stereo Microphone Capsule</option>
                         												<option value="XYH-6">XYH-6 Adjustable Stereo Microphone Capsule</option>
                         											</select>
                         				</div>
                         				<div class="form-item">
                         					<label for="form-serial-numbe">Product Serial Number
                         					  <span class="form-required" title="This field is required.">*</span>
                         					</label>
                         					<input required="required" type="text" id="form-serial-numbe" name="form-serial-numbe" value="" size="60" maxlength="9" class="form-text required">
                         				</div>
                         				<div class="form-item">
                         					<label for="form-place-purchased">Where was the product purchased? </label>
                         					<input type="text" id="form-place-purchased" name="form-place-purchased" value="" size="60" maxlength="128" class="form-text">
                         				</div>
                         			</div>
                         		</fieldset>
                         		<div class="form-item webform-component">
                         			<label for="form-message">How do you intend on using the cable? </label>
                         			<div class="form-textarea-wrapper resizable textarea-processed resizable-textarea">
                         				<textarea id="form-message" name="form-message" cols="60" rows="5" class="form-textarea"></textarea>
                         				<div class="grippie"></div>
                         			</div>
                         		</div>

                            <div class="form-item form-type-textfield" style="display: none;">
                              <label for="form-gspot" class="control-label element-invisible">My G spot</label>
                              <input class="select-or-other-other form-text" type="text" id="form-gspot" name="form-gspot" value="" size="60" maxlength="10">
                            </div>
                            
                         		<div class="form-actions">
                         			<input class="webform-submit button-primary form-submit" type="submit" name="op" value="Submit">
                         		</div>

                         	</div>
                         </form>
                       </div>
                  <?php endif; ?>
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
