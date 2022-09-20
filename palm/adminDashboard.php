<?php
session_start();
include('config/server.php');



// ถ้าไม่มี $_SESSION['is_logged_in'] (เก็บสถานะ login โดยจะเก็บตอนที่สมัครสมาชิกหรือ login แล้วเท่านั้น) ให้กลับไปยังหน้า login.php เพื่อทำการ login ก่อน
if (!isset($_SESSION['is_logged_in'])) {
    header('location: login.php');
}

if (isset($_REQUEST['delete'])) {
    $id = $_REQUEST['delete'];

    $select_stmt = $db->prepare("SELECT * FROM purchase WHERE id = :id");
    $select_stmt->bindParam(':id', $id);
    $select_stmt->execute();
    $row = $select_stmt->fetch(PDO::FETCH_ASSOC);

    $select_stmt = $db->prepare("DELETE FROM purchase WHERE id = :id");
    $select_stmt->bindParam(':id', $id);
    $select_stmt->execute();

    header('url = adminDashboard.php');
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi+Fun&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <div class="container-fluid shadow">
            <div class="container ">
                <nav class="navbar navbar-expand-lg navbar-light bg-transparent ">
                <a class="navbar-brand mt-1" href="" style="font-size: 28px; font-family: 'Reem Kufi Fun', sans-serif; ">
                    <img src="img/โลโก้.png" alt="" style="max-height: 50px; " class="me-3">
                    <span class="d-none d-md-inline">OIL PALM RIPENESS ANALYZER</span>
                </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarNavDropdown">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item" style="margin-right: 30px;">
                                <a href="register.php" class="text-decoration-none pe-4" style="color: gray;">Add User</a>
                                <button type="button" class="btn btn-outline-primary"><a href="logout.php"
                                    class="text-decoration-none">Logout</a> </button>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="container p-4 shadow  mt-4">
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-result-tab" data-bs-toggle="pill" data-bs-target="#pills-result" type="button" role="tab" aria-controls="pills-result" aria-selected="true">Manage knowledge base
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-form-tab" data-bs-toggle="pill" data-bs-target="#pills-form" type="button" role="tab" aria-controls="pills-form" aria-selected="false">Manage Purchase form
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-result" role="tabpanel" aria-labelledby="pills-result-tab">
                    <!-- Show in Manage knowledge base tap -->
                    <div class="mt-3 container" style="display: grid;height: 100%;place-items: center;text-align: center;">
                        <div style="height: 400px; max-width: 600px;" class="imagePreview w-100">
                            <div style="position: relative; height: 350px;width: 100%;border: 2px dashed #0d6efd;border-radius: 10px;display: flex;align-items: center;justify-content: center;overflow: hidden;" class="wrapper mt-3 mb-3">
                                <div style=" position: absolute;height: 100%; width: 100%;display: flex;align-items: center;justify-content: center;">
                                    <img style="width: 100%;height: 100%;object-fit: cover;" id="imagePreview">
                                </div>
                                <div class="content">
                                    <div style="font-size: 100px;color: #0d6efd;"><i class="fas fa-cloud-upload-alt"></i></div>
                                    <div style="font-size: 30px;font-weight: 400;color: #0d6efd;">No file chosen, yet!</div>
                                </div>

                            </div>
                            
                        </div>

                        <div style="max-width: 600px;" class="imagePreview w-100">
                            <input id="imageUpload" type="file" hidden />
                            <button onclick="imageuploadActive()" id="custom-btn" style="margin: 20px 0px;width: 100%;display: block;border: none;padding: 10px 20px;border-radius: 10px;color: white; background:#0d6efd;">Choose a file</button>
                        </div>
                            
                        <script>
                            const imageupload = document.querySelector("#imageUpload");
                            const customBtn = document.querySelector("#custom-btn");

                            function imageuploadActive() {
                                imageupload.click();
                            }
                        </script>

                        <div style="" class="col-12 col-lg-5 p-lg-5 ">



                            <div id="label-container"></div>
                            <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@1.3.1/dist/tf.min.js"></script>
                            <script src="https://cdn.jsdelivr.net/npm/@teachablemachine/image@0.8/dist/teachablemachine-image.min.js"></script>

                            <script type="text/javascript">
                                // More API functions here:
                                // https://github.com/googlecreativelab/teachablemachine-community/tree/master/libraries/image

                                // the link to your model provided by Teachable Machine export panel
                                const URL = 'https://teachablemachine.withgoogle.com/models/DycO8K5Gg/';


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
                                        labelContainer.appendChild(document.createElement('div'));
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
                                        const classPrediction =
                                        prediction[i].className + ': ' + prediction[i].probability.toFixed(2);
                                        labelContainer.childNodes[i].innerHTML = classPrediction;
                                    }
                                }
                            </script>

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

                            <!-- <div class="bartext1 d-flex justify-content-between">
                                <p>Ripeness</p>
                                <p class="text-right">F</p>
                            </div>
                            <div class="progress" style="height: 25px;">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 20%; background-color:#000000;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                    F</div>
                                <div class="progress-bar " role="progressbar" style="width: 20%; background-color:#000000;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                    D</div>
                                <div class="progress-bar" role="progressbar" style="width: 20%; background-color:#3e0001;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">C</div>
                                <div class="progress-bar" role="progressbar" style="width: 20%; background-color:#7c0000;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">B</div>
                                <div class="progress-bar" role="progressbar" style="width: 20%; background-color:#ba0001;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">A</div>
                            </div>
                            <div class="bartext2 d-flex justify-content-between mt-4">
                                <p>Oil content</p>
                                <p class="text-right">15.05%</p>
                            </div>
                            <div class="progress" style="height: 25px;">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 15.05%;" aria-valuenow="15.05" aria-valuemin="0" aria-valuemax="100">
                                    15.05%</div>
                            </div> -->
                            <center>

                                <button type="button" class="btn btn-outline-primary mt-4 mb-2">
                                    <img src="img/thought.png" style="width: 20px; " class="me-2">Add to knowledgebase</button>


                                    

                            </center>

                        </div>
                        <div class="col-12 mt-5">
                            <!-- Editable table -->
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="pills-form" role="tabpanel" aria-labelledby="pills-form-tab">
                    <!-- Show in Manage Purchase form tap -->
                    <!-- Editable table -->
                    <div class="card col-12 mt-4">
                        <h3 class="card-header text-center font-weight-bold text-uppercase py-4">
                            Purchase form table
                        </h3>
                        <div class="container mt-3 text-center table-responsive">
                            <table class="table table-striped table-bordered ">
                                <thead>
                                    <tr>
                                        <th>ชื่อเจ้าของปาล์ม</th>
                                        <th>ความสุกโดยเฉลี่ย</th>
                                        <th>ประมาณปริมาณน้ำมัน</th>
                                        <th>คุณภาพปาล์ม</th>
                                        <th>ปาล์มสุกไม่เต็มที่</th>
                                        <th>ปาล์มเปียก</th>
                                        <th>ปาล์มเล็ก</th>
                                        <th>ปาล์มก้านยาว</th>
                                        <th>สิ่งเจือปน</th>
                                        <th>ปาล์มเน่า</th>
                                        <th>ปาล์มร่วงปน</th>
                                        <th>บันทึกการคืนปาล์ม</th>
                                        <th>วันที่</th>
                                        <th>แก้ไข</th>
                                        <th>ลบ</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    $select_stmt = $db->prepare("SELECT * FROM purchase");
                                    $select_stmt->execute();

                                    while ($row = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row["uname"] ?></td>
                                            <td><?php echo $row["avg_level"] ?></td>
                                            <td><?php echo $row["oil_content"] ?></td>
                                            <td><?php echo $row["palm_quality"] ?></td>
                                            <td><?php echo $row["not_fully_ripe"] ?></td>
                                            <td><?php echo $row["wet"] ?></td>
                                            <td><?php echo $row["small"] ?></td>
                                            <td><?php echo $row["long_stem"] ?></td>
                                            <td><?php echo $row["impurity"] ?></td>
                                            <td><?php echo $row["rotten"] ?></td>
                                            <td><?php echo $row["fall"] ?></td>
                                            <td><?php echo $row["return_record"] ?></td>
                                            <td><?php echo $row["date"] ?></td>
                                            <td><a href="edit.php?update_id=<?php echo $row["id"] ?>" class="btn btn-warning">Edit</a></td>

                                            <td><a data-id="<?php echo $row["id"] ?>" href="?delete=<?php echo $row["id"] ?>" class="btn btn-danger delete-btn">Delete</a></td>
                                        </tr>

                                    <?php } ?>
                                </tbody>
                            </table>
                            <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
                            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                            <script>
                                $('.delete-btn').click(function(e) {
                                    var userId = $(this).data('id');
                                    e.preventDefault();
                                    deleteConfirm(userId);
                                })

                                function deleteConfirm(userId) {
                                    Swal.fire({
                                        title: "คุณต้องการลบใช่หรือไม่?",
                                        text: "เมื่อทำการลบแล้ว ข้อมูลจะหายไปในทันที!",
                                        showCancelButton: true,
                                        confirmButtonColor: "#3085d6",
                                        cancelButtonColor: "#d33",
                                        cancelButtonText : "ยกเลิก",
                                        confirmButtonText: "ใช่, ต้องการลบข้อมูล!",
                                        showLoaderOnConfirm: true,
                                        preConfirm: function() {
                                            return new Promise(function(resolve) {
                                                $.ajax({
                                                        url: 'adminDashboard.php',
                                                        type: 'GET',
                                                        data: 'delete=' + userId,
                                                    })
                                                    .done(function() {
                                                        Swal.fire({
                                                            icon: 'suscess',
                                                            title: 'สำเร็จ',
                                                            text: 'ทำการลบข้อมูลสำเร็จ!'

                                                        }).then(() => {
                                                            document.location.href = 'adminDashboard.php';
                                                        })

                                                    }).fail(function() {
                                                        Swal.fire('เห้ย! แย่แล้ว', 'มีบางอย่างเกิดข้อผิดพลาด!', 'error');
                                                        window.location.reload();
                                                    })
                                            })
                                        }
                                    })
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="container-fluid bg-dark pt-2 mt-2">
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
                                We are expecting to obtain a system for assessing oil palm bunch ripeness and oil
                                content by image
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




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>