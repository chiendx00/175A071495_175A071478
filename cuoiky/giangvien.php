<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Điểm danh sinh viên</title>
</head>


<body>
 

  <p id="show"></p>





  <div>
    <p align="center"><strong>ĐIỂM DANH HỌC VIÊN</strong></p>
  </div>
  <div>
    <table>
      <tr>
        <td width="120">
          <strong>
            <label>Ngành học:</label>
          </strong>
        </td>
        <td width="140">
          <select name="nganhhoc" id="nganhhoc">
            <?php
            session_start();

            require_once "mysqli_connect.php";

            $query = "Select * from nganhhoc ";

            $result = mysqli_query($dbcon, $query);
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                // echo $row['tennganhhoc'];
                echo "<option value=" . $row['idnganhhoc'] . ">" . $row['tennganhhoc'] . "</option>";
              }
            }
            ?>
          </select>
        </td>
        <td width="100">
        </td>
        <td width="140">
          <strong>
            <label>Ngày điểm danh:</label>
          </strong>
        </td>
        <td width="140">
          <input type="date" id="ngaydiemdanh" value="05/09/2009" />
        </td>
      </tr>
      <tr>
        <td width="140">
          <strong>
            <label>Môn học:</label>
          </strong>
        </td>
        <td width="140">
          <select name="Mon hoc" id="monHoc">
            
          </select>
        </td>
        <td width="100"></td>
        <td width="150">
          <input type="submit" id="tk" value="Tìm Kiếm">
        </td>
      </tr>
      <tr>
        <td width="120">
          <label><strong>Tên học phần </strong></label>
        </td>
        <td width="140">
          <select name="hoc phan" id="hocPhan">

          </select>
        </td>
      </tr>
    </table>
  </div>
  <br>
  <br>
  <div class="list-course">
    <table class="list-course" bgcolor="#FFFFFF" width="1000">
      <tr class="row-first">
        <th scope="col">IDSinh Viên </th>
        <th scope="col">Tên sinh viên</th>
        <th scope="col">Lớp</th>
        <th scope="col">Có mặt(X)<br>Vắng mặt(Bỏ trống)</th>
        <th scope="col">Ghi chú</th>
      </tr>
     
    </table>
  </div>
  <br>
  <br>
  <div>
    <table>
      <tr>
        <td width="600"></td>
        <td width="120" align="right">
          <button class="btn" type="submit" style="background-color: orange">lưu</a>
        </td>
        <td width="120" align="right">
          <a class="btn" href="formthemsv.php" type="submit">Thêm</a>
        </td>
        <td width="120" align="right">
          <button class="btn" type="submit" style="background-color:pink">Xóa</a>
        </td>
      </tr>
    </table>
  </div>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" />
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/script.js"></script>
</body>

</html>