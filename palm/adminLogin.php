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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    <div class="container-fluid">
        <div class="container-fluid shadow">
            <div class="container ">
                <nav class="navbar navbar-expand-lg navbar-light bg-transparent ">
                <a class="navbar-brand mt-1" href="index.php" style="font-size: 28px; font-family: 'Reem Kufi Fun', sans-serif; ">
                    <img src="img/โลโก้.png" alt="" style="max-height: 50px; " class="me-3">
                    <span class="d-none d-md-inline"> OIL PALM RIPENESS ANALYZER</span>
                </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarNavDropdown">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item" style="margin-right: 0;"><a type="button" class="btn btn-outline-primary" href="index.php" class="text-decoration-none"><i class="fa-solid fa-house"></i> หน้าหลัก</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <center>
            <div class="col-12 col-lg-8" >
                <div class="container centerver mt-5" style="text-align: center; height: 510px; display: flex; justify-content: center; align-items: center;">
                    <div class="text-center">
                        <img src="img/โลโก้.png" style="width: 100px;" alt="logo">
                        <h4 class="mt-1 pb-1"><span style="font-size: 40px;">ยินดีต้อนรับสู่</span> <br>ระบบวิเคราะห์ความสุกของผลปาล์มน้ำมัน<br> สำหรับแอดมิน</h4>
                        <div class="text-center pt-1 mb-5 pb-1">
                            <a href="login.php" style="color: white; text-decoration: none; width: 100px; " class="btn btn-primary  mb-3"
                                type="submit">เข้าสู่ระบบ</a>
                        </div>
                    </div>

            
                        
                    </form> 
                </div>
            </div>
        </center>

        <div class="container-fluid bg-dark pt-2 mt-2">
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
                        <p class="text-white">© 2020 Copyright: <a class="text-white"
                                href="https://www.psu.ac.th/">psu.ac.th</a>
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
