<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<section>
        <table class="table table-responsive table-hover table-striped table-bordered" >
            <thead>
                <tr >
                    <th >#</th>
                    <th >Firstname</th>
                    <th >Lastname</th>
                    <th >Email</th>
                    <th >Password</th>
                    <th >Type</th>
                </tr>
            </thead>
            <tbody>
            
                 <?php
    
                    $query = "select * from `accounts`";
                    if(count(fetchAll($query))>0){
                        foreach(fetchAll($query) as $row){
                            echo "
                            <tr>
                                <td>". $row['sumilang_acc_id'] ."</td>
                                <td>". $row['sumilang_firstname'] ."</td>
                                <td>". $row['sumilang_lastname'] ."</td>
                                <td>". $row['sumilang_email'] ."</td>
                                <td>". $row['sumilang_password'] ."</td>
                                <td>". $row['sumilang_type'] ."</td>
                              
                            </tr>";
                        }
                    }
                ?>
            </tbody>
        </table>       
    </section>
</body>
</html>