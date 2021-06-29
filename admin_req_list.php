<?php
    session_start(); 
    include("functions.php");
    if($_SESSION['login']!==true){
        header('location:login.php');
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>home</title>
    

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
	html { 
  background: url(admin/bg.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
  </head>

  <body>

    <header>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <strong> <img src="assets/img/image-icon/favicon.png" class="touch-icon" alt="touch-icon">
            Hi, Admin 
                <?php 
                    echo $_SESSION['user_id'];
                    echo " ";
                    echo $_SESSION['user_info']['sumilang_firstname'];
                    echo " ";
                    echo $_SESSION['user_info']['sumilang_lastname'];
                ?>    
                             
             </strong>
          </a>
            <div class="pull-right">
            <?php
                if(isset($_POST['logout'])){
                    session_destroy();
                    header('location:login.php');
                }
    
                ?>
                <form method="post">
                <button> <a href="admin/admin_home.php">Home</a></button>
                <button> <a href="admin_req_list.php">Requests</a></button>
                <button><a href="admin_acc_list.php">Accounts</a></button>
                    <button name="logout" class="btn btn-danger my-2">Logout</button>
                </form>
            </div>
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
            <?php
            
                $query = "select * from `requests`;";
                if(count(fetchAll($query))>0){
                    foreach(fetchAll($query) as $row){
                        ?>
                
                    <h1 class="jumbotron-heading"><?php echo $row['sumilang_email'] ?></h1>
                      <p class="lead text-muted"><?php echo $row['sumilang_message'] ?></p>
                      <p>
                        <a href="accept.php?id=<?php echo $row['sumilang_req_id'] ?>" class="btn btn-primary my-2">Accept</a>
                        <a href="reject.php?id=<?php echo $row['sumilang_req_id'] ?>" class="btn btn-secondary my-2">Reject</a>
                      </p>
                    <small><i><?php echo $row['sumilang_date'] ?></i></small>
            <?php
                    }
                }else{
                   
                }
            ?>
          
         </div>
          
      </section>      

	
		
	

    </main>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
