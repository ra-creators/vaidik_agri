<?php

include("assets/partials/connection.php");

?>
<!DOCTYPE html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Bootstrap Icons-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <!-- Style.css -->
  <link rel="stylesheet" href="assets/css/style.css">
  <title>FarmBook</title>
  <style>
  </style>
</head>

<body>

  <!-- Back to top button -->
  <button type="button" class="btn btn-warning btn-floating btn-lg" id="btn-back-to-top">
    <i class="bi bi-arrow-up"></i>
  </button>

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
              <a class="nav-link active" href="/farmbook/farmbook">
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

  <section id="farmbook">
    <div id="farmbook-bg">
      <div id="farmbook-leaf">
        <div class="row py-5">
          <div class="col-lg-6 col-12 py-lg-5 my-lg-5">
            <h5 class="ps-5 pt-3">Welcome to Vaidik Agri Producer Company</h5>
            <h1 class="ps-5">FarmBook</h1>

            <div class="row justify-content-lg-start justify-content-center ">
              <div class="ps-5 py-3 col-xxl-6 col-12">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-blogs-tab" data-bs-toggle="pill"
                      data-bs-target="#pills-blogs" type="button" role="tab" aria-controls="pills-blogs"
                      aria-selected="true" onclick="changeBg('vw')">Vaidik Wall</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link " id="pills-videos-tab" data-bs-toggle="pill" data-bs-target="#pills-videos"
                      type="button" role="tab" aria-controls="pills-videos" aria-selected="false"
                      onclick="changeBg('videos')">Videos</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link " id="pills-images-tab" data-bs-toggle="pill" data-bs-target="#pills-images"
                      type="button" role="tab" aria-controls="pills-images" aria-selected="false"
                      onclick="changeBg('img')">Images</button>
                  </li>



                </ul>
              </div>

              <div class="ps-5 py-3 col-xxl-6 col-sm-8 col-12">
                <div class="search border-bottom border-3 border-secondary">
                  <p class="ps-3"><i class="bi bi-search"></i> <span class="ps-5"> <input type="search"
                        class="searchbar" id="sbar" name="search" placeholder="Search Blogs"> </span></p>
                </div>
              </div>




            </div>

          </div>
        </div>
      </div>
    </div>
  </section>









  <section id="content">
    <div class="bvi">
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-blogs" role="tabpanel" aria-labelledby="pills-blogs-tab">
          <div class="row justify-content-center p-3 m-3 g-3 px-5">




          <?php

$sql1 = "SELECT * FROM blogs";
$query = mysqli_query($conn,$sql1);

while($row=mysqli_fetch_array($query)){

  $catid = $row['sl_no'];

  

  ?>





            <div class="col-xxl-3 col-lg-4 col-sm-6 col-12 p-3">

            
            
              <a href="../blogs.php?catid='<?php echo $catid; ?>'"><div class="card">
                <img src="<?php echo "../admin/" .$row['location'];?>" class="card-img-top img-fluid" alt="Card Image">
                <div class="card-body text-center border border-3 border-warning">
                  <h5 class="card-title"><?php echo $row['title'];?></h5>
                  <p class="card-text lead"><?php echo $row['author'];?></p>
                  <p class="float-start text-secondary lead"><i class="bi bi-eye"></i> <?php echo $row['views'];?></p>
                  <p class="float-end lead text-secondary"><span class="fw-bold">Post on</span> <?php echo $row['time'];?></p>
                </div>
              </div></a>
            </div>

            <?php

}

?>

           

          </div>
        </div>


        







        <div class="tab-pane fade" id="pills-videos" role="tabpanel" aria-labelledby="pills-videos-tab">

          <div class="row justify-content-center p-3 m-3 g-3 px-5">

            <?php

            $sql1 = "SELECT * FROM videos";
            $query = mysqli_query($conn,$sql1);

            while($row=mysqli_fetch_array($query)){

              ?>


              <div class="col-xl-5 col-lg-6 col-sm-10 col-12">
                <div class="card pt-5 px-5 border border-3 border-warning">
                  <div class="iframe-container">
                    <iframe width="560" height="315" src="<?php echo "../admin/" .$row['location'];?>"
                      title="YouTube video player" frameborder="0"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                      allowfullscreen></iframe>
                  </div>
                  <div class="card-body text-center">
                    <h5 class="card-title"><?php echo $row['title'];?></h5>
                    <p class="card-text lead">Vaidik</p>
                    <p class="float-start text-secondary lead"><i class="bi bi-eye"></i> 8</p>
                    <p class="float-end lead text-secondary"><span class="fw-bold">Post on</span> <?php echo $row['time'];?></p>
  
  
  
                  </div>
                </div>
              </div>

          <?php

            }

            ?>

            

          </div>



        </div>


        <div class="tab-pane fade" id="pills-images" role="tabpanel" aria-labelledby="pills-images-tab">


          <div class="row justify-content-center p-3 m-3 g-3 px-5">




          <?php

$sql1 = "SELECT * FROM images";
$query = mysqli_query($conn,$sql1);

while($row=mysqli_fetch_array($query)){

  ?>




            <div class="col-xxl-3 col-lg-4 col-sm-6 col-12 p-3">
              <div class="card">
                <img src="<?php echo "../admin/" .$row['location'];?>" class="card-img-top img-fluid" alt="Card Image">
                <div class="card-body text-center border border-3 border-warning">
                  <h5 class="card-title"><?php echo $row['author'];?></h5>
                  <p class="card-text lead"><?php echo $row['author'];?></p>
                  <p class="float-start text-secondary lead"><i class="bi bi-eye"></i> 8</p>
                  <p class="float-end lead text-secondary"><span class="fw-bold">Post on</span> </i> <?php echo $row['time'];?></p>
                </div>
              </div>
            </div>



            <?php

}

?>

           
          

            

          </div>


        </div>
      </div>
    </div>
  </section>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <!-- Backtotop.js -->
  <script src="/farmbook/assets/js/backtotop.js"></script>
  <script src="/farmbook/assets/js/vidbutton.js"></script>
  <script src="/farmbook/assets/js/changebg.js"></script>
  <script>
    var prevScrollpos = 200;
    window.onscroll = function () {
      var currentScrollPos = window.pageYOffset;
      var navbar = document.getElementById("vap-navbar");
      if (prevScrollpos < currentScrollPos) {
        navbar.classList.remove("fixed-top");
      } else {
        navbar.classList.add("fixed-top");
      }
    }

  </script>
</body>

</html>