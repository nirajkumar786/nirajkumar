<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.beez3
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" 
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >


<head>
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
</head>


<body>
<header class="header">
  <!-- <upper ki doo line apne se li gyi hai> -->
    <jdoc:include type="modules" name ="menu" style="none" />
    <jdoc:include type="modules" name ="header" style="none" />
    <jdoc:include type="component" />

    
  <div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <a href="#" class="navbar-brand scroll-top logo  animated bounceInLeft"><b><i>menu</i></b></a> </div>
      <!--/.navbar-header-->
      <li class="active" id="firstLink"><a href="#home" class="scroll-link">Home</a></li>
          <li><a href="#services" class="scroll-link">Events</a></li>
          <li><a href="#aboutUs" class="scroll-link">About Us</a></li>
          <li><a href="#work" class="scroll-link">Gallery</a></li> 
          <li><a href="#team" class="scroll-link">Family</a></li>
          <li><a href="#contactUs" class="scroll-link">Contact Us</a></li>
      <!-- <niche ki do line se koi fark ni pda hai> -->
      <div id="main-nav" class="collapse navbar-collapse">
        <ul class="nav navbar-nav" id="mainNav">

        </ul>
      </div>
      <!--/.navbar-collapse--> 
    </nav>
    <!--/.navbar--> 
  </div>
  <!--/.container--> 
</header>
<!--/.header-->

<div id="#top"></div>
<section id="home">
  <div class="banner-container"> 
    
  <!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="images/slides/maple.jpg" alt="" />
                
                    
                     <h3>David & Kristean</h3> 
					<p><strong>Are Getting Married</strong></p> 
					<p>26 Dec 2017</p>					
					 
                </div>
              </li>
              
            </ul>
        </div>
	<!-- end slider -->
  </div> 
</section>
<section id="services">
    <div class="container">
      <div class="heading wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h2>Events</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
          </div>
        </div> 
      </div>
      <div class="text-center our-services">
        <div class="row">
          <div class="col-sm-4 wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; -webkit-animation-duration: 1000ms; animation-delay: 300ms; -webkit-animation-delay: 300ms; animation-name: fadeInDown; -webkit-animation-name: fadeInDown;">
            <div class="service-icon">
              <i class="fa fa-heart"></i>
            </div>
            <div class="service-info">
              <h3>Engagement</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="450ms" style="visibility: visible; animation-duration: 1000ms; -webkit-animation-duration: 1000ms; animation-delay: 450ms; -webkit-animation-delay: 450ms; animation-name: fadeInDown; -webkit-animation-name: fadeInDown;">
            <div class="service-icon">
              <i class="fa fa-music"></i>
            </div>
            <div class="service-info">
              <h3>Wedding Day</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="550ms" style="visibility: visible; animation-duration: 1000ms; -webkit-animation-duration: 1000ms; animation-delay: 550ms; -webkit-animation-delay: 550ms; animation-name: fadeInDown; -webkit-animation-name: fadeInDown;">
            <div class="service-icon">
              <i class="fa fa-cloud"></i>
            </div>
            <div class="service-info">
              <h3>Reception</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay="650ms" style="visibility: visible; animation-duration: 1000ms; -webkit-animation-duration: 1000ms; animation-delay: 650ms; -webkit-animation-delay: 650ms; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">
            <div class="service-icon">
              <i class="fa fa-coffee"></i>
            </div>
            <div class="service-info">
              <h3>Photography</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay="750ms" style="visibility: visible; animation-duration: 1000ms; -webkit-animation-duration: 1000ms; animation-delay: 750ms; -webkit-animation-delay: 750ms; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">
            <div class="service-icon">
              <i class="fa fa-bitbucket"></i>
            </div>
            <div class="service-info">
              <h3>Party</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay="850ms" style="visibility: visible; animation-duration: 1000ms; -webkit-animation-duration: 1000ms; animation-delay: 850ms; -webkit-animation-delay: 850ms; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">
            <div class="service-icon">
              <i class="fa fa-gift"></i>
            </div>
            <div class="service-info">
              <h3>Family Dinner</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<section id="aboutUs">
  <div class="container"> 
	    <div class="heading wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h2>About Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
          </div>
        </div> 
      </div>
    <div class="row feature design"> 
	  <div class="col-md-4"> 
        <h3>Bride</h3>
        <p>Lorem ipsum dolor sit amet, ea eum labitur scsstie percipitoleat fabulas complectitur deterruisset at pro. Odio quaeque reformidans est eu, expetendis intellegebat has ut, viderer invenire ut his. Has molestie percipit an. Falli volumus efficiantur sed id, ad vel noster propriae. Ius ut etiam vivendo, graeci iudicabit constituto at mea. No soleat fabulas prodesset vel, ut quo solum dicunt.
          Nec et jority have suffered alteration. </p> 
		  </div>
		  <div class="col-md-4">
		  <img src="images/feature-img-1.png" alt="" width="100%"> 
		  </div>
		  <div class="col-md-4">
		  <h3>Groom</h3>
        <p>Odio quaeque reformidans est eu, expetendis intellegebat has ut, viderer invenire ut his. Has molestie percipit an. Falli volumus efficiantur sed id, ad vel noster propriae. Ius ut etiam vivendo, graeci iudicabit constituto at mea. No soleat fabulas prodesset vel, ut quo solum dicunt.
          Nec et amet vidisse mentitumsstie percipitoleat fabulas. </p> 
      </div> 
    </div>
	
    </div>
	
</section> 
<section id="work" class="page-section page">
  <div class="container text-center">   
	 <div class="heading wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h2>Our Gallery</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
          </div>
        </div> 
      </div>
    <div class="row">
      <div class="col-md-12">
        <div id="portfolio"> 
          <ul class="items list-unstyled clearfix animated fadeInRight showing" data-animation="fadeInRight" style="position: relative; height: 438px;">
            <li class="item branding" style="position: absolute; left: 0px; top: 0px;"> <a href="images/work/1.jpg" class="fancybox"> <img src="images/work/1.jpg" alt="">
              <div class="overlay"> <span><i class="fa fa-search"></i></span> </div>
              </a> </li>
            <li class="item photography" style="position: absolute; left: 292px; top: 0px;"> <a href="images/work/2.jpg" class="fancybox"> <img src="images/work/2.jpg" alt="">
              <div class="overlay"> <span><i class="fa fa-search"></i></span> </div>
              </a> </li>
            <li class="item branding" style="position: absolute; left: 585px; top: 0px;"> <a href="images/work/3.jpg" class="fancybox"> <img src="images/work/3.jpg" alt="">
              <div class="overlay"> <span><i class="fa fa-search"></i></span> </div>
              </a> </li>
            <li class="item photography" style="position: absolute; left: 877px; top: 0px;"> <a href="images/work/4.jpg" class="fancybox"> <img src="images/work/4.jpg" alt="">
              <div class="overlay"> <span><i class="fa fa-search"></i></span> </div>
              </a> </li>
            <li class="item photography" style="position: absolute; left: 0px; top: 219px;"> <a href="images/work/5.jpg" class="fancybox"> <img src="images/work/5.jpg" alt="">
              <div class="overlay"> <span><i class="fa fa-search"></i></span> </div>
              </a> </li>
            <li class="item web" style="position: absolute; left: 292px; top: 219px;"> <a href="images/work/6.jpg" class="fancybox"> <img src="images/work/6.jpg" alt="">
              <div class="overlay"> <span><i class="fa fa-search"></i></span> </div>
              </a> </li>
            <li class="item photography" style="position: absolute; left: 585px; top: 219px;"> <a href="images/work/7.jpg" class="fancybox"> <img src="images/work/7.jpg" alt="">
              <div class="overlay"> <span><i class="fa fa-search"></i></span> </div>
              </a> </li>
            <li class="item web" style="position: absolute; left: 877px; top: 219px;"> <a href="images/work/8.jpg" class="fancybox"> <img src="images/work/8.jpg" alt="">
              <div class="overlay"> <span><i class="fa fa-search"></i></span> </div>
              </a> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section> 
<section id="team" class="page-section">
  <div class="container"> 
	 <div class="heading wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h2>Family Members</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
          </div>
        </div> 
      </div>
    <!-- Team Member's Details -->
    <div class="team-content">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-6"> 
          <!-- Team Member -->
          <div class="team-member pDark"> 
            <!-- Image Hover Block -->
            <div class="member-img"> 
              <!-- Image  --> 
              <img class="img-responsive" src="images/photo-white.png" alt=""> </div>
            <!-- Member Details -->
            <h4>John Doe</h4>
            <!-- Designation --> 
            <span class="pos">Family Member</span> </div>
          </div> 
        <div class="col-md-3 col-sm-6 col-xs-6"> 
          <!-- Team Member -->
          <div class="team-member pDark"> 
            <!-- Image Hover Block -->
            <div class="member-img"> 
              <!-- Image  --> 
              <img class="img-responsive" src="images/photo-2.jpg" alt=""> </div>
            <!-- Member Details -->
            <h4>Larry Doe</h4>
            <!-- Designation --> 
            <span class="pos">Family Member</span> </div>
          </div> 
        <div class="col-md-3 col-sm-6 col-xs-6"> 
          <!-- Team Member -->
          <div class="team-member pDark"> 
            <!-- Image Hover Block -->
            <div class="member-img"> 
              <!-- Image  --> 
              <img class="img-responsive" src="images/photo-3.jpg" alt=""> </div>
            <!-- Member Details -->
            <h4>Ranith Kays</h4>
            <!-- Designation --> 
            <span class="pos">Family Member</span> </div>
          </div> 
        <div class="col-md-3 col-sm-6 col-xs-6"> 
          <!-- Team Member -->
          <div class="team-member pDark"> 
            <!-- Image Hover Block -->
            <div class="member-img"> 
              <!-- Image  --> 
              <img class="img-responsive" src="images/photo-4.jpg" alt=""> </div>
            <!-- Member Details -->
            <h4>Joan Ray</h4>
            <!-- Designation --> 
            <span class="pos">Family Member</span> </div>
          </div> 
      </div>
    </div>
  </div>
  <!--/.container--> 
</section>
<section id="contactUs" class="contact-parlex">
  <div class="parlex-back">
    <div class="container">     
		 <div class="heading wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h2>Our Address</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
          </div>
        </div> 
      </div> 	  
      <div class="row mrgn30">
	    <div class="col-md-3">
            	<div class="col clr-white">
                   <h4>Contact us</h4>
                   <ul>
                        <li>1th Avenue, New York - United States</li>
                        <li>Phone: +22 342 2345 345 | Fax: +22 724 2342 343 </li>
                        <li>Email: <a href="mailto:info@example.com" title="Email Us">info@example.com</a></li>
                        <li>Skype: <a href="skype:my.test?call" title="Skype us">my-company</a></li>
                    </ul>
                 </div>
            </div>
	   <div class="col-md-9">
	   	<!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->
		<form name="sentMessage" id="contactForm"  novalidate> 
		<div class="control-group">
		<div class="controls">
		<input type="text" class="form-control" 
		placeholder="Full Name" id="name" required
		data-validation-required-message="Please enter your name" />
		<p class="help-block"></p>
		</div>
		</div> 	
		<div class="control-group">
		<div class="controls">
		<input type="email" class="form-control" placeholder="Email" 
		id="email" required
		data-validation-required-message="Please enter your email" />
		</div>
		</div> 	

		<div class="control-group">
		<div class="controls">
		<textarea rows="10" cols="100" class="form-control" 
		placeholder="Message" id="message" required
		data-validation-required-message="Please enter your message" minlength="5" 
		data-validation-minlength-message="Min 5 characters" 
		maxlength="999" style="resize:none"></textarea>
		</div>
		</div> 		 
		<div id="success"> </div> <!-- For success/fail messages -->
		<button type="submit" class="btn btn-primary pull-right">Send</button><br />
    </form>
    

	   
    </div>
    </div>
  <div class="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.1340770729826!2d-74.01011958424394!3d40.71506484536422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a1f6858d603%3A0x5aabae5909853c90!2sChurch+St%2C+New+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1447594194009" width="100%" height="650" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
  </div>
  <!--/.container--> 
</div>
</section> 
<!--/.page-section-->
<section class="copyright">
<div class="container">
  <div class="row">
    <div class="col-sm-12 text-center"> Copyright 2018 | All Rights Reserved - <a href="https://webthemez.com/tag/free" target="_blank">Free Templates</a> by WebThemez </div>
  </div>
  <!-- / .row --> 
</div>
</section>
<a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a> 

<!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]--> 
<script src="js/modernizr-latest.js"></script> 
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<script src="js/jquery.isotope.min.js" type="text/javascript"></script> 
<script src="js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script> 
<script src="js/jquery.nav.js" type="text/javascript"></script> 
<script src="js/jquery.fittext.js"></script> 
<script src="js/waypoints.js"></script> 
<script src="flexslider/jquery.flexslider.js"></script>
<script src="contact/jqBootstrapValidation.js"></script>
<script src="contact/contact_me.js"></script>
<script src="js/custom.js" type="text/javascript"></script> 
<script src="js/owl-carousel/owl.carousel.js"></script>
</body>
</html>
