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


    <nav id="vap-navbar" class="navbar fixed-top navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a href="#sidebar" class="float-start mt-3 d-md-block d-lg-none" data-bs-toggle="offcanvas" role="button"
                aria-controls="sidebar">
                <span class="navbar-toggler-icon"></span>
            </a>

            <!-- Left Offcanvas -->
            <div class="offcanvas offcanvas-start bg-transparent text-light" tabindex="-1" id="sidebar"
                aria-labelledby="sidebar-label">
                <div class="offcanvas-header">
                    <img src="assets/img/Logo.png" class="img-fluid" height="40" alt="Logo" />
                    <h3>Vaidik Agri Production</h3>
                    <button class="btn-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-3 fw-bolder">
                            <a class="nav-link h5 active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item mx-3 fw-bolder dropdown">
                            <a class="nav-link h5 dropdown-toggle" href="#" id="solutionsDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Solutions
                            </a>

                            <ul class="dropdown-menu bg-transparent" aria-labelledby="solutionsDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item mx-3 fw-bolder">
                            <a class="nav-link h5" href="#">Farmbook</a>
                        </li>
                        <li class="nav-item mx-3 fw-bolder">
                            <a class="nav-link" href="#">Engineering Blog</a>
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
                            <img src="assets/img/Logo.png" class="img-fluid" height="40" alt="Logo" />
                            Vaidik
                        </div>
                        <div class="offset-6 col-6 text-end">
                            <span class="float-end fs-5">Agri Production</span>
                        </div>
                    </div>
                </a>
                <ul class="navbar-nav h3 me-auto">
                    <li class="nav-item mx-3 fw-bolder">
                        <a class="nav-link " aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item mx-3 fw-bolder dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="solutionsDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Solutions
                        </a>
                        <ul class="dropdown-menu bg-transparent" aria-labelledby="solutionsDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item mx-3 fw-bolder">
                        <a class="nav-link" href="#">Farmbook</a>
                    </li>
                    <li class="nav-item mx-3 fw-bolder">
                        <a class="nav-link active " href="#">Engineering Blog</a>
                    </li>
                </ul>
                <ul class="navbar-nav d-flex h3 ms-auto">
                    <li class="nav-item mx-3 fw-bolder">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item mx-3 fw-bolder">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item mx-3 fw-bolder">
                        <a class="nav-link" href="/contactus">Contact Us</a>
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



            <a href="articles.php?catid='<?php echo $catid; ?>'"><div class="card bg-dark text-white" style="width: 20rem; height: 18rem; border-radius: 10px;">
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
