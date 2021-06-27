<?php
    
    define('DBHOST','access876198634.webspace-data.io');
    define('DBUSER','u105148130');
    define('DBPASS','_jeffSumilang2021');
    define('DBNAME','dbs2597910');
    

    function performQuery($sql){
        $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
        $result = mysqli_query($conn, $sql);
        if($result){
            return true;
        }else{
            return false;
        }
    }

    function fetchAll($sql){
        $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
        $result = mysqli_query($conn, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }


   
?>