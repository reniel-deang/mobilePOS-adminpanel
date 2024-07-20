<?php   session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <?php
  include 'pages/config/dbcon.php';
  if (!isset($_SESSION['status']))
    {
      session_unset();
    }

    else{
      header('Location: pages/dashboardcontent/dashboard.php');
    }
  
  ?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EBS - Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/styleCards.css">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">EBS</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact us</a></li>
          <li><a class="nav-link scrollto" href="pages/enrollform.php">Enroll Now</a></li>
          <li><a class="nav-link scrollto" href="pages/login.php">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->

            <?php
                $sql =  "SELECT * FROM tb_coverphotohomepage WHERE ToHome = 1";
                $result = mysqli_query($conn, $sql);
                $datas = array();
                if(mysqli_num_rows($result) > 0 ){
                    while($row =mysqli_fetch_assoc($result)){
                        $datas[] = $row;
                    }
                }

                if($datas!=null){
                    
                    }else
                    {   
                    echo'
                    <section id="hero" class="d-flex align-items-center" style="display: none;">

                    <div class="container">
                      <div class="row">
                        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                          <h1>Welcome to East Bridge State University</h1>
                          <h2> We Dont Choose Excellence We Create Them</h2>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                        </div>
                      </div>
                    </div>
                
                  </section>
                    ';
        
                    }
    
            ?>

  <!-- End Hero -->



<div id="demo" class="carousel slide" data-bs-ride="carousel" style="display:  
            <?php
                $sql =  "SELECT * FROM tb_coverphotohomepage WHERE ToHome = 1";
                $result = mysqli_query($conn, $sql);
                $datas = array();
                if(mysqli_num_rows($result) > 0 ){
                    while($row =mysqli_fetch_assoc($result)){
                        $datas[] = $row;
                    }
                }

                if($datas==null){
                    echo'none';
                    }else
                    {   
                    echo'block';
        
                    }
    
            ?>">

<!-- Indicators/dots -->
<div class="carousel-indicators">
  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
</div>

<!-- The slideshow/carousel -->
<div class="carousel-inner">
<?php
    $sql =  "SELECT * FROM tb_coverphotohomepage WHERE ToHome = 1";
    $result = mysqli_query($conn, $sql);
    $datas = array();
    if(mysqli_num_rows($result) > 0 ){
        while($row =mysqli_fetch_assoc($result)){
        $datas[] = $row;
        }
    }

    foreach($datas as $data){

        echo '
        <div class="carousel-item active">
            <img src="assets/img/cms-image/cover-page/'.$data['img'].'" alt="Los Angeles" class="d-block" style="width:100%">
            <div class="carousel-caption">
                <h3>'.$data['title'].'</h3>
                <p>'.$data['caption'].'</p>
            </div>
        </div>';
        }?>



</div>

<!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
  <span class="carousel-control-next-icon"></span>
</button>
</div>



  <main id="main">
    

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Why Would I Choose EBS?</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
            Where intellectual curiosity meets limitless possibilities. Established on the pillars of academic excellence, innovation, and inclusivity, our university stands as a beacon of knowledge, shaping the minds of tomorrow's leaders and thinkers.
            </p>
            <ul>
              <li><i class="ri-check-double-line">✓</i>Academic Excellence:The university is renowned for its rigorous academic programs and distinguished faculty, providing students with a supportive learning environment that promotes critical thinking, problem-solving, and intellectual growth. </li>
              <li><i class="ri-check-double-line">✓</i> Cutting-edge Research Opportunities: Our University offers students unique research opportunities across various disciplines, fostering collaboration and independent study, allowing them to explore their interests and contribute significantly to their fields.</li>
              <li><i class="ri-check-double-line">✓</i> State-of-the-Art Facilities and Resources: The University offers advanced facilities, libraries, laboratories, and technology resources to enhance learning experiences, support student research, and provide access to modern classrooms and specialized equipment.</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
            Our alumni parents are a testament to the quality of education and transformative experiences provided by our university. Their achievements in research, innovation, leadership roles, and community change demonstrate the institution's commitment to academic rigor, personal growth, and cultivating principled leaders. Their legacy reflects our dedication to empowering the next generation of leaders.
            </p>
            <a href="pages/enrollform.php" class="btn-learn-more">Enroll Now</a>
          </div>
        </div>

      </div>
    </section>

    <!-- End About Us Section -->


<div class="cardss">

    <div class="section-title" style="display: 
            <?php
            $sql =  "SELECT * FROM tb_cardHomepage WHERE ToHome = 1";
            $result = mysqli_query($conn, $sql);
            $datas = array();
            if(mysqli_num_rows($result) > 0 ){
                while($row =mysqli_fetch_assoc($result)){
                    $datas[] = $row;
                }
            }

            if($datas==null){
                echo'none';
                }else
                {   
                    echo'block';
    
                }
 
        ?>
    ;">
        <h2>Cards and Images</h2>
    </div>
    <div class="shadow p-3 mb-5 bg-body rounded" style="text-align: center;display:
        <?php
            $sql =  "SELECT * FROM tb_cardHomepage WHERE ToHome = 1";
            $result = mysqli_query($conn, $sql);
            $datas = array();
            if(mysqli_num_rows($result) > 0 ){
                while($row =mysqli_fetch_assoc($result)){
                    $datas[] = $row;
                }
            }
            if($datas==null){
                echo'none';
                }else
                {   
                echo'block';
    
                }  
        ?>
     ;">
        
        <!-- grid layout -->
        <div class="row" style="margin-top: 20px; display: flex; justify-content: center;"> 
        
          <?php
            $sql =  "SELECT * FROM tb_cardHomepage WHERE ToHome = 1";
            $result = mysqli_query($conn, $sql);
            $datas = array();
            if(mysqli_num_rows($result) > 0 ){
                while($row =mysqli_fetch_assoc($result)){
                    $datas[] = $row;
                }
            }

                foreach($datas as $data){

                echo '  <div class="card" style="width: 300px; margin: 20px; padding: 0;">
                            <img class="card-img-top" src="assets/img/cms-image/card-and-imag/'. $data['img'] .' " style="height: 300px; width: 100%" alt="Card image">
                            <div class="card-body">
                                <h5 class="card-title">
                                <form method="POST">
                              
                                <div class="article-content">
                                
                                <h3 class="card-title">'. $data['title'] .'</h3>
                                <p class="card-excerpt">
                                '. $data['caption'] .'
                                </p>
            
                            </div>

                             </form>
                            </div>
                        </div>
                    ';
            }

            ?>      
        </div>


  </div>

</div>

  <!-- GRID CONTENT  BEGINING -->

<div class="cardss">

    <div class="section-title" style="display: 
            <?php
            $sql =  "SELECT * FROM tb_contenthomepage WHERE ToHome = 1";
            $result = mysqli_query($conn, $sql);
            $datas = array();
            if(mysqli_num_rows($result) > 0 ){
                while($row =mysqli_fetch_assoc($result)){
                    $datas[] = $row;
                }
            }

            if($datas==null){
                echo'none';
                }else
                {   
                    echo'block';
    
                }
           
   
            
        ?>
    ;">
        <h2>Grid Contents</h2>
    </div>

    <div class="shadow p-3 mb-5 bg-body rounded" style="text-align: center;display:
        <?php
            $sql =  "SELECT * FROM tb_contenthomepage WHERE ToHome = 1";
            $result = mysqli_query($conn, $sql);
            $datas = array();
            if(mysqli_num_rows($result) > 0 ){
                while($row =mysqli_fetch_assoc($result)){
                    $datas[] = $row;
                }
            }
            if($datas==null){
                echo'none';
                }else
                {   
                echo'block';
    
                }  
        ?>
     ;">
        
        <div class="row" style=" margin-top: 20px; display: flex;  justify-content: center;">



          <?php
            $sql =  "SELECT * FROM tb_contenthomepage WHERE ToHome = 1";
            $result = mysqli_query($conn, $sql);
            $datas = array();
            if(mysqli_num_rows($result) > 0 ){
              while($row =mysqli_fetch_assoc($result)){
                  $datas[] = $row;
              }
            }
            
            foreach($datas as $data){
            echo '
            <div class="card border-secondary mb-'.$data['sizes'].'"  style="max-width: 18rem;margin:20px;     background-color:'.$data['color'].';">
            <div class="card-header" style="backgound:'.$data['color'].';font-size: 20px;font-weight: bold;">'.$data['caption'].'</div>
            <div class="card-body">
            <h5 class="card-title style="margin-bottom:10px;backgound:'.$data['color'].'"></h5>
            <p class="card-text">'.$data['caption'].'</p></div></div>
            
              ';
            }

          ?>


        </div>
  </div>
  </div>

     <!-- ======= Contact Section ======= -->
     <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>
            If you have any inquiries or questions, please feel free to use the contact form below.</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Angeles, Pampanga</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="pages/config/contactform.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" name = "submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->


  
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Information</h3>
            <p>
              <Sto class="Rosario"></Sto><br>
              Angeles, Pampanga<br>
              Philippines <br><br>
              <strong>Phone:</strong> +63912345678<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Customer Service</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>East Bridge State University</h4>
            <p>Established 79 years ago,  is a beacon of excellence in a vibrant, culturally diverse community, attracting students, scholars, and innovators worldwide.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>EAST BRIDGE</span></strong>. All Rights Reserved 1945
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</body>

</html>