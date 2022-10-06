<?php 
  include('config/server.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Palmy</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi+Fun&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body style="font-family: 'Noto Sans Thai', sans-serif;">
  <div class="container-fluid ">
    <div class="container-fluid shadow">
      <div class="container ">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent ">
          <a class="navbar-brand mt-1 " href="index.php" style="font-size: 28px; font-family: 'Reem Kufi Fun', sans-serif; ">
            <img src="img/โลโก้.png" alt="" style="max-height: 50px; " class="me-3 ">
            <span class="d-none d-md-inline"> OIL PALM RIPENESS ANALYZER</span>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item" style="margin-right: 0;">
                <a href="adminLogin.php" type="button" class="btn btn-outline-primary" class="text-decoration-none">
                  <i class="fa-solid fa-lock"></i> สำหรับแอดมิน
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <div class="container-fluid pt-2">
      <div class="container">
        <div class="row mt-3 align-items-center" id="slide" style="text-align: center; height: 642px;">
          <div class="col-lg-6 col-12 pt-3">
            <img src="img/โลโก้.png" alt="" style="width: 100px;" class="">
            <h1 class="card-title"><b>ระบบวิเคราะห์ความสุก <br> ของผลปาล์มน้ำมัน</b></h1>
              <p class="card-text">นี่คือเครื่องมือที่ช่วยผู้เชี่ยวชาญในการประเมินความสุก และบันทึกรายการซื้อปาล์ม!
              </p>
                <center>
                  <div class="d-flex justify-content-center">
                  <a href="result.php" style="text-decoration: none;"><button style="margin: 20px 0px;width: 170px; display: block;border: none;padding: 10px 20px;border-radius: 10px;color: white; background:#0d6efd;">เริ่มต้นใช้งาน</button></a>
                  </div>
                </center> 
          </div>
          <div class="col-lg-6 col-12 mt-5 mb-5">
            <img data-tilt data-tilt-scale="1.1" src="img/Picture1.png" class="img-fluid" alt="Responsive image">
            <script src="vanilla-tilt.min.js"></script>
          </div>
        </div>
        <div class="row mt-3 align-items-center" id="slide" style="text-align: center; height: 642px;">
          <div class="col-lg-6 col-12 pt-3">
            <video class="w-100 shadow rounded" autoplay loop muted>
              <source src="img/คลิปปาล์ม1.mp4" type="video/mp4" />
            </video>
          </div>
          <div class="col-lg-6 col-12 mt-5 mb-5">
            <h2 class="card-title"><b>รู้ผลการวิเคราะห์ความสุกในไม่กี่คลิก !</b></h2>
            <p class="card-text">เลือกรูปภาพที่คุณต้องการ จากนั้นระบบจะประมวลผลภาพโดยอัตโนมัติ <br> <br> เท่านี้คุณก็สามารถทราบผลการวิเคราะห์เพื่อใช้ในการกรอกฟอร์มซื้อปาล์มได้แล้ว</p>
          </div>
        </div>
        <div class="row mt-3 align-items-center" id="slide" style="text-align: center; height: 642px;">
          <div class="col-lg-6 col-12 pt-3">
            <video class="w-100 shadow rounded" autoplay loop muted>
              <source src="img/คลิปปาล์ม2.mp4" type="video/mp4" />
            </video>
          </div>
          <div class="col-lg-6 col-12 mt-5 mb-5">
            <h2 class="card-title"><b>บันทึกฟอร์มซื้อปาล์มอย่างง่ายดาย</b></h2>
            <p class="card-text">เมื่อทราบผลการวิเคราะห์แล้ว หากต้องการบันทึกฟอร์มซื้อปาล์มก็สามารถทำได้เลย<br><br> เพียงกรอกข้อมูลลงไปในฟอร์มแล้วกดบันทึก ข้อมูลเหล่านั้นก็จะจัดเก็บลงในฐานข้อมูลให้อัตโนมัติ</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid bg-dark pt-2 ">
      <div class="container">
        <footer class="text-center text-white">
          <div class="container p-4">
            <section class="mb-4">
              <button type="button" class="btn btn-outline-light " id="google_translate_element">
              </button>
              <script type="text/javascript">
              function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'th'}, 'google_translate_element');
              }
              </script>
              <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
            </section>
            <section class="mb-2">
              <p>
                เราคาดว่าจะได้รับระบบสำหรับประเมินความสุกของปาล์มน้ำมันโดยการประมวลผลภาพในรูปแบบเว็บไซต์
              </p>
            </section>
          </div>
        </footer>
      </div>
      <div class="container_fluid" style="background-color: rgba(0, 0, 0, 0.2);">
        <div class="container">
          <div class="text-center p-3">
            <h5 style="color: white;">
              <img src="img/โลโก้bw.png" alt="" style="width: 20px;" class="">
              OIL PALM RIPENESS ANALYZER by PSU-Surat
            </h5>
            <p class="text-white">© 2020 Copyright: <a class="text-white" href="https://www.psu.ac.th/">psu.ac.th</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

    




</body>

</html>