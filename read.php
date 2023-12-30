<?php
    
    require_once 'config.php';

    if(isset($_GET['id']) && !empty($_GET['id'])){

        $emp_id = $_GET['id'];

        $sql = "SELECT * FROM employees WHERE id = '{$emp_id}'";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-5 mb-3">View Record</h1>
                    
                    <div class="form-group">
                        <label>Name</label>
                        <p><b><?php echo $row['name']?></b></p>
                    </div>
                    <div class="form-group">
                        <label><?php echo $row['address']?></label>
                        <p><b></b></p>
                    </div>
                    <div class="form-group">
                        <label>Salary</label>
                        <p><b><?php echo $row['salary']?></b></p>
                    </div>
                   
                    <p><a href="index.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
<?php

    }
}
}

?>