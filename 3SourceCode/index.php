

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

</head>

<body>
  <div class="container-fluid ">
    <div class="container-fluid shadow">
      <div class="container ">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent ">
          <a class="navbar-brand" href="index.php" style="font-size: 28px;"><img src="img/palmy logo.png" alt=""
              style="width: 140px;" class="me-3"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item active me-2">
                <a class="nav-link active" href="index.php">Home </a>
              </li>
              <li class="nav-item me-2">
                <a class="nav-link" href="#howto">How to use</a>
              </li>
              <li class="nav-item" style="margin-right: 0;">
                <button type="button" class="btn btn-outline-primary"><a href="adminLogin.php"
                    class="text-decoration-none">For admin</a> </button>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <div class="container-fluid pt-2">
      <div class="container">
        <div class="row mt-3 align-items-center" id="slide" style="text-align: center;">
          <div class="col-lg-6 col-12 pt-3">
            <img src="img/palmy logo with label.png" alt="" style="width: 100px;" class="">
            <h1 class="card-title">Oil palm fruit ripness and Oil content analysis</h3>
              <p class="card-text">Here's tool to minimize errors in the assessment of visual assessment specialists!
              </p>
                <center>
                  <div class="d-flex justify-content-center">
                  <input id="image-btn" type="file" hidden />
                  <button onclick="imageBtnActive()" id="custom1-btn" style="margin: 20px 0px;width: 170px; display: block;border: none;padding: 10px 20px;border-radius: 10px;color: white; background:#0d6efd;"><i class="fa-solid fa-arrow-up-from-bracket"></i> อัพโหลดรูปภาพ</button>
                  </div>

                  <script>
                    const imageBtn = document.querySelector("#image-btn");
                    const customBtn1 = document.querySelector("#custom1-btn");
                    function imageBtnActive(){
                      imageBtn.click();
                    }
                  </script>
                </center> 
          </div>
          <div class="col-lg-6 col-12 mt-5 mb-5 "><img src="img/Oil palm fruit ripness and Oil content analysis.png"
              class="img-fluid" alt="Responsive image">
          </div>
        </div>
      </div>
    </div>
      <div class="container p-4 shadow mt-4 mb-4" style="background-image: url('img/Palm sunday greetings instagram stories.png'); background-repeat: no-repeat; background-position: center top; background-size: cover;">
      <ul class="nav nav-pills" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-result-tab" data-bs-toggle="pill" data-bs-target="#pills-result"
            type="button" role="tab" aria-controls="pills-result" aria-selected="true">Analysis results
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-form-tab" data-bs-toggle="pill" data-bs-target="#pills-form" type="button"
            role="tab" aria-controls="pills-form" aria-selected="false">Purchase form</button>
        </li>

      </ul>

      <div class="tab-content" id="pills-tabContent" >
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
              <a href="#" class="btn btn-outline-primary mt-2 mb-4"><img src="img/contact-form.png" alt="" style="width: 20px;"
                  class="me-2">Fill purchase form</a>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-form" role="tabpanel" aria-labelledby="pills-form-tab">
          <!-- Show in form tap -->
          <div class="container shadow p-3 rounded" style="max-width: 400px; background-color: white;">
            <div class="row mt-4">
              <!-- 11111111111111111111 -->
              <div class="col-lg">
                <form action="" method="post">
                  <div class="form-group">
                    <label for="uname">ชื่อเจ้าของปาล์ม</label>
                    <input type="text" class="form-control" name="uname" placeholder="">
                  </div>
                  <div class="row">
                    <div class="form-group mt-2 col-6">
                    <label for="avg_level">ความสุกโดยเฉลี่ย</label>
                    <input type="text" class="form-control" name="avg_level" placeholder="">
                  </div>
                  <div class="form-group mt-2 col-6">
                    <label for="oil_content">ปริมาณน้ำมัน</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="oil_content" placeholder="">
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
                      <input type="text" class="form-control" name="palm_quality" placeholder="">
                      <div class="input-group-append">
                        <span class="input-group-text">%</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group mt-2 col-6">
                    <label for="not_fully_ripe">ปาล์มสุกไม่เต็มที่</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="not_fully_ripe" placeholder="">
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
                      <input type="text" class="form-control" name="wet" placeholder="">
                      <div class="input-group-append">
                        <span class="input-group-text">%</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group mt-2 col-6">
                    <label for="small">ปาล์มเล็ก</label>
                    <div class="input-group">
                      <input type="text" name="small" class="form-control" placeholder="">
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
                    <input type="text" name="long_stem" class="form-control"  placeholder="">
                    <div class="input-group-append">
                      <span class="input-group-text">%</span>
                    </div>
                  </div>
                </div>
                <div class="form-group mt-2 col-6">
                  <label for="impurity">สิ่งเจือปน</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="impurity" placeholder="">
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
                        <option value="" disabled selected>เลือกระดับ⠀⠀⠀⠀⠀⠀▼</option>
                        <option value="ดี">ดี</option>
                        <option value="ปานกลาง">ปานกลาง</option>
                        <option value="ไม่ดี">ไม่ดี</option>
                      </select>
                  </div>
                  <div class="form-group mt-2 col-6">
                    <label for="fall">ปาล์มร่วงปน</label>
                        <select name="fall" id="fall" class="form-control">
                          <option value="" disabled selected>เลือกระดับ⠀⠀⠀⠀⠀⠀▼</option>
                          <option value="มาก">มาก</option>
                          <option value="น้อย">น้อย</option>
                          <option value="ไม่มี">ไม่มี</option>
                        </select>
                  </div>
                </div>
                <div class="form-group mt-2">
                  <label for="return_record">บันทึกการคืนปาล์ม</label>
                  <input type="text" class="form-control" name="return_record" placeholder="">
                </div>
                <div class="form-group mt-4">
                <button type="submit" name="insert" class="btn btn-primary me-lg-3 mb-4 form-control" data-bs-toggle="modal" style=""><img src="img/save.png" style="width: 20px;" class="me-2">Save to database</button>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      </div>
    <div class="container-fluid bg-dark pt-2 ">
      <div class="container mt-5">
        <footer class="text-center text-white">
          <div class="container p-4">
            <section class="mb-4">
              <button type="button" class="btn btn-outline-light ">
                <img src="img/world (2).png" alt="" style="width: 20px;" class="me-2">English<img src="img/next.png"
                  alt="" style="width: 20px;" class="">
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
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>




</body>

</html>