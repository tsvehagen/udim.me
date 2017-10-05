<?php
	date_default_timezone_set('Etc/UTC');

	require '../../../mailer/mailer.php';

	function format_result($success, $content)
	{
		$ret = '';
		if ($success) {
			$ret = '<div class="alert alert-success alert-dismissible" role="alert">';
		} else {
			$ret = '<div class="alert alert-danger alert-dismissible" role="alert">';
		}

		$ret .= '<button type="button" class="close" data-dismiss="alert"'
			. 'aria-label="Close"><span aria-hidden="true">&times;</span></button>'
			. $content
			. '</div>';

		return $ret;
	}

	/*
	 * Do input validation
	 */

	$errors = array();

	if (!isset($_POST['name'])) {
		$errors['name'] = 'Please enter your name';
	}

	if (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$errors['email'] = 'Please enter a valid email address';
	}

	if (!empty($errors)) {
		$err_content= '<ul>';
		foreach ($errors as $key => $value) {
			$err_content .= '<li>' . $value . '</li>';
		}
		$err_content .= '</ul>';

		echo format_result(false, $err_content);
		die();
	}

	/*
	 * Send email
	 */

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = '';
	if (isset($_POST['message'])) {
		$message = $_POST['message'];
	}

	$res = '';

	if (!send_mail($name, $email, $message)) {
		echo format_result(false, $mail->ErrorInfo);
	} else {
		echo format_result(true, "Thank you for your interest!");
	}
?>
