<?php
include_once "header.php";

if(isset($_POST['name'])){
    $server="localhost";
    $username="root";
    $password="";
  
    $con =mysqli_connect($server,$username,$password);
  
    if(!$con)
    {
      die("connection failed " . mysqli_connect_error());
    }
  
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phno = $_POST['phno'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
  
    $sql= "INSERT INTO `farmzen`.`contact_us` (`name`, `email`, `phno`,`subject`,`message`) VALUES ('$name', '$email', '$phno','$subject','$message');";
    
    if($con->query($sql) == true){
      
  
      $to=$email;
      $subject="Thanks for contacting Farmzen";
      $message="We got your message";
      $from="chirag.tester@gmail.com";
      $headers="From: $from";
  
      if(mail($to,$subject,$message,$headers)){
        echo "Mail Sent";
      }
      else{
        echo "Email Failed";
      }
  
  
    }
    else{
      echo "ERROR: $sql <br> $con->error";
    }
  
    $con->close();
  
  }
  
  
  
  
  
  
  

?>
    <div class="page-banner-wrap text-center bg-cover" style="background-image: url('assets/img/contact-banner.jpg')">
        <div class="container">
            <div class="page-heading text-white">
                <h1>contact us</h1>
            </div>
        </div>
    </div>
    <div class="breadcrumb-wrapper">
        <div class="container">
            <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">contact Us</li>
                </ol>
            </nav>
        </div>
    </div>

    <section class="contact-page-wrap section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-contact-card card1">
                        <div class="top-part">
                            <div class="icon">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="title">
                                <h4>Email Address</h4>
                                <span>Send mail anytime</span>
                            </div>
                        </div>
                        <div class="bottom-part">                            
                            <div class="info">
                                <p>info@caribcons.com</p>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-contact-card card2">
                        <div class="top-part">
                            <div class="icon">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="title">
                                <h4>Phone Number</h4>
                                <span>call us anytime</span>
                            </div>
                        </div>
                        <div class="bottom-part">                            
                            <div class="info">
                                <p>+1 (786) 703-8199</p>
                             
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-contact-card card3">
                        <div class="top-part">
                            <div class="icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="title">
                                <h4>Office Address</h4>
                                <span>Send mail anytime</span>
                            </div>
                        </div>
                        <div class="bottom-part">                            
                            <div class="info">
                                <p>1769 NW 79 Ave,</p>
                                <p> Miami, USA</p>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pt-5">
                <div class="block-contents mb-30 pt-60">
                    <div class="section-title text-center">
                        <h5 class="text-center">contact</h5>
                        <span>fil the form</span>
                        <h2>get <span>in touch</span></h2>
                    </div>
                </div>

                <div class="col-12 col-lg-12">
                    <div class="contact-form">                                                        
                        <form action="contact.php" class="row" id="contact-form" method="POST">
                            <div class="col-md-6 col-12">
                                <div class="single-personal-info">
                                    <label for="fname">Full Name</label>
                                    <input type="text" name="name" id="fname" placeholder="Enter Name" >                                         
                                </div>
                            </div>                            
                            <div class="col-md-6 col-12">
                                <div class="single-personal-info">
                                    <label for="email">Email Address</label>
                                    <input type="email" name="email" id="email" placeholder="Enter Email Address" >                                         
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="single-personal-info">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" name="phno" id="phone" placeholder="Enter Number">                                         
                                </div>
                            </div>                                      
                            <div class="col-md-6 col-12">
                                <div class="single-personal-info">
                                    <label for="subject">Subject</label>
                                    <input type="text" name="subject" id="subject" placeholder="Enter Subject">                                         
                                </div>
                            </div>                                      
                            <div class="col-md-12 col-12">
                                <div class="single-personal-info">
                                    <label for="message">Enter Message</label>
                                    <textarea id="message" name="message" placeholder="Enter message"></textarea>                                        
                                </div>
                            </div>                                      
                            <div class="col-md-12 col-12 text-center">
                                <input class="submit-btn" type="submit" value="Submit">
                            </div>                                      
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-branch-wrapper section-padding pt-0">
        <div class="container">
            <div class="col-lg-8 offset-lg-2 text-center col-12">
                <div class="section-title-2">
                  
                    <h1>Contact Us</h1>
                </div>
</div>
        </div>
        <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3590.9569083589763!2d-80.25837498578758!3d25.83796521174748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b974766e2273%3A0xc378a5bcd2b93801!2sCaribbean%20Consolidate!5e0!3m2!1sen!2sin!4v1676115057762!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>



    <footer class="footer-1 footer-wrap">
        <div class="footer-widgets-wrapper theme-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xl-3">
                        <div class="about-transland pe-md-5 pe-xl-0">
                            <a href="index.html">
                                <img src="assets/img/footer-logo.png" alt="transland">
                            </a>
                            <p>Transland Logistics Services is a global supplier of transport and logistics solutions. We have offices in more than 20 countries and agents.</p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-2">
                        <div class="single-footer-wid ps-xl-4">
                            <div class="wid-title">
                                <h6>Our Divisions</h6>
                            </div>
                            <ul>
                                <li><a href="about.html">What We Do</a></li>
                                <li><a href="contact.html">Request a Freight</a></li>
                                <li><a href="services.html">Track & Trace</a></li>
                                <li><a href="services.html">Rail Freight</a></li>
                                <li><a href="services.html">Maritime Transport</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-2">
                        <div class="single-footer-wid ps-xl-2">
                            <div class="wid-title">
                                <h6>Our Services</h6>
                            </div>
                            <ul>
                                <li><a href="#">What We Do</a></li>
                                <li><a href="#">Request a Freight</a></li>
                                <li><a href="#">Track & Trace</a></li>
                                <li><a href="#">Rail Freight</a></li>
                                <li><a href="#">Maritime Transport</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-2">
                        <div class="single-footer-wid">
                            <div class="wid-title">
                                <h6>Industry Sectors</h6>
                            </div>
                            <ul>
                                <li><a href="#">Electronics Industry</a></li>
                                <li><a href="#">Manufacturing</a></li>
                                <li><a href="#">Semicon & Solar</a></li>
                                <li><a href="#">Oil & Gas Cargo</a></li>
                                <li><a href="#">Energy & Chemicals</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <div class="single-footer-wid site-info-widget">
                            <div class="wid-title">
                                <h6>Get In Touch</h6>
                            </div>
                            <div class="get-in-touch">
                                <div class="single-contact-info">
                                    <div class="icon id1">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="contact-info">
                                        <span>94 Roa Malaka, West Jakarta City, UK</span>
                                    </div>
                                </div>
                                <div class="single-contact-info">
                                    <div class="icon id2">
                                        <i class="fal fa-phone"></i>
                                    </div>
                                    <div class="contact-info">
                                        <span>+91-7687287658</span>
                                    </div>
                                </div>
                                <div class="single-contact-info">
                                    <div class="icon id3">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="contact-info">
                                        <span>info@example.com</span>
                                    </div>
                                </div>
                            </div>

                            <div class="newsletter_widget">
                                <div class="newsletter_box">
                                    <form action="#">
                                        <input type="email" placeholder="Enter email address" required>
                                        <button class="submit-btn" type="submit"><i class="fas fa-envelope-open"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container align-items-center">
                <div class="bottom-content-wrapper">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="copy-rights">
                                <p>&copy;2022 <strong>Transland</strong>, All Rights Reserved</p>
                            </div>
                        </div>
                        <div class="col-md-6 mt-2 mt-md-0 col-12 text-md-end">
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>   

    <!--  ALl JS Plugins
    ====================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/jquery.easing.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imageload.min.js"></script>
    <script src="assets/js/scrollUp.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/slick-animation.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/metismenu.js"></script>
    <script src="assets/js/active.js"></script>
</body>

</html>