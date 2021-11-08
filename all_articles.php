<?php

include("assets/partials/connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vaidik Agri | AboutUs</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
        
    <!-- Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <!-- Style.css -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/aboutus.css" />
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
              <a class="nav-link" href="/contactus"> <h2>ContactUs</h2> </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section id="first" class="bg-overlay d-flex flex-column justify-content-center">
        <div class="row my-auto">


            <h2 class="text-left text-white mt-5">Agriculture Engineering Blog</h2>
            <h5 class="text-left text-white ">We provide trending articels of Agriculture Engineering</h5>
            <br>
            <br>
            <div class="container mx-5">
                <button type="button" class="btn btn-outline-warning">Follow</button><span class="text-left text-white">
                    &nbsp&nbsp&nbsp&nbsp 90 followers</span>
            </div>


        </div>

    </section>



    <br>
    <br>

    

    <div class="conatiner mx-4">

        <h3 class="text-left text-black font-weight-bold" style="display:inline">All Articles</h3>
        <br><br>

    </div>

    <div class="container">



        <div class="row">

        <?php

$sql1 = "SELECT * FROM articles";
$query = mysqli_query($conn,$sql1);

while($row=mysqli_fetch_array($query)){

  $catid = $row['sl_no'];

  ?>




            <div class="col-lg-4 mb-4">



            <a href="articles?catid='<?php echo $catid; ?>'"><div class="card bg-dark text-white" style="width: 20rem; height: 18rem; border-radius: 10px;">
                    <img src="assets/img/engineering/Rectangle 255.png" style="width: 20rem; height: 18rem;"
                        class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <br><br><br>
                        <h5 class="card-title text-center align-middle"><?php echo $row['title'];?></h5>
                        <br><br><br><br>
                        <p class="card-text align-text-bottom"><?php echo $row['author'];?></p>

                    </div>
                </div></a>

            </div>


            <?php

}

?>

           

           

        </div>





    </div>






    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>






    </body>

    </html>
