<?php

include("assets/partials/connection.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vaidik Agri | Contact Us</title>
    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- Bootstrap Icons-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
    />
    <!-- Style.css -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/contactus.css" />
  </head>
  <body>
    <nav id="vap-navbar" class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container-fluid">
        <a
          href="#sidebar"
          class="float-start mt-3 d-md-block d-lg-none"
          data-bs-toggle="offcanvas"
          role="button"
          aria-controls="sidebar"
        >
          <span class="navbar-toggler-icon"></span>
        </a>

        <!-- Left Offcanvas -->
        <div
          class="offcanvas offcanvas-start bg-transparent text-light"
          tabindex="-1"
          id="sidebar"
          aria-labelledby="sidebar-label"
        >
          <div class="offcanvas-header">
            <img
              src="assets/img/Logo.png"
              class="img-fluid"
              height="40"
              alt="Logo"
            />
            <h3>Vaidik Agri Production</h3>
            <button
              class="btn-close"
              type="button"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
            ></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav">
              <li class="nav-item mx-3 fw-bolder">
                <a class="nav-link h5 active" aria-current="page" href="#"
                  >Home</a
                >
              </li>
              <li class="nav-item mx-3 fw-bolder dropdown">
                <a
                  class="nav-link h5 dropdown-toggle"
                  href="#"
                  id="solutionsDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Solutions
                </a>

                <ul
                  class="dropdown-menu bg-transparent"
                  aria-labelledby="solutionsDropdown"
                >
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item mx-3 fw-bolder">
                <a class="nav-link h5" href="#">Farmbook</a>
              </li>
              <li class="nav-item mx-3 fw-bolder">
                <a class="nav-link h5" href="#">About Us</a>
              </li>
              <li class="nav-item mx-3 fw-bolder">
                <a class="nav-link h5" href="#">Blog</a>
              </li>
              <li class="nav-item mx-3 fw-bolder">
                <a class="nav-link h5" href="/contactus">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand mx-5 fs-1 d-none d-lg-block" href="#">
            <div class="row-cols-5">
              <div class="col-10 float-start">
                <img
                  src="assets/img/Logo.png"
                  class="img-fluid"
                  height="40"
                  alt="Logo"
                />
                Vaidik
              </div>
              <div class="offset-6 col-6 text-end">
                <span class="float-end fs-5">Agri Production</span>
              </div>
            </div>
          </a>
          <ul class="navbar-nav h3 me-auto">
            <li class="nav-item mx-3 fw-bolder">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item mx-3 fw-bolder dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="solutionsDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Solutions
              </a>
              <ul
                class="dropdown-menu bg-transparent"
                aria-labelledby="solutionsDropdown"
              >
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li>
            <li class="nav-item mx-3 fw-bolder">
              <a class="nav-link" href="farmbook/farmbook.php">Farmbook</a>
            </li>
          </ul>
          <ul class="navbar-nav d-flex h3 ms-auto">
            <li class="nav-item mx-3 fw-bolder">
              <a class="nav-link" href="aboutus.php">About Us</a>
            </li>
            <li class="nav-item mx-3 fw-bolder">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item mx-3 fw-bolder">
              <a class="nav-link" href="contactus.php">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <?php


if(isset($_POST['submit']))
{

   
    $name=$_POST["name"];
    $phone=$_POST["phone"];
    $email_id= $_POST["email"];
    $msg= $_POST["message"];
    
    

    $sql = "INSERT INTO contact_us ( `full_name`,`email`, `phone_number`, `message`) VALUES ( '$name','$email_id', '$phone','$msg')";
    $result= mysqli_query($conn,$sql);

    if($result)
        {
        
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
             <strong>Success!</strong> Your message has been successfully submitted. We will contact you soon.
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>';
        }

    else{
             echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> We are facing some technical issue. Try again later
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }

  
  
  
  

}




?>

    <section
      id="first"
      class="bg-overlay d-flex flex-column justify-content-center"
    >
      <div class="container my-auto">
        <h1 class="text-white">Get In Touch</h1>
        <p class="text-white">We provide leading solutions to agricultural.</p>
      </div>
    </section>

    <section id="content" class="container flex-grow">
      <div class="row">
        <div id="form" class="col-md-6">
          <form action="contactus.php" method ="post" class="m-md-5">
            <div class="row mt-4">
              <div class="col-6">
                <label for="" class="form-label">Full Name</label>
                <input type="text" class="form-control"  name = "name"/>
              </div>
              <div class="col-6">
                <label for="" class="form-label" >Phone Number</label>
                <input type="text" class="form-control" name="phone" />
              </div>
            </div>
            <div class="row mt-4">
              <label for="" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" />
            </div>
            <div class="row mt-4">
              <label for="" class="form-label">Message</label>
              <input type="text" class="form-control" name ="message" />
            </div>
            <div class="row mt-4">
              <div class="col text-center">
                <button class="p-3" type="submit" name="submit">Send Message</button>
              </div>
            </div>
          </form>
        </div>
        <div id="contact-info" class="col-md-6">
          <div class="m-md-5">
            <div class="row text-center"><p>CONTACT INFO</p></div>
            <div class="row">
              <div class="col-1">
                <i class="bi bi-telephone-fill"></i>
              </div>
              <div class="col">
                <p>2020302323</p>
              </div>
            </div>
            <div class="row">
              <div class="col-1">
                <i class="bi bi-envelope-fill"></i>
              </div>
              <div class="col">
                <p>info@vaidik.com</p>
              </div>
            </div>
            <div class="row">
              <div class="col-1">
                <i class="bi bi-geo-alt"></i>
              </div>
              <div class="col">
                <p>Sydney</p>
                <p>2118 Thornridge Cir. Syracuse, Connecticut 35624</p>
              </div>
            </div>
            <div class="row">
              <div class="ms-auto col-1"><i class="bi bi-instagram"></i></div>
              <div class="col-1"><i class="bi bi-facebook"></i></div>
              <div class="col-1"><i class="bi bi-twitter"></i></div>
              <div class="me-auto col-1"><i class="bi bi-youtube"></i></div>
            </div>
          </div>
          <div class="decorator">
            <img
              src="assets/img/contactus/phone-contact 1.svg"
              class="img-fluid"
              alt=""
            />
          </div>
        </div>
      </div>
    </section>

    <!-- JavaScript Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
