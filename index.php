 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cozy Corner</title>
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
      *{
    padding: 0;
margin: o;
box-sizing: border-box;
font-family: "Poppins";}


.wrapper {
border: 1px solid white;
position: absolute;
width: 80vw;
transform: translate(-50%, -50%);
top: 205%;
left: 50%;
display: flex;
justify-content: space-around;
gap:10px;

}

.container2{
width: 28vmin;
height:100px;
display: flex;
flex-direction: column;
padding: 1em o;
position: relative;
font-size: 16px;
border-radius: 0.5em;

}

span.num {
color:#ffffff;
display: grid;
place-items: center;
font-weight: 600;
font-size: 3em;
}
span.text{
color: #e0e0e0;
font-size: 1em;
text-align: center;
pad: 0.7em 0;
font-weight: 400;
line-height: 0;

}



#hero {
  background:url("assets/img/header.jpeg") top center;
}
#about {
  background: url("assets/img/img1.jpeg") center center;
}
    </style>
</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
    <a href="index.php" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      <h1 class="logo me-auto me-lg-0"><a href="index.php">Cozy Corner</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
       
<?php
include ("connect.php");
?>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="signup.php">
            Sign Up</a></li>
          <li><a class="nav-link scrollto" href="Login.php">Login</a></li>
          <li><a class="nav-link scrollto" href="#menu">Products</a></li>
          
          
          <li><a class="nav-link scrollto" href="#contact">Contact Us</a></li>
          <li><a class="nav-link scrollto" href="#specials">Specials</a></li>
          <li><a class="nav-link scrollto" href="faq.html">FAQ</a></li>
          <li><a class="nav-link scrollto" href="feedback.php">Feedback</a></li>
         
         
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
     

    </div>
  </header><!-- End Header -->

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

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="assets/img/header2.jpeg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Easy Renting!</h3>
            <br>

            <p class="fst-italic">
            Your go-to destination for stylish and affordable furniture rentals. Whether you're furnishing a new home, office, or staging a property, we offer a wide selection of high-quality pieces to fit your needs.
             Enjoy the flexibility of renting with hassle-free delivery, setup, and pickup, all while saving money and contributing to a sustainable lifestyle. Explore our collections today and transform your space effortlessly.
            </p>
            
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <!-- ======= counter Section ======= -->

    
      <script>
  let valueDisplays= document.querySelectorAll(".num");
let interval=5000;

valueDisplays.forEach((valueDisplay)=>{
let startValue=0;
let endValue=parseInt(valueDisplay.getAttribute("data-val"));

let duration=Math.floor(interval / endValue);
let counter= setInterval(function () {
startValue +=1;
valueDisplay. textContent= startValue;
if(startValue == endValue){
clearInterval(counter);
}
}, duration);

});
</script>

    <!-- End counter  Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title section2">
          <h2>Why Us</h2>
          <p>Why Choose Our Products</p>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>01</span>
              <h4>Wide Selection</h4>
              <p> Explore our extensive range of high-quality furniture to find the perfect pieces for your home or office.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <span>02</span>
              <h4>Flexibility</h4>
              <p>Whether you need furniture for a month or a year, our flexible rental options cater to your specific needs.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span>03</span>
              <h4>Sustainability</h4>
              <p> Renting furniture promotes reuse and reduces waste, making it an eco-friendly choice for a greener planet. </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    
    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Specials</h2>
          <p>Products</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Table</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Chair</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Sofa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Bed</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Table</h3>
                    <p>Discover the perfect dining table as the centerpiece for family gatherings, crafted with durability and style in mind. A round table offers an intimate setting, ideal for cozy conversations. The tea table adds charm to your space, perfect for enjoying a quiet moment with a cup of tea. Finally, a versatile side table complements any room, providing functionality and flair.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/diningtable.jpeg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Chair</h3>
                    <p>The wingback chair combines classic elegance with comfortable support, making it a timeless addition to any room. A barstool adds style and height to your kitchen or bar area, perfect for casual seating. The armchair offers cozy comfort and a welcoming spot to relax, enhancing your living space with its inviting design.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/barstool1.jfif" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Sofa</h3>
                    <p>The mid-century sofa brings retro charm with its clean lines and timeless design, perfect for modern interiors. A modular sofa offers versatility, allowing you to customize your seating arrangement to fit any space. The tuxedo sofa adds sophistication with its sleek, tailored appearance and straight lines, ideal for a polished look.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
      
                  <img src="assets/img/mid_century3.jpeg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Bed</h3>
                    <p>The single bed is perfect for compact spaces, offering comfort for one. A double bed provides ample room for a cozy sleep. The queen bed balances space and comfort, ideal for couples. The king bed offers luxurious space, perfect for ultimate relaxation. The bunk bed maximizes space, great for shared rooms or kids' bedrooms.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/bed.jpeg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Specials Section -->


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>What they're saying about us</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I purchased a mid-century sofa, and it's absolutely stunning! The quality is top-notch, and it fits perfectly in my living room. Highly recommend!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/drashti1.jpg" class="testimonial-img" alt="">
                <h3>Drashti Harsora</h3>
                <h4> PG Student </h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  The bunk bed I bought for my kids is fantastic. It's sturdy, and they love the design. Great use of space in their room!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/khyati1.jpg" class="testimonial-img" alt="">
                <h3>Khyati Sedani</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I ordered a round dining table, and I'm thrilled with it. It’s stylish and perfect for our family meals. Excellent craftsmanship!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/manasvi.jpg" class="testimonial-img" alt="">
                <h3>Manasvi Sodha</h3>
                <h4>Manager</h4>
              </div>
            </div><!-- End testimonial item -->

            <!-- End testimonial item -->

    </section><!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Gallery</h2>
          <p>Some photos from Our Kitchen</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
                <img src="assets/img/mid_century3.jpeg" alt="" class="img-fluid">
              
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
                <img src="assets/img/img1.jpeg" alt="" class="img-fluid">
              
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
                <img src="assets/img/img2.jpeg" alt="" class="img-fluid">
              
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
                <img src="assets/img/bed.jpeg" alt="" class="img-fluid">
              
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Gallery Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Cozy Corner</h3>
              <p>
                 Block no.6,kalvibid,Bhavnagar, <br>
                 Gujarat,India<br><br>
                <strong>Phone:</strong> +91 9068756475<br>
                <strong>Email:</strong> cozycorner@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#why-us">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#menu">Services</a></li>
            
              <li><i class="bx bx-chevron-right"></i> <a href="Privacy.html">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i><a href="#menu"> Regular Menu</a> </li>
              <li><i class="bx bx-chevron-right"></i><a href="#events"> Event Based Food Delivery</a> </li>
            </ul>
          </div>
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Jd's Kitchen</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
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
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>