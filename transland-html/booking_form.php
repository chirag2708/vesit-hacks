<?php
include_once "header.php";

if(isset($_POST['name'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $weight = $_POST['weight'];
    $date = $_POST['date'];
    $boarding = $_POST['boarding'];
    $depature = $_POST['depature'];
  
    $sql= "INSERT INTO `farmzen`.`contact_us` (`name`, `email`, `phone`,`weight`,`date`,`boarding`,`depature`) VALUES ('$name', '$email', '$phone','$weight','$date','$boarding','$depature');";
    
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

$conn->close();
}
?>
 <div class="service-contact-form">
                            <div class="contact-form">
<form action="#" class="row" id="contact-form">
                                    <div class="col-md-6 col-12">
                                        <div class="single-personal-info">
                                            <input type="text" id="fname" name="name" placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="single-personal-info">
                                            <input type="email" id="email" name="email" placeholder="Enter Email Address">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="single-personal-info">
                                            <input type="text" id="phone" name="phone" placeholder="Enter Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="single-personal-info">
                                            <input type="int" name="weight" id="subject"
                                                placeholder="Enter Total Package Weight(in kg)">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="single-personal-info">
                                            <input type="date" name="date" id="message" placeholder="Select Date"></input>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="single-personal-info">
                                            <label for="Boarding_Point" style="font-size:20px;padding-right:40px;">Boarding Point</label>
                                            <select type="text" name="boarding" id="Boarding_Point">
                                                <?php
                                                $string = $stops[0];
                                                $arrayString=  explode("-", $string );
                                                
                                                    for($i = 0;$i<count($arrayString);$i++)
                                                    { 
                                                    ?>

                                                <option value="type" id="Boarding_Point" placeholder="Boarding Point">
                                                    <?php echo $arrayString[$i];?>
                                                </option>
                                                <?php
                                            }
                                            ?>
                                            </select>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="single-personal-info">
                                            <label for="Depature_Point" style="font-size:20px;padding-right:40px;">Departure Point</label>
                                            <select type="text" name="depature" id="Depature_Point">
                                                <?php
                                                $string = $stops[0];
                                                $arrayString=  explode("-", $string );
                                                
                                                    for($i = 0;$i<count($arrayString);$i++)
                                                    { 
                                                    ?>

                                                <option value="type" id="Depature_Point" placeholder="Boarding Point">
                                                    <?php echo $arrayString[$i];?>
                                                </option>
                                                <?php
                                            }
                                            ?>
                                            </select>

                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12 col-12">
                                        <input class="submit-btn" type="submit" value="Book Now">
                                    </div>
                                </form>
                                        </div>
                                        </div>



                                <footer class="footer-1 footer-wrap">
    <div class="footer-widgets-wrapper theme-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xl-3">
                    <div class="about-transland pe-md-5 pe-xl-0">
                        <a href="index.html">
                            <img src="assets/img/footer-logo.png" alt="transland">
                        </a>
                        <p>Transland Logistics Services is a global supplier of transport and logistics solutions. We
                            have offices in more than 20 countries and agents.</p>
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
                                    <button class="submit-btn" type="submit"><i
                                            class="fas fa-envelope-open"></i></button>
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