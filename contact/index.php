<?php

	//Page title.
	$page_title = 'Contact Us';

	//Meta description.
	$meta_description = '';

  /**
  * Email setup.
  **/
  require_once './vendor/autoload.php';

  $helperLoader = new SplClassLoader('Helpers', './vendor');
  $mailLoader   = new SplClassLoader('SimpleMail', './vendor');

  $helperLoader->register();
  $mailLoader->register();

  use Helpers\Config;
  use SimpleMail\SimpleMail;

  $config = new Config;
  $config->load('./config/config.php');

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $name    = stripslashes(trim($_POST['form-name']));
      $email   = stripslashes(trim($_POST['form-email']));
      $phone   = stripslashes(trim($_POST['form-phone']));
      $subject = stripslashes(trim($_POST['form-subject']));
      $message = stripslashes(trim($_POST['form-message']));
      $pattern = '/[\r\n]|Content-Type:|Bcc:|Cc:/i';

      if (preg_match($pattern, $name) || preg_match($pattern, $email) || preg_match($pattern, $subject)) {
          die("Header injection detected");
      }

      $emailIsValid = filter_var($email, FILTER_VALIDATE_EMAIL);

      if ($name && $email && $emailIsValid && $subject && $message) {
          $mail = new SimpleMail();

          $mail->setTo($config->get('emails.to'));
          $mail->setFrom($config->get('emails.from'));
          $mail->setSender($name);
          $mail->setSenderEmail($email);
          $mail->setSubject($config->get('subject.prefix') . ' ' . $subject);

          $body = "
          <!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
          <html>
              <head>
                  <meta charset=\"utf-8\">
              </head>
              <body>
                  <h1>{$subject}</h1>
                  <p><strong>{$config->get('fields.name')}:</strong> {$name}</p>
                  <p><strong>{$config->get('fields.email')}:</strong> {$email}</p>
                  <p><strong>{$config->get('fields.phone')}:</strong> {$phone}</p>
                  <p><strong>{$config->get('fields.message')}:</strong> {$message}</p>
              </body>
          </html>";

          $mail->setHtml($body);
          $mail->send();

          $emailSent = true;
      } else {
          $hasError = true;
      }
  }

	//Header.
	include  __DIR__ . '/sites/includes/header.php';

	//Main.
	include  __DIR__ . '/sites/includes/contact_content.php';

	//Footer.
 	include  __DIR__ . '/sites/includes/footer.php';

?>

	</div>
	<!-- #page -->

	<!-- Scripts -->
  <script type="text/javascript" src="public/js/contact-form.js"></script>
	<script type="text/javascript">
		new ContactForm('#contact-form');
	</script>

</body>
</html>
