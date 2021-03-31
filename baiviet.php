<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="bootstrap-5.0.0-beta2-dist/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="templatemo-style.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.2-web/css/all.css">
    <script type="text/javascript" src="bootstrap-5.0.0-beta2-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="canvasjs-3.2.11/canvasjs.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="queries.css">
    <title>Document</title>
</head>
<body>
    <div class="header">
            <img class="Logo" src="img/prostate-angle-man_1.png" alt="logo">
            <img class="Logo2" src="img/NHS.jpg" alt="logo" style="width: 150px;">
    </div>
  <div id="menu">
       
  <?php
    require_once('include/menu.php');
     ?>
  </div>
  <div style="background-color: rgb(211, 231, 253); height: 30px; width: 100%;"></div>
  <div class="main-content" tabindex="-1" class="row">
      <div class="col-sm-10 col-sm offset-1 col-lg-8 col-lg offset-2 header-content">
          <h2 style="color:rgb(31, 107, 196);">
              <?php echo "Tổng quát" ?>
          </h2> 
          <ul>
              <li><a href="#baiviet1">
                  <span style="color:rgb(31, 107, 196);">Loãng xương là gì?</span>
              </a></li>
              <li><a href="#baiviet2">
                  <span style="color: rgb(31, 107, 196);">Phần mềm chẩn đoán loãng xương dành cho ai?</span>
              </a></li>
              <li><a href="#baiviet3">
                  <span style="color: rgb(31, 107, 196);">Cách phần mềm hoạt động</span>
              </a></li>
          </ul>
          <?php
           $cnn = new mysqli("localhost",'root','','pmnckh') ;
           $kq = $cnn->query("select tieude,noidung from baiviet ");
          
           while( $item = mysqli_fetch_object($kq))
           {
               
          ?>
          <div id="baiviet<?php echo $item->id ?>">
              <section>
                  <h2 style="color: rgb(31, 107, 196);"><?php echo $item->tieude ; ?></h2>
                  <!-- <p class="tomtat"></p> -->
                  <div>
                  <?php echo $item->noidung ; ?>
                  </div>
                </section>
          </div>
          <?php } ?>
      </div>
  </div>
  <div class="row screen-only">
      <div class="col-md-3 col-md offset-2 text-center">
          <img src="img/tool-icon.png" alt="tool-icon" aria-hidden="true">
          <h3>Chẩn đoán ngay?</h3>
          <p>
            Công cụ này giúp hiểu cách điều trị bệnh loãng xương và có thể cải thiện tỷ lệ sống sót sau khi chẩn đoán.
          </p>
          <div class="f-header">
              <a href="index.html" class="btn">Bắt đầu chẩn đoán</a>
          </div>
      </div>
      <div class="col-md-3 col-md offset-2 text-center">
          <img src="img/faq-icon.png" alt="faq-icon" aria-hidden="true">
          <h3>Cần hỗ trợ?</h3>
          <p>
            Nếu bạn đang chiến đấu với bệnh loãng xương, việc hỗ trợ thường dễ dàng hơn. Tại đây, bạn có thể tìm thêm thông tin và liên kết.
          </p>
          <div class="f-header">
              <a href="#" class="btn">Hỗ trợ</a>
          </div>
      </div>
  </div>
    <script>
             window.onscroll = function() {myFunction()};
              var header = document.getElementById("menu");
               var sticky = header.offsetTop;

               function myFunction() {
                    if (window.pageYOffset > sticky) {
                      header.classList.add("sticky");
                        } else {
                      header.classList.remove("sticky");
                     }
                  }
        </script>
</body>
</html>
