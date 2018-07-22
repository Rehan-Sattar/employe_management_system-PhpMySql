<?php

                    
$connection = new mysqli('localhost', 'root', null, 'employee_management_system');
if( $connection->connect_error ) {
    die('connection error!');
}

if( $_SERVER['REQUEST_METHOD'] === 'POST'  ) {
    $inputed_mail = trim($_POST['emp_email']);
}

$search_query = "SELECT emp_id, emp_name, emp_email, emp_age, emp_salary FROM emp WHERE emp_email='".$inputed_mail."'";

$result = $connection->query($search_query);
if ( $result->num_rows > 0 ) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["emp_id"]. " - Name: " . $row["emp_name"]. " " . $row["emp_age"]. "<br>";

    }
} else {
    echo "not found!";
}

?>