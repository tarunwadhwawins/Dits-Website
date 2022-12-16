<?php
require_once('core/dbconnection.php');
require_once('core/ajax.php');

?>
<!doctype html>
<html lang="en">

<head>

   <meta charset="utf-8">
   <meta http-equiv="pragma" content="no-cache" />
   <meta name="description" content="<?php echo $get_portfolio_details[0]['seo_desc'] ?>" />
   <meta name="keywords" content="<?php echo $get_portfolio_details[0]['seo_keyword'] ?>" />
   <meta name="author" content="Dits">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ABC</title>
   <meta name="robots" content="follow, index" />
   <link rel="canonical" href="<?php echo $current_url; ?>" />

   <meta name="twitter:card" content="summary_large_image" />
   <meta name="twitter:site" content="@ditstek" />
   <meta name="twitter:title" content="<?php echo $get_portfolio_details[0]['title'] ?>" />
   <meta name="twitter:description" content="<?php echo $get_portfolio_details[0]['seo_desc'] ?>" />
   <meta name="twitter:image" content="<?php echo $url; ?>assets/images/logo.png" />

   <meta property="og:title" content="<?php echo $get_portfolio_details[0]['title'] ?>" />
   <meta property="og:url" content="<?php echo $current_url; ?>" />
   <meta property="og:site_name" content="DITSTEK" />
   <meta property="og:image" content="<?php echo $url; ?>assets/images/logo.png" />
   <meta property="og:type" content="website" />
   <meta property="og:description" content="<?php echo $get_portfolio_details[0]['seo_desc'] ?>" /></code>

   <?php include_once('common/seo-scripts.php'); ?>
   <!--common css-->
   <?php include_once('common/commoncss.php'); ?>
   <!--slicl slider css-->
   <link rel="stylesheet" href="<?php echo $url; ?>assets/css/slickslider/slick.css" type="text/css" />
   <link rel="stylesheet" href="<?php echo $url; ?>assets/css/slickslider/slick-theme.css" type="text/css" />
   <link rel="stylesheet" href="<?php echo $url; ?>assets/css/slickslider/custom.css" type="text/css" />
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
      <div class="bannerMain barkWrapper">

         <img src="<?php echo $url; ?>assets/portfolioimage/165217614166_sassbanner.jpg" alt="Addiction Substance Abuse Management" />
         <div class="bannerDesc inner">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <h1>ABC</h1>
                     <div class="bannerButton mt-3" id="bannerExtFour" data-toggle="modal" data-target="#exampleModal"> <a href="javascript:void(0);" class="btn btn-custom blueBtn  siteBtn addCountry">Contact Form</a> </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="commonSlider mobileSlider">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <div class="commonTitle">
                  <h3>Project Screenshots</h3>
               </div>
            </div>
            <div class="col-sm-12">
               <div class="slider mobile">
                  <div class="slide">
                     <div class="cl">
                        <div class="mobileSlide">
                           <img src="<?php echo $url; ?>assets/mobile-portfolio/virtare-1.jpg" alt="Peer to Peer Car Sharing Application">
                        </div>
                     </div>
                  </div>
                  <div class="slide">
                     <div class="cl">
                        <div class="mobileSlide">
                           <img src="<?php echo $url; ?>assets/mobile-portfolio/virtare-2.jpg" alt="Peer to Peer Car Sharing Application">
                        </div>
                     </div>
                  </div>
                  <div class="slide">
                     <div class="cl">
                        <div class="mobileSlide">
                           <img src="<?php echo $url; ?>assets/mobile-portfolio/virtare-1.jpg" alt="Peer to Peer Car Sharing Application">
                        </div>
                     </div>
                  </div>
                  <div class="slide">
                     <div class="cl">
                        <div class="mobileSlide">
                           <img src="<?php echo $url; ?>assets/mobile-portfolio/virtare-2.jpg" alt="Peer to Peer Car Sharing Application">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <div class="backPortfolio">
      <a href="<?php echo $url; ?>portfolio">Back To Portfolio </a>
   </div>
   <!--footer-->
   <?php include_once('common/footer.php'); ?>
   <!--scripts-->
   <?php include_once('common/commonscripts.php'); ?>
   <!--slick slider-->
   <script src="<?php echo $url; ?>assets/js/slickslider/slick1.js"></script>
   <script src="<?php echo $url; ?>assets/js/slickslider/custom.js"></script>
</body>

</html>