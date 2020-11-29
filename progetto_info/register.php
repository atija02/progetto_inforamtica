<?php
$msg = "";

if (isset($_POST['submit'])) {

	$con = new mysqli('localhost', 'root', 'pass', 'twitter');

	$username = $con->real_escape_string($_POST['username']);
	$email = $con->real_escape_string($_POST['email']);
	$password = $con->real_escape_string($_POST['password']);
	$cPassword = $con->real_escape_string($_POST['cPassword']);
	$uploadDir ='uploads/';

	print_r($_FILES);

	if ($password != $cPassword)
		$msg = "Please Check Your Passwords!";
	else {

		if (UPLOAD_ERR_OK === $_FILES['file']['error']) {
			$fileName = basename($_FILES['file'] ['name']);
			move_uploaded_file($_FILES['file']['tmp_name'], $uploadDir.DIRECTORY_SEPARATOR.$fileName);
			$avatar_path = $uploadDir.DIRECTORY_SEPARATOR.$fileName;
			$hash = password_hash($password, PASSWORD_BCRYPT);
			$con->query("INSERT INTO utenti (username,email,password,immagine) VALUES ('$username', '$email', '$hash','$avatar_path')");
			$copia="INSERT INTO utenti (username,email,password,immagine) VALUES ('$username', '$email', '$hash','$avatar_path')";
			echo $copia;
			$msg = "You have been registered!";
			header('Location: ./login.php');
		}
	}
}
?>
<!doctype html>
<html lang="en">

<head>
	<title>Title</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="logon.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
</head>

<body>

	<div class="containerReg">

		<?php if ($msg != "") echo $msg . "<br><br>"; ?>

		<h1 class="regTitle">Iscriviti!</h1>

		<form method="post" action="register.php" enctype="multipart/form-data">
			<input class="form-control" required minlength="3" name="username" placeholder="Username" style="box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 2px 4px 0 rgba(0, 0, 0, 0.19);"><br>
			<input class="form-control" required name="email" type="email" placeholder="Email" style="box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 2px 4px 0 rgba(0, 0, 0, 0.19);"><br>
			<input class="form-control" required minlength="5" name="password" type="password" placeholder="Password" style="box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 2px 4px 0 rgba(0, 0, 0, 0.19);"><br>
			<input class="form-control" required minlength="5" name="cPassword" type="password" placeholder="Confirm Password" style="box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 2px 4px 0 rgba(0, 0, 0, 0.19);"><br>
			<input type="file" name="file" required>
			<input class="btn btn-info" name="submit" type="submit" value="Registrati" style="box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 2px 4px 0 rgba(0, 0, 0, 0.19);"><br>
			<a class="Back" href="index.php">Torna alla home</a>
		</form>



	</div>


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>