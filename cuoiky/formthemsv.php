<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>themSV</title>

</head>
<body>
    <div class="list-course">
        <table class="list-course" bgcolor="#FFFFFF" width="900px">
            <tr class="row-first">
              <th scope="col">IDSinh Viên </th>
              <th scope="col">Tên sinh viên</th>
              <th scope="col">Lớp</th>
             
              <th scope="col">Có mặt(X)<br>Vắng mặt(Bỏ trống)</th>
              <th scope="col">Ghi chú</th>
            </tr>
            <tr>
               
                <td align="left">
                    <input type="text" name="idSV" width="20"/>
                </td>
                <td align="left">
                    <input type="text" name="TenSV" width="20"/>
                </td>
                <td align="left">
                    <input type="text" name="Lop" width="20"/>
                </td>
                <td width="132" align="center">
                    <input type="text" name="check_diemdanh" checked="true" />
                </td>
                <td align="left">
                    <input type="text" name="ghichu" width="20"  />
                </td>
            </tr>
        </table>
        </div>
        <br>
        <div>
            <table>
            <tr>           
            <td width="850" align="right">
            <button class="btn" type="submit" style="background-color: bisque;">Lưu</a>  
            </td>
            </tr>
            </table>
            </div>
</body>
</html>