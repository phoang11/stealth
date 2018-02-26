<?php

	//Root directory.
	define('BASEPATH', dirname(__DIR__));

	//Page title.
	$page_title = 'Register';

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
			$address = stripslashes(trim($_POST['form-address']));
			$address2 = stripslashes(trim($_POST['form-address2']));
      $city = stripslashes(trim($_POST['form-city']));
			$zipcode = stripslashes(trim($_POST['form-zip']));
      $email   = stripslashes(trim($_POST['form-email']));
			$cable_category = stripslashes(trim($_POST['form-category']));
			$cable_name = stripslashes(trim($_POST['form-cable-name']));
			$cable_serial_number = stripslashes(trim($_POST['form-serial-number']));
			$cable_place_purchased = stripslashes(trim($_POST['form-place-purchased']));

      $message = strip_tags(stripslashes(trim($_POST['form-message'])));
			$gspot = stripslashes(trim($_POST['form-gspot']));
      $pattern = '/[\r\n]|Content-Type:|Bcc:|Cc:/i';

      if (preg_match($pattern, $name) || preg_match($pattern, $email)) {
          die("Header injection detected");
      }

      $emailIsValid = filter_var($email, FILTER_VALIDATE_EMAIL);

      if ($name &&
					$email &&
					$emailIsValid &&
					$cable_category &&
					$cable_name &&
					$cable_serial_number &&
					empty($gspot)) {
          $mail = new SimpleMail();

          $mail->setTo($config->get('emails.to'));
          $mail->setFrom($config->get('emails.from'));
          $mail->setSender($name);
          $mail->setSenderEmail($email);
          $mail->setSubject($config->get('subject.prefix') . ' ' . $name);
					$ip_address = $_SERVER['REMOTE_ADDR'];
          $body = "
          <!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
          <html>
              <head>
                  <meta charset=\"utf-8\">
              </head>
              <body>
                  <h1>{$name}</h1>
                  <p><strong>{$config->get('fields.name')}:</strong> {$name}</p>
									<p><strong>{$config->get('fields.name')}:</strong> {$address}</p>
									<p><strong>{$config->get('fields.name')}:</strong> {$address2}</p>
									<p><strong>{$config->get('fields.name')}:</strong> {$city}</p>
									<p><strong>{$config->get('fields.name')}:</strong> {$state}</p>
									<p><strong>{$config->get('fields.name')}:</strong> {$zipcode}</p>
									<p><strong>{$config->get('fields.name')}:</strong> {$country}</p>
                  <p><strong>{$config->get('fields.email')}:</strong> {$email}</p>
									<p><strong>{$config->get('fields.name')}:</strong> {$cable_category}</p>
									<p><strong>{$config->get('fields.name')}:</strong> {$cable_name}</p>
									<p><strong>{$config->get('fields.name')}:</strong> {$cable_serial_number}</p>
									<p><strong>{$config->get('fields.name')}:</strong> {$cable_place_purchased}</p>
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
	require_once BASEPATH . '/includes/register_content.php';

	//Footer.
 	require_once BASEPATH . '/includes/footer.php';

?>

	</div>
	<!-- #page -->

	<!-- ContactForm -->
  <script type="text/javascript" src="/register/public/js/register-form.js"></script>
	<script type="text/javascript">
		new RegisterForm('#register-form');
	</script>

	<!-- Data source -->
	<script type="text/javascript">
		var apiURL = 'http://admin.stealthaudiocables.com/?q=nid&nid=41';
	</script>
	<script type="text/javascript" src="/sites/all/themes/stealth/js/site/content.js"></script>

	<!-- Autocomplete Address -->
	<script src="https://cdn.jsdelivr.net/npm/places.js@1.4.18"></script>
	<script>
	(function() {
	  var placesAutocomplete = places({
	    container: document.querySelector('#form-address'),
	    type: 'address',
	    templates: {
	      value: function(suggestion) {
	        return suggestion.name;
	      }
	    }
	  });
	  placesAutocomplete.on('change', function resultSelected(e) {
	    document.querySelector('#form-state').value = e.suggestion.administrative || '';
	    document.querySelector('#form-city').value = e.suggestion.city || '';
	    document.querySelector('#form-zip').value = e.suggestion.postcode || '';
			document.querySelector('#form-country').value = e.suggestion.country || '';
	  });
	})();
	</script>

</body>
</html>
