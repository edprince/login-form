//Establish connection to database
//Retrieve post information
<?php
$host;
$username;
$password;

$inputUsername = $_POST['username'];
$inputPassword = $_POST['password'];

$dbcnx = new mysqli($host, $username, $password);
if ($dbcnx->connect_error) {
  die('Connection failed: ' . $dbcnx->connect_error);
}

$sql = 'CREATE DATABASE IF NOT EXISTS wave';
if ($dbcnx->query($sql) !== TRUE) {
  echo 'Error creating database: ' . mysqli_error($dbcnx); 
}

$sql = 'CREATE TABLE IF NOT EXISTS users 
  (
  id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
  username VARCHAR(20) NOT NULL,
  password VARCHAR(50),
  email VARCHAR(50)
  )';
if ($dbcnx->query($sql) !== TRUE) {
  echo 'Error creating table: ' . mysqli_error($dbcnx);
}

$sql = 'SELECT * FROM users WHERE username = "'$inputUsername'"';
$results = $dbcnx->query($sql);
if ($results) {
  //login success
} else {
  //login failed
}

?>
