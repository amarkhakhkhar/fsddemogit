<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Reg Form</title>
   </head>
<body>
	
<?php
$servername = "localhost";
$username = "student";
$password = "student123";
$dbname = "studentdb";
$first_name = isset($_REQUEST['firstname']) ;
$last_name = isset($_REQUEST['lastname']) ;
$email = isset($_REQUEST['email']) ;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO details (firstname, lastname, email)
VALUES ('$first_name', '$last_name', '$email')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>

</html>