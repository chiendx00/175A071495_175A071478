<?php
require_once "mysqli_connect.php";

$query = "Select * from hocphan where idmonhoc = " . $_POST['id'];

$result = mysqli_query($dbcon, $query);

if (mysqli_num_rows($result) > 0) {
    echo json_encode(mysqli_fetch_all($result));
}
?>