<?php
if ( isset($_POST['submit']))
{
  require "mysqli_connect.php";

  $username =  $_POST['username'];
  $pass = $_POST['password'];
  $query = "Select * from accountgv where username = '$username' and password = '$pass'";
  // echo $query;
  $result = mysqli_query($dbcon, $query);
  // var_dump($result);
  if ( mysqli_num_rows($result) == 1)
  {
    // echo 'Thành công';
    header("Location: giangvien.php");
  }
  else
  $error = false;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
    <header>
        <form method="POST" action="" >
         
         
          <br>
           <div class="login" >
            <div class="form-group"  >
                <label for="exampleInputEmail1">Username:</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
                <small id="emailHelp" class="form-text text-muted"></small>
              </div>
              <br>
              <div class="form-group">
                <label for="exampleInputPassword1">Password :</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember Login</label>
              </div>
              <?php
                if (isset($error) && !$error)
                  echo '<div class="alert alert-danger" role="alert">Bạn đã nhập sai Username hoặc Password</div>';
              ?>
              <br>
              <button type="submit" class="btn-primarys" name="submit" >Login</button>
              <button type="btn" class="btn btn-primary">Cancel</button>
           </div>
          </form>
    </header>
</body>
 
</html>