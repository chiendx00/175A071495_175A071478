<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Điểm danh sinh viên</title>
</head>
<body>
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
                <select name="chuongtrinh_diemdanh">
                   <option>CNTT</option>
                   <option>Cong Trinh</option>
                   <option>Kinh te</option>
                   <option>Chinh tri</option>
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
                 <input type="date" name="ngaydiemdanh" value="05/09/2009"/>       
              </td>
            </tr>
            <tr>
              <td width="140">
              <strong>
                <label>Môn học:</label>
              </strong>
               </td>
              <td width="140">
                <select name="Mon hoc">
                  <option>Lap Trinh</option>
                  <option>Ket Cau Sat</option>
                  <option>Tai Chính</option>
                  <option>mac-lenin</option>
                </select>             
              </td>
            </tr>
            <tr>
            <td width="120">
            <label><strong>Tên học phần </strong></label>
            </td>
            <td width="140">
            <select name="baihoc_diemdanh">
              <option>lap Trinh-Th1</option>
              <option>Ket Cau sat-CT1</option>
              <option>Tai Chính-TC1</option>
              <option>Mac-lenin-all</option>
              </select>       
            </td>
            </tr>
            </table>
            </div>
            <div class="list-course">
            <table class="list-course" bgcolor="#FFFFFF" width="725">
                <tr class="row-first">
                  <th scope="col">STT</th>
                  <th scope="col">IDSinh Viên </th>
                  <th scope="col">Tên sinh viên</th>
                  <th scope="col">Lớp</th>
                  <th scope="col">Có mặt(V)<br>Vắng mặt(Bỏ trống)</th>
                  <th scope="col">Ghi chú</th>
                </tr>
                <tr>
                  <td width="10">1</td>
                  <td width="100">CCNA0001</td>
                  <td width="200">Khoa Công nghệ thông tin</td>
                  <td width="200">Th1</td>
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
            <div>
            <table>
            <tr>
            <td width="350"></td>
            <td width="120" align="right">
            <input type="button" name="luu_diemdanh" value="Lưu" />
            </td>
            <td width="120" align="right">
            <input type="button" name="in_diemdanh" value="In"/>
            </td>
            <td width="120" align="right">
            <input type="button" name="thoat_diemdanh" value="Thoát"/>
            </td>
            </tr>
            </table>
            </div>
</body>
</html>