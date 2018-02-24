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

                <div class="content">
                  <article id="" class="node node-page node-odd">
                    <header>
                      <h1 class="title"><?php echo $page_title; ?></h1>
                    </header>

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
                          <div class="field field-name-body field-type-text-with-summary field-label-hidden">
                            <div class="field-items">
                              <div class="field-item even">
                                <h2>We’re Here to&nbsp;Help.</h2>
                                <p>If you're in the United States or Canada, drop us a quick line and we’ll get back to you very&nbsp;soon.&nbsp;</p>
                                <p>If you're outside the United States or Canada and need help, be sure to
                                  <a href="/distributors">contact your country's Stealth distributor</a>.
                                </p>
                              </div>
                            </div>
                          </div>
                          <form class="webform-client-form" id="contact-form" action="/contact/" method="post" accept-charset="UTF-8">
                            <div>
                              <div class="form-item">
                                <label for="form-name"><?php echo $config->get('fields.name'); ?><span class="form-required" title="This field is required.">*</span></label>
                                <input required="required" type="text" id="form-name" name="form-name" value="" size="60" maxlength="128" class="form-text required">
                              </div>
                              <div class="form-item">
                                <label for="form-email"><?php echo $config->get('fields.email'); ?><span class="form-required" title="This field is required.">*</span></label>
                                <input required="required" class="email form-text form-email required" type="email" id="form-email" name="form-email" size="60">
                              </div>
                              <!-- <div class="form-item">
                                <div class="select-or-other">
                                  <div class="form-item form-type-radios">
                                    <label for="edit-submitted-what-can-we-help-you-with-select">What can we help you with? <span class="form-required" title="This field is required.">*</span></label>
                                    <div id="edit-submitted-what-can-we-help-you-with-select" class="form-radios select-or-other-select">
                                      <div class="form-item form-type-radio form-item-submitted-what-can-we-help-you-with-select">
                                        <input required="required" class="select-or-other-select form-radio" type="radio" id="edit-submitted-what-can-we-help-you-with-select-1" name="submitted[what_can_we_help_you_with][select]" value="question" checked="checked">  <label class="option" for="edit-submitted-what-can-we-help-you-with-select-1">I have a question about a product. </label>
                                      </div>
                                      <div class="form-item form-type-radio form-item-submitted-what-can-we-help-you-with-select">
                                        <input required="required" class="select-or-other-select form-radio" type="radio" id="edit-submitted-what-can-we-help-you-with-select-2" name="submitted[what_can_we_help_you_with][select]" value="support">  <label class="option" for="edit-submitted-what-can-we-help-you-with-select-2">I need some support help for a product I already own. </label>
                                      </div>
                                      <div class="form-item form-type-radio form-item-submitted-what-can-we-help-you-with-select">
                                        <input required="required" class="select-or-other-select form-radio" type="radio" id="edit-submitted-what-can-we-help-you-with-select-3" name="submitted[what_can_we_help_you_with][select]" value="dealer">  <label class="option" for="edit-submitted-what-can-we-help-you-with-select-3">I would like to become a distributor.</label>
                                      </div>
                                      <div class="form-item form-type-radio form-item-submitted-what-can-we-help-you-with-select">
                                        <input required="required" class="select-or-other-select form-radio" type="radio" id="edit-submitted-what-can-we-help-you-with-select-4" name="submitted[what_can_we_help_you_with][select]" value="select_or_other">  <label class="option" for="edit-submitted-what-can-we-help-you-with-select-4">Other... </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-item form-type-textfield form-item-submitted-what-can-we-help-you-with-other" style="display: none;">
                                    <label class="element-invisible" for="edit-submitted-what-can-we-help-you-with-other">What can we help you with? Other... </label>
                                    <input class="select-or-other-other form-text" type="text" id="edit-submitted-what-can-we-help-you-with-other" name="submitted[what_can_we_help_you_with][other]" value="" size="60" maxlength="128">
                                  </div>
                                </div>
                              </div> -->
                              <div class="form-item">
                                <label for="form-message"><?php echo $config->get('fields.message'); ?><span class="form-required" title="This field is required.">*</span></label>
                                <div class="form-textarea-wrapper resizable textarea-processed resizable-textarea">
                                  <textarea required="required" id="form-message" name="form-message" cols="60" rows="5" class="form-textarea required"></textarea>
                                  <div class="grippie"></div>
                                </div>
                              </div>
                              <div class="form-group">
                                  <label for="form-phone" class="col-lg-2 control-label">Phone</label>
                                  <div class="col-lg-10">
                                      <input type="tel" class="form-control" id="form-phone" name="form-phone" placeholder="Phone">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="form-subject" class="col-lg-2 control-label">Subject</label>
                                  <div class="col-lg-10">
                                      <input type="text" class="form-control" id="form-subject" name="form-subject" placeholder="Subject" required="">
                                  </div>
                              </div>
                              <button type="submit" class="btn btn-default form-submit">Send</button>
                              <!-- <div class="form-actions"><input class="webform-submit button-primary form-submit" type="submit" name="op" value="Submit"></div> -->
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
