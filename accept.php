<?php
    include('functions.php');
    $id = $_GET['id'];
    $query = "select * from `requests` where `sumilang_req_id` = '$id'; ";
    if(count(fetchAll($query)) > 0){
        foreach(fetchAll($query) as $row){
            $firstname = $row['sumilang_firstname'];
            $lastname = $row['sumilang_lastname'];
            $email = $row['sumilang_email'];
            $password = $row['sumilang_password'];
            $query = "INSERT INTO `accounts` (`sumilang_acc_id`, `sumilang_firstname`, `sumilang_lastname`, `sumilang_email`, `sumilang_type`, `sumilang_password`) VALUES (NULL, '$firstname', '$lastname', '$email', 'user', '$password')";
            performQuery($query);
        }
        $query = "DELETE FROM `requests` WHERE `requests`.`sumilang_req_id` = '$id'";
        if(performQuery($query)){
            echo "Account has been accepted.";
        }else{
            echo "Unknown error occured. Please try again.";
        }
    }else{
        echo "Error occured.";
    }
    
?>
<br/><br/>
<a href="admin/admin_home.php">Back</a>