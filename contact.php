<?php
    require_once('core/dbconnection.php');
?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="pragma" content="no-cache" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <?php include_once('common/commonmeta.php'); ?>
      <?php include_once('common/commoncss.php'); ?>
      <!---->
   </head>
   <body class="contactPage">
      <!--header -->
      <?php include_once('common/topheader.php'); ?>
      <!--slider-->
      <section class="innerBanner">
         <!--navigation-->
         <?php include_once('common/header.php'); ?>
         <!---->
		<div class="bannerMain textCenter">
            <img src="assets/images/contactbanner.png" alt="image"/>
            <div class="bannerDesc">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-12">
                        <h1>Contact Us</h1>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="contact">
         <div class="container">
            <div class="row">
               <div class="col-sm-8 pad-0">
                  <div class="contactInner">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="heading">
                              <h1>Send Us a Message</h1>
                           </div>
                        </div>
                        <div class="col-sm-12"> <div id='message'></div></div>
					  </div>
						<form name="contactForm" method="POST" id="contactForm">
						 <div class="row">
                        <div class="col-sm-6">
                           <div class="contactForm">
                              <input type="text" class="form-control" name="contact_first_name" id="contactFirstName" placeholder="Name" />  
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="contactForm">
                              <input type="text" class="form-control" name="contact_email" id="contactEmail" placeholder="Email Id"/>  
                           </div>
                        </div>
                        <div class="col-sm-4">
                           <div class="contactForm">
                              <select name="country" class="countries form-control" id="countryId">
                                 <option value="">Select Country</option>
                              </select>        
                           </div>
                        </div>
                        <div class="col-sm-4">
                           <div class="contactForm">
                              <select name="state" class="states form-control" id="stateId">
                                 <option value="">Select State</option>
                              </select>     
                           </div>
                        </div>
                        <div class="col-sm-4">
                           <div class="contactForm">
                              <select name="city" class="cities form-control" id="cityId">
                                 <option value="">Select City</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="contactForm">
							         <input type="text" class="form-control" name="contact_phone" id="contactPhone" placeholder="Phone Number" maxlength="10" />
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="contactForm">
                              <select class="form-control" name="contact_findUs" id="contactFindUs" >
                                 <option value="" selected>How did you find us?</option>
                                 <option value="Website">Website</option>
                                 <option value="Portals">Portals</option>
                                 <option value="Internet">Internet</option>
                                 <option value="Reference">Reference</option>
                                 <option value="Others">Others</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-sm-12">
                           <div class="contactForm">
                              <textarea class="form-control" name="contact_message" placeholder="Message" id="contactMessage"></textarea>
                           </div>
                        </div>
                        <div class="col-sm-12">
                           <div class="contactForm">
                              <input type="submit" value="Submit" class="btn btn-custom siteBtn">
                           </div>
                        </div>
					
                     </div>
						  </form>
                  </div>
               </div>
				<div class="col-sm-4 pad-0">
				  <div class="contactInfo">
                   <h2>Contact Information</h2>
				    <ul>
						 <li><span><i class="feather icon-map-pin"></i></span> SCO - 356 , First Floor, 44-D, Chandigarh, 160047</li> 
						 <li><a href="mailto:info@ditstek.com"><span><i class="feather icon-mail"></i></span> info@ditstek.com</a></li>
						 <li><a href="tel:+91-623-942-1395"><span><i class="feather icon-phone"></i></span> +91-623-942-1395 </a></li> 
						 <li><a href="tel:+91172-4080477"><span><i class="feather icon-phone"></i></span> +91172-4080477 </a></li>
					
						<li><a href="skype:-princy.dhupar-?chat"><span><i class="fa fa-skype"></i></span> princy.dhupar</a></li> 
					</ul>
				  </div>
				</div>
            </div>
         </div>
      </section>
      <section class="map">
         <div class="mapInner">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.1692856215063!2d76.74805941461024!3d30.71364099360461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fed29b0b81709%3A0x3d8bfc599f699034!2sDITS!5e0!3m2!1sen!2sin!4v1579238167937!5m2!1sen!2sin" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
         </div>
      </section>
      <!--footer-->
      <?php include_once('common/footer.php'); ?>
      <!--scripts-->
      <?php include_once('common/commonscripts.php'); ?>
      <!---->
      <!--scripts-->
        <script src="./assets/js/countrystatecity.js"></script>
      <!---->
   </body>
</html>