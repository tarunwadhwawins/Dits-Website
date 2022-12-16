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
                     <h1>Join Our Team</h1>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="whyJoin">
      <div class="container">
         <div class="row">
            <div class="col-sm-12 text-center">
               <h2>Why you should join our team</h2>
            </div>
            <div class="col-md-4">
               <div class="innerBox">
                  <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48">
                     <path d="M19.5 27q0-6.3 4.35-10.65Q28.2 12 34.5 12v3q-5.05 0-8.525 3.475Q22.5 21.95 22.5 27Zm6 0q0-3.75 2.625-6.375T34.5 18v3q-2.5 0-4.25 1.75T28.5 27Zm-16-15.5q-1.55 0-2.65-1.1-1.1-1.1-1.1-2.65 0-1.55 1.1-2.65Q7.95 4 9.5 4q1.55 0 2.65 1.1 1.1 1.1 1.1 2.65 0 1.55-1.1 2.65-1.1 1.1-2.65 1.1ZM4 21.25v-4.5q0-1.05.75-1.775.75-.725 1.75-.725h6q2.4 0 4.1-1.4 1.7-1.4 2.2-3.6h3.05q-.4 2.7-2.275 4.75T15 16.9v4.35Zm34.5 13q-1.55 0-2.65-1.1-1.1-1.1-1.1-2.65 0-1.55 1.1-2.65 1.1-1.1 2.65-1.1 1.55 0 2.65 1.1 1.1 1.1 1.1 2.65 0 1.55-1.1 2.65-1.1 1.1-2.65 1.1ZM33 44v-4.35q-2.7-.85-4.575-2.9T26.15 32h3.05q.5 2.2 2.2 3.6 1.7 1.4 4.1 1.4h6q1.05 0 1.775.725Q44 38.45 44 39.5V44Z" />
                  </svg>
                  <h5>Flexible Working Hours</h5>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium eos minima odio ea obcaecati repellendus molestias quia vitae perferendis animi in distinctio, laboriosam nam, nostrum aspernatur fugiat. Voluptatem, et sit!</p>
               </div>
            </div>
            <div class="col-md-4">
               <div class="innerBox">
                  <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48">
                     <path d="m20.85 26.35-1.8-1.8q.4-.55.625-1.15.225-.6.225-1.25t-.225-1.275q-.225-.625-.625-1.125l1.8-1.8q.85.9 1.25 1.975.4 1.075.4 2.225 0 1.15-.4 2.225-.4 1.075-1.25 1.975Zm3.6 3.6-1.8-1.8q1.2-1.45 1.775-2.95.575-1.5.575-3.05 0-1.55-.575-3.075-.575-1.525-1.775-2.925l1.8-1.8q1.6 1.8 2.35 3.775.75 1.975.75 4.025 0 2.05-.75 4.025-.75 1.975-2.35 3.775ZM9.5 23.75q-1.55 0-2.65-1.1-1.1-1.1-1.1-2.65 0-1.55 1.1-2.65 1.1-1.1 2.65-1.1 1.55 0 2.65 1.1 1.1 1.1 1.1 2.65 0 1.55-1.1 2.65-1.1 1.1-2.65 1.1ZM2 31.5v-.65q0-1.05.575-1.925T4.15 27.6q1.25-.55 2.575-.825Q8.05 26.5 9.5 26.5t2.775.275q1.325.275 2.575.825 1 .45 1.575 1.325T17 30.85v.65Zm36.5-7.75q-1.55 0-2.65-1.1-1.1-1.1-1.1-2.65 0-1.55 1.1-2.65 1.1-1.1 2.65-1.1 1.55 0 2.65 1.1 1.1 1.1 1.1 2.65 0 1.55-1.1 2.65-1.1 1.1-2.65 1.1ZM31 31.5v-.65q0-1.05.575-1.925T33.15 27.6q1.25-.55 2.575-.825Q37.05 26.5 38.5 26.5t2.775.275q1.325.275 2.575.825 1 .45 1.575 1.325T46 30.85v.65Z" />
                  </svg>
                  <h5>Open Communication</h5>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium eos minima odio ea obcaecati repellendus molestias quia vitae perferendis animi in distinctio, laboriosam nam, nostrum aspernatur fugiat. Voluptatem, et sit!</p>
               </div>
            </div>
            <div class="col-md-4">
               <div class="innerBox">
                  <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48">
                     <path d="M12 44v-8.6q-2.85-2.6-4.425-6.075Q6 25.85 6 22q0-7.5 5.25-12.75T24 4q6.25 0 11.075 3.675Q39.9 11.35 41.35 17.25l2.75 10.9q.2.7-.25 1.275t-1.2.575H38v7q0 1.25-.875 2.125T35 40h-5v4h-3v-7h8V27h5.7l-2.25-9q-1.2-4.85-5.25-7.925T24 7q-6.25 0-10.625 4.325T9 21.9q0 3.2 1.325 6.1 1.325 2.9 3.725 5.15l.95.9V44Zm12.85-18.5Zm-2.4 3.8h3l.15-2.2q.6-.1 1.125-.425.525-.325.925-.725l2.1.7 1.4-2.4-1.5-1.2q.25-.7.25-1.45t-.25-1.45l1.5-1.2-1.4-2.4-2.1.7q-.4-.4-.95-.7-.55-.3-1.1-.45l-.15-2.2h-3l-.15 2.2q-.55.15-1.1.45-.55.3-.95.7l-2.1-.7-1.4 2.4 1.5 1.2q-.25.7-.25 1.45t.25 1.45l-1.5 1.2 1.4 2.4 2.1-.7q.4.4.925.725.525.325 1.125.425Zm1.5-4.2q-1.45 0-2.475-1.025Q20.45 23.05 20.45 21.6q0-1.45 1.025-2.475Q22.5 18.1 23.95 18.1q1.45 0 2.475 1.025Q27.45 20.15 27.45 21.6q0 1.45-1.025 2.475Q25.4 25.1 23.95 25.1Z" />
                  </svg>
                  <h5>Upgrade your skills</h5>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium eos minima odio ea obcaecati repellendus molestias quia vitae perferendis animi in distinctio, laboriosam nam, nostrum aspernatur fugiat. Voluptatem, et sit!</p>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="partUs">
      <div class="container">
         <div class="row">
            <div class="col-sm-12 text-center mb-5">
               <h2>So, You Want to be part of us?</h2>
               <p>We're always looking for creative, talented self-starteds to join the DITS family.<br> Check out our open roles below and fill out an application.</p>
            </div>
            <div class="col-sm-4">
               <div class="departments">
                  <h6>Departments</h6>
                  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                     <a class="nav-link active" id="v-pills-all-tab" data-toggle="pill" href="#v-pills-all" role="tab" aria-controls="v-pills-all" aria-selected="true">All Departments</a>
                     <a class="nav-link" id="v-pills-Administrative-tab" data-toggle="pill" href="#v-pills-Administrative" role="tab" aria-controls="v-pills-Administrative" aria-selected="false">Administrative</a>
                     <a class="nav-link" id="v-pills-Analytics-tab" data-toggle="pill" href="#v-pills-Analytics" role="tab" aria-controls="v-pills-Analytics" aria-selected="false">Analytics</a>
                     <a class="nav-link" id="v-pills-Business-tab" data-toggle="pill" href="#v-pills-Business" role="tab" aria-controls="v-pills-Business" aria-selected="false">Business Development</a>
                     <a class="nav-link" id="v-pills-Design-tab" data-toggle="pill" href="#v-pills-Design" role="tab" aria-controls="v-pills-Design" aria-selected="false">Design</a>
                     <a class="nav-link" id="v-pills-Engineering-tab" data-toggle="pill" href="#v-pills-Engineering" role="tab" aria-controls="v-pills-Engineering" aria-selected="false">Engineering</a>
                     <a class="nav-link" id="v-pills-Intern-tab" data-toggle="pill" href="#v-pills-Intern" role="tab" aria-controls="v-pills-Intern" aria-selected="false">Intern</a>
                     <a class="nav-link" id="v-pills-Marketing-tab" data-toggle="pill" href="#v-pills-Marketing" role="tab" aria-controls="v-pills-Marketing" aria-selected="false">Marketing</a>
                  </div>
               </div>
            </div>
            <div class="col-sm-8">
               <div class="featuredRole">
                  <h6>Featured Role</h6>
                  <div class="tab-content" id="v-pills-tabContent">
                     <div class="tab-pane fade show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                        <ul>
                           <li>
                              <div class="left">
                                 <p>Business Analyst</p>
                                 <span>2 Positions</span>
                              </div>
                              <div class="right">
                                 <a href="position" class="btn btn-custom blueBtn">Apply Now</a>
                              </div>
                           </li>
                           <li>
                              <div class="left">
                                 <p>Systems Engineer</p>
                                 <span>2 Positions</span>
                              </div>
                              <div class="right">
                                 <a href="position" class="btn btn-custom blueBtn">Apply Now</a>
                              </div>
                           </li>
                        </ul>
                     </div>
                     <div class="tab-pane fade" id="v-pills-Administrative" role="tabpanel" aria-labelledby="v-pills-Administrative-tab">
                        <div class="noJob">Sorry, no open positions were found using the current criteria.</div>
                     </div>
                     <div class="tab-pane fade" id="v-pills-Analytics" role="tabpanel" aria-labelledby="v-pills-Analytics-tab">
                        <div class="noJob">Sorry, no open positions were found using the current criteria.</div>
                     </div>
                     <div class="tab-pane fade" id="v-pills-Business" role="tabpanel" aria-labelledby="v-pills-Business-tab">
                        <ul>
                           <li>
                              <div class="left">
                                 <p>Business Analyst</p>
                                 <span>2 Positions</span>
                              </div>
                              <div class="right">
                                 <a href="position" class="btn btn-custom blueBtn">Apply Now</a>
                              </div>
                           </li>
                        </ul>
                     </div>
                     <div class="tab-pane fade" id="v-pills-Design" role="tabpanel" aria-labelledby="v-pills-Design-tab">
                        <div class="noJob">Sorry, no open positions were found using the current criteria.</div>
                     </div>
                     <div class="tab-pane fade" id="v-pills-Engineering" role="tabpanel" aria-labelledby="v-pills-Engineering-tab">
                        <ul>
                           <li>
                              <div class="left">
                                 <p>Systems Engineer</p>
                                 <span>2 Positions</span>
                              </div>
                              <div class="right">
                                 <a href="position" class="btn btn-custom blueBtn">Apply Now</a>
                              </div>
                           </li>
                        </ul>
                     </div>
                     <div class="tab-pane fade" id="v-pills-Intern" role="tabpanel" aria-labelledby="v-pills-Intern-tab">
                        <div class="noJob">Sorry, no open positions were found using the current criteria.</div>
                     </div>
                     <div class="tab-pane fade" id="v-pills-Marketing" role="tabpanel" aria-labelledby="v-pills-Marketing-tab">
                        <div class="noJob">Sorry, no open positions were found using the current criteria.</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!--footer-->
   <?php include_once('common/footer.php'); ?>
   <!--scripts-->
   <?php include_once('common/commonscripts.php'); ?>
   <!---->
</body>

</html>