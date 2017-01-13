<?php
  require('con.php');

  $email = $_POST['email'];

  $result = db_query("SELECT id, name,email,password FROM user WHERE email = '$email'");

  if($result->num_rows > 0){
    $row=mysqli_fetch_row($result);
  }else{
   ?>
   <script>
     alert("User not found.");
     window.location="user.html";
   </script>
   <?php 
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>CRUD PHP</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
     <div class="container">
      <h2>Edit User</h2>
        <form class="form-inline" action="editUser.php" method="post">
          <div class="form-group">
            <label class="sr-only" for="name">Name:</label>
            <input type="text" class="form-control" name="name"  placeholder="Enter name" required value="<?php echo $row[1]; ?>">
          </div><br><br>
          <div class="form-group">
            <label class="sr-only" for="email">Email:</label>
            <input type="email" class="form-control" name="email" placeholder="Enter email" required value="<?php echo $row[2]; ?>">
          </div><br><br>
          <div class="form-group">
            <label class="sr-only" for="pwd">Password:</label>
            <input type="password" class="form-control" name="pwd" placeholder="Enter password" required value="<?php echo $row[3]; ?>">
          </div><br><br>
          <input type="hidden" name="id" required value="<?php echo $row[0]; ?>">
          <button type="submit" class="btn btn-default">Edit</button>
          <button type="button" class="btn btn-default" onclick="location.href = 'user.html';">Go back</button>
        </form> 
     </div>
  </body>
</html>