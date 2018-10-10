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
			<form name='frmSignup' method="POST" action="saveEvent.php">
				<label>Título do Evento</label>
					<input type="text" name="title" id="title" required><br>
				<label>Data do Evento</label>
					<input type="date" name="date-event" id="date-event" min="2018-01-01" max="2018-12-31" required><br>
				<label>Horário do Evento</label>
					<input type="time" name="hours-event" id="hours-event" required><br>
				<label>Link do Evento</label>
					<input type="text" name="link" id="link" required><br>
				<input type="submit" value="Criar Evento" id="cadastrar" name="cadastrar">
			</form>
		</div>
		<?php include('footer.php'); ?>
	</div>
</body>
</html>