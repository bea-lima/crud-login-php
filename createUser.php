<?php
require('con.php');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['pwd'];

$result = db_query("INSERT INTO user (id, name, email, password) VALUES (NULL, '$name', '$email', '$password')");

?>
