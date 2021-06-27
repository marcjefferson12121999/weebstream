<?php
    
    define('DBHOST','localhost');
    define('DBUSER','root');
    define('DBPASS','');
    define('DBNAME','weebstream');
    

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