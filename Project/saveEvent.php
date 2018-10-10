<?php 
 
	$title = $_POST['title'];
	$date = $_POST['date-event'];
  $hours = $_POST['hours-event'];
  $link = $_POST['link'];
  
  // Create connection
  $conn = mysqli_connect('localhost', 'root', '', 'downsmaster');
  // Check connection
  if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
  }
   
  $sql = "INSERT INTO eventos (titulo, data, link) VALUES ('$title','$date' '$hour','$link')";
  if (mysqli_query($conn, $sql)) {
        echo "Evento criado com sucesso";
  } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
?>