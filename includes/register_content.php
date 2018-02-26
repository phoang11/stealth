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
                         <form class="webform-client-form" action="/register/" method="post" id="register-form" accept-charset="UTF-8">
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
                         					<input required="required" type="text" id="form-name" name="form-name" value="" size="60" maxlength="128" class="form-text required" placeholder="Full Name">
                         				</div>
                                <div class="form-group form-item">
                                  <label for="form-address">Address <span class="form-required" title="This field is required.">*</span></label>
                                  <input required="required" type="search" class="form-control form-text required" id="form-address" name="form-address" placeholder="Where do you live?" />
                                </div>
                                <div class="form-group form-item">
                                  <label for="form-address2">Address 2</label>
                                  <input type="text" class="form-control" id="form-address2" name="form-address2" />
                                </div>
                                <div class="form-group form-item">
                                  <label for="form-city">City <span class="form-required" title="This field is required.">*</span></label>
                                  <input required="required" type="text" class="form-control" id="form-city" name="form-city" />
                                </div>
                                <div class="form-group form-item">
                                  <label for="form-state">State/Province</label>
                                  <input type="text" class="form-control" id="form-state" name="form-state">
                                </div>
                                <div class="form-group form-item">
                                  <label for="form-zip">ZIP code <span class="form-required" title="This field is required.">*</span></label>
                                  <input required="required" type="text" class="form-control" id="form-zip" name="form-zip" />
                                </div>
                                <div class="form-group form-item">
                                  <label for="form-country">Country <span class="form-required" title="This field is required.">*</span></label>
                                  <input required="required" type="text" class="form-control" id="form-country" name="form-country">
                                </div>
                         				<div class="form-item">
                         					<label for="form-email">Email Address <span class="form-required" title="This field is required.">*</span></label>
                         					<input required="required" class="email form-text form-email" type="email" id="form-email" name="form-email" size="60">
                         				</div>
                         			</div>
                         		</fieldset>
                         		<fieldset class="webform-component-fieldset form-wrapper">
                         			<legend>
                         				<span class="fieldset-legend">Cable Information</span>
                         			</legend>
                         			<div class="fieldset-wrapper">
                                <div class="form-item webform-component webform-component-select">
                                	<label for="form-category">Cable Type
                                		<span title="This field is required." class="form-required">*</span>
                                	</label>
                                	<select required="required" id="form-category" name="form-category" class="form-select required">
                                		<option value="" selected="selected">- Select -</option>
                                		<option value="Analog Interconnect">Analog Interconnect</option>
                                		<option value="Digital Cables">Digital Cables</option>
                                		<option value="Loudspeaker Cables">Loudspeaker Cables</option>
                                    <option value="Power Cables">Power Cables</option>
                                    <option value="Phono Cables">Phono Cables</option>
                                		<option value="USB Cables">USB Cables</option>
                                	</select>
                                </div>
                         				<div class="form-item">
                         					<label for="form-cable-name">Cable Name
                         							<span class="form-required" title="This field is required.">*</span>
                         					</label>
                         					<input required="required" type="text" id="form-cable-name" name="form-cable-name" value="" size="120" maxlength="255" class="form-text required">
                         				</div>
                         				<div class="form-item">
                         					<label for="form-serial-number">Cable Serial Number
                         					  <span class="form-required" title="This field is required.">*</span>
                         					</label>
                         					<input required="required" type="text" id="form-serial-number" name="form-serial-number" value="" size="60" maxlength="24" class="form-text required">
                         				</div>
                         				<div class="form-item">
                         					<label for="form-place-purchased">Where was the cable purchased? </label>
                         					<input type="text" id="form-place-purchased" name="form-place-purchased" value="" size="120" maxlength="255" class="form-text">
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
