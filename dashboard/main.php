<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../src/css/bootstrap.css">
    <link rel="stylesheet" href="../src/css/font-awesome.min.css">
    <link rel="stylesheet" href="../src/css/style.css">
</head>

<?php
    $servername = "localhost";
    $username = "root";
    $dbname = "employee_management_system";

    // Create connection
    $conn = new mysqli($servername, $username, null, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    
?>
<body>
    <header class="py-3 text-center text-white bg-inverse">
        <h3><i class="fa fa-gears"></i>
        Welcome to Dashboard</h3>
    </header>
    <div class="row">
        <div class="col-md-3 dasbhoard_navigator col-lg-3 col-sm-12">
            <ul class="list-group">
                <a href="./main.php" class="list-group-item"> <i class="fa fa-users"></i> &nbsp; All Employees</a>
                <a href="./addEmp.html" class="list-group-item"> <i class="fa fa-plus"></i> &nbsp;Add Employee</a>
                <a href="./searchEmp.html" class="list-group-item"> <i class="fa fa-search"></i>  &nbsp;Search Employee</a>
                <a href="./updateEmp.html" class="list-group-item"> <i class="fa fa-pencil"></i> &nbsp; Update Employee</a>
                <a href="./deleteEmp.html" class="list-group-item"> <i class="fa fa-trash"></i> &nbsp; Delete Employee</a>
                
            </ul>
        </div>
        <div class="col-md-8 col-lg-8 col-sm-12">
            <div class="container">
                <h1 class="my-3 text-center"> <i class="fa fa-users"></i> All Records</h1>
                <hr>
                 <table class="table">
                    <tr>
                        <th>_id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Salary</th>
                    </tr>
                
                <!--    
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>3</td>
                    </tr>
                    
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>3</td>
                    </tr>
                    
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>3</td>
                    </tr>
                    
                
                </table> -->
            <?php
                
                $sql = "SELECT emp_id, emp_name, emp_email, emp_salary, emp_age FROM emp";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
    
                    echo "<tr><td>".$row["emp_id"]."</td><td>". $row["emp_name"]."</td><td>".$row["emp_email"]."</td><td>".$row["emp_age"]."</td><td>".$row["emp_salary"]."</td></tr>";
                        //echo "id: " . . " - Name: " . " " . . " " . $row["emp_salary"];
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();
            ?>
            </div>
        </div>
    </div>



</body>

    <script src="js/jquery.min.js"> </script>
    <script src="js/tether.min.js"> </script>
    <script src="js/bootstrap.min.js"> </script>
</html>