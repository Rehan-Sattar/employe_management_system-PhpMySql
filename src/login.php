<?php

    $user_email = $_POST['user_email'];
    $user_pass = $_POST['user_password'];


    $serverName = "localhost";
    $userName = "root";
    $dbName = "employee_management_system";
    
    //connecting to Db
    ;;
     $DB = new mysqli($serverName, $userName, null, $dbName);
    
     if ( $DB->connect_error  == TRUE ) {
         die('Connection failed!');
     } 
    
     echo 'Connected Successfully';
    $sql = "SELECT email, user_password FROM users WHERE email='".$user_email."' && user_password='".$user_pass."'"; 
    $result = $DB->query($sql);


    if ($result->num_rows > 0) {
        header("Location: http://localhost/employee_management_system/dashboard/main.php");
        die(); 
    }else {
        echo "0 results";
    }
    

     



?>