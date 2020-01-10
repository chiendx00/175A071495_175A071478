

$(document).ready(function () {
    var monHoc = $('#monHoc');
    var idnganhhoc;
    var idMonHoc;
    var idHocPhan;

    $("#nganhhoc").change(function () { /* WHEN YOU CHANGE AND SELECT FROM THE SELECT FIELD */
        idnganhhoc = $(this).val();
        $.ajax({
            type: "POST",
            url: "load_MonHoc.php",
            data: { id: idnganhhoc },
            success: function (result) { /* GET THE TO BE RETURNED DATA */
                monHoc.html('');
                for (row of JSON.parse(result)) {
                    monHoc.append("<option value=" + row[0] + ">" + row[1] + "</option>");
                }

            }
        });

    });


    var hocPhan = $('#hocPhan');
    $("#monHoc").change(function () { /* WHEN YOU CHANGE AND SELECT FROM THE SELECT FIELD */
        idMonHoc = $(this).children('option:selected').val();

        $.ajax({
            type: "POST",
            url: "load_hocphan.php",
            data: { id: idMonHoc },
            success: function (result) { /* GET THE TO BE RETURNED DATA */
                hocPhan.html('');
                for (row of JSON.parse(result)) {
                    hocPhan.append("<option value=" + row[0] + ">" + row[1] + "</option>");
                }

            }
        });

    });

    $("#hocPhan").change(function () {
        idHocPhan = $(this).children('option:selected').val();
    });

    $("#tk").on("click", function () {
        $.ajax({
            type: "POST",
            url: "load_sv.php",
            data: { 
                id: $('#hocPhan').children('option:selected').val(),
                ngay : $('#ngaydiemdanh').val()
            },
            success: function (result) { /* GET THE TO BE RETURNED DATA */
               // Xóa các hàng cũ đi trừ hàng đầu tiên ok
               $('.list-course tr:not(.row-first)').remove();
               // Chèn cái mới vào
               for (row of JSON.parse(result)) {
                $('.list-course').append(`
                <tr>
                    <td width='100' align='center'>${row[2]}</td>
                    <td width='200' align='center'>${row[5]}</td>
                    <td width='200' align='center'>${row[6]}</td>
                    <td width='100' align='center'>
                    <input type='text' name='hoc ki' checked='true' value="${row[3]}" />
                    </td>
                    <td width="132" align='center'>
                    <input type='text' name='giaidoan' checked='true' value="${row[4]}" />
                    </td>
                </tr>`);
                }
            }
        });
    });




});


