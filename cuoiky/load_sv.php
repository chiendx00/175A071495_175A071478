<?php
require_once "mysqli_connect.php";

$query = "SELECT hs.*, d.comat, d.ghichu, s.tensinhvien, s.idlop  " 
. " FROM hocphan_sinhvien hs, diemdanh d, sinhvien s" 
. " WHERE hs.idhocphan = d.idhocphan and hs.idsinhvien = d.idsinhvien " 
. "and d.idsinhvien = s.idsinhvien and d.idhocphan = " . $_POST['id']
. " and ngay = '" . $_POST['ngay'] . "'";

$result = mysqli_query($dbcon, $query);

if (mysqli_num_rows($result) > 0) {
    echo json_encode(mysqli_fetch_all($result));
}
?>