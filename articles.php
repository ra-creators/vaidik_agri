<?php

include("assets/partials/connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="assets/css/Article-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

 <!-- Back to top button -->
 <button type="button" class="btn btn-success btn-floating btn-lg" id="btn-back-to-top">
    <i class="bi bi-arrow-up"></i>
  </button>

  <nav id="vap-navbar" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">

      <a href="#sidebar" class="float-start mt-3 d-md-block d-lg-none" data-bs-toggle="offcanvas" role="button"
        aria-controls="sidebar">
        <span class="navbar-toggler-icon"></span>
      </a>

     

      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand mx-5 fs-1 d-none d-lg-block" href="#">
          <div class="row-cols-5">
            <div class="col-10 float-start"><img src="assets/img/Logo.png" class="img-fluid" height="40" alt="Logo">
              Vaidik </div>
            <div class="offset-6 col-6 text-end"><span class="float-end fs-5">Agri Production</span></div>
          </div>
        </a>
        <ul class="navbar-nav h3 me-auto">
          <li class="nav-item mx-3 fw-bolder ">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item mx-3 fw-bolder dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="solutionsDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Solutions
            </a>
            <ul class="dropdown-menu bg-transparent" aria-labelledby="solutionsDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
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

<br>

<br>
<br>
<br>
<br>
<br>






    <section class="article-clean">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                    <div class="intro">


                    <?php

$catid = $_GET['catid'];

$sql=  "SELECT * FROM articles WHERE sl_no = $catid ORDER BY time DESC";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result))

{
    $title=$row['title'] ;
    $article=$row['content'] ;
    $catid = $row['sl_no'];
    $time = $row['time'];
    $author= $row['author'];
    $img = $row['location'];
    $views = $row['views'];


?>








                        <h1 class="text-center"><?php echo $title; ?></h1>
                        <p class="text-center"><span class="by">by</span> <a href="#"><?php echo $author; ?></a><span class="date"><?php echo $time; ?> </span></p><img class="img-fluid" src="admin/<?php echo $img; ?>">
                    </div>
                    <div class="text">
                        <?php echo $article; ?>
                        
                    </div>

                    


<?php

$sqll = "UPDATE blogs set views = $views+1 WHERE sl_no =$catid";
mysqli_query($conn,$sqll);

}

?>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

      <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <!-- Backtotop.js -->
  <script src="/assets/js/backtotop.js"></script>
</body>

</html>