<?php
$db = mysqli_connect("localhost", "root", "", "crudtable");
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
