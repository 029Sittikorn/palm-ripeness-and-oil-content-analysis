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

</head>

<body>
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
            <img src="img/โลโก้.png" alt="" style="width: 100px;" class="">
            <h1 class="card-title">Oil palm fruit ripness analysis</h3>
              <p class="card-text">Here's tool to minimize errors in the assessment of visual assessment specialists!
              </p>
                <center>
                  <div class="d-flex justify-content-center">
                  <a href="result.php" style="text-decoration: none;"><button style="margin: 20px 0px;width: 170px; display: block;border: none;padding: 10px 20px;border-radius: 10px;color: white; background:#0d6efd;"><i class="fa-solid fa-arrow-up-from-bracket"></i>เริ่มต้นใช้งาน</button></a>
                  </div>
                </center> 
          </div>
          <div class="col-lg-6 col-12 mt-5 mb-5 "><img src="img/Oil palm fruit ripness and Oil content analysis.png"
              class="img-fluid" alt="Responsive image">
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid bg-dark pt-2 ">
      <div class="container mt-4">
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