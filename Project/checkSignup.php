
<?php 
 
	$username = $_POST['username'];
	$password = MD5($_POST['password']);
  // Create connection
  $conn = mysqli_connect('localhost', 'root', '', 'downsmaster');
  // Check connection
  if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
  }
   
  echo "Connected successfully";
   
  $sql = "INSERT INTO users (username, password) VALUES ('$username','$password')";
  if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
  } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
?>