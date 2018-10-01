<?php
    include 'conexao.php';
    include 'calendario.php';
    $info = array(
        'tabela' => 'eventos',
        'data' => 'data',
        'titulo' => 'titulo',
        'link' => 'link'
    );
?>
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
        <div id='main'>
            <div class="calendario">
                <?php 
                    $eventos = montaEventos($info);
                    montaCalendario($eventos);
                ?>
                <div class="legends">
                    <span class="legenda"><span class="blue"></span> Eventos</span>
                    <span class="legenda"><span class="red"></span> Hoje</span>
                </div>
            </div>
        <?php include('footer.php'); ?>
    </div>    
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
</body>
</html>