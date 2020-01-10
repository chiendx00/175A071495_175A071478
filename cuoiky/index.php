<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CuoiKy</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
</head>
<body> 
  <div id="wrapper" style="background-color:white;">
    <br>
    <?php
      include "header.php";      
    ?>
    <br>
    <main>
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./img/nhanco.png" class="d-block w-100" alt="...">  
                  </div>
                  <div class="carousel-item">
                    <img src="./img/daihoi.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./img/dangbo1.png" class="d-block w-100" alt="...">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
              <br>
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                      <div class="card">
                       <img class="card-img-top" src="./img/0K4A9179.jpg" alt="">
                       <div class="card- body">
                        <h4 class="card-title">Sinh viên Trường Đại học Thủy lợi đồng hành cùng chuỗi hoạt động tại ngày hội "Sinh viên 5 tốt"</h4>
                        <p class="card-text">(TLU) - Hôm nay (21/12), tại Trường Đại học Thủy lợi, Thành đoàn - Hội Sinh viên thành phố Hà Nội đã tổ chức khai mạc chuỗi ngày hội "Sinh viên 5 tốt" -
                         </p>
                        
                  </div>              
                     </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card">
                     <img class="card-img-top" src="./img/0K4A9094.jpg" alt="">
                     <div class="card- body">
                      <h4 class="card-title">Trường Đại học Thủy lợi đón nhận tình cảm của cựu sinh viên tỉnh Thái Nguyên</h4>
                      <p class="card-text">   (TLU) - Sáng nay (20/12), tại P225/A2 Trường Đại học Thủy lợi có buổi tiếp đại diện Ban liên lạc cựu sinh viên tỉnh Thái Nguyên và đón nhận tình cảm                 
                        </p>
                                 
                </div>              
                   </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card">
                     <img class="card-img-top" src="./img/image005.png" alt="">
                     <div class="card- body">
                      <h4 class="card-title">Hà Nội, Nam Định dẫn đầu về số thí sinh nhập học vào Trường ĐHTL năm 2019</h4>
                      <p class="card-text">(TLU) – Theo số liệu báo cáo công tác quảng bá tuyển sinh năm 2019, với hơn 1.300 sinh viên đến từ Hà Nội, Nam Định, đây tiếp tục trở thành 2 tỉnh</p>
                                    
                </div>              
                   </div>
                  </div>
                </div>
              </div>    

        </div>
    </main>
    <br>
    <?php
       include "footer.php";

     ?>
    <br>

  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="./js/bootstrap.min.js"></script>  
</body>
</html>