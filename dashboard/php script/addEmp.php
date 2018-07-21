
    <?php 
   
    
    $emp_name =  $_POST['emp_name'];
    $emp_email = $_POST['emp_email'];
    $emp_age = $_POST['emp_age'];
    $emp_salary = $_POST['emp_salary'];


    $servername = "localhost";
    $username = "root";

    // Create connection
    $conn = new mysqli($servername, $username, null, 'employee_management_system');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected successfully";


    $sql = "INSERT INTO emp(emp_name , emp_email, emp_age, emp_salary) 
    VALUES('".$emp_name."', '".$emp_email."', '".$emp_age."', '".$emp_salary."' )";
    

    echo $sql;
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br /> ERROR: " . $conn->error;
    }
    $conn->close();
    echo "<br />name: ".$emp_name;
    echo "<br />Age : ".$emp_age;
    echo "<br />Email: ".$emp_email;
    echo "<br />SAlary: ".$emp_salary;

    ?>