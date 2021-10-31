<?php

include("assets/partials/connection");
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
  <nav
      class="navbar navbar-expand-lg navbar-dark"
      style="background-color: rgba(251, 152, 49, 0.95)"
    >
      <div class="container-fluid">
        <a class="navbar-brand" href="/">
          <div class="row">
            <div class="col">
              <img
                src="assets/img/Logo.png"
                class="img-fluid"
                height="40"
                alt="Logo"
              />
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
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <ul class="navbar-nav flex-grow-1">
            <li class="nav-item">
              <a class="nav-link" href="/"> <h2>Home</h2> </a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="/solutions/solutions_farmer.html"
                id="navbarDropdownMenuLink"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <h2>Solutions</h2>
              </a>
              <ul
                class="dropdown-menu"
                aria-labelledby="navbarDropdownMenuLink"
              >
                <li>
                  <a
                    class="dropdown-item"
                    href="/solutions/solutions_farmer.html"
                    >For Farmers</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="/solutions/solutions_entr.html"
                    >For Micro-Entrepreneur</a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item"
                    href="/solutions/solutions_buyer.html"
                    >For Institutional Buyers</a
                  >
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
              <a class="nav-link" href="/aboutus"> <h2>AboutUs</h2> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/engineering"> <h2>Blog</h2> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/contactus"> <h2>ContactUs</h2> </a>
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
          <form action="contactus" method ="post" class="m-md-5">
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
