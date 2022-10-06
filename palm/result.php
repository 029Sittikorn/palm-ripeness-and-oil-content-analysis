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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi+Fun&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap" rel="stylesheet">
</head>

<body style="font-family: 'Noto Sans Thai', sans-serif;">
  <div class="container-fluid ">
    <div class="container-fluid shadow">
      <div class="container ">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent ">
          <a class="navbar-brand mt-1" href="index.php" style="font-size: 28px; font-family: 'Reem Kufi Fun', sans-serif; ">
            <img src="img/โลโก้.png" alt="" style="max-height: 50px; " class="me-3">
            <span class="d-none d-md-inline"> OIL PALM RIPENESS ANALYZER</span>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item" style="margin-right: 0;">
                <a href="adminLogin.php" type="button" class="btn btn-outline-primary" class="text-decoration-none"><i class="fa-solid fa-lock"></i> สำหรับแอดมิน</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <div class="container p-4 shadow mt-4" style="background-image: url('img/Palm sunday greetings instagram stories.png'); background-repeat: no-repeat; background-position: center top; background-size: cover;">
      <ul class="nav nav-pills" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-result-tab" data-bs-toggle="pill" data-bs-target="#pills-result" type="button" role="tab" aria-controls="pills-result" aria-selected="true">การวิเคราะห์ความสุก
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-form-tab" data-bs-toggle="pill" data-bs-target="#pills-form" type="button" role="tab" aria-controls="pills-form" aria-selected="false">ฟอร์มซื้อปาล์ม</button>
        </li>
      </ul>
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active mt-4 mb-4" id="pills-result" role="tabpanel" aria-labelledby="pills-result-tab" style="max-width: 1110px;  margin-left: auto; margin-right: auto;">
          <!-- Show in result tap -->
          <div class="mt-3 container" style="display: grid;height: 100%;place-items: center;text-align: center;">
            <div style="height: 400px; max-width: 600px;" class="imagePreview w-100">
              <div style="position: relative; height: 350px;width: 100%;border: 2px dashed #0d6efd;border-radius: 10px;display: flex;align-items: center;justify-content: center;overflow: hidden;" class="wrapper mt-3 mb-3">
                <div style=" position: absolute;height: 100%; width: 100%;display: flex;align-items: center;justify-content: center;">
                  <img style="width: 100%;height: 100%;object-fit: cover;" id="imagePreview">
                </div>
                <div class="content">
                  <div style="font-size: 100px;color: #0d6efd;"><i class="fas fa-cloud-upload-alt"></i></div>
                  <div style="font-size: 30px;font-weight: 400;color: #0d6efd;">ไม่ได้เลือกไฟล์ใด</div>
                </div>
              </div>
            </div>
            <div style="max-width: 600px;" class="imagePreview w-100">
              <input id="imageUpload" type="file" hidden />
              <button onclick="imageuploadActive()" id="custom-btn" style="width: 100%;display: block;border: none;padding: 10px 20px;border-radius: 10px;color: white; background:#0d6efd;">เลือกไฟล์</button>
            </div>
            <script>
              const imageupload = document.querySelector("#imageUpload");
              const customBtn = document.querySelector("#custom-btn");

              function imageuploadActive() {
                imageupload.click();
              }
            </script>
            <div class="col-12 col-lg-5 pt-lg-5">
              <div id="label-container"></div>
              <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@1.3.1/dist/tf.min.js"></script>
              <script src="https://cdn.jsdelivr.net/npm/@teachablemachine/image@0.8/dist/teachablemachine-image.min.js"></script>
              <script type="text/javascript">
                const URL = 'https://teachablemachine.withgoogle.com/models/54TEQXrrH/';
                let model, webcam, labelContainer, maxPredictions;
                // Load the image model 
                async function init() {
                  const modelURL = URL + 'model.json';
                  const metadataURL = URL + 'metadata.json';

                  // load the model and metadata
                  model = await tmImage.load(modelURL, metadataURL);
                  maxPredictions = model.getTotalClasses();

                  /* const flip = true; // whether to flip the webcam
                  webcam = new tmImage.Webcam(400, 400, flip); // width, height, flip
                  await webcam.setup(); // request access to the webcam
                  await webcam.play();
                  window.requestAnimationFrame(loop);

                  document.getElementById("webcam-container").appendChild(webcam.canvas); */
                  labelContainer = document.getElementById('label-container');
                  for (let i = 0; i < maxPredictions; i++) {
                    // and class labels
                    labelContainer.appendChild(document.createElement('inline'));
                  }
                }
                /* 
                                                async function loop() {
                                                    webcam.update(); // update the webcam frame
                                                    await predict();
                                                    window.requestAnimationFrame(loop);
                                                } */

                async function predict() {
                  // predict can take in an image, video or canvas html element
                  var image = document.getElementById('imagePreview');
                  const prediction = await model.predict(image, false);
                  for (let i = 0; i < maxPredictions; i++) {

                    const classLabel = prediction[i].className;
                    const classLabel2 = 'เกรด ' + prediction[i].className;
                    const classPrediction = prediction[i].probability.toFixed(2);

                    if (classPrediction > 0.7) {
                      document.getElementById("test").innerHTML = classLabel2;
                      document.getElementById("test1").value = classLabel;
                    }




                    /* if(classPrediction < 0.5){
                      
                    }else{
                      classPrediction = '| ' + prediction[i].className +' : '+prediction[i].probability.toFixed(2) ;
                      labelContainer.childNodes[i].innerHTML = classPrediction;
                    } */

                  }
                }
              </script>

              <div class="container shadow rounded">
                <div class="">
                  <h3>ผลการวิเคราะห์</h3>
                  <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">D</div>
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">C</div>
                    <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">B</div>
                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">A</div>
                  </div>
                  <div class="pt-2">
                    <div class="progress" style="height: 10px;">
                    <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  </div>
                  
                </div>
                <span id= "test"></span>
              </div>

              <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
              <script type="text/javascript">
                function readURL(input) {
                  if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                      $('#imagePreview').attr('src', e.target.result);
                      // $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                      $('#imagePreview').hide();
                      $('#imagePreview').fadeIn(650);
                    };
                    reader.readAsDataURL(input.files[0]);
                    init().then(() => {
                      predict();
                    });
                  }
                }
                $('#imageUpload').change(function() {
                  readURL(this);
                });
              </script>
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
                      <input id="test1" type="text" class="form-control" name="avg_level" readonly>
                    </div>
                    <div class="form-group mt-2 col-6">
                      <label for="oil_content">ปริมาณน้ำมัน</label>
                      <div class="input-group">
                        <input type="text" class="form-control" name="oil_content">
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
                        <input type="text" class="form-control" name="not_fully_ripe">
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
                        <input type="text" class="form-control" name="wet">
                        <div class="input-group-append">
                          <span class="input-group-text">%</span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group mt-2 col-6">
                      <label for="small">ปาล์มเล็ก</label>
                      <div class="input-group">
                        <input type="text" name="small" class="form-control">
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
                        <input type="text" class="form-control" name="impurity">
                        <div class="input-group-append">
                          <span class="input-group-text">%</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group mt-2 col-6">
                      <label for="rotten">ปาล์มเน่า</label>
                      <select name="rotten" id="rotten" class="form-select">
                        <option value="">เลือกระดับ</option>
                        <option value="ดี">ดี</option>
                        <option value="ปานกลาง">ปานกลาง</option>
                        <option value="ไม่ดี">ไม่ดี</option>
                      </select>
                    </div>
                    <div class="form-group mt-2 col-6">
                      <label for="fall">ปาล์มร่วงปน</label>
                      <select name="fall" id="fall" class="form-select">
                        <option value="">เลือกระดับ</option>
                        <option value="มาก">มาก</option>
                        <option value="น้อย">น้อย</option>
                        <option value="ไม่มี">ไม่มี</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group mt-2">
                    <label for="return_record">บันทึกการคืนปาล์ม</label>
                    <input type="text" class="form-control" name="return_record">
                  </div>
                  <div class="form-group mt-4">
                    <button type="submit" name="insert" class="btn btn-primary me-lg-3 mb-4 form-control" data-bs-toggle="modal"><img src="img/save.png" style="width: 20px;" class="me-2">บันทึกลงในฐานข้อมูล</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid bg-dark pt-2 mt-5">
      <div class="container">
        <footer class="text-center text-white">
          <div class="container p-4">
            <section class="mb-2">
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                <img src="img/facebook-app-symbol.png" alt="" style="width: 20px;" class="">
              </a>
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                <img src="img/twitter.png" alt="" style="width: 20px;" class="">
              </a>
            </section>
            <section class="mb-4">
              <button type="button" class="btn btn-outline-light " id="google_translate_element">
              </button>
              <script type="text/javascript">
                function googleTranslateElementInit() {
                  new google.translate.TranslateElement({
                    pageLanguage: 'th'
                  }, 'google_translate_element');
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

</body>

</html>