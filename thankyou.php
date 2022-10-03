<?php
    require_once('core/dbconnection.php');
?>
<!doctype html>
<html lang="en">
   <head>
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
                        <h1>Thank You</h1>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="thankYou">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Thank You for Your Interest in Our Services!</h2>
                    <p>Your message has been successfully received, and an expert will get back to you shortly.</br>
                     With any comments or questions, please call <a href="tel:+91-623-942-1395">+91-623-942-1395</a>  or send an email to <a href="mailto:info@ditstek.com">info@ditsek.com</a></p>
				     <a href="<?php echo $url;?>"class="btn btn-custom siteBtn blueBtn mt-3">Back to home</a>
                </div>
            </div>
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