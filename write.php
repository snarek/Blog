<?php require_once ("connect.php");?>
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
					<li><a href="">Home</a></li>
					<li><a href="">Home</a></li>
				</ul>
			</aside>
        <form method='post' id='post'>
					Name</br>
          <input type="text" name="name" required></input></br>
          Surname</br>
          <input type="text" name="surname" required></input></br>
          Email</br>
          <input type="email" name="email" required></input></br>
					Post</br>
					<textarea name="post" required></textarea></br>
					<a href="index.php">
						<input type="submit" name="submit" value="POST" id='submit'></input>
					</a>
        </form>
		</section>
		<footer>
			Narek Sargsyan`s blog (c) 2016
		</footer>
	</body>
</html>
