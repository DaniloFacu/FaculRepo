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
		<div id='main' id='login'>
			<div class='box-login'>
				<form class="formLogin" name="formLogin" action='checkLogin.php' method='POST'>
					<label>Usuário</label>
					<input type="text" name="username" value="">
					<label class='label-password'>Senha</label>
					<input type="password" name="password" value="">
					<input type="submit" name="submit" value="Enviar" id='submit'>
				</form>
			</div>
		</div>
		<?php include('footer.php'); ?>
	</div>
</body>
</html>