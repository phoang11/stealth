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
                                <h2>We’re Here to Help.</h2>
                                <p>If you're in the United States or Canada, drop us a quick line and we’ll get back to you very soon.</p>
                                <p>If you're outside the United States or Canada and need help, be sure to
                                  <a href="/distributors">contact your country's Stealth distributor</a>.
                                </p>
                              </div>
                            </div>
                          </div>
                          <form class="webform-client-form" id="contact-form" action="/contact/" method="post" accept-charset="UTF-8">
                            <div>
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

      <!-- /sidebar-second -->
    </div>
    <!-- .row -->
  </div>
  <!-- .container -->
</div>

<!-- #main -->
