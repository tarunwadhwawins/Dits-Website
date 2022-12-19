<?php
require_once('core/dbconnection.php');
?>
<!doctype html>
<html lang="en">

<head>
   <?php include_once('common/commonmeta.php'); ?>
   <!--common css-->
   <?php include_once('common/commoncss.php'); ?>
   <!---->
</head>

<body>
   <!---->
   <!--header -->
   <?php include_once('common/topheader.php'); ?>
   <!--slider-->
   <section class="innerBanner">
      <!--navigation-->
      <?php include_once('common/header.php'); ?>
      <!---->
      <div class="bannerMain">
         <img src="assets/images/blogbanner2.jpg" alt="image" />
         <div class="bannerDesc">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <h1>Experience Designer, Production</h1>
                     <button class="btn btn-custom siteBtn blueBtn mt-3" data-toggle="modal" data-target="#exampleModal">Apply Now</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="jobInfo">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <h5>About DITS</h5>
               <p>We are one of the emerging software development companies in the IT sector, working with the view to encourage young talent and prefer knowledge and expertise over experience. We started our journey with developing customized software solutions for offshore clients and went forward to grow into a stable and empowering software solution consultancy company in the past years. We have worked with large as well startup’s scale companies in the overseas market and have represented ourselves as development partners in Techcrunch 2017.</p>
               <h5>What you’ll do:</h5>
               <ul>
                  <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste cupiditate animi ipsam maxime quod similique voluptates minima molestiae.</li>
                  <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste cupiditate animi ipsam maxime quod similique voluptates minima molestiae.</li>
                  <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste cupiditate animi ipsam maxime quod similique voluptates minima molestiae.</li>
                  <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste cupiditate animi ipsam maxime quod similique voluptates minima molestiae.</li>
               </ul>
               <h5>What we’re looking for:</h5>
               <ul>
                  <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste cupiditate animi ipsam maxime quod similique voluptates minima molestiae.</li>
                  <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste cupiditate animi ipsam maxime quod similique voluptates minima molestiae.</li>
                  <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste cupiditate animi ipsam maxime quod similique voluptates minima molestiae.</li>
                  <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste cupiditate animi ipsam maxime quod similique voluptates minima molestiae.</li>
               </ul>
               <h5>How we’ll take care of you:</h5>
               <p>Our job titles may span more than one career level. The starting base pay for this role is between $124,000 and $171,500. The actual base pay is dependent upon many factors, such as: training, transferable skills, work experience, business needs and market demands. The base pay range is subject to change and may be modified in the future. This role may also be eligible for bonus, equity, benefits, and Employee Travel Credits. </p>
               <h5>Our commitment to inclusion & belonging:</h5>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima ipsa laboriosam perspiciatis repellat natus maxime blanditiis debitis magni, facilis ducimus ullam et cupiditate tempora nemo ab assumenda dolores, iste ratione. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque doloremque corrupti dicta ipsam sequi eius, odit facere ullam nam atque recusandae a quae ab libero iusto maxime vitae, reiciendis expedita!</p>
            </div>
            <div class="col-sm-12 text-center mt-4">
               <button class="btn btn-custom siteBtn blueBtn mt-3" data-toggle="modal" data-target="#exampleModal">Apply Now</button>
            </div>
         </div>
      </div>
   </section>
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered contact" role="document">
         <div class="modal-content modal-md">
            <div class="row">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
               <div class="col-sm-12">
                  <div class="contactInner">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="heading">
                              <h3>Apply Job</h3>
                           </div>
                        </div>
                        <div class="col-sm-12">
                           <div id='message'></div>
                        </div>
                     </div>
                     <form name="contactForm" method="POST">
                        <div class="row">
                           <div class="col-sm-6">
                              <div class="contactForm">
                                 <input type="text" class="form-control" name="contact_first_name" id="contactFirstName" placeholder="Name" />
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="contactForm">
                                 <input type="text" class="form-control" name="contact_email" id="contactEmail" placeholder="Email Id" />
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="contactForm">
                                 <select class="form-control" name="contact_findUs" id="contactFindUs">
                                    <option value="" selected>Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="contactForm">
                                 <input type="text" class="form-control" name="contact_phone" id="contactPhone" placeholder="Phone Number" maxlength="10" />
                              </div>
                           </div>

                           <div class="col-sm-4">
                              <div class="contactForm">
                                 <select class="countries form-control" id="modelcountryId" name="country">
                                    <option value="">Select Country</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-sm-4">
                              <div class="contactForm">
                                 <select class="states form-control" id="modelstateId" name="state">
                                    <option value="">Select State</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-sm-4">
                              <div class="contactForm">
                                 <input type="text" class="form-control" name="city" id="cityId" placeholder="City" />
                              </div>
                           </div>

                           <div class="col-sm-12">
                              <div class="contactForm">
                                 <select class="form-control" name="contact_findUs" id="contactFindUs">
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
                                 <label>Upload Resume</label>
                                 <input type="file" class="form-control" placeholder="Upload Resume" />
                              </div>
                           </div>
                           <div class="col-sm-12">
                              <div class="contactForm">
                                 <textarea class="form-control" name="contact_message" placeholder="Message" id="contactMessage"></textarea>
                              </div>
                           </div>
                           <div class="col-sm-12">
                              <div class="g-recaptcha" data-sitekey="6LcKMkYjAAAAAOEUgrEnosQrqfnsYOyjvlByc61o" data-callback="captchSubmit"></div>
                              <div class="recaptchaerror">Please validate captcha</div>
                           </div>
                           <div class="col-sm-12">
                              <div class="contactForm pb-0">
                                 <button type="submit" class="btn btn-custom siteBtn">
                                    <div class="formLoader"></div>Submit
                                 </button>
                              </div>
                           </div>

                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--footer-->
   <?php include_once('common/footer.php'); ?>
   <!--scripts-->
   <?php include_once('common/commonscripts.php'); ?>
   <!---->
</body>

</html>