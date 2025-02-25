<?php

include("assets/partials/connection");
?>
<!DOCTYPE html lang="en">



<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Bootstrap Icons-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <!-- Style.css -->
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Landing Page</title>
  <style>
  </style>
</head>

<body>

  <!-- Back to top button -->
  <button type="button" class="btn btn-success btn-floating btn-lg" id="btn-back-to-top">
    <i class="bi bi-arrow-up"></i>
  </button>

  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgba(251, 152, 49, 0.95)">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <div class="row">
          <div class="col">
            <img src="assets/img/Logo.png" class="img-fluid" height="40" alt="Logo" />
          </div>
          <div class="col-auto">
            <div class="row">
              <h1>Vaidik</h1>
            </div>
            <div class="row">
              <h3 class="ms-5">Agri Production</h3>
            </div>
          </div>
        </div>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav flex-grow-1">
          <li class="nav-item">
            <a class="nav-link active" href="/">
              <h2>Home</h2>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="/solutions/solutions_farmer.html" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <h2>Solutions</h2>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <a class="dropdown-item" href="/solutions/solutions_farmer.html">For Farmers</a>
              </li>
              <li>
                <a class="dropdown-item" href="/solutions/solutions_entr.html">For Micro-Entrepreneur</a>
              </li>
              <li>
                <a class="dropdown-item" href="/solutions/solutions_buyer.html">For Institutional Buyers</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/farmbook/farmbook">
              <h2>Farmbook</h2>
            </a>
          </li>
          <li class="nav-item flex-grow-1"></li>
          <li class="nav-item">
            <a class="nav-link" href="/aboutus">
              <h2>AboutUs</h2>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/engineering">
              <h2>Blog</h2>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contactus">
              <h2>ContactUs</h2>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <?php


  if (isset($_POST['submit'])) {


    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email_id = $_POST["email"];
    $msg = $_POST["message"];



    $sql = "INSERT INTO contact_us ( `full_name`,`email`, `phone_number`, `message`) VALUES ( '$name','$email_id', '$phone','$msg')";
    #  $result = mysqli_query($conn, $sql);

    if ($result) {

      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
             <strong>Success!</strong> Your message has been successfully submitted. We will contact you soon.
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>';
    } else {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> We are facing some technical issue. Try again later
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    }
  }




  ?>


  <section id="navbar-slider">

    <div id="carouselIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1" class="" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="2" class="" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">

        <div class="carousel-item active" id="slider-1">
          <div class="my-lg-3 py-lg-5">
            <div class="row g-5 p-3 m-3 justify-content-center text-light">
              <div class="col-lg-7 text-lg-start col-sm-12 text-sm-center">
                <p class="h3 text-warning">
                  A PROFESSION OF HOPE
                </p>
                <h1 class="display-2 fw-bolder">
                  THE PURE NATURALLY HEALING
                </h1>
                <p class="display-6 py-3">
                  Growing community by inspiring healthy is our commitment with farmers, the abundant living on the
                  field.
                </p>
                <div class="d-grid col-lg-5 col-sm-12">
                  <a href="#" role="button" class="py-3 btn btn-lg rounded-pill btn-outline-warning text-warning bg-transparent">
                    <h3>Learn More</h3>
                  </a>
                </div>
              </div>
              <div class="offset-lg-4 col-lg-1 py-5 my-5 fs-1 d-none d-lg-block">
                <div class="col-12 py-3 my-3">
                  <a href="#" class="nav-item text-white"><i class="bi bi-facebook"></i></a>
                </div>
                <div class="col-12 py-3 my-3">
                  <a href="#" class="nav-item text-white"><i class="bi bi-twitter"></i></a>
                </div>
                <div class="col-12 py-3 my-3">
                  <a href="#" class="nav-item text-white"><i class="bi bi-instagram"></i></a>
                </div>
                <div class="col-12 py-3 my-3">
                  <a href="#" class="nav-item text-white"><i class="bi bi-vector-pen"></i></a>
                </div>
              </div>

              <div class="col-sm-12 fs-1 d-lg-none d-sm-block">
                <div class="row px-5 mx-5 justify-content-center">
                  <div class="col-3">
                    <a href="#" class="nav-item text-white"><i class="bi bi-facebook"></i></a>
                  </div>
                  <div class="col-3">
                    <a href="#" class="nav-item text-white"><i class="bi bi-twitter"></i></a>
                  </div>
                  <div class="col-3">
                    <a href="#" class="nav-item text-white"><i class="bi bi-instagram"></i></a>
                  </div>
                  <div class="col-3">
                    <a href="#" class="nav-item text-white"><i class="bi bi-vector-pen"></i></a>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>

        <div class="carousel-item" id="slider-2">

          <div class="my-lg-3 py-lg-5">
            <div class="row g-5 p-3 m-3 justify-content-center text-light">
              <div class="col-lg-7 text-lg-start col-sm-12 text-sm-center">
                <p class="h3 text-warning">
                  GROWING WITH NATURE
                </p>
                <h1 class="display-2 fw-bolder">
                  AGRICULTURE WITH NEW PERSPECTIVE
                </h1>
                <p class="display-6 py-3">
                  Creating quality urban lifestyles, building stronger communities for customized advice to smallholder
                  farmer withradical efficiency.
                </p>
                <div class="d-grid col-lg-5 col-sm-12">
                  <a href="#" role="button" class="py-3 btn btn-lg rounded-pill btn-outline-warning text-warning bg-transparent">
                    <h3>Learn More</h3>
                  </a>
                </div>
              </div>
              <div class="offset-lg-4 col-lg-1 py-5 my-5 fs-1 d-none d-lg-block">
                <div class="col-12 py-3 my-3">
                  <a href="#" class="nav-item text-white"><i class="bi bi-facebook"></i></a>
                </div>
                <div class="col-12 py-3 my-3">
                  <a href="#" class="nav-item text-white"><i class="bi bi-twitter"></i></a>
                </div>
                <div class="col-12 py-3 my-3">
                  <a href="#" class="nav-item text-white"><i class="bi bi-instagram"></i></a>
                </div>
                <div class="col-12 py-3 my-3">
                  <a href="#" class="nav-item text-white"><i class="bi bi-vector-pen"></i></a>
                </div>
              </div>

              <div class="col-sm-12 fs-1 d-lg-none d-sm-block">
                <div class="row px-5 mx-5 justify-content-center">
                  <div class="col-3">
                    <a href="#" class="nav-item text-white"><i class="bi bi-facebook"></i></a>
                  </div>
                  <div class="col-3">
                    <a href="#" class="nav-item text-white"><i class="bi bi-twitter"></i></a>
                  </div>
                  <div class="col-3">
                    <a href="#" class="nav-item text-white"><i class="bi bi-instagram"></i></a>
                  </div>
                  <div class="col-3">
                    <a href="#" class="nav-item text-white"><i class="bi bi-vector-pen"></i></a>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>

        <div class="carousel-item" id="slider-3">

          <div class="my-lg-3 py-lg-5">
            <div class="row g-5 p-3 m-3 justify-content-center text-light">
              <div class="col-lg-7 text-lg-start col-sm-12 text-sm-center">
                <p class="h3 text-warning">
                  FARMING WITH NATURE
                </p>
                <h1 class="display-2 fw-bolder">BRINGING GROWTH TO AGRICULTURE
                </h1>
                <p class="display-6 py-3">
                  Promoting the continuous improvement of human and technologies resources generating competitive
                  profitability.
                </p>
                <div class="d-grid col-lg-5 col-sm-12">
                  <a href="#" role="button" class="py-3 btn btn-lg rounded-pill btn-outline-warning text-warning bg-transparent">
                    <h3>Learn More</h3>
                  </a>
                </div>
              </div>
              <div class="offset-lg-4 col-lg-1 py-5 my-5 fs-1 d-none d-lg-block">
                <div class="col-12 py-3 my-3">
                  <a href="#" class="nav-item text-white"><i class="bi bi-facebook"></i></a>
                </div>
                <div class="col-12 py-3 my-3">
                  <a href="#" class="nav-item text-white"><i class="bi bi-twitter"></i></a>
                </div>
                <div class="col-12 py-3 my-3">
                  <a href="#" class="nav-item text-white"><i class="bi bi-instagram"></i></a>
                </div>
                <div class="col-12 py-3 my-3">
                  <a href="#" class="nav-item text-white"><i class="bi bi-vector-pen"></i></a>
                </div>
              </div>

              <div class="col-sm-12 fs-1 d-lg-none d-sm-block">
                <div class="row px-5 mx-5 justify-content-center">
                  <div class="col-3">
                    <a href="#" class="nav-item text-white"><i class="bi bi-facebook"></i></a>
                  </div>
                  <div class="col-3">
                    <a href="#" class="nav-item text-white"><i class="bi bi-twitter"></i></a>
                  </div>
                  <div class="col-3">
                    <a href="#" class="nav-item text-white"><i class="bi bi-instagram"></i></a>
                  </div>
                  <div class="col-3">
                    <a href="#" class="nav-item text-white"><i class="bi bi-vector-pen"></i></a>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>

    </div>
  </section>









  <section id="features">
    <div id="features-bg">
      <div id="features-veggies">
      </div>
      <div class="row g-5 px-3 mx-3 justify-content-center">

        <div class="col-lg-4 col-sm-12 my-5">
          <div class="card border-0 bg-transparent">
            <img src="assets/img/Agriculture-Leader.png" class="feature-img card-img border-0 rounded-3 h-auto feature-img" alt="Agriculture Leader">
            <div class="feature-fab card-footer text-center rounded-3 bg-peach mx-lg-5">
              <h3 class="text-teal">Agriculture Leader</h3>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-12 my-5">
          <div class="card border-0 bg-transparent">
            <img src="assets/img/Quality-Standard.png" class="feature-img card-img border-0 rounded-3 h-auto feature-img" alt="Quality Standard">
            <div class="feature-fab card-footer text-center rounded-3 bg-peach mx-lg-5">
              <h3 class="text-teal">Quality Standard</h3>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-12 my-5">
          <div class="card border-0 bg-transparent">
            <img src="assets/img/Organic-Services.png" class="feature-img card-img border-0 rounded-3 h-auto feature-img" alt="Organic Services">
            <div class="feature-fab card-footer text-center rounded-3 bg-peach mx-lg-5">
              <h3 class="text-teal">Organic Services</h3>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="white-fillerbg"></div>
  </section>






  <section id="welcome" class="px-3 mx-3">
    <div class="row justify-content-center gy-5" id="cob-bg">
      <div class="col-xl-7 col-sm-12 text-xl-start text-sm-center">
        <img src="assets/img/welcome.png" class="img-fluid rounded-3" alt="Welcome">
      </div>

      <div class="col-xl-4 col-sm-12 col-md-8 text-xl-start text-sm-center">

        <h3 class="">Welcome to <span class="text-warning">Vaidik Agri Producer Company</span></h3>

        <h1 class="text-warning py-3 my-3">Better Agriculture for Better Future</h1>

        <p class="fs-5 lead py-3 my-3">

          We have 30 years of agriculture & eco farming experience globaly
          <br>
          There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form by injected humor or random word which don't look even.
        </p>

        <div class="d-grid offset-xl-0 col-xxl-6 offset- col-xl-8 offset-lg-4 col-lg-4 offset-md-3 col-md-6 col-sm-12 text-xl-start text-sm-center">
          <a href="#" role="button" class="py-3 btn btn-lg rounded-pill btn-warning text-teal">
            <h4 class="">Discover More</h4>
          </a>
        </div>
      </div>
    </div>
  </section>









  <section id="services">
    <div id="services-bg">

      <div class="row justify-content-center text-center">
        <div class="col-lg-4 col-md-6 col-sm-12 p-3 m-3">
          <img src="assets/img/Logo-2.png" class="img-fluid text-warning" height="40" alt="Logo">
          <h4 class="py-3 my-3">OUR SERVICES LIST</h4>
          <h1 class="py-3 my-3 text-teal">What We’re Offering</h1>
        </div>

        <div class="row justify-content-center px-3 mx-3 g-5">

          <div class="col-xl-3 col-lg-5 col-md-6 col-sm-12">
            <div class="card">
              <img src="assets/img/service-1.png" class="card-img-top img-fluid services-img" alt="Agricultural Products">
              <div class="card-body border border-warning border-3 border-top-0">
                <div class="offset-3 col-6 p-3 rounded-circle bg-warning services-icon">
                  <img src="assets/img/service-icon1.png" class="img-fluid" alt="Tractor">
                </div>
                <h1 class="card-title p-auto m-auto mx-3">Agriculture Products</h1>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-5 col-md-6 col-sm-12">
            <div class="card">
              <img src="assets/img/service-2.png" class="card-img-top img-fluid services-img" alt="Organic Products">
              <div class="card-body border border-warning border-3 border-top-0">
                <div class="offset-3 col-6 p-3 rounded-circle bg-warning services-icon">
                  <img src="assets/img/service-icon2.png" class="img-fluid" alt="Hand">
                </div>
                <h1 class="card-title p-auto m-auto mx-3">Organic Products</h1>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-5 col-md-6 col-sm-12">
            <div class="card">
              <img src="assets/img/service-3.png" class="card-img-top img-fluid services-img" alt="Fresh Vegetables">
              <div class="card-body border border-warning border-3 border-top-0">
                <div class="offset-3 col-6 p-3 rounded-circle bg-warning services-icon">
                  <img src="assets/img/service-icon3.png" class="img-fluid" alt="Veggies">
                </div>
                <h1 class="card-title p-auto m-auto mx-3">Fresh Vegetables</h1>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-5 col-md-6 col-sm-12">
            <div class="card">
              <img src="assets/img/service-4.png" class="card-img-top img-fluid services-img" alt="Dairy Products">
              <div class="card-body border border-warning border-3 border-top-0">
                <div class="offset-3 col-6 p-3 rounded-circle bg-warning services-icon">
                  <img src="assets/img/service-icon4.png" class="img-fluid" alt="Milk">
                </div>
                <h1 class="card-title p-auto m-auto mx-3">Dairy Products</h1>
              </div>
            </div>
          </div>

        </div>


      </div>
    </div>
    <div class="white-fillerbg"></div>
  </section>

  <section></section>











  <section id="projects">
    <div id="project-bg">

      <div class="row justify-content-center text-center">
        <div class="col-lg-4 col-md-6 col-sm-12 p-3 m-3">
          <img src="assets/img/Logo-2.png" class="img-fluid text-warning" height="40" alt="Logo">
          <h4 class="py-3 my-3">Closed Projects</h4>
          <h1 class="py-3 my-3 text-teal">Latest Projects</h1>
        </div>

        <div class="row justify-content-center">

          <div id="carouselIndicators2" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselIndicators2" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselIndicators2" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row justify-content-center py-5 p-3">
                  <div class="col-3">
                    <img src="assets/img/project-1.png" class="d-block w-100" alt="Project 1">
                  </div>
                  <div class="col-3">
                    <img src="assets/img/project-2.png" class="d-block w-100" alt="Project 2">
                  </div>
                  <div class="col-3">
                    <img src="assets/img/project-3.png" class="d-block w-100" alt="Project 3">
                  </div>
                  <div class="col-3">
                    <img src="assets/img/project-4.png" class="d-block w-100" alt="Project 4">
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row justify-content-center py-5 p-3">
                  <div class="col-3">
                    <img src="assets/img/project-1.png" class="d-block w-100" alt="Project 1">
                  </div>
                  <div class="col-3">
                    <img src="assets/img/project-2.png" class="d-block w-100" alt="Project 2">
                  </div>
                  <div class="col-3">
                    <img src="assets/img/project-3.png" class="d-block w-100" alt="Project 3">
                  </div>
                  <div class="col-3">
                    <img src="assets/img/project-4.png" class="d-block w-100" alt="Project 4">
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row justify-content-center py-5 p-3">
                  <div class="col-3">
                    <img src="assets/img/project-1.png" class="d-block w-100" alt="Project 1">
                  </div>
                  <div class="col-3">
                    <img src="assets/img/project-2.png" class="d-block w-100" alt="Project 2">
                  </div>
                  <div class="col-3">
                    <img src="assets/img/project-3.png" class="d-block w-100" alt="Project 3">
                  </div>
                  <div class="col-3">
                    <img src="assets/img/project-4.png" class="d-block w-100" alt="Project 4">
                  </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators2" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators2" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>

          </div>

        </div>

      </div>

  </section>






  <section id="hq-products">
    <div class="row justify-content-center text-lg-start text-sm-center px-3 mx-3">
      <div class="col-lg-4 col-sm-10">
        <h1 class="py-3 my-3 text-teal">Providing High Quality Products</h1>
        <p class="py-3 my-3 fs-5"> The Company has acquired over 31 years of experience in this business and
          is proceeding further towards realising its objective of developing seeds
          having superior yield potential, drought tolerance, tolerance to pests and
          diseases etc.
        </p>
        <p class="py-3 my-3 fs-5">
          Currently, the Company has production, processing and R&amp;D facilities in
          Andhra Pradesh, Telangana, Karnataka, Maharashtra, Gujarat, Bihar, Tamil
          Nadu, Madhya Pradesh, Rajasthan and Odisha.
        </p>
        <p class="py-3 my-3 fs-5">
          The Company’s research mainly focuses on developing superior hybrids in
          different crops like Cotton, Maize, Bajra, Jowar, Paddy, Vegetables etc. and
          the hybrids are marketed under the brand name of “JK Seeds”.
        </p>
      </div>
      <div class="col-lg-8 col-sm-10">
        <img src="assets/img/vegetables.png" class="img-fluid rounded-3 w-100" alt="Welcome">
      </div>
    </div>
  </section>













  <section id="clients">
    <div id="clients-bg">
      <div id="clients-veggies">
        <div class="row justify-content-center p-3 m-3 text-center">
          <div class="col-12">
            <h1 class="pt-5 mt-5 py-3 my-3 text-teal">We'll let our clients do the talking</h1>
            <p class="py-3 my-3 h5 text-teal">Here’s what they have to say</p>
          </div>
        </div>

        <div id="carouselIndicators3" class="carousel carousel-dark slide" data-bs-ride="carousel">
          <!--<div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselIndicators3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselIndicators3" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselIndicators3" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div> -->





          <div class="carousel-inner">









            <div class="carousel-item active">
              <div class="row justify-content-center text-center p-3 m-3">
                <div class="col-lg-8 col-sm-10">
                  <video class="w-100" onclick="this.paused ? this.play() : this.pause();" muted poster="assets/img/client-thumbnail.png">
                    <source src="assets/video/clients.mp4" type="video/mp4">
                  </video>
                </div>
              </div>
            </div>

            <?php

            $sql1 = "SELECT * FROM videos2";
            #   $query = mysqli_query($conn, $sql1);

            while ($row = mysqli_fetch_array($query)) {

            ?>


              <div class="carousel-item">
                <div class="row justify-content-center text-center p-3 m-3">
                  <div class="col-lg-8 col-sm-10">
                    <video class="w-100" onclick="this.paused ? this.play() : this.pause();" muted poster="assets/img/client-thumbnail.png">
                      <source src="<?php echo $row['location']; ?>" type="video/mp4">
                    </video>
                  </div>
                </div>
              </div>

            <?php
            }

            ?>




          </div>



          <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators3" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators3" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <div class="row justify-content-center p-3 m-3 text-center mb-5 pb-5">
          <div class="col-lg-8 col-sm-12">
            <p class="h5 py-5">Aliquet nunc ante eu quis donec amet praesent nulla odio. Consectetur sit ultricies
              tristique consequat aliquam. Rutrum cursus sagittis vestibulum.</p>
          </div>
        </div>

      </div>

    </div>
  </section>










  <section id="blogs">
    <div id="blogs-bg">
      <div class="row p-3 m-3">
        <div class="offset-lg-1 col-lg-5 col-sm-12 text-lg-start text-center">
          <img src="assets/img/Logo-2.png" class="img-fluid text-warning ps-lg-5 ms-lg-5" height="40" alt="Logo">
          <h4 class="py-3 my-3">FROM THE BLOG POST</h4>
          <h1 class="py-3 my-3 text-teal">Latest News & Articles Directly from Blog</h1>
        </div>
      </div>

      <div class="row justify-content-center p-3 m-3 g-3">


        <?php

        $sql1 = "SELECT * FROM blogs LIMIT 3";
        # $query = mysqli_query($conn, $sql1);

        while ($row = mysqli_fetch_array($query)) {

        ?>



          <div class="col-lg-4 col-md-8 col-sm-12">
            <div class="card">
              <img src="<?php echo "admin/" . $row['location']; ?>" class="card-img-top position-relative" alt="Blog 1">
              <div class="col-lg-3 col-md-3 col-sm-3 rounded-circle bg-warning border border-white border-5 blog-icon text-center">
                <h4 class="px-3 mx-lg-2 mx-sm-3 py-3 text-teal">20 Jan</h4>
              </div>
              <div class="card-body">
                <h3 class="card-title py-3 my-3"><?php echo $row['title']; ?></h3>
                <div class="d-grid col-lg-6 col-sm-12 pt-3 mt-3">
                  <a href="#" role="button" class="py-3 btn btn-lg rounded-pill btn-outline-warning text-warning bg-transparent">
                    <h5>Learn More</h5>
                  </a>
                </div>
              </div>
            </div>
          </div>


        <?php

        }

        ?>











      </div>

    </div>
    <div class="white-fillerbg"></div>
  </section>












  <section id="contact-now">
    <div id="contact-bg">
      <div id="leaves-1">
        <div class="row justify-content-center text-center">
          <div class="col-lg-4 col-md-6 col-sm-12 p-3 m-3">
            <img src="assets/img/Logo-2.png" class="img-fluid text-warning" height="40" alt="Logo">
            <h4 class="py-3 my-3">CONTACT NOW</h4>
            <h1 class="py-3 my-3 text-teal">Leave Us A Message</h1>
          </div>
        </div>
      </div>
      <div id="leaves-2">
        <div class="row justify-content-center m-3 p-3 g-3">
          <div class="col-5">
            <img src="assets/img/contact-farmer2.png" class="img-fluid w-100 position-relative" alt="Contact">
            <img src="assets/img/contact-farmer.png" class="img-fluid w-50 position-absolute contact-img" alt="Contact">
          </div>
          <div class="offset-lg-2 col-lg-5 col-12">
            <div class="contact-form p-3 m-3 py-5 my-5">



              <form action="index" method="post">


                <div class="mb-3 px-3">
                  <label for="name" class="h3 form-label">Full Name</label>
                  <input type="text" class="form-control form-control-lg rounded-border p-3" id="name" name="name" placeholder="Enter your full name">
                </div>
                <div class="mb-3 px-3">
                  <label for="email" class="h3 form-label">Email</label>
                  <input type="email" class="form-control form-control-lg rounded-border p-3" id="email" name="email" placeholder="Enter your email address">
                </div>
                <div class="mb-3 px-3">
                  <label for="phone" class="h3 form-label">Phone Number</label>
                  <input type="text" class="form-control form-control-lg rounded-border p-3" id="phone" name="phone" placeholder="Enter your phone number">
                </div>
                <div class="mb-3 px-3">
                  <label for="message" class="h3 form-label">Message</label>
                  <textarea class="form-control form-control-lg rounded-border p-3" id="message" name="message" placeholder="Write a message" rows="3"></textarea>
                </div>
                <div class="justify-content-center row">
                  <div class="col-sm-6 col-12 d-grid p-3">
                    <button class="btn btn-lg border-teal bg-white p-3" role="button" type="submit" name="submit">Send
                      Message</button>
                  </div>
                </div>


              </form>



            </div>
          </div>
        </div>
      </div>
    </div>
  </section>







  <?php include('footer.php') ?>




  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Backtotop.js -->
  <script src="/assets/js/backtotop.js"></script>
</body>

</html>