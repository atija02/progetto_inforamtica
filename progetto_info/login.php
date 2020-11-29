<?php
$msg = "";

if (isset($_POST['submit'])) {
	$con = new mysqli('localhost', 'root', 'pass', 'twitter');

	$email = $con->real_escape_string($_POST['email']);
	$password = $con->real_escape_string($_POST['password']);

	$sql = $con->query("SELECT id, password FROM utenti WHERE email='$email'");
	if ($sql->num_rows > 0) {
		$data = $sql->fetch_array();
		if (password_verify($password, $data['password'])) {
			$msg = "You have been logged IN!";
			session_start();
			$_SESSION['email']=$email;
			$_SESSION['password']=$password;
			//assegno alla variabile globale $_SESSION anche l'id e la path dell'immagine dell'utente che si è appena loggato
			$result = $con->query("SELECT id,immagine FROM utenti WHERE email='$email'");
			$id_utente ="";
			$img_path ="";
			$row = $result->fetch_assoc();
			$id_utente .=$row["id"];
			$img_path .=$row["immagine"];
			$_SESSION['id']=$id_utente;
			$_SESSION['immagine']=$img_path;
			header('Location: ./index.php');
			
		} else
			$msg = "Please check your inputs!";
	} else
		$msg = "Please check your inputs!";
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

	<div class="containerLog">


		<?php if ($msg != "") echo $msg . "<br><br>"; ?>

		<h1 class="logTitle">Login!</h1>

		<form method="post" action="login.php">
			<input class="form-control" name="email" type="email" placeholder="Email" style="box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 2px 4px 0 rgba(0, 0, 0, 0.19);"><br>
			<input class="form-control" minlength="5" name="password" type="password" placeholder="Password" style="box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 2px 4px 0 rgba(0, 0, 0, 0.19);"><br>
			<input class="btn btn-info" name="submit" type="submit" value="Log In" style="box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 2px 4px 0 rgba(0, 0, 0, 0.19);"><br>
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