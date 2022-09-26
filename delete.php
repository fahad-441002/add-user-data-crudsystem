<?php
include 'crud.php';

$id = $_GET['id'];

$q = "DELETE FROM `mycrud` WHERE id = '$id'";

$query = mysqli_query($db, $q);

header("location:table.php");

?>