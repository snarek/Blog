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
					<li><a href="">About</a></li>
				</ul>
			</aside>
			<?php
				if ($_GET['send']==1) {
					echo "SUCCESS";
				}
			?>
		</section>
		<footer>
			Narek Sargsyan`s blog (c) 2016
		</footer>
	</body>
</html>
