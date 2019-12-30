
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
              <td width="120"></td>
              <td width="120">
                <strong>
                <label>Môn học:</label>
                </strong>
             </td>
              <td width="140">
              <select name="monhoc">
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
              <option>Tổng quan về BM & ATTT</option>
              <option>Mã khóa công khai</option>
              <option>Tấn công DDOS</option>
              </select>       
            </td>
            </tr>
            </table>
            </div>
            <div class="list-course">
            <table class="list-course" bgcolor="#FFFFFF" width="725">
                <tr class="row-first">
                  <th scope="col">STT</th>
                  <th scope="col">IDsinhvien</th>
                  <th scope="col">Tên sinh viên</th>
                  <th scope="col">Có mặt(V)<br>Vắng mặt(Bỏ trống)</th>
                  <th scope="col">Ghi chú</th>
                </tr>
                <tr>
                  <td width="10">1</td>
                  <td width="100">CCNA0001</td>
                  <td width="200">Khoa Công nghệ thông tin</td>
                  <td width="132" align="center">
                  <input type="checkbox" name="check_diemdanh" checked="true" />
                  </td>
                  <td align="center">
                  <input type="text" name="ghichu_diemdanh" width="240"/>
                  </td>
                </tr>
                <tr>
                  <td width="10">2</td>
                  <td width="100">CCNA0002</td>
                  <td width="200">Khoa Toán tin</td>
                  <td width="132" align="center">
                  <input type="checkbox" name="check_diemdanh" />
                  </td>
                  <td align="center">
                  <input type="text" name="ghichu_diemdanh" width="240" value="Không phép"/>
                  </td>
                </tr>
                <tr>
                  <td width="10">3</td>
                  <td width="100">CCNA0003</td>
                  <td width="200">Khoa Hóa học</td>
                  <td width="132" align="center">
                  <input type="checkbox" name="check_diemdanh" />
                  </td>
                  <td align="center">
                  <input type="text" name="ghichu_diemdanh" width="240" value="Không phép"/>
                  </td>
                </tr>
                <tr>
                  <td width="10">4</td>
                  <td width="100">CCNA0004</td>
                  <td width="200">Khoa Sinh học</td>
                  <td width="132" align="center">
                  <input type="checkbox" name="check_diemdanh" />
                  </td>
                  <td align="center">
                  <input type="text" name="ghichu_diemdanh" width="240" value="Không phép"/>
                  </td>
                </tr>
                <tr>
                  <td width="10">5</td>
                  <td width="100">CCNA0005</td>
                  <td width="200">Khoa Vật lý</td>
                  <td width="132" align="center">
                  <input type="checkbox" name="check_diemdanh" />
                  </td>
                  <td align="center">
                  <input type="text" name="ghichu_diemdanh" width="240" value="Không phép"/>
                  </td>
                </tr>
                <tr>
                  <td width="10">6</td>
                  <td width="100">CCNA0006</td>
                  <td width="200">Khoa Địa lý</td>
                  <td width="132" align="center">
                  <input type="checkbox" name="check_diemdanh" />
                  </td>
                  <td align="center">
                  <input type="text" name="ghichu_diemdanh" width="240" value="Không phép"/>
                  </td>
                </tr>
                <tr>
                  <td width="10">7</td>
                  <td width="100">CCNA0007</td>
                  <td width="200">Khoa Lịch sử</td>
                  <td width="132" align="center">
                  <input type="checkbox" name="check_diemdanh" />
                  </td>
                  <td align="center">
                  <input type="text" name="ghichu_diemdanh" width="240" value="Không phép"/>
                  </td>
                </tr>
            </table>
            </div>
</body>
</html>