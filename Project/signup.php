<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Genial Calendar</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/fonts/quicksand/quicksand.css">
</head>
<body>
	<div class="container">
		<?php include('header.php'); ?>
		<div id='main' id='register'>
			<form name='frmSignup' method="POST" action="checkSignup.php">
				<label>Login:</label>
				<input type="text" name="username" id="username" required><br>
				<label>Senha:</label>
				<input type="password" name="password" id="password" required><br>
				<input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
			</form>
		</div>
		<?php include('footer.php'); ?>
	</div>
</body>
</html>