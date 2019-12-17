<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$response = $_POST['g-recaptcha-response'];
		$from = 'consultas@kungfulaflorida.cl';
		$to = 'consultas@kungfulaflorida.cl';
		$subject = 'Contacto desde la pagina web kungfulaflorida.cl';
		$headers = 'From: consultas@kungfulaflorida.cl' . "\r\n" .
    'Reply-To: consultas@kungfulaflorida.cl' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
		$body ="Nombre: $name\n E-Mail: $email\n Mensaje:\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Por favor ingrese su nombre';
		}

		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Por favor ingrese una dirección de correo valida';
		}

		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Por favor ingrese su mensaje';
		}
		//check recaptcha
		if ($response == null) {
			$errCapt = 'Por favor marque la casilla "no soy un robot" ';
		}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errCapt) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Gracias! Le contactaremos pronto</div>';
		header( 'Location: http://kungfulaflorida.cl/#contact' );
	} else {
		$result='<div class="alert alert-danger">Lo sentimos, hubo un error enviando su mensaje. Por favor intente nuevamente mas tarde.</div>';
		header( 'Location: http://kungfulaflorida.cl/#contact' );
	}
}
	}
?>
