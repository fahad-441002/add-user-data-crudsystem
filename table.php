<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Data</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="col-lg-10 mx-auto">
            <h1 class="text-center mt-5 mb-2 text-info">User Data</h1>
            <a href="insert.php" class="btn btn-primary my-5">Add User</a>
            <div class="mx-auto">
                <table class="table table-bordered table-striped table-hover text-center">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Delete</th>
                            <th>Update</th>
                        </tr>
                    </thead>
                    <?php

                    include 'crud.php';
                    $q = "select * from mycrud";
                    
                    $query = mysqli_query($db, $q);
                    
                    $id = 0;
                    while($result = mysqli_fetch_array($query)){
                        $id++;
                        
                    ?>
                    <tbody>
                        <tr>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $result['name']; ?></td>
                            <td><?php echo $result['email']; ?></td>
                            <td><?php echo $result['password']; ?></td>
                            <td><a class="btn btn-danger text-white" href="delete.php?id=<?php echo $result['id'];?>">Delete</a></td>
                            <td><a class="btn btn-info text-white" href="update.php?id=<?php echo $result['id'];?>">Update</a></td>
                        </tr>
                    </tbody>
                        
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>