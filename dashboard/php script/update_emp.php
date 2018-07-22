<?php

                    
$connection = new mysqli('localhost', 'root', null, 'employee_management_system');
if( $connection->connect_error ) {
    die('connection error!');
}

if( $_SERVER['REQUEST_METHOD'] === 'POST'  ) {
    
    $email_to_fetch = trim($_POST['emp_email_to_fetch']);

    // records of new Employee..

    $emp_name = trim($_POST['new_name']);
    $emp_email = trim($_POST['new_email']);
    $emp_age = $_POST['new_age'];
    $emp_salary = $_POST['new_Salary'];

}

$search_query = "SELECT emp_id, emp_name, emp_email, emp_age, emp_salary FROM emp WHERE emp_email='".$email_to_fetch."'";

$result = $connection->query($search_query);
// echo $search_query;
echo $search_query;
if ( $result->num_rows > 0 ) {
    echo "step1";
    $update_query =  "UPDATE emp SET emp_name='".$emp_name."', emp_age='".$emp_age."', emp_salary='".$emp_salary."', emp_email='".$emp_email."' WHERE emp_email='".$email_to_fetch."'";
    if( $connection->query($update_query) === TRUE) {
        echo "RECORD UPDATED!";
    } else {
        echo "ERROR WHILE UPDATING RECOERDS: ".$connection->error;
    }
} else { 
    echo "not found!";
}

?>