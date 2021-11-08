
<?php

include('../assets/partials/connection.php');




session_start();
if(!isset($_SESSION['loggedin'])  || $_SESSION['loggedin']!=true){

    header('Location : login.php');
    // header('Location: ../index.php');
    exit;

}

$ids = $_GET['image_id'];
// $query = "SELECT * from `images` where sl_no = '$ids'  ";
// $result0 = mysqli_query($conn , $query);
//  $row = mysqli_fetch_assoc($result0);
//  echo $row['author'];
 

$sql3 = "SELECT count(sl_no) AS totallll FROM contact_us";
$result3 = mysqli_query($conn,$sql3);
$values3 = mysqli_fetch_assoc($result3);
$num_row3 = $values3['totallll'];
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>VaidikAgri | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
    />
    <!-- Font Awesome Icons -->
    <!-- <link rel="stylesheet" href="/admin-new/plugins/fontawesome-free/css/all.min.css" /> -->

    <!-- IonIcons
    <link
      rel="stylesheet"
      href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"
    /> -->
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css" />
  </head>
  <!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
  <body class="hold-transition sidebar-mini">
    <div class="wrapper" style="height: 100vh; overflow-y: hidden">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"
              ><i class="fas fa-bars"></i
            ></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
          </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Navbar Search -->
          <li class="nav-item">
            <a
              class="nav-link"
              data-widget="navbar-search"
              href="#"
              role="button"
            >
              <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
              <form class="form-inline">
                <div class="input-group input-group-sm">
                  <input
                    class="form-control form-control-navbar"
                    type="search"
                    placeholder="Search"
                    aria-label="Search"
                  />
                  <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                    <button
                      class="btn btn-navbar"
                      type="button"
                      data-widget="navbar-search"
                    >
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </li>

          <!-- Messages Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-comments"></i>
              <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img
                    src="/admin-new/dist/img/user1-128x128.jpg"
                    alt="User Avatar"
                    class="img-size-50 mr-3 img-circle"
                  />
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      Brad Diesel
                      <span class="float-right text-sm text-danger"
                        ><i class="fas fa-star"></i
                      ></span>
                    </h3>
                    <p class="text-sm">Call me whenever you can...</p>
                    <p class="text-sm text-muted">
                      <i class="far fa-clock mr-1"></i> 4 Hours Ago
                    </p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img
                    src="/admin-new/dist/img/user8-128x128.jpg"
                    alt="User Avatar"
                    class="img-size-50 img-circle mr-3"
                  />
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      John Pierce
                      <span class="float-right text-sm text-muted"
                        ><i class="fas fa-star"></i
                      ></span>
                    </h3>
                    <p class="text-sm">I got your message bro</p>
                    <p class="text-sm text-muted">
                      <i class="far fa-clock mr-1"></i> 4 Hours Ago
                    </p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img
                    src="/admin-new/dist/img/user3-128x128.jpg"
                    alt="User Avatar"
                    class="img-size-50 img-circle mr-3"
                  />
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      Nora Silvester
                      <span class="float-right text-sm text-warning"
                        ><i class="fas fa-star"></i
                      ></span>
                    </h3>
                    <p class="text-sm">The subject goes here</p>
                    <p class="text-sm text-muted">
                      <i class="far fa-clock mr-1"></i> 4 Hours Ago
                    </p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer"
                >See All Messages</a
              >
            </div>
          </li>
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-bell"></i>
              <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <span class="dropdown-item dropdown-header"
                >15 Notifications</span
              >
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i> 4 new messages
                <span class="float-right text-muted text-sm">3 mins</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-users mr-2"></i> 8 friend requests
                <span class="float-right text-muted text-sm">12 hours</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-file mr-2"></i> 3 new reports
                <span class="float-right text-muted text-sm">2 days</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer"
                >See All Notifications</a
              >
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
          <img
            src="dist/img/AdminLTELogo.png"
            alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3"
            style="opacity: 0.8"
          />
          <span class="brand-text font-weight-light">VaidikAgri</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img
                src="dist/img/user2-160x160.jpg"
                class="img-circle elevation-2"
                alt="User Image"
              />
            </div>
            <div class="info">
              <a href="#" class="d-block">Alexander Pierce</a>
            </div>
          </div>

           <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul
              class="nav nav-pills nav-sidebar flex-column"
              data-widget="treeview"
              role="menu"
              data-accordion="false"
            >
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="../index.php" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-header">FARMBOOK</li>

              <li class="nav-item menu-open">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Farmbook
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item menu-open">
                    <a
                      href="#"
                      class="nav-link"
                    >
                      <i class="nav-icon fab fa-blogger-b"></i>
                      <p>Vaidik Wall</p>
                      <i class="right fas fa-angle-left"></i>
                    </a>

                    <ul class="nav nav-treeview ml-2">
                      <li class="nav-item">
                        <a
                          href="add_blogs.php"
                          class="nav-link"
                        >
                          <i class="nav-icon fas fa-plus-square"></i>
                          <p>add blog</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a
                          href="vaidakwall.php"
                          class="nav-link"
                        >
                          <i class="nav-icon fab fa-blogger-b"></i>
                          <p>Vaidik Wall</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item menu-open">
                    <a href="" class="nav-link">
                      <i class="nav-icon fas fa-image"></i>
                      <p>Images</p>
                      <i class="right fas fa-angle-left"></i>
                    </a>

                    <ul class="nav nav-treeview ml-2">
                      <li class="nav-item">
                        <a
                          href="add_images.php"
                          class="nav-link"
                        >
                          <i class="nav-icon fa fa-plus-square"></i>
                          <p>add Images</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a
                          href="images.php"
                          class="nav-link"
                        >
                          <i class="nav-icon fas fa-image"></i>
                          <p>Images</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-video"></i>
                      <p>Videos</p>
                      <i class="right fas fa-angle-left"></i>
                    </a>

                    <ul class="nav nav-treeview ml-2">
                      <li class="nav-item">
                        <a
                          href="add_videos.php"
                          class="nav-link"
                        >
                          <i class="nav-icon fa fa-plus-square"></i>
                          <p>add Video</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a
                          href="videos.php"
                          class="nav-link"
                        >
                          <i class="nav-icon fas fa-video"></i>
                          <p>Videos</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="nav-header">ENGINEERING BLOGS</li>
              <li class="nav-item">
                <a href="../add_articles.php" class="nav-link">
                  <i class="nav-icon fas fa-plus-square"></i>
                  <p>Add blog</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../all_articles.php" class="nav-link">
                  <i class="nav-icon fab fa-blogger-b"></i>
                  <p>Blogs</p>
                </a>
              </li>

              <li class="nav-header">MESSAGES</li>
              <li class="nav-item">
                <a href="../../contactus.php" class="nav-link">
                  <i class="nav-icon fas fa-comment-alt"></i>
                  <p>
                    Contact us msgs
                    <span class="badge badge-info right"><?php echo $num_row3; ?></span>
                  </p>
                </a>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="overflow-y: auto">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Add Images</h1>
              </div>
              <!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Dashboard</li>
                </ol>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
        </div>
        <!-- /.content-header -->

<

        <!-- Main content -->
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <form
                      action="handle_edit.php?image_id=<?php echo $ids; ?>"
                      method="POST"
                      enctype="multipart/form-data"
                      class="bootstrap-form-with-validation"
                    >
                      <h2 class="text-center">Add Images</h2>
                      <div class="form-group mb-3">
                        <label class="form-label" for="text-input">Author</label
                        ><input
                          class="form-control"
                          type="text"
                          id="text-input-1"
                          name="author"
                        />
                      </div>

                      <div class="form-group mb-3">
                        <label class="form-label" for="file-input"
                          >Select the Image</label
                        ><input
                          class="form-control"
                          type="file"
                          id="file-input"
                          name="file"
                        />
                      </div>
                      <div class="form-group mb-3">
                        <button
                          class="btn btn-primary"
                          
                          name="upload"
                        >
                          Upload
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <strong
          >Copyright &copy; 2014-2021
          <a href="https://adminlte.io">AdminLTE.io</a>.</strong
        >
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 3.1.0
        </div>
      </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- font-awesome -->
    <script
      src="https://kit.fontawesome.com/fecc50ad8e.js"
      crossorigin="anonymous"
    ></script>
    <!-- jQuery -->
    <script src="/admin-new/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/admin-new/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <!-- <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script> -->

    <!-- AdminLTE -->
    <script src="/admin-new/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/admin-new/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="/admin-new/dist/js/pages/dashboard3.js"></script>
  </body>
</html>
