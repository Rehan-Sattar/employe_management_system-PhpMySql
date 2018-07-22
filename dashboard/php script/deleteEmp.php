<?php 


    $connection = new mysqli('localhost', 'root', null, 'employee_management_system');
    if( $connection->connect_error ) {
        die('connection error!');
    }

    if( $_SERVER['REQUEST_METHOD'] === 'POST'  ) {
        $inputed_mail = trim($_POST['emp_email']);
    }

    $delete_query = "DELETE FROM emp WHERE emp_email='".$inputed_mail."'";


    if( $connection->query($delete_query) === TRUE) {
        echo "deleted Succesfully!";
    } else {
        echo "some error occur: ".$connection->error;
    }


?>


