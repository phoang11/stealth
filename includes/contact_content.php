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
                          <form class="webform-client-form" id="contact-form" action="/contact/" method="post" accept-charset="UTF-8">
                            <div>
                              <h2>Get In Touch</h2>
                              <div class="form-item">
                                <label for="form-name"><?php echo $config->get('fields.name'); ?>  <span class="form-required" title="This field is required.">*</span></label>
                                <input required="required" type="text" id="form-name" name="form-name" value="" size="60" maxlength="128" class="form-text required">
                              </div>
                              <div class="form-item">
                                <label for="form-email"><?php echo $config->get('fields.email'); ?>  <span class="form-required" title="This field is required.">*</span></label>
                                <input required="required" class="email form-text form-email required" type="email" id="form-email" name="form-email" size="60">
                              </div>
                              <div class="form-item">
                                <label for="form-phone" class="control-label"><?php echo $config->get('fields.phone'); ?></label>
                                <input type="tel" class="form-control" id="form-phone" name="form-phone" placeholder="(111) 222-3333">
                              </div>
                              <div class="form-item">
                                <div class="select-or-other">
                                  <div class="form-item form-type-radios">
                                    <label for="edit-submitted-what-can-we-help-you-with-select"><?php echo $config->get('fields.subject'); ?> <span class="form-required" title="This field is required.">*</span></label>
                                    <div id="edit-submitted-what-can-we-help-you-with-select" class="form-radios select-or-other-select">
                                      <div class="form-item form-type-radio">
                                        <input required="required" class="form-radio" type="radio" id="select-1" name="form-subject" value="Cable Question" checked="checked">  <label class="option" for="select-1"><?php echo $config->get('fields.subject1'); ?></label>
                                      </div>
                                      <div class="form-item form-type-radio">
                                        <input required="required" class="form-radio" type="radio" id="select-2" name="form-subject" value="Support Question">  <label class="option" for="select-2"><?php echo $config->get('fields.subject2'); ?></label>
                                      </div>
                                      <div class="form-item form-type-radio">
                                        <input required="required" class="form-radio" type="radio" id="select-3" name="form-subject" value="Distributor Question">  <label class="option" for="select-3"><?php echo $config->get('fields.subject3'); ?></label>
                                      </div>
                                      <div class="form-item form-type-radio">
                                        <input required="required" class="form-radio" type="radio" id="select-4" name="form-subject" value="Other Question">  <label class="option" for="select-4"><?php echo $config->get('fields.subject4'); ?></label>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-item">
                                <label for="form-message"><?php echo $config->get('fields.message'); ?>  <span class="form-required" title="This field is required.">*</span></label>
                                <div class="form-textarea-wrapper resizable textarea-processed resizable-textarea">
                                  <textarea required="required" id="form-message" name="form-message" cols="60" rows="5" class="form-textarea required"></textarea>
                                  <div class="grippie"></div>
                                </div>
                              </div>

                              <div class="form-item form-type-textfield" style="display: none;">
                                <label for="form-gspot" class="control-label element-invisible">My G spot</label>
                                <input class="select-or-other-other form-text" type="text" id="form-gspot" name="form-gspot" value="" size="60" maxlength="10">
                              </div>

                              <div class="form-item form-type-textfield">
                                <label for="form-door" class="control-label ">What is my brand name? <span class="form-required" title="This field is required.">* 7 characters</span> </label>
                                <input required="required" class="form-text" type="text" id="form-door" name="form-door" placeholder="Hint: start with S, end with H" value="" size="7" maxlength="7">
                              </div>

                              <!-- <div class="form-item">
                                <div class="g-recaptcha" data-sitekey="6Le4cHQUAAAAAPanyj5c7HiBOe0S0h-c2ANmcf4J"></div>
                              </div> -->

                              <div class="form-actions">
                                <input class="webform-submit button-primary form-submit" type="submit" name="op" value="<?php echo $config->get('fields.btn-send'); ?>">
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
      <aside id="sidebar-second" class="span3">
      	<div class="region region-sidebar-second">
      		<div id="block-views-press_page-date_select" class="block block-views block-odd first last clearfix">
      			<div class="block-inner">
      				<div class="content">
      					<div class="view view-press-page view-id-press_page view-display-id-date_select view-dom-id-b33c171b4779b60aa6178bf16a3fd5be">
      						<div class="view-header">
      							<h4>Shipping Information</h4>
      						</div>
      						<div class="view-content">
      							<h3>Mailing Address</h3>
                    <ul class="press-filter-list">
                      <li class="press-filter">
                        STEALTH Audio<br>
                        Attn. Serguei Timachev<br>
                        P.O. Box 1807<br>
                        Olney, MD 20830<br>
                        USA
                        <span class="shipping-carrier"><span class="form-required">*</span> USPS/EMS</span>
                      </li>
                    </ul>
                    <h3>Shipping Address</h3>
                    <ul class="press-filter-list">
                      <li class="press-filter">
                        STEALTH Audio<br>
                        Attn. Serguei Timachev<br>
                        17600 Bowie Mill Rd.<br>
                        Derwood, MD 20855<br>
                        USA
                        <span class="shipping-carrier"><span class="form-required">*</span> UPS/FedEx/DHL</span>
                      </li>
                    </ul>
      						</div>
      					</div>
      				</div>
      			</div>
      		</div>
      		<!-- /block-inner /block -->
      	</div>
      </aside>
      <!-- /sidebar-second -->
    </div>
    <!-- .row -->
  </div>
  <!-- .container -->
</div>

<!-- #main -->
