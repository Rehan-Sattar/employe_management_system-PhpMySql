
    <?php 
   
    $servername = "localhost";
    $username = "username";
    $password = "password";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected successfully";

    $emp_name =  $_POST['emp_name'];
    $emp_email = $_POST['emp_email'];
    $emp_age = $_POST['emp_age'];
    $emp_salary = $_POST['emp_salary'];


    echo "<br />name: ".$emp_name;
    echo "<br />Age : ".$emp_age;
    echo "<br />Email: ".$emp_email;
    echo "<br />SAlary: ".$emp_salary;

    ?>