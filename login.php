<?php
    session_start(); 
    include("functions.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
	.container { 
  background: url(lbg.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
body { 
  background: url(lbg.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>


  </head>

  <body class="text-center">
      <?php
      
        if(isset($_POST['signin'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            // $query = "SELECT * from `accounts`";
            $query = "SELECT * FROM `accounts` WHERE `sumilang_email` = '$email' AND `sumilang_password` = '$password'";
            if($row = fetchSpecific($query)){ 
              $_SESSION['login'] = true;
              $_SESSION['user_id'] = $row['sumilang_acc_id'];
              $_SESSION['user_info'] = $row;
            
              if($row['sumilang_type'] == "admin"){
                // echo ("<script>location.href=http://sumilangmarc.com/admin/admin_home.php</script>");
                header('location: admin/admin_home.php');
              }else{
                header('location: user/user_home.php');
                // echo ("<script>location.href=http://sumilangmarc.com/user/user_home.php</script>");
              }
            }else{
              echo "<script>alert('Wrong login details.')</script>";
            }

        }
      
      ?>
      <div class="container">
            <form method="post" class="form-signin">
              <img class="mb-4" src="licon.jpg" alt="" width="200" height="200">
              <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                
                
              <label for="inputEmail" class="sr-only">Email address</label>
              <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
              <label for="inputPassword" class="sr-only">Password</label>
              <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
             
              <button name="signin" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
              <a href="signup.php" class="mt-5 mb-3 text-muted">Create an account</a>
            </form>
          </div>
      
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
