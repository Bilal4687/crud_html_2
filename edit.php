<?php
    require_once 'config.php';
    if(isset($_GET['id']) && !empty($_GET['id'])){

        $emp_id = $_GET['id'];

        $sql = "SELECT * FROM employees WHERE id = '{$emp_id}'";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result))
            {

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
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
                    <h2 class="mt-5">Update Record</h2>
                    <p>Please edit the input values and submit to update the employee record.</p>
                    <form  method="post" action="update.php">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="hidden" name='EMPid' value="<?php echo $row['id']?>">
                            <input type="text" name="name" class="form-control" value="<?php echo $row['name']?>">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="address" class="form-control" ><?php echo $row['address']?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Salary</label>
                            <input type="text" name="salary" class="form-control" value="<?php echo $row['salary']?>">
                        </div>
                        <input type="hidden" name="id" value=""/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
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
