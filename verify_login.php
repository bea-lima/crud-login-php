<?php
require('con.php');

$email = $_POST['email'];
$password = $_POST['pwd'];

$result = db_query("SELECT email,password FROM user WHERE email = '$email' and password = '$password'");

if (mysqli_fetch_row($result)>0)
  {
?>
    <script type="text/javascript">
      alert("Logged in!");
      window.location = 'user.html';
    </script>
<?php
}else{
?>
    <script type="text/javascript">
      alert("Wrong user/password. Please try again.");
      window.location = 'index.html';
    </script>
<?php
 }