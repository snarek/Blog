<?php
	session_start();
	if (isset($_POST['send'])) {
		$from=htmlspecialchars($_POST['from']);
		$email=htmlspecialchars($_POST['email']);
		$message=htmlspecialchars($_POST['message']);
		$subject=htmlspecialchars($_POST['subject']);
		$_SESSION['from']=$from;
		$_SESSION['email']=$email;
		$_SESSION['message']=$message;
		$_SESSION['subject']=$subject;
		$message = wordwrap($message, 70, "\r\n");
		$subject="=?UTF-8?B?".base64_encode($subject)."?=";
		$header = "From:" . $email . "\r\n";
		$header.= "MIME-Version: 1.0\r\n";
		$header.= "Content-Type: text/plain; charset=utf-8\r\n";
		$header.= "X-Priority: 1\r\n";
		mail("snarek@yandex.ru", $subject, $message, $header);
		header("Location: success.php?send=1");
		exit;
	}
?>
<!Doctype html>
<html>
	<head>
		<title>ԲԼՈԳ</title>
		<link rel="stylesheet" type="text/css" href="style/style.css"></link>
	</head>
	<body>
		<header>
			<img src="img/logo.jpg" />
		</header>
		<section>
			<aside>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="write.php">Write</a></li>
					<li><a href="contact.php">Contact Us</a></li>
					<li><a href="">Home</a></li>
				</ul>
			</aside>
				<h2>Contact Us</h2>
				<form name='feedback' action='' method="post">
					<label>Name</label><br />
					<input type="text" name="from" required value="<?= $_SESSION['from'] ?>"></input><br />
					<label>Email</label><br />
					<input type="email" name="email" required value="<?= $_SESSION['email'] ?>"></input><br />
					<label>Subject</label><br />
					<input type="text" name="subject" required value="<?= $_SESSION['subject'] ?>"></input><br />
					<label>Message</label><br />
					<textarea name="message" cols="30" rows="10" required><?= $_SESSION['message'] ?></textarea><br />
					<input type="submit" name="send" value="Send"></input>
				</form>
		</section>
		<footer>
			Narek Sargsyan`s blog (c) 2016
		</footer>
	</body>
</html>
