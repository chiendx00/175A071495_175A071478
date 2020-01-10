<?php
require_once "mysqli_connect.php";

$query = "Select * from monhoc where idnganhhoc = " . $_POST['id'];

$result = mysqli_query($dbcon, $query);

if (mysqli_num_rows($result) > 0) {
    echo json_encode(mysqli_fetch_all($result));
}
?>