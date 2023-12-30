<?php

require_once 'COnfig.php';

$emp_id = $_GET['id'];

if(isset($emp_id) && !empty($emp_id)){
    $sql = "DELETE FROM employees WHERE id ='{$emp_id}'";
    $result = mysqli_query($conn, $sql);
    header("Location: http://localhost/crud_html_2/index.php");
}

?>