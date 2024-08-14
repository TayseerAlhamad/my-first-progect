<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/tabs-first-icon.png" type="image/x-icon">
    <title>Gym STU</title>
<!--

TemplateMo 548 Training Studio

https://templatemo.com/tm-548-training-studio

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-training-studio.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    <?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "inex";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $resultwelcome = mysqli_query($conn, "SELECT * FROM welcome");
$rowwelcome = mysqli_fetch_assoc( $resultwelcome);


$resultprogram = mysqli_query($conn, "SELECT * FROM program");
$rowprogram = mysqli_fetch_assoc( $resultprogram);

$resultclass = mysqli_query($conn, "SELECT * FROM class");
$rowclass = mysqli_fetch_assoc( $resultclass);


$resultfooter = mysqli_query($conn, "SELECT * FROM footer");
$rowfooter = mysqli_fetch_assoc( $resultfooter);
    ?>
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">Gym<em> STU</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#features">About</a></li>
                            <li class="scroll-to-section"><a href="#our-classes">Classes</a></li>
                            <li class="scroll-to-section"><a href="#schedule">Schedules</a></li>
                            <li class="scroll-to-section"><a href="#contact-us">Contact</a></li>
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
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/Images/Slider.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6><?php echo $rowwelcome['vidou1']; ?></h6>
                <h2><?php echo $rowwelcome['vidou2']; ?></h2>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Features Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Choose <em>Program</em></h2>
                        <img src="assets/images/line-dec.png" alt="waves">
                        <p>Training Studio is free CSS template for gyms and fitness centers. You are allowed to use this layout for your business website.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="<?php echo $rowprogram['gum1']; ?>" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4><?php echo $rowprogram['gum2']; ?></h4>
                                <p><?php echo $rowprogram['gum3']; ?></p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="<?php echo $rowprogram['gum4']; ?>" alt="second one">
                            </div>
                            <div class="right-content">
                                <h4><?php echo $rowprogram['gum5']; ?></h4>
                                <p><?php echo $rowprogram['gum6']; ?></p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="<?php echo $rowprogram['gum7']; ?>" alt="third gym training">
                            </div>
                            <div class="right-content">
                                <h4><?php echo $rowprogram['gum8']; ?></h4>
                                <p><?php echo $rowprogram['gum9']; ?></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="<?php echo $rowprogram['gum10']; ?>" alt="fourth muscle">
                            </div>
                            <div class="right-content">
                                <h4><?php echo $rowprogram['gum11']; ?></h4>
                                <p><?php echo $rowprogram['gum12']; ?></p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="<?php echo $rowprogram['gum13']; ?>" alt="training fifth">
                            </div>
                            <div class="right-content">
                                <h4><?php echo $rowprogram['gum14']; ?></h4>
                                <p><?php echo $rowprogram['gum15']; ?></p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="<?php echo $rowprogram['gum16']; ?>" alt="gym training">
                            </div>
                            <div class="right-content">
                                <h4><?php echo $rowprogram['gum17']; ?></h4>
                                <p><?php echo $rowprogram['gum18']; ?></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->

    <!-- ***** Our Classes Start ***** -->
    <section class="section" id="our-classes">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Our <em>Classes</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Our Classes Are The Best! Let's Take a Look !</p>
                    </div>
                </div>
            </div>
            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                  <li><a href='#tabs-1'><img src="assets/images/tabs-first-icon.png" alt="">First Training Class</a></li>
                  <li><a href='#tabs-2'><img src="assets/images/tabs-first-icon.png" alt="">Second Training Class</a></a></li>
                  <li><a href='#tabs-3'><img src="assets/images/tabs-first-icon.png" alt="">Third Training Class</a></a></li>
                  <li><a href='#tabs-4'><img src="assets/images/tabs-first-icon.png" alt="">Fourth Training Class</a></a></li>
                  <div class="main-rounded-button"><a href="#">View All Schedules</a></div>
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content'>
                  <article id='tabs-1'>
                    <img src="<?php echo $rowclass['trn1'];?>" alt="First Class">
                    <h4><?php echo $rowclass['trn2'];?></h4>
                    <p><?php echo $rowclass['trn3'];?></p>
                    <div class="main-button">
                        <a href="#">View Schedule</a>
                    </div>
                  </article>
                  <article id='tabs-2'>
                    <img src="<?php echo $rowclass['trn4'];?>" alt="Second Training">
                    <h4><?php echo $rowclass['trn5'];?></h4>
                    <p><?php echo $rowclass['trn6'];?></p>
                    <div class="main-button">
                        <a href="#">View Schedule</a>
                    </div>
                  </article>
                  <article id='tabs-3'>
                    <img src="<?php echo $rowclass['trn7'];?>" alt="Third Class">
                    <h4><?php echo $rowclass['trn8'];?></h4>
                    <p><?php echo $rowclass['trn9'];?></p>
                    <div class="main-button">
                        <a href="#">View Schedule</a>
                    </div>
                  </article>
                  <article id='tabs-4'>
                    <img src="<?php echo $rowclass['trn10'];?>" alt="Fourth Training">
                    <h4><?php echo $rowclass['trn11'];?></h4>
                    <p><?php echo $rowclass['trn12'];?></p>
                    <div class="main-button">
                        <a href="#">View Schedule</a>
                    </div>
                  </article>
                </section>
              </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Classes End ***** -->


    <!-- ***** schedule Start ***** -->
    <section class="section" id="schedule">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>Classes <em>Schedule</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Let's check Your Time !</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="filters">
                        <ul class="schedule-filter">
                            <li class="active" data-tsfilter="monday">Monday</li>
                            <li data-tsfilter="tuesday">Tuesday</li>
                            <li data-tsfilter="wednesday">Wednesday</li>
                            <li data-tsfilter="thursday">Thursday</li>
                            <li data-tsfilter="friday">Friday</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <div class="schedule-table filtering">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="day-time">Fitness Class</td>
                                    <td class="monday ts-item show" data-tsmeta="monday">10:00AM - 11:30AM</td>
                                    <td class="tuesday ts-item" data-tsmeta="tuesday">2:00PM - 3:30PM</td>
                                    <td>William G. Stewart</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Muscle Training</td>
                                    <td class="friday ts-item" data-tsmeta="friday">10:00AM - 11:30AM</td>
                                    <td class="thursday friday ts-item" data-tsmeta="thursday" data-tsmeta="friday">2:00PM - 3:30PM</td>
                                    <td>Paul D. Newman</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Body Building</td>
                                    <td class="tuesday ts-item" data-tsmeta="tuesday">10:00AM - 11:30AM</td>
                                    <td class="monday ts-item show" data-tsmeta="monday">2:00PM - 3:30PM</td>
                                    <td>Boyd C. Harris</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Yoga Training Class</td>
                                    <td class="wednesday ts-item" data-tsmeta="wednesday">10:00AM - 11:30AM</td>
                                    <td class="friday ts-item" data-tsmeta="friday">2:00PM - 3:30PM</td>
                                    <td>Hector T. Daigle</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Advanced Training</td>
                                    <td class="thursday ts-item" data-tsmeta="thursday">10:00AM - 11:30AM</td>
                                    <td class="wednesday ts-item" data-tsmeta="wednesday">2:00PM - 3:30PM</td>
                                    <td>Bret D. Bowers</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** schedule End ***** -->

    
    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3384.6169461073064!2d35.83082746500778!3d31.97128708122279!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca17ed1965e8d%3A0xd93a3913affa5945!2sKing%20Hussein%20Business%20Park!5e0!3m2!1sen!2sjo!4v1642358001976!5m2!1sen!2sjo" width="100%" height="600px" allowfullscreen="" ></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-12 col-sm-12">
                              <fieldset>
                                <input name="subject" type="text" id="subject" placeholder="Subject">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button">Send Message</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container  justify-content-between">
            <div class="row justify-content-between">
                <div class="col-lg-3  col-md-6 col-sm-6">
					<div>
						<h6>contact Us</h6>
						<p><?php echo $rowfooter['text1'];?></p>
						<p><?php echo $rowfooter['text2'];?></p>
						<p><?php echo $rowfooter['text3'];?></p>
					</div>
				</div>
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div>
						<h6><?php echo $rowfooter['text4'];?></h6>
						<p><?php echo $rowfooter['text5'];?></p>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3384.5981193460716!2d35.83166281500771!3d31.971797681222625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca17ed1965e8d%3A0xd93a3913affa5945!2sKing%20Hussein%20Business%20Park!5e0!3m2!1sen!2sjo!4v1641715952139!5m2!1sen!2sjo" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>        
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div>
						<h6>follow Me</h6>
						<p><?php echo $rowfooter['text6'];?></p>
						<div class="row">
							<div class="align-items-center d-flex" >
								<a target="_blank" href="<?php echo $rowfooter['text7'];?>"><i class="fa fa-facebook"></i></a>
								<a target="_blank" href="<?php echo $rowfooter['text8'];?>"><i class="fa fa-instagram"></i></a>
								<a target="_blank" href="<?php echo $rowfooter['text9'];?>"><i class="fa fa-twitter"></i></a>
							</div>
						</div>
					</div>
				</div>
                <div class="col-lg-12" style="margin-top: 30px;text-align: center;">
                    <hr>
                    <div>
                        <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<em>Clever Mind POB</em> <script>document.write(new Date().getFullYear());</script>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>