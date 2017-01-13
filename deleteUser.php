<?php
require('con.php');

$email = $_POST['email'];

$result = db_query("DELETE FROM user WHERE email = '$email'");
?>

<script type="text/javascript">
  alert("User deleted");
  window.location='user.html';
</script>