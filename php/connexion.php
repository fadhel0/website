<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Connexion</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap2.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/produit.css">
	<link rel="icon" type="image/png" href="images/logo.png" />
	<script src="js/jquery-2.1.3.js"></script>
	<script src="js/bootstrap.min2.js"></script>
	
</head>
<?php include 'header.php'; ?>
<body id='bodyconnexion'>
	<article id='articleconnexion'>
	<form action="submit.php" method="post" id='formconnexion'>
		<label for="username">Username : </label><input type="text" id="username" name="pseudo"><br>
		<label for="username">Passowrod : </label><input type="password" id="password" name="pw">
		<input type="submit" value="Login">
	
	</form>
</article>
</body>
<?php include 'footer.php'; ?>
</html>