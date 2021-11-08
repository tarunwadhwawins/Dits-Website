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
      <!--common css-->
      <?php include_once('common/commoncss.php'); ?>
      <!--slicl slider css-->
      <link rel="stylesheet" href="assets/css/slickslider/slick.css" type="text/css"/>
      <link rel="stylesheet" href="assets/css/slickslider/slick-theme.css" type="text/css"/>
      <link rel="stylesheet" href="assets/css/slickslider/custom.css" type="text/css"/>
      <!---->
   </head>
   <body>
      <!--header -->
      <?php include_once('common/topheader.php'); ?>
      <!--slider-->
      <section class="innerBanner">
         <!--navigation-->
         <?php include_once('common/header.php'); ?>
         <!---->
         <div class="bannerMain">
            <img src="assets/images/sassbanner.jpg" alt="image"/>
            <div class="bannerDesc inner">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-12">
                        <h1>Business Process <br> Management</h1>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="portfolioInner">
         <div class="container">
            <div class="row">
               <div class="col-sm-6">
                  <div class="portfolioInnerDesc">
                     <h2>SaaS Based Azure Hosted Business Process Management</h2>
                     <p>To provide a SAAS based automated workflow solution for Pre-release facilities developed in Microsoft Stack- Asp.Net.</p>
                     <h3>USP/Features</h3>
                     <ul>
                        <li>  Live in production since 2008. </li>
                        <li>  Live in 6+ US based Pre-Release Centers </li>
                        <li>  Implemented more than 100 Man-months of code. </li>
                        <li>  More than 500 live clients (managed in an year)</li>
                        <li>  Configurable Web forms (Business Process Management) </li>
                        <li>  Configurable Business Rules Engines </li>
                        <li>  Case notes and treatment groups  </li>
                        <li>  Scheduling &amp; Attendance </li>
                        <li>  Financial tracking </li>
                        <li>  More than 100 Asp.Net Web Forms </li>
                        <li>  Sign In/out tracking </li>
                        <li>  Customizable KPI based reports </li>
                     </ul>
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="portfolioInnerImage">
                     <img src="assets/images/sassimage.jpg" alt="image">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="portfolioInner portfolioBg">
         <div class="container">
            <div class="row">
               <div class="col-sm-6">
                  <div class="portfolioInnerImage">
                     <img src="assets/images/sassimage1.png" alt="image">
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="portfolioInnerDesc">
                     <h3>TECHNICAL IMPLEMENTATIONS</h3>
                     <ul>
                        <li> WebAPI based n-tier Architecture implementation using the Database First Approach </li>
                        <li> Implemented XML based custom forms and fields architecture </li>
                        <li> Azure hosted client side application using Azure Services </li>
                        <li> Devops for CI and CD using Azure deployment. </li>
                        <li> CLR Implementation In SQL. </li>
                        <li> Syncing of data between core and client side application using CLR </li>
                        <li> Checking API request and Response using Swagger tool(API Documentation from Sync Log screen) </li>
                        <li> MS Word forms with data merge </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- <section class="portfolioInner" id="readmore">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="portfolioInnerDesc">
                     <h2>More About Business Process Management</h2>
                     <p>To promote public safety and challenge offenders to become responsible productive citizens, organisations use The Business Process Management System (BPM), a computerized case file management system in compliance with Federal, State and local contracts to manage information on offenders throughout their sentences. The system gathers, stores, and retrieves information required for tracking offenders and making decisions concerning their cases.</p>
                     <p>The pre-release facilities  provides a cost-effective alternative to incarceration for offenders through a variety of community-based correctional/treatment programs. The organisations using BPM are dedicated to public safety and trust through professional, quality services which facilitate personal growth through positive change and individual responsibility of assigned offenders. Pre-Release Services with the help of BPM Is dedicated to providing resources and opportunities that SAFELY and SUCCESSFULLY restore offenders into society.</p>
                     <p>The application facilitates a SAAS based automated workflow solution for Pre-release facilities developed in Microsoft Stack. It offers community based programs such as misdemeanor probation, community service, electronic monitoring, and drug and alcohol testing and focuses on facilitating the users to manage information of federal offenders throughout their sentences. The system gathers, stores, and retrieves information required for tracking offenders and making decisions concerning their cases.BPM not only puts all the information facilities want at the touch of a key, but it has cut down drastically on paper files and helped us move into an electronic storage system.</p>
                  </div>
               </div>
            </div>
         </div>
      </section> -->
      <section class="commonSlider">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="commonTitle">
                     <h3>Project Screenshots</h3>
                  </div>
               </div>
               <div class="col-sm-12">
                  <div class="slider center">
                     <div class="slide">
                        <div class="cl">
                           <img src="assets/images/process1.jpg" alt="image">
                        </div>
                     </div>
                     <div class="slide">
                        <div class="cl">
                           <img src="assets/images/process2.jpg" alt="image">
                        </div>
                     </div>
                     <div class="slide">
                        <div class="cl">
                           <img src="assets/images/process3.jpg" alt="image">
                        </div>
                     </div>
                     <div class="slide">
                        <div class="cl">
                           <img src="assets/images/process4.jpg" alt="image">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
	  <div class="backPortfolio">
	   <a href="/portfolio">Back To Portfolio </a>
	   </div>
      <!--footer-->
      <?php include_once('common/footer.php'); ?>
      <!--scripts-->
      <?php include_once('common/commonscripts.php'); ?>
      <!--slick slider-->
      <!--<script src="assets/js/slickslider/slick.js"></script>-->
      <script src="assets/js/slickslider/slick1.js"></script>
      <script src="assets/js/slickslider/custom.js"></script>
   </body>
</html>