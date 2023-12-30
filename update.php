<?php

require_once 'config.php';

$emp_id = $_POST['EMPid'];
$name = $_POST['name'];
$address = $_POST['address'];
$salary = $_POST['salary'];



$sql = "UPDATE employees 
        SET name = '{$name}', address = '{$address}', salary = '{$salary}' 
        WHERE id = '{$emp_id}'";
$result = mysqli_query($conn, $sql) or die('error in query');

header("Location: http://localhost/crud_html_2/index.php");

?>