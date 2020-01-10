
<?php
session_start();
              

  require_once "mysqli_connect.php";

  if( isset($_SESSION['masinhvien']))
    {    
      $query = "SELECT * FROM `accountsv` a, sinhvien s, lop l, nganhhoc n "
      . "WHERE a.idsinhvien =" . $_SESSION['masinhvien'] 
      . " and  a.idsinhvien = s.idsinhvien and s.idlop = l.idlop and n.idnganhhoc = l.idnganhhoc";
      $result = mysqli_query($dbcon, $query);
        // var_dump($result);
      if (mysqli_num_rows($result) == 1)
      {
        $row = mysqli_fetch_assoc($result);
        echo $row['idsinhvien'] . '<br>';
        echo $row['tensinhvien']. '<br>';
        echo $row['tenlop'] . '<br>';
        echo $row['tennganhhoc'] . '<br>';  
      }
    
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Điểm danh sinh viên</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
</head>
<body>
<div>
            <p align="center"><strong>DANH SÁCH ĐIỂM DANH</strong></p>
            </div>
            <div>
            <table>
           
              <td width="120"></td>
              <td width="120">
                <strong>
                <label>Môn học:</label>
                </strong>
             </td>
              <td width="140">
              <select id="monhoc">
                <option>Lập Trình</option>
                <option>Ket Cau Sat</option>
                <option>Tai Chinh</option>
                <option>mac-lenin </option>
              </select>              
              </td>
            </tr>
            <tr>
              <td width="120">
              <td width="120">
                <label>
                  <strong>Học Phần</strong>
                </label>
              </td>
            <td width="140">
            <select name="học phần">
              <option>Lập Trình-Th1</option>
              <option>ket Cau Sat-CT1</option>
              <option>Tai chính-TC1</option>
              <option>Mac-Lenin-all</option>
              </select>
            </td>
            </tr>
             <tr>
              <td width="100"></td>
              <td width="140">
                <strong>
                <label>Ngày điểm danh:</label>
                </strong> </td>
              <td width="140">
              <input type="date" name="ngaydiemdanh" />            
              </td>
            </tr>
            <tr>
            <td width="150">
              <td width ="150">
                <button type="submit">>Tìm Kiếm</button>
              </td>
            </td>
            <br>
            </table>
            </div>
            <div class="list-course">
            <table class="list-course" bgcolor="#FFFFFF" width="850">
                <tr class="row-first">
                  
                  <th scope="col">IDsinhvien</th>
                  <th scope="col">Tên sinh viên</th>
                  <th scope="col">Lớp</th>
                  
                  <th scope="col">Có mặt(V)<br>Vắng mặt(Bỏ trống)</th>
                  <th scope="col">Ghi chú</th>
                </tr>
                <tr>
                  
                <td width="132" align="center">
                  <input type="text" name="idsinhvien" checked="true" />
                  </td>
                  <td width="132" align="center">
                  <input type="text" name="giaidoan" checked="true" />
                  </td>
             
                  <td width="132" align="center">
                  <input type="text" name="giaidoan" checked="true" />
                  </td>
                  <td width="132" align="center">
                  <input type="text" name="check_diemdanh" checked="true" />
                  </td>
                  <td align="center">
                  <input type="text" name="ghichu_diemdanh" width="240"/>
                  </td>
                </tr>
               

 <script src="js/jquery-3.4.1.min.js"></script>
 <script src="js/script.js"></script>
</body>
</html>