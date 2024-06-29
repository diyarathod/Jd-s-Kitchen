<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
    .note {
      color: #F4A460;
      font-size: 20px;
    }

    .success-msg {
      position: relative;
      top: 140px;
      font-size: 35px;
      text-align: center;
      background-color: #90EE90;
      color: black;
      font-family: 'Poppins';
    }
    #hero {
  background:url("assets/img/header.jpeg") top center;
}
  </style>
</head>

<body>
  <form name="frm" method="post">
    <?php
    session_start();
    include("connect.php");
    $uid = $_SESSION['id'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (isset($_POST['silver'])) {
        $qty = mysqli_real_escape_string($a, $_POST['Qty']);
        $si = $qty * 90;
        $en = mysqli_query($a, "INSERT INTO `tiffin_detail`(`uid`,`tiffin`,`Qty`,`tot`) VALUES('$uid','Silver','$qty','$si')");
        if ($en) {
          ?>
          <div class="success-msg">
            <?php echo "Success!!"; ?>
          </div>
        <?php
        }
      } elseif (isset($_POST['gold'])) {
        $q1 = mysqli_real_escape_string($a, $_POST['Q1']);
        $go = $q1 * 110;
        $e1 = mysqli_query($a, "INSERT INTO `tiffin_detail`(`uid`,`tiffin`,`Qty`,`tot`) VALUES('$uid','Gold','$q1','$go')");
        if ($e1) {
          ?>
          <div class="success-msg">
            <?php echo "Success!!"; ?>
          </div>
        <?php
        }
      } elseif (isset($_POST['premium'])) {
        $q2 = mysqli_real_escape_string($a, $_POST['Q2']);
        $pre = $q2 * 150;
        $e2 = mysqli_query($a, "INSERT INTO `tiffin_detail`(`uid`,`tiffin`,`Qty`,`tot`) VALUES('$uid','Premium','$q2','$pre')");
        if ($e2) {
          ?>
          <div class="success-msg">
            <?php echo "Success!!"; ?>
          </div>
        <?php
        }
      }
    }
    ?>

    <!-- Header -->
    <header id="header" class="fixed-top d-flex align-items-center">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
        <h1 class="logo me-auto me-lg-0"><a href="index.php">COZY CORNER</a></h1>
        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            <li><a class="nav-link scrollto active" href="index.php">Back</a></li>
            <li><a class="nav-link scrollto active" href="Myprofile.php">My Profile</a></li>
            <li><a class="nav-link scrollto active" href="product.php">My Order</a></li>
            <li><a class="nav-link scrollto active" href="index.php" name="Logout">Logout</a></li>
          </ul>
        </nav>
      </div>
    </header><!-- End Header -->

    <!-- Why Us Section -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">
        <h3><?php
            $i = mysqli_query($a, "SELECT * from `signup` where id=$uid");
            $row = mysqli_fetch_array($i);
            $r = mysqli_num_rows($i);
            if ($r == 1) {
              echo "Hello, " . $row[1];
            }
            ?></h3>
       
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span>COZY CORNER</span></h1>
          

          <div class="btns">
            <a href="#specials" class="btn-menu animated fadeInUp scrollto">Our Products</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

    <!-- Specials Section -->
    <section id="specials" class="specials">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <p>Check Our Advanced Menu</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Monday</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Tuesday</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Wednesday</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Thursday</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Friday</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-6">Saturday</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <!-- Content for each day -->
            </div>
          </div>
        </div>
        <div class="note">
          Note: The Menu will be changed every week and we are providing one sweet every Wednesday. Also Salad, Buttermilk will be included in the meal every day. These are included in the price.
        </div>
      </div>
    </section><!-- End Specials Section -->

    <!-- Footer -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <!-- Footer content -->
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="credits">
          Designed by Jinal And Diya.
        </div>
      </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </form>
</body>

</html>
