<script src="https://code.jquery.com/jquery-3.6.1.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "palmoil");

if (isset($_POST['insert'])) {
  $uname = $_POST['uname'];
  $avg_level = $_POST['avg_level'];
  $oil_content = $_POST['oil_content'];
  $palm_quality = $_POST['palm_quality'];
  $not_fully_ripe = $_POST['not_fully_ripe'];
  $wet = $_POST['wet'];
  $small = $_POST['small'];
  $long_stem = $_POST['long_stem'];
  $impurity = $_POST['impurity'];
  $rotten = $_POST['rotten'];
  $fall = $_POST['fall'];
  $return_record = $_POST['return_record'];

  if (empty($uname) || empty($avg_level) || empty($oil_content) || empty($palm_quality) || empty($not_fully_ripe) || empty($wet) || empty($small) || empty($long_stem) || empty($impurity) || empty($rotten) || empty($fall) || empty($return_record)) {
    echo "<script>
          $(document).ready(function(){
            Swal.fire({
              icon: 'warning',
              title: 'บันทึกล้มเหลว!',
              text: 'กรอกข้อมูลให้ครบถ้วน!',
              showConfirmButton: false,
              timer: 3000
            });
          });
      </script>";
      header('refresh: 2; url:result.php');
  } else {

    $query = "INSERT INTO purchase(uname, avg_level, oil_content, palm_quality, not_fully_ripe, wet, small, long_stem, impurity, rotten, fall, return_record) VALUES('$uname','$avg_level','$oil_content','$palm_quality','$not_fully_ripe','$wet','$small','$long_stem','$impurity','$rotten','$fall','$return_record')";

    $query_run = mysqli_query($conn, $query);


    if ($query_run) {
      $_SESSION['success'] = "Data has been inserted successfully";
      echo "<script>
          $(document).ready(function(){
            Swal.fire({
              icon: 'success',
              title: 'บันทึกสำเร็จ',
              showConfirmButton: false,
              timer: 3000
            });
          });
      </script>";
      header('refresh: 2; url:result.php');
      
    } else {
      $_SESSION['error'] = "Data has not been inserted successfully";
      echo "<script>
          $(document).ready(function(){
            Swal.fire({
              icon: 'danger',
              title: 'บันทึกไม่สำเร็จ!',
              showConfirmButton: false,
              timer: 3000
            });
          });
      </script>";
      header('refresh: 2; url:result.php');
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Palmy</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi+Fun&display=swap" rel="stylesheet">
</head>

<body>
  <div class="container-fluid ">
    <div class="container-fluid shadow">
      <div class="container ">

        <nav class="navbar navbar-expand-lg navbar-light bg-transparent ">
          <a class="navbar-brand mt-1" href="index.php" style="font-size: 28px; font-family: 'Reem Kufi Fun', sans-serif; ">
            <img src="img/โลโก้.png" alt="" style="max-height: 50px; " class="me-3">OIL PALM RIPENESS ANALYZER
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item" style="margin-right: 0;">
                <button type="button" class="btn btn-outline-primary"><a href="adminLogin.php" class="text-decoration-none">For admin</a> </button>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <center>
      <div class="d-flex justify-content-center mt-4">
        <input id="image-btn" type="file" hidden />
        <button onclick="imageBtnActive()" id="custom1-btn" style="margin: 20px 0px;width: 170px; display: block;border: none;padding: 10px 20px;border-radius: 10px;color: white; background:#0d6efd;"><i class="fa-solid fa-arrow-up-from-bracket"></i> อัพโหลดรูปภาพ</button>
      </div>

      <script>
        const imageBtn = document.querySelector("#image-btn");
        const customBtn1 = document.querySelector("#custom1-btn");

        function imageBtnActive() {
          imageBtn.click();
        }
      </script>

    </center>
    <div class="container p-4 shadow mt-4" style="background-image: url('img/Palm sunday greetings instagram stories.png'); background-repeat: no-repeat; background-position: center top; background-size: cover;">
      <ul class="nav nav-pills" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-result-tab" data-bs-toggle="pill" data-bs-target="#pills-result" type="button" role="tab" aria-controls="pills-result" aria-selected="true">Analysis results
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-form-tab" data-bs-toggle="pill" data-bs-target="#pills-form" type="button" role="tab" aria-controls="pills-form" aria-selected="false">Purchase form</button>
        </li>

      </ul>

      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active mt-4 mb-4" id="pills-result" role="tabpanel" aria-labelledby="pills-result-tab" style="max-width: 1110px;  margin-left: auto; margin-right: auto;">
          <!-- Show in result tap -->
          <div class="col-lg-6 col-12 rounded overflow-hidden">
            <img src="img/S__16187531.png" class="img-fluid" alt="Responsive image">
          </div>
          <div class="col-lg-6 col-12 centerver shadow rounded" style="max-width: 550px; background-color: white;">
            <div class="">
              <h4 class="texttopmarginresult mt-3">Analysis results details</h4>
              <div class="mt-4 centerver">
                <div class="row">
                  <div class="col releft">
                    <p>ทะลายสุก</p>
                  </div>
                  <div class="col">
                    <p><b>6</b></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col releft">
                    <p>ทะลายเกือบสุก</p>
                  </div>
                  <div class="col">
                    <p><b>4</b></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col releft">
                    <p>ทะลายเกือบดิบ</p>
                  </div>
                  <div class="col">
                    <p><b>1</b></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col releft">
                    <p>ทะลาบดิบ</p>
                  </div>
                  <div class="col">
                    <p><b>4</b></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-center ">
              <a href="#" class="btn btn-outline-primary mt-2 mb-4"><img src="img/contact-form.png" alt="" style="width: 20px;" class="me-2">Fill purchase form</a>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-form" role="tabpanel" aria-labelledby="pills-form-tab">
          <!-- Show in form tap -->
          <div class="container shadow p-3 rounded" style="max-width: 400px; background-color: white;">
            <div class="row mt-4">
              <!-- 11111111111111111111 -->
              <?php if (isset($_SESSION['err_fill'])) : ?>
                <div class="alert alert-danger alert-custom" role="alert">
                  <?php echo $_SESSION['err_fill']; ?>

                </div>
              <?php endif; ?>
              
              <div class="col-lg">
                <form action="result.php" method="post">
                  <div class="form-group">
                    <label for="uname">ชื่อเจ้าของปาล์ม</label>
                    <input type="text" class="form-control" name="uname">
                  </div>
                  <div class="row">
                    <div class="form-group mt-2 col-6">
                      <label for="avg_level">ความสุกโดยเฉลี่ย</label>
                      <input type="text" class="form-control" name="avg_level">
                    </div>
                    <div class="form-group mt-2 col-6">
                      <label for="oil_content">ปริมาณน้ำมัน</label>
                      <div class="input-group">
                        <input type="text" class="form-control" name="oil_content" >
                        <div class="input-group-append">
                          <span class="input-group-text">%</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group mt-2 col-6">
                      <label for="palm_quality">คุณภาพปาล์ม</label>
                      <div class="input-group">
                        <input type="text" class="form-control" name="palm_quality">
                        <div class="input-group-append">
                          <span class="input-group-text">%</span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group mt-2 col-6">
                      <label for="not_fully_ripe">ปาล์มสุกไม่เต็มที่</label>
                      <div class="input-group">
                        <input type="text" class="form-control" name="not_fully_ripe" >
                        <div class="input-group-append">
                          <span class="input-group-text">%</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group mt-2 col-6">
                      <label for="wet">ปาล์มเปียก</label>
                      <div class="input-group">
                        <input type="text" class="form-control" name="wet" >
                        <div class="input-group-append">
                          <span class="input-group-text">%</span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group mt-2 col-6">
                      <label for="small">ปาล์มเล็ก</label>
                      <div class="input-group">
                        <input type="text" name="small" class="form-control" >
                        <div class="input-group-append">
                          <span class="input-group-text">%</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group mt-2 col-6">
                      <label for="long_stem">ปาล์มก้านยาว</label>
                      <div class="input-group">
                        <input type="text" name="long_stem" class="form-control">
                        <div class="input-group-append">
                          <span class="input-group-text">%</span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group mt-2 col-6">
                      <label for="impurity">สิ่งเจือปน</label>
                      <div class="input-group">
                        <input type="text" class="form-control" name="impurity" >
                        <div class="input-group-append">
                          <span class="input-group-text">%</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group mt-2 col-6">
                      <label for="rotten">ปาล์มเน่า</label>
                      <select name="rotten" id="rotten" class="form-control">
                        <option value="">เลือกระดับ⠀⠀⠀⠀⠀⠀▼</option>
                        <option value="ดี">ดี</option>
                        <option value="ปานกลาง">ปานกลาง</option>
                        <option value="ไม่ดี">ไม่ดี</option>
                      </select>
                    </div>
                    <div class="form-group mt-2 col-6">
                      <label for="fall">ปาล์มร่วงปน</label>
                      <select name="fall" id="fall" class="form-control">
                        <option value="">เลือกระดับ⠀⠀⠀⠀⠀⠀▼</option>
                        <option value="มาก">มาก</option>
                        <option value="น้อย">น้อย</option>
                        <option value="ไม่มี">ไม่มี</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group mt-2">
                    <label for="return_record">บันทึกการคืนปาล์ม</label>
                    <input type="text" class="form-control" name="return_record" >
                  </div>
                  <div class="form-group mt-4">
                    <button type="submit" name="insert" class="btn btn-primary me-lg-3 mb-4 form-control" data-bs-toggle="modal"><img src="img/save.png" style="width: 20px;" class="me-2">Save to database</button>
                  </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid bg-dark pt-2 mt-5">
      <div class="container">
        <footer class="text-center text-white">
          <div class="container p-4">
            <section class="mb-4">
              <button type="button" class="btn btn-outline-light ">
                <img src="img/world (2).png" alt="" style="width: 20px;" class="me-2">English<img src="img/next.png" alt="" style="width: 20px;" class="">
              </button>
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                <img src="img/facebook-app-symbol.png" alt="" style="width: 20px;" class="">
              </a>
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                <img src="img/twitter.png" alt="" style="width: 20px;" class="">
              </a>
            </section>
            <section class="mb-2">
              <p>
                We are expecting to obtain a system for assessing oil palm bunch ripeness and oil content by image
                processing in a web application form.
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
              PALMY by PSU-Surat
            </h5>
            <p class="text-white">© 2020 Copyright: <a class="text-white" href="https://www.psu.ac.th/">psu.ac.th</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>

<?php
/* if (isset($_SESSION['err_fill']) || isset($_SESSION['err_pw']) || isset($_SESSION['exist_uname']) || isset($_SESSION['err_insert'])) {
  unset($_SESSION['err_fill']);
  unset($_SESSION['err_pw']);
  unset($_SESSION['exist_uname']);
  unset($_SESSION['err_insert']);
} */
?>
<!-- <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-input-tab" data-bs-toggle="pill" data-bs-target="#pills-input"
            type="button" role="tab" aria-controls="pills-input" aria-selected="false">Input</button>
        </li>
        <div class="tab-pane fade show " id="pills-pass" role="tabpanel" aria-labelledby="pills-pass-tab">
          <div class=" col-12 col-lg-6 p-lg-5 centerver">
            <div class="form-group mt-2">
              <label for="ur">Password</label>
              <input type="text" class="form-control" id="ur" placeholder="กรอกรหัสผ่าน admin">
            </div>
            <div class="d-flex justify-content-center" style="margin: 5%;">
              <a class="btn btn-primary">Confirm</a>
            </div>
          </div>
        </div>
        <div class="tab-pane fade show" id="pills-input" role="tabpanel" aria-labelledby="pills-input-tab">
          <div class="col-lg-6 col-12 mt-4"><img src="img/IMG_4553.JPG" class="img-fluid" alt="Responsive image">
          </div>

          <div class=" col-12 col-lg-6 p-lg-5 centerver">
            <div class="d-flex justify-content-center" style="margin: 8%;">
              <a href="#" class="btn btn-primary"><img src="img/upload (1).png" alt="" style="width: 20px;"
                  class="me-2">Upload Image</a>
            </div>

            <div class="bartext1 d-flex justify-content-between">

              <p>Ripeness</p>
              <p class="text-right">ดิบ</p>
            </div>
            <div class="progress" style="height: 25px;">
              <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                style="width: 25%; background-color:#000000;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                ดิบ</div>
              <div class="progress-bar" role="progressbar" style="width: 25%; background-color:#3e0001;"
                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">เกือบดิบ</div>
              <div class="progress-bar" role="progressbar" style="width: 25%; background-color:#7c0000;"
                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">เกือบสุก</div>
              <div class="progress-bar" role="progressbar" style="width: 25%; background-color:#ba0001;"
                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">สุก</div>
            </div>
            <div class="bartext2 d-flex justify-content-between mt-2">
              <p>Oil content</p>
              <p class="text-right">15.05%</p>
            </div>
            <div class="progress" style="height: 25px;">
              <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                style="width: 15.05%;" aria-valuenow="15.05" aria-valuemin="0" aria-valuemax="100">15.05%</div>
            </div>
            <center>
              <button type="button" class="btn btn-outline-primary mt-3">Add</button>
              <button type="button" class="btn btn-outline-primary mt-3">Update</button>
              <button type="button" class="btn btn-outline-primary mt-3">Delete</button>
            </center>

          </div>
        </div> -->