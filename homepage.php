<?php
session_start();
if(!isset($_SESSION['votersid'])){
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>E-BRGY</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/styles1.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="homepage.php" class="logo">
                            E-BRGY
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="choices.php" class="active">Online Fill Up</a></li>
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                            <li class="scroll-to-section"><a href="#projects">Projects</a></li>                             
                            <li class="scroll-to-section"><a href="#contact-us">Contact Us</a></li>
                            <li id = "lag_out" action="" method ="POST">
                            <input type="hidden" name="edit_id" value="logout">
                            <a href="logout-homepage.php" onclick="wat()">Log out</a></li>
                            <li style="color: white;"class="scroll-to-section"><img width="28px" height="30px" src="assets/images/hellouser.png"> <?php echo ucfirst($_SESSION['voters']);?></li>
                            </form>
                           
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item">
            <div class="img-fill">
                <img src="slide-01.jpg" alt="">
                <div class="text-content">
                  <h3 style="color: black;"><b>Welcome To E-BRGY</b></h3>
                  <h5 style="color: black; font-size: 40px;"><b>The Online Registration Fill Up Form for Barangay in Malabon City</b></h5>


                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item">
            <div class="img-fill">
                <img src="home2.jpg" alt="">
                <div class="text-content">
                  

                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item">
            <div class="img-fill">
                <img src="bg2.png" alt="">
                <div class="text-content">
                  
                  
                </div>
            </div>
          </div>
          <!-- // Item -->
        </div>
    </div>
    <div class="scroll-down scroll-to-section"><a href="#about"><i class="fa fa-arrow-down"></i></a></div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>About this Website</h6>
                            <h2>Soucre Code and <br> language used</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="service-item">
                                    <img src="assets/images/icon.png" alt="" style="width: 150px;height: 150px;">
                                    <br>
                                    <br>
                                    <h4> W3School</h4>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="service-item">
                                    <img src="assets/images/icon1.png" alt="" style="width: 150px;height: 150px;">
                                    <br>
                                    
                                </div>
                            </div>
                           
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-text-content">
                        <p style="font-size: 40px;">
                            <b>Vision</b></p><br> 
                            <p>"Sentro ng kulinarya sa National Capital Region, Lungsod na may mayamang kasaysayan, pamana at kultura, matatag na ekonomiya,malinis at luntiang kapaligiran, ligtas na pamayanan, responsable at respetadong Malabonian sa ilalim ng mapagkalinga, organisado at matapat na pamahalan"<br><br>

                        <p style="font-size: 40px;">
                            <b>Mission</b></p><br>
                           <p>"Magbigay nang angkop at sapat na paglilingkod mula sa puso para sa lahat"
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="assets/images/features-icon-1.png" alt="">
                        </div>
                        <div class="features-content">
                            <h4>Project Objectives</h4>
                            <p>We want to address the Time management issue, loss of Certificate,Clearance and Permit. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="assets/images/features-icon-1.png" alt="">
                        </div>
                        <div class="features-content">
                            <h4>General Objectives</h4>
                            <p>The primary purpose of this study is to provide a website that will allow the people of every barangay in Malabon to register online when it comes to getting different necessary papers.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="assets/images/features-icon-1.png" alt="">
                        </div>
                        <div class="features-content">
                            <h4>Proposed System Architecture</h4>
                            <p>This website can be accessible for Laptops,Androids,Personal computers, etc. It will pass the internet and go to a website. Accessing the website, you will choose your needed paper.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Features Big Item Start ***** -->


    <!-- ***** Projects Area Starts ***** -->
    <section class="section" id="projects">
      <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="section-heading">
                    <h6>Malabon Projects</h6>
                    <h2>Some of our latest projects</h2>
                </div>
                <div class="filters">
                    <ul>
                        
                        
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="filters-content">
                    <div class="row grid">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all des">
                          <div class="item">
                            <a href="mayor2.jpg" data-lightbox="image-1" data-title="Our Projects"><img height="300px" width="100px" src="mayor2.jpg" alt=""></a>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all dev">
                          <div class="item">
                           <a href="mayor1.jpg" data-lightbox="image-1" data-title="Our Projects"><img height="300px" width="100px" src="mayor1.jpg" alt=""></a>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all eve">
                          <div class="item">
                            <a href="mayor.jpg" data-lightbox="image-1" data-title="Our Projects"><img height="300px" width="100px" src="mayor.jpg" alt=""></a>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all tsh">
                          <div class="item">
                            <a href="mayor4.jpg" data-lightbox="image-1" data-title="Our Projects"><img height="300px" width="100px" src="mayor4.jpg" alt=""></a>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all tsh">
                          <div class="item">
                           <a href="mayor5.jpg" data-lightbox="image-1" data-title="Our Projects"><img height="300px" width="100px" src="mayor5.jpg" alt=""></a>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all tsh">
                          <div class="item">
                           <a href="mayor6.jpg" data-lightbox="image-1" data-title="Our Projects"><img height="300px" width="100px" src="mayor6.jpg" alt=""></a>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>
    <!-- ***** Projects Area Ends ***** -->

    <!-- ***** Testimonials Starts ***** -->

    </section>
    <!-- ***** Testimonials Ends ***** -->
    <br>
    <br><br>
    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contact Us</h6>
                        </div>
                        <ul class="contact-info">
                            <li><img src="assets/images/contact-info-01.png" alt="">000-00-0</li>
                            <li><img src="assets/images/contact-info-02.png" alt="">www.facebook.com/LenLenOreta</li>
                            <li><img src="assets/images/contact-info-03.png" alt="">malabon.gov.ph</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-xs-12">
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Contact Us Area Ends ***** -->


    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xs-12">
                    <div class="left-text-content">
                        <p>Copyright &copy; Courtesy.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><p>Follow Us</p></li>
                                <li><a rel="nofollow" ><i class="fa fa-facebook"></i></a></li>
                                <li><a rel="nofollow" ><i class="fa fa-twitter"></i></a></li>
                                <li><a rel="nofollow" ><i class="fa fa-linkedin"></i></a></li>
                                <li><a rel="nofollow" ><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>
    function wat() {    
                document.getElementById("lag_out").submit();
            }
    </script>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>


  </body>
  <style type="text/css">
      h1 {
      position: absolute;
      margin: 0;
      font-size: 40px;
      color: #fff;
      z-index: 2;
      line-height: 83px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px  #cc7a00; 
      }
      .banner {
      position: relative;
      height: 300px;
      background-image: url("assets/images/campus.jpg");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.2); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color: #cc7a00;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0 #cc7a00;
      color: #cc7a00;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #cc7a00;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .question-answer label {
      display: block;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid #cc7a00;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid #cc7a00;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #cc7a00;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #ff9800;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }
    </style>
</html>
