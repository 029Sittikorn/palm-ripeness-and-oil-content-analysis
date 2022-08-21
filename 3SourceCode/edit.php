<?php 
        session_start();
        require ('config/db.php');

//ตรวจสอบการ login

        if (!isset($_SESSION['is_logged_in'])) {
         header('location : login.php');
        }

        
    $conn = mysqli_connect("localhost","root","","palmoil");


    if(isset($_POST['btn_update'])){
        $id =mysqli_real_escape_string($conn, $_POST['id']);
        $uname =mysqli_real_escape_string($conn, $_POST['uname']);
        $avg_level =mysqli_real_escape_string($conn, $_POST['avg_level']);
        $oil_content =mysqli_real_escape_string($conn, $_POST['oil_content']);
        $palm_quality =mysqli_real_escape_string($conn, $_POST['palm_quality']);
        $not_fully_ripe =mysqli_real_escape_string($conn, $_POST['not_fully_ripe']);
        $wet =mysqli_real_escape_string($conn, $_POST['wet']);
        $small =mysqli_real_escape_string($conn, $_POST['small']);
        $long_stem =mysqli_real_escape_string($conn, $_POST['long_stem']);
        $impurity =mysqli_real_escape_string($conn, $_POST['impurity']);
        $rotten =mysqli_real_escape_string($conn, $_POST['rotten']);
        $fall =mysqli_real_escape_string($conn, $_POST['fall']);
        $return_record =mysqli_real_escape_string($conn, $_POST['return_record']);

        $query = "UPDATE purchase SET uname = '$uname',avg_level = '$avg_level' ,oil_content = '$oil_content', palm_quality = '$palm_quality',  not_fully_ripe = '$not_fully_ripe',wet = '$wet', small = '$small' , long_stem = '$long_stem', impurity = '$impurity', rotten = '$rotten', fall = '$fall', return_record = '$return_record' WHERE id = '$id'   ";
        $query_run = mysqli_query($conn, $query);

        if ($query_run) {
            $updateMsg = "อัพเดทสำเร็จ!!]";
            header("refresh:1;adminDashboard.php");
            exit();
        }else{
            $errorMsg = "อัพเดทไม่สำเร็จ!!]";
            header("refresh:1;adminDashboard.php");
            exit();
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container-fluid ">
    <div class="container-fluid shadow">
      <div class="container ">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent ">
          <a class="navbar-brand" href="#.php" style="font-size: 28px;"><img src="img/palmy logo.png" alt=""
            style="width: 140px;" class="me-3"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </nav>
      </div>
    </div>
    <div class="container p-4 shadow mt-4">
        <div style="justify-content: center ;display: flex;" > 
            <h1 >แก้ไขข้อมูล</h1>
            
        </div>
        <div style="justify-content: end ;display: flex;" >
            <a href="adminDashboard.php" style="text-decoration: none;color: blue;"><i class="fa-solid fa-file-lines"></i> ย้อนกลับ</a>
        </div>
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-result" role="tabpanel" aria-labelledby="pills-result-tab">
            
          <!-- Show in result tap -->
          <div class="container">
                        <?php 
                        if (isset($errorMsg)) {
                    ?>
                        <div class="alert alert-danger">
                            <strong>Wrong! <?php echo $errorMsg; ?></strong>
                        </div>
                    <?php } ?>
                    

                    <?php 
                        if (isset($updateMsg)) {
                    ?>
                        <div class="alert alert-success">
                            <strong>Success! <?php echo $updateMsg; ?></strong>
                        </div>
                    <?php } ?>

            <div class="row mt-4">
              <!-- 11111111111111111111 -->
              <div class="col-lg">
                <form action="" method="post">
                <?php 
                
                    if (isset($_GET['update_id'])){
                        $id = mysqli_real_escape_string($conn,$_GET['update_id']);
                        $query = "SELECT * FROM purchase WHERE id='$id'";
                        $query_run = mysqli_query($conn, $query);

                        if(mysqli_num_rows($query_run) > 0){
                            $data = mysqli_fetch_array($query_run);
                            ?>
                            <div class="form-group">
                                    <input type="hidden" class="form-control" name="id" value="<?=$data['id'];?>">
                                </div>
                            <div class="form-group">
                                    <label for="uname">ชื่อเจ้าของปาล์ม</label>
                                    <input type="text" class="form-control" name="uname" value="<?=$data['uname'];?>">
                                </div>
                                <div class="form-group mt-2">
                                    <label for="avg_level">ความสุกโดยเฉลี่ย</label>
                                    <input type="text" class="form-control" name="avg_level" value="<?=$data['avg_level'];?>">
                                </div>
                                <div class="form-group mt-2">
                                    <label for="oil_content">ประมาณปริมาณน้ำมัน</label>
                                    <div class="input-group">
                                    <input type="text" class="form-control" name="oil_content" value="<?=$data['oil_content'];?>">
                                    <div class="input-group-append">
                                        <span class="input-group-text">%</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="palm_quality">คุณภาพปาล์ม</label>
                                    <div class="input-group">
                                    <input type="text" class="form-control" name="palm_quality" value="<?=$data['palm_quality'];?>">
                                    <div class="input-group-append">
                                        <span class="input-group-text">%</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="not_fully_ripe">ปาล์มสุกไม่เต็มที่</label>
                                    <div class="input-group">
                                    <input type="text" class="form-control" name="not_fully_ripe" value="<?=$data['not_fully_ripe'];?>">
                                    <div class="input-group-append">
                                        <span class="input-group-text">%</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="wet">ปาล์มเปียก</label>
                                    <div class="input-group">
                                    <input type="text" class="form-control" name="wet" value="<?=$data['wet'];?>">
                                    <div class="input-group-append">
                                        <span class="input-group-text">%</span>
                                    </div>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- 222222222222222222 -->
                            <div class="col-lg">
                            <div class="form-group mt-2">
                                    <label for="small">ปาล์มเล็ก</label>
                                    <div class="input-group">
                                    <input type="text" name="small" class="form-control" value="<?=$data['small'];?>">
                                    <div class="input-group-append">
                                        <span class="input-group-text">%</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                <label for="long_stem">ปาล์มก้านยาว</label>
                                <div class="input-group">
                                    <input type="text" name="long_stem" class="form-control" value="<?=$data['long_stem'];?>">
                                    <div class="input-group-append">
                                    <span class="input-group-text">%</span>
                                    </div>
                                </div>
                                </div>
                                <div class="form-group mt-2">
                                <label for="impurity">สิ่งเจือปน</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="impurity" value="<?=$data['impurity'];?>">
                                    <div class="input-group-append">
                                    <span class="input-group-text">%</span>
                                    </div>
                                </div>
                                </div>
                                <div class="form-group mt-2">
                                <label >ปาล์มเน่า : <?=$data['rotten'];?> </label>
                                    <div class="radioinput mt-2" style="display: flex; justify-content: space-between;">
                                    <div class="form-check form-check-inline col">
                                        <input class="form-check-input" type="radio" name="rotten" value="ดี">
                                        <label class="form-check-label">ดี</label>
                                    </div>
                                    <div class="form-check form-check-inline col">
                                        <input class="form-check-input" type="radio" name="rotten" value="ปานกลาง">
                                        <label class="form-check-label">ปานกลาง</label>
                                    </div>
                                    <div class="form-check form-check-inline col">
                                        <input class="form-check-input" type="radio" name="rotten" value="ไม่ดี">
                                        <label class="form-check-label">ไม่ดี</label>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group mt-2">
                                <label>ปาล์มร่วงปน : <?=$data['fall'];?></label>
                                    <div class="radioinput mt-2" style="display: flex; justify-content: space-between;">
                                    <div class="form-check form-check-inline col">
                                        <input class="form-check-input" type="radio" name="fall" value="มาก">
                                        <label class="form-check-label" >มาก</label>
                                    </div>
                                    <div class="form-check form-check-inline col">
                                        <input class="form-check-input" type="radio" name="fall" value="น้อย">
                                        <label class="form-check-label" >น้อย</label>
                                    </div>
                                    <div class="form-check form-check-inline col">
                                        <input class="form-check-input" type="radio" name="fall" value="ไม่มี">
                                        <label class="form-check-label">ไม่มี</label>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group mt-2">
                                <label >บันทึกการคืนปาล์ม</label>
                                <input type="text" class="form-control mt-2" name="return_record" rows="4" value="<?=$data['return_record'];?>"></input>
                                </div>
                            </div>
                            <center>
                                <div class="managereport" style="padding-top: 10%; padding-bottom: 10%;">
                                <!--  insert -->
                                    <button type="submit" name="btn_update" class="btn btn-primary mt-4 me-lg-3" data-bs-toggle="modal" value="Update"><img src="img/save.png" style="width: 20px;"
                                        class="me-2">Update to database</button>
                                </div>
                                </center>
                            </form>
                            <?php
                        }else{
                            echo $errorMsg;
                        }
                    }
                
                ?>
                 
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-form" role="tabpanel" aria-labelledby="pills-form-tab">
          <!-- Show in form tap -->
          
        </div>
      </div>
    </div>
    <div class="container-fluid bg-dark pt-2 mt-2">
      <div class="container">
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
</body>

</html>