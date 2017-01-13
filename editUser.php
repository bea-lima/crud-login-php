<?php
require('con.php');

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['pwd'];

$result = db_query("UPDATE user SET name = '$name', email = '$email', password = '$password' WHERE id = '$id'");

?>

<script type="text/javascript">
  alert("User edited");
  window.location='user.html';
</script>