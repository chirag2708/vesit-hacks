<?php


if(isset($_GET["cid"]))
{
    $route_id=$_GET['cid'];
}


$img = array();
$route_ = array();
$stops = array();
$map = array();

include_once('dbset.php');

$sql = "SELECT * FROM services WHERE srno=$route_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   
    array_push($img,$row["img"]);
    array_push($route_,$row["route_"]);
    array_push($stops,$row["stops"]);
    array_push($map,$row["map"]);

  }
} else {
  echo "0 results";
}
$conn->close();

?>

<?php
include_once "header.php";
?>

    <div class="page-banner-wrap text-center bg-cover" style="background-image: url('assets/img/services/services.jpeg')">
        <div class="container">
            <div class="page-heading text-white">
                <h1>Service Details</h1>
            </div>
        </div>
    </div>
    <div class="breadcrumb-wrapper">
        <div class="container">
            <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item"><a href="services.php">services</a></li>
                  <li class="breadcrumb-item active" aria-current="page">service details</li>
                </ol>
            </nav>
        </div>
    </div>

    <section class="service-details-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-12 pe-xl-5">
                    <div class="service-details-contents">
                        <div class="service-feature-img">
                        <iframe <?php echo " $map[0]"; ?> </iframe>
                        </div>
                        <div class="contents">
                            <h2><?php echo "$route_[0]"; ?></h2>
                           

                            <div class="row mt-5">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-service-features">
                                        <div class="icon">
                                            <i class="flaticon-container"></i>
                                        </div>
                                        <h5>Part & Full Loads</h5>
                                        <p>Disruptive forces such as new technology and system</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-service-features">
                                        <div class="icon">
                                            <i class="flaticon-logistics-delievry"></i>
                                        </div>
                                        <h5>Intermodel Solutions</h5>
                                        <p>Disruptive forces such as new technology and system</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="single-service-features">
                                        <div class="icon">
                                            <i class="flaticon-drone-2"></i>
                                        </div>
                                        <h5>Latest Technology</h5>
                                        <p>Disruptive forces such as new technology and system</p>
                                    </div>
                                </div>
                            </div>

                            <h3>Going Beyond the Usual</h3>
                            <p>Crestfish stingray lenok leatherjacket Mexican golden trout cobia. Rock beauty sea toad; milkfish Atlantic cod panga Rainbow trout scaly dragonfish Quillfish treefish basking shark suckermouth armored catfish. Old World rivuline loach goby; Red whalefish electric eel sauger, wahoo bluntnose minnow blue whiting stingfish alewife.</p>
                            
                            <div class="row mt-4">
                                <div class="col-12 col-md-4">
                                    <h5>Industries served</h5>
                                    <ul class="checked-list mt-1">
                                        <li>Consumer goods</li>
                                        <li>Food & Beverage</li>
                                        <li>Electronics</li>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-4">
                                    <h5>Services offered</h5>
                                    <ul class="checked-list mt-1">
                                        <li>Shared warehousing</li>
                                        <li>Crossdocking / Transloading</li>
                                        <li>FBA Preaparation</li>
                                    </ul>
                                </div>
                            </div>

                            <blockquote>
                                “Nowrin I love you my jan, And the day came when the risk to remain tight in a bud was more painful than the risk it took to blossom.”
                                - Asheq Salman
                            </blockquote>

                            <h4>Security from Start to Finish</h4>
                            <p>Every supply chain is unique, and so are your business requirements. We understand it, which is why we are committed to being an integrator of end-to-end logistics services. This implies offering different solutions that can cater to your every individual supply chain need. Experience the comfort of end-to-end deliveries with just a single partner, and make your supply chain work to your competitive advantage.</p>

                            <div class="service-contact-form">
                                <div class="contact-form">
                                    <h2 style="font-size:25px;">Want to send your Fruits & Vegetables on this route?</h2>
                                    <h2 style="color:red;">Book Now</h2>

                                    <form action="mail.php" class="row" id="contact-form">
                                        <div class="col-md-6 col-12">
                                            <div class="single-personal-info">
                                                <input type="text" id="fname" placeholder="Enter Name" >                                         
                                            </div>
                                        </div>                            
                                        <div class="col-md-6 col-12">
                                            <div class="single-personal-info">
                                                <input type="email" id="email" placeholder="Enter Email Address" >                                         
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="single-personal-info">
                                                <input type="text" id="phone" placeholder="Enter Number">                                         
                                            </div>
                                        </div>                                      
                                        <div class="col-md-6 col-12">
                                            <div class="single-personal-info">
                                                <input type="int" id="subject" placeholder="Enter Total Package Weight(in kg)">                                         
                                            </div>
                                        </div>  
                                        <div class="col-md-6 col-12">
                                            <div class="single-personal-info">
                                                <input type="text" id="phone" placeholder="Enter Boarding Stop">                                         
                                            </div>
                                        </div>                                      
                                        <div class="col-md-6 col-12">
                                            <div class="single-personal-info">
                                                <input type="text" id="subject" placeholder="Enter Depature Stop">                                         
                                            </div>
                                        </div>                                      
                                        <div class="col-md-12 col-12">
                                            <div class="single-personal-info">
                                                <input type="date" id="message" placeholder="Select Date"></input>                                        
                                            </div>
                                        </div>                                      
                                        <div class="col-md-12 col-12">
                                            <input class="submit-btn" type="submit" value="Book Now">
                                        </div>                                      
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-12 mt-5 mt-xl-0">
                    <div class="service-sidebar-wrapper">
                        <div class="single-sidebar-widgets">
                            <div class="wid-title">
                                <h3 style="font-size:20px;color:red;">Intermediate Cities</h3>
                            </div>
                            <div class="services-category-link">
                                <?php
                               $string = $stops[0];
                               $arrayString=  explode("-", $string );
                               
                                for($i = 0;$i<count($arrayString);$i++)
                                { 
                                ?> 
                                <a href="#"><?php echo $arrayString[$i];?></a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>

                        

                        <div class="help-line-card text-white">
                            <div class="wid-title">
                                <h3>How we can help you?</h3>
                                <p>Ronquil coho salmon red snapper duckbill lungfish southern angelfish</p>
                            </div>
                            <div class="single-menu-box">
                                <div class="icon">
                                    <i class="fal fa-phone-volume"></i>
                                </div>
                                <div class="content">
                                    <p>Contact</p>
                                    <span>+012 (345) 67 89</span>
                                </div>
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