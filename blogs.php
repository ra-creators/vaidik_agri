<?php

include("assets/partials/connection");
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
            <a class="nav-link" href="/">
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
            <a class="nav-link active" href="/engineering">
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

            $sql =  "SELECT * FROM blogs WHERE sl_no = $catid ORDER BY time DESC";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
              $title = $row['title'];
              $article = $row['content'];
              $catid = $row['sl_no'];
              $time = $row['time'];
              $author = $row['author'];
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
              mysqli_query($conn, $sqll);
            }

        ?>
        </div>
      </div>
    </div>
  </section>
  <?php include('footer.php') ?>

  <script src="assets/bootstrap/js/bootstrap.min.js"></script>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Backtotop.js -->
  <script src="/assets/js/backtotop.js"></script>
</body>

</html>