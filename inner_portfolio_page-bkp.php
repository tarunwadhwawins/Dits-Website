<?php
require_once('core/dbconnection.php');
require_once('core/ajax.php');

$slug = str_replace('.php', '', $_GET['title']);
$slug = trim($slug);
$get_portfolio_details = get_portfolio_details($conn, $slug);

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
   <title><?php echo $get_portfolio_details[0]['title'] ?></title>
   <!--common css-->
   <?php include_once('common/commoncss.php'); ?>
   <!--slicl slider css-->
   <link rel="stylesheet" href="../assets/css/slickslider/slick.css" type="text/css" />
   <link rel="stylesheet" href="../assets/css/slickslider/slick-theme.css" type="text/css" />
   <link rel="stylesheet" href="../assets/css/slickslider/custom.css" type="text/css" />
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
         <?php
         $imgTitle = str_replace(['.jpg', '.jpeg', '.png', '.gif'], '', $get_portfolio_details[0]['image']);
         ?>
         <img src="<?php echo $url; ?>assets/portfolioimage/<?php echo $get_portfolio_details[0]['image'] ?>" alt="Addiction Substance Abuse Management" title="<?php echo $imgTitle ?>" />
         <div class="bannerDesc inner">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <h1><?php echo $get_portfolio_details[0]['banner_heading'] ?></h1>
                     <div class="bannerButton mt-3" id="bannerExtFour" data-toggle="modal" data-target="#exampleModal"> <a href="javascript:void(0);" class="btn btn-custom blueBtn  siteBtn addCountry">Contact Form</a> </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <?php include_once('common/popup-form.php'); ?>
   </div>
   <section class="portfolioInner">
      <div class="container">
         <div class="row">
            <div class="col-sm-6">
               <div class="portfolioInnerDesc">
                  <h2><?php echo $get_portfolio_details[0]['fs_heading'] ?></h2>
                  <p><?php echo $get_portfolio_details[0]['fs_sub_heading'] ?></p>
                  <?php echo $get_portfolio_details[0]['fs_description'] ?>
               </div>
            </div>
            <div class="col-sm-6">
               <div class="portfolioInnerImage">
                  <?php
                  $fa = $get_portfolio_details[0]['fs_image'];
                  $section1Image  = (explode(',', $fa));
                  foreach ($section1Image as $key => $list) {
                  ?>
                     <img src="<?php echo $url; ?>assets/portfolioimage/<?php echo $list ?>" usemap="#image-map_<?php echo $key+1; ?>" alt="Addiction Substance Abuse Management" title="<?php echo str_replace(['.jpg', '.jpeg', '.png', '.gif'], '', $list) ?>">
                  <?php } ?>
                   <?php echo $get_portfolio_details[0]['image_text'] ?>
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
                  <?php
                  $ssImage = $get_portfolio_details[0]['ss_image'];
                  $section2Image  = (explode(',', $ssImage));
                  foreach ($section2Image as $list) {
                  ?>
                     <img src="<?php echo $url; ?>assets/portfolioimage/<?php echo $list ?>" alt="Technical Implementations" title="<?php echo str_replace(['.jpg', '.jpeg', '.png', '.gif'], '', $list) ?>">
                  <?php } ?>

               </div>
            </div>
            <div class="col-sm-6">
               <div class="portfolioInnerDesc">
                  <?php echo $get_portfolio_details[0]['ss_description'] ?>
               </div>
            </div>
         </div>
      </div>
   </section>
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
                  <?php
                  $sImage = $get_portfolio_details[0]['slider_image'];
                  $sliderImage  = (explode(',', $sImage));
                  foreach ($sliderImage as $list) {
                  ?>
                     <div class="slide">
                        <div class="cl">
                           <img src="<?php echo $url; ?>assets/portfolioimage/<?php echo $list ?>" alt="Peer to Peer Car Sharing Application" title="<?php echo str_replace(['.jpg', '.jpeg', '.png', '.gif'], '', $list) ?>">

                        </div>
                     </div>
                  <?php } ?>
               </div>
            </div>
         </div>
      </div>
   </section>
   <div class="backPortfolio">
      <a href="<?php echo $url; ?>/portfolio">Back To Portfolio </a>
   </div>
   <!--footer-->
   <?php include_once('common/footer.php'); ?>
   <!--scripts-->
   <?php include_once('common/commonscripts.php'); ?>
   <!--slick slider-->
   <!--<script src="assets/js/slickslider/slick.js"></script>-->
   <script src="../assets/js/slickslider/slick1.js"></script>
   <script src="../assets/js/slickslider/custom.js"></script>
</body>

</html>