<?php

include 'crud.php';
$id = $_GET['id'];
$q = "Select * from `mycrud` where id=$id";
$query = mysqli_query($db, $q);
$result = mysqli_fetch_assoc($query);
$username = $result['name'];
$email = $result['email'];
$password = $result['password'];

if (isset($_POST['sumbit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $q = "update `mycrud` set id='$id',name='$username',email='$email',password='$password' where id=$id";

    header("location:table.php");

    $query = mysqli_query($db, $q);

    // if($query){
    //     echo "done";
    // }else{
    //     echo "failed";
    // }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="col-md-6 m-auto">
        <form method="POST">
            <div class="card">
                <div class="card-header bg-info text-center text-white">
                    <h2>Add User</h2>
                </div>
                <div class="card-body">
                    <label for=""><b>Username</b></label>
                    <br>
                    <input class="form-control" type="text" name="username" value="<?php echo $username; ?>" pattern="[a-zA-Z]*" required>
                    <br>
                    <label for=""><b>Email</b></label>
                    <br>
                    <input class="form-control " type="email" name="email" value="<?php echo $email; ?>" required>
                    <br>
                    <label for=""><b>Password</b></label>
                    <br>
                    <input class="form-control" type="text" name="password" value="<?php echo $password; ?>" pattern=".{8,}" required>
                    <br>
                    <button class="btn btn-success" type="sumbit" name="sumbit">Update</button>
                </div>
            </div>
        </form>
        <a href="table.php" class="btn btn-warning my-5">Check Add Users</a>
        <a href="insert.php" class="btn btn-primary my-5 mx-2">Add New User</a>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>