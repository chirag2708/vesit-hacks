<?php
include_once "header.php";

$img = array();
$route_ = array();
$stops = array();
include_once('dbset.php');

$sql = "SELECT * FROM services";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      
      array_push($img,$row["img"]);
      array_push($route_,$row["route_"]);
      array_push($stops,$row["stops"]);
      
      
      
    }
  } else {
    echo "0 results";
  }
  
  $conn->close();

?>

    <div class="page-banner-wrap text-center bg-cover" style="background-image: url('assets/img/services/services.jpeg')">
        <div class="container">
            <div class="page-heading text-white">
                <h1>our Services</h1>
            </div>
        </div>
    </div>
    <div class="breadcrumb-wrapper">
        <div class="container">
            <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">services</li>
                </ol>
            </nav>
        </div>
    </div>

    <section class="our-service-provide section-padding theme-bg">
        <div class="container">
            <div class="col-12 col-lg-12 mb-40">
                <div class="block-contents text-center">
                    <div class="section-title">
                        <h5>Services</h5>
                        <span>Our Services</span>
                        <h2>Farmzen <span>Services</span></h2>
                    </div>
                </div>
            </div>

            <div class="row text-center">
            <?php
             
             for($i = 0;$i<count($img);$i++)
                { 
                    ?> 
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="single-our-service">
                        <div class="thumb bg-cover" style="background-image: url('<?php echo  "$img[$i]"; ?>')"></div>
                        <div class="content">
                            <div class="icon">
                               
                            </div>
                            <h3><a href="services-details.php?cid=<?php echo $i+1;?>"><?php echo  "$route_[$i]"; ?></a></h3>
                            <p><?php echo  "$stops[$i]"; ?></p>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
                
                
                
                
                
            </div>
        </div>
    </section> 
    
    <section class="work-process-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 mb-40">
                    <div class="block-contents text-center">
                        <div class="section-title">
                            <h5>steps</h5>
                            <span>Steps of Cooperation</span>
                            <h2>How we works</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="work-steps-list">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-work-steps">
                            <div class="icon">
                                <img src="assets/img/icons/step1.png" alt="">
                            </div>
                            <div class="content">
                                <h4>Listening you</h4>
                                <p>Greenling sleeper; Owens pupfish large-eye bream kokanee sprat shrimpfish pleasure</p>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-work-steps">
                            <div class="icon">
                                <img src="assets/img/icons/step3.png" alt="">
                            </div>
                            <div class="content">
                                <h4>Check all details</h4>
                                <p>Greenling sleeper; Owens pupfish large-eye bream kokanee sprat shrimpfish pleasure</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-work-steps">
                            <div class="icon">
                                <img src="assets/img/icons/step4.png" alt="">
                            </div>
                            <div class="content">
                                <h4>Fast & efficient delivery</h4>
                                <p>Greenling sleeper; Owens pupfish large-eye bream kokanee sprat shrimpfish pleasure</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


 


    <section class="testimonial-wrapper section-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 mb-40">
                    <div class="block-contents text-center">
                        <div class="section-title">
                            <h5>review</h5>
                            <span>Testimonials</span>
                            <h2>Client <span>Feedbacks</span></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-xl-4 col-12">
                    <div class="single-testimonial-card text-center">
                        <div class="client-img bg-cover bg-center" style="background-image: url('assets/img/blog/author2.jpg')"></div>
                        <div class="client-info">
                            <h4>Thomas Smith</h4>
                            <span>CEO & Engineer</span>
                        </div>
                        <div class="feedback">
                            <p>Great experience and impressive product. It was a very professional and technically competent job from the whole team.</p>

                            <div class="star">
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 col-12">
                    <div class="single-testimonial-card text-center">
                        <div class="client-img bg-cover bg-center" style="background-image: url('assets/img/blog/author3.jpg')"></div>
                        <div class="client-info">
                            <h4>Ernest Smith</h4>
                            <span>Business Man</span>
                        </div>
                        <div class="feedback">
                            <p>Great experience and impressive product. It was a very professional and technically competent job from the whole team.</p>

                            <div class="star">
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 col-12">
                    <div class="single-testimonial-card text-center">
                        <div class="client-img bg-cover bg-center" style="background-image: url('assets/img/blog/author_img.jpg')"></div>
                        <div class="client-info">
                            <h4>Salman Ahmed</h4>
                            <span>Project Manager</span>
                        </div>
                        <div class="feedback">
                            <p>Great experience and impressive product. It was a very professional and technically competent job from the whole team.</p>

                            <div class="star">
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                                <span class="fas fa-star"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    


    <footer class="footer-1 footer-wrap">
        <div class="footer-widgets-wrapper theme-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xl-3">
                        <div class="about-transland pe-md-5 pe-xl-0">
                            <a href="index.php">
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