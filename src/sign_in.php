<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>


<?php
if ( $_SERVER['REQUEST_METHOD'] == "POST") {
    $first_name =  $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$passwrod = $_POST['password'];
$age = $_POST['age'];

echo $first_name.$last_name.$email.$passwrod.$age;

}

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
    $sql = "INSERT INTO users (first_name, last_name, email, user_password, age)VALUES ('".$first_name."', '".$last_name."', '".$email."', '".$passwrod."', '".$age."')";

    if ($DB->query($sql) === TRUE) {
        echo "New record created successfully";  
    } else {
        echo "Error: " . $sql . "<br>" . $DB->error;
    }

    $DB->close();


?>