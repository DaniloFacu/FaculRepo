
<?php
  // Create connection
  $conn = mysqli_connect('localhost', 'root', '', 'downsmaster');
  // Check connection
  if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
  }
	//starting our session to preserve our login
	session_start();

	//check whether data with the session name username has already been created
	//if so redirect to hhomepage
	if (isset($_SESSION['username'])) {
		//redirecting if there is already a session with the name username
		header("Location: index.php");
	}

	//check whether data with the name username has been submitted
	if (isset($_POST['username'])) {

		//variables to hold our submitted data with post
		$username = $_POST['username'];
	        //Encrypting our login password
		$password = md5($_POST['password']);

		//our sql statement that we will execute
		$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

		//Executing the sql query with the connection
		$re = mysqli_query($conn, $sql);

		//check to see if there is any record / row in the database
		//if there is then the user exists
		if (mysqli_num_rows($re)) {
			//echo "Welcome";
			//creating a session name with username ad inserting the submitted username
			$_SESSION['username'] = $username;

			//redirecting to homepage
			header("Location: calendar.php");
		}else{
			//display error if no record exists
			echo "Error : Invalid Login Credentials";
		}
	}
?>