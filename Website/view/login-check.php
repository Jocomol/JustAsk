<?php
session_start();

if (!isset($_POST['username']) || !isset($_POST['password'])) {
	die("permission denied");
}

$connection = new MySQLi ( "localhost", "justaskdbuser", "<ZY.K4!e>g?U#.+]u4mf63", "bmeiejsql1" );
if ($connection->connect_error) {
	echo "Verbindungsfehler: $connection->connect_error";
}


$connection->set_charset ( "utf8" );

$query = "SELECT id, username, password FROM user WHERE vorname = $_POST['username'] AND password = $_POST['password']";



$username = $_POST ['username'];
$password = sha1($_POST ['password']);


$statement = $connection->prepare ($query);
$statement->bind_param("ss", $username, $password);

$statement->execute();
$result = $statement->get_result();

if ($result->num_rows == 1) {

	$row = $result->fetch_object();
	$_SESSION ['user'] ['name'] = $row->username;
	$_SESSION ['loggedin'] = true;
	echo "You are logged in as " . $_SESSION ['user']['name'];
} else {
	echo "Permission denied";
}

?>
