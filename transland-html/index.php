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
    $phone = $_POST['phone'];
    $delivery_city = $_POST['delivery_city'];
    $departure_city = $_POST['departure_city'];
    $weight = $_POST['weight'];
    $truck_type = $_POST['truck_type'];
  
    $sql= "INSERT INTO `farmzen`.`cost` (`name`, `email`, `phone`,`delivery_city`,`departure_city`,`weight`,`truck_type`) VALUES ('$name', '$email', '$phone','$delivery_city','$departure_city','$weight','$truck_type');";
    
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


<section class="hero-wrapper hero-1">
        <div class="hero-slider-active transland-dots">
            <div class="single-slide">
                <div class="slide-bg bg-cover wow zoomIn" style="background-image: url('assets/img/home1/slide1.png');">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-xxl-6 col-lg-8 col-sm-10">
                            <div class="hero-contents pe-lg-3 text-white">
                                <h1 class="fs-lg animated" data-animation-in="fadeInRight" style="font-size:50px;" data-delay-in="0.2">Get logistics delivered.<br><span>On time, all the time.</span></h1>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-pop-video-box-wrapper d-flex text-white align-items-center" data-animation-in="fadeInRight" data-delay-in="1s">
                    <div class="text col-6">
                        <h6>We're thriving and building better</h6>
                    </div>
                    
                </div>
            </div>
            <div class="single-slide">
                <div class="slide-bg bg-cover wow zoomIn" style="background-image: url('assets/img/home1/slide2.png');">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-xxl-6 col-lg-8 col-sm-10">
                            <div class="hero-contents pe-lg-3 text-white">
                                <h1 class="fs-lg animated" data-animation-in="fadeInRight" style="font-size:30px;" data-delay-in="0.2">Delivered Right,<br><span> On Time.</span></h1>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-pop-video-box-wrapper d-flex text-white align-items-center" data-animation-in="fadeInRight" data-delay-in="1s">
                    <div class="text col-6">
                        <h6>Logistics for the new era</h6>
                    </div>
                    
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44px" height="44px" id="circle" fill="none" stroke="currentColor">
                <circle r="20" cy="22" cx="22" id="translandcircle" />
            </symbol>
        </svg>
    </section>

    <!-- <section class="hero-wrapper hero-1">
        <div class="hero-slider-active transland-dots">
            <div class="single-slide">
                <div class="slide-bg bg-cover wow zoomIn" style="background-image: url('assets/img/home1/slide1.jpg');">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-xxl-6 col-lg-8 col-sm-10">
                            <div class="hero-contents pe-lg-3 text-white">
                                <h1 class="fs-lg animated" data-animation-in="fadeInRight" data-delay-in="0.2">Innovative
                                    thing <span>Provide</span></h1>
                                <p class="pe-lg-5 mb-4 animated" data-animation-in="fadeInRight" data-delay-in="0.5">We are committed to providing our customers with exceptional service while offering our employees </p>
                                <a href="contact.html" data-animation-in="fadeInRight" data-delay-in="0.8" class="theme-btn border-style me-sm-4 mt-4 animated">Track your order</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-pop-video-box-wrapper d-flex text-white align-items-center" data-animation-in="fadeInRight" data-delay-in="1s">
                    <div class="text col-6">
                        <h6>We're thriving and building better</h6>
                    </div>
                    <div class="video-wrapper bg-overlay bg-cover bg-center col-6 justify-content-center align-items-center" style="background-image: url('assets/img/faq-video-pup.jpg')">
                        <a href="https://www.youtube.com/watch?v=E1xkXZs0cAQ" class="popup-video play-video"><i class="fas fa-play"></i></a> 
                    </div>
                </div>
            </div> -->
            <!-- <div class="single-slide">
                <div class="slide-bg bg-cover" style="background-image: url('assets/img/home1/slide2.jpg');">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-xxl-6 col-lg-8 col-sm-10">
                            <div class="hero-contents pe-lg-3 text-white">
                                <h1 class="fs-lg animated" data-animation-in="fadeInRight" data-delay-in="0.2">best Logistics in the <span>World</span></h1>
                                <p class="pe-lg-5 mb-4" data-animation-in="fadeInRight" data-delay-in="0.5">We are committed to providing our customers with exceptional service while offering our employees </p>
                                <a href="contact.html" data-animation-in="fadeInRight" data-delay-in="0.8" class="theme-btn border-style me-sm-4 mt-4">Track your order</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-pop-video-box-wrapper d-flex text-white align-items-center" data-animation-in="fadeInRight" data-delay-in="1s">
                    <div class="text col-6">
                        <h6>We're thriving and building better</h6>
                    </div>
                    <div class="video-wrapper bg-overlay bg-cover bg-center col-6 justify-content-center align-items-center" style="background-image: url('assets/img/faq-video-pup.jpg')">
                        <a href="https://www.youtube.com/watch?v=E1xkXZs0cAQ" class="popup-video play-video"><i class="fas fa-play"></i></a> 
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44px" height="44px" id="circle" fill="none" stroke="currentColor">
                <circle r="20" cy="22" cx="22" id="translandcircle" />
            </symbol>
        </svg>
    </section> -->

    <section class="about-us-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 text-center text-lg-start">
                    <div class="about-img">
                        <img src="assets/img/background.jpeg" width="530" height="450">
                    </div>
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0 ps-lg-5">
                    <div class="block-contents">
                        <div class="section-title">
                            <h5 class="textleft relative">about</h5>
                            
                            <h2><span>Overview</span></h2>
                        </div>
                    </div>
                    <div class="about-info-contents">
                        <p>Truck system for delivery for vegetables/ fruits
                            farmers to customers.We will provide transportation from one
                            source to destination.There will be intermediate stops between the
                            source and destination.Farmers can select their source and destination from all the stops mentioned and can transport their goods</p>
                    </div>
                    <!-- <div class="company-ceo d-flex align-items-center">
                        <div class="ceo-img bg-cover" style="background-image: url('assets/img/man-img.jpg')"></div>
                        <div class="ceo-info">
                            <h5>Alexis D. Denzol</h5>
                            <span>Head Of Idea</span>
                        </div> -->
                        <!-- <div class="autograph-signature"><img src="assets/img/signature.png" alt=""></div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>


    <section class="work-process-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 mb-40">
                    <div class="block-contents text-center">
                        <div class="section-title">
                            <h5>Featured</h5>
                            <span>Featured Service</span>
                            <h2>What We Do ?</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="work-steps-list">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-work-steps">
                            <div class="icon">
                                <img src="assets/img/icons/hasselfree.png" alt="">
                            </div>
                            <div class="content">
                                <h4>Hastle-Free truck rental</h4>
                                <p>Book mini truck online. Whenever you need, wherever you need</p>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-work-steps">
                            <div class="icon">
                                <img src="assets/img/icons/pricing.png" alt="">
                            </div>
                            <div class="content">
                                <h4>Transparent Pricing</h4>
                                <p>Enjoy the most affordable rates in town with our transparent pricing</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-work-steps">
                            <div class="icon">
                                <img src="assets/img/icons/safetruck.png" alt="">
                            </div>
                            <div class="content">
                                <h4>Safe and Reliable Trucks</h4>
                                <p>Superior safety ensured with our team of verified & trained partners</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

 

    


            </div>
        </div>
    </section>



    <section class="request-a-quote-section theme-bg bg-cover calculate-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-12">
                    <div class="block-contents mb-20 pr-30">
                        <div class="section-title">
                            <h5 class="textleft">quote</h5>
                            <span>Request a quote</span>
                            <h2>Cost <span>Calculator</span></h2>
                            <p class="text-white">You can know the Price for your Transportation in Advance. We Offers intellgent concepts for road and tail and well as complex special transport services</p>
                        </div>
                    </div>
                    <div class="row me-xl-5 text-white">
                        <div class="col-sm-6">
                            <div class="single-request-element">
                                <div class="icon">
                                    <i class="fal fa-warehouse"></i>
                                </div>
                                <h6>Warehouse</h6>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-request-element">
                                <div class="icon">
                                    <i class="fal fa-location"></i>
                                </div>
                                <h6>Online Tracking</h6>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-request-element">
                                <div class="icon">
                                    <i class="fal fa-headset"></i>
                                </div>
                                <h6>Support 24/7</h6>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-request-element">
                                <div class="icon">
                                    <i class="fal fa-shield-check"></i>
                                </div>
                                <h6>Cargo Insurance</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-7 col-12">
                    <div class="request-quote-form-wrapper mt-5 mt-xl-0 ms-xl-3">
                        <h4>Personal & Shipment data</h4>
                        <div class="request-quote-form">
                            <form action="index.php" method="POST">
                                <div class="row d-flex align-item-center">
                                    <div class="col-sm-6 col-12">
                                        <input type="text" name="name" placeholder="Full name">
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <input type="email" name="email" placeholder="Email">
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <input type="text" name="phone" placeholder="Phone">
                                    </div>

                                    <div class="col-sm-6 col-12">
                                        <input type="text" name="delivery_city" placeholder="Delivery city">
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <input type="text" name="departure_city" placeholder="City of departure">
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <select name="weight" class="wide" id="transfreight" >
                                            <option value="type">Under 10kgs</option>
                                            <option value="air">Between 10kgs and 50kgs</option>
                                            <option value="ship">Between 50kgs and 100kgs</option>
                                            <option value="cargo">Between 100kgs and 150kgs</option>
                                            <option value="road">Between 150kgs and 200kgs</option>
                                            <option value="rail">Between 200kgs and 250kgs</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <select name="truck_type" class="wide" id="incoterms" >
                                            <option value="incotermstype">Vehicles</option>
                                            <option value="value1">Small Truck</option>
                                            <option value="value2">Tempo Carrier</option>
                                            <option value="value3">Container Truck</option>
                                            
                                        </select>
                                    </div>
                                 
                                    

                                    <div class="col-sm-12">
                                        <input type="submit" class="theme-btn" value="Request a quote">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


            

           
                
                
            </div>
        </div>
    </section>

    

   

   
 

    <footer class="footer-1 footer-wrap">
        <div class="footer-widgets-wrapper theme-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xl-3">
                        <div class="about-transland pe-md-5 pe-xl-0">
                            <a href="index.html">
                                <img src="assets/img/logo.jpeg" alt="transland">
                            </a>
                            <p>Farmzen Logistics Services is a supplier of transport and logistics solutions. We have offices in more than 20 countries and agents.</p>
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
    <script src="assets/js/nice-select2.js"></script>
    <script src="assets/js/active.js"></script>
</body>

</html>