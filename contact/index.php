<?php

	//Root directory.
	define('BASEPATH', dirname(__DIR__));

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
      $message = strip_tags(stripslashes(trim($_POST['form-message'])));
			$gspot = stripslashes(trim($_POST['form-gspot']));
      $pattern = '/[\r\n]|Content-Type:|Bcc:|Cc:/i';

      if (preg_match($pattern, $name) || preg_match($pattern, $email) || preg_match($pattern, $subject)) {
          die("Header injection detected");
      }

      $emailIsValid = filter_var($email, FILTER_VALIDATE_EMAIL);

      if ($name && $email && $emailIsValid && $subject && $message && empty($gspot)) {
          $mail = new SimpleMail();

          $mail->setTo($config->get('emails.to'));
          $mail->setFrom($config->get('emails.from'));
          $mail->setSender($name);
          $mail->setSenderEmail($email);
          $mail->setSubject($config->get('subject.prefix') . ' ' . $subject);
					$ip_address = $_SERVER['REMOTE_ADDR'];
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
									<br>
									<br>
									<br>
									<br>
									<br>
									<p>STEALTH Audio Cables Team</p>
									<p><strong>IP:</strong> {$ip_address}</p>
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
	require_once BASEPATH . '/includes/header.php';

	//Main.
	require_once BASEPATH . '/includes/contact_content.php';

	//Footer.
 	require_once BASEPATH . '/includes/footer.php';

?>

	</div>
	<!-- #page -->

	<!-- ContactForm -->
  <script type="text/javascript" src="/contact/public/js/contact-form.js"></script>
	<script type="text/javascript">
		new ContactForm('#contact-form');
	</script>

	<!-- Data source -->
	<script type="text/javascript">
		var apiURL = 'http://admin.stealthaudiocables.com/?q=nid&nid=3';
	</script>
	<script type="text/javascript" src="/sites/all/themes/stealth/js/site/content.js"></script>

</body>
</html>
