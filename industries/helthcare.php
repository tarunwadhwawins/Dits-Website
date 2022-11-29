<?php
    require_once('../core/dbconnection.php');
?>
<!doctype html>
<html lang="en">
   <head>
      <?php include_once('../common/commonmeta.php'); ?>
       <!--common css-->
       <?php include_once('../common/commoncss.php'); ?>
	  <!---->
   </head>
   <body>
      <!--header -->
      <?php include_once('../common/topheader.php'); ?>
      <!--slider-->
      <section class="innerBanner">
         <!--navigation-->
         <?php include_once('../common/header.php'); ?>
         <!---->
         <div class="bannerMain industriesBanner">
            <img src="../assets/industriesImages/medical.jpg" alt="Custom Application Development" title="Custom Application Development" class="img-fluid" />
            <div class="bannerDesc">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-12 test-center">
                        <h1>INDUSTRIES WE SERVE </h1>
                        <p>Healthcare</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <?php include_once('../common/popup-form.php'); ?>
      </div>


	   <section class="innerPages industries">
			<div class="container">
				<div class="row commonPadding">
                    <div class="col-md-12">
                        <div class="hdDecription mt-3 mb-2">
                            <div class="row  reverseCol mb-3">
                                <div class="col-md-6">
                                    <div class="thumbImage helthCareThumbImage py-2">
                                        <img src="../assets/domains/healthcare.jpg" alt="image" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="thumbDesc helthCareThumbDesc">
                                        <div class="innerThumbDesc">
                                            <h3 class="py-2">Custom Healthcare Software Development Company: Right From Ideation To Launch And Its Maintenance</h2>
                                            <p>Healthcare companies thrive to provide the best possible healthcare, but the unprecedented hurdles they face in terms of improving the quality of care delivered in fragmented supply chains, reduced cost margins, sky-high R&D costs, and compliance constraints at the same time is inevitable. The importance of modifying healthcare operations as more dynamic, agile, and affordable has been duly emphasized. We have developed solutions from scratch, maintained and enhanced solutions as per the state and federal regulations and compliances while supporting all primary interoperability standards, including <strong>HL7, ICD-9, ICD-10, CDA, CCR, Third Party Integrations and Compliances (HIPAA)</strong> and more.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="thumbDesc pt-3">
                                        <div class="innerThumbDesc">
                                            <h3 class="py-2">Our Healthcare Software Solutions</h3>
                                            <p>We strive to build robust, <strong>custom-built healthcare software solutions </strong> and <strong>healthcare mobile applications </strong> while operating as a digital consultant for health institutions to accomplish digital transformation initiatives to deliver secure, business-centric, user-friendly services seamlessly.</p>
                                            <ul class="buisnessDomains">
                                                <li><a href="#">Electronic Medical Record(EMR)</a></li>
                                                <li><a href="#">Electronic Health Record(EHR)</a></li>
                                                <li><a href="#">Personal Health Record(PHR)</a></li>
                                                <li><a href="#">Healthcare Compliance Solutions</a></li>
                                                <li><a href="#">TeleHealth and TeleMedicine</a></li>
                                                <li><a href="#">Home Health and Care Management Solutions</a></li>
                                                <li><a href="#">Laboratory & Pharmacy Systems Integration</a></li>
                                                <li><a href="#">Practice Management Solutions</a></li>
                                                <li><a href="#">Population Health Management Applications</a></li>
                                                <li><a href="#">SAAS Based Healthcare applications</a></li>
                                                <li><a href="#">Patient Engagement and Monitoring Solutions</a></li>
                                                <li><a href="#">Behavioral Healthcare Solutions</a></li>
                                                <li><a href="#">Custom Healthcare Software Development</a></li>
                                                <li><a href="#">Population Health Management Solutions</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</section>
			
		
      <!--footer-->
      <?php include_once('../common/footer.php'); ?>
      <!--scripts-->
       <?php include_once('../common/commonscripts.php'); ?>
	  <!---->
   </body>
</html>