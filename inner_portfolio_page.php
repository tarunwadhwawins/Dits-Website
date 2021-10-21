<?php
require_once('core/dbconnection.php');
require_once('core/ajax.php');

$slug=str_replace('.php', '', $_GET['title']);
$slug=trim($slug);
$get_portfolio_details=get_portfolio_details($conn,$slug);


?>
<!doctype html>
<html lang="en">
   <head>

      <meta charset="utf-8">
      <meta http-equiv="pragma" content="no-cache" />
      <meta name="description" content="<?php echo $get_portfolio_details[0]['seo_desc'] ?>"/>
      <meta name="keywords" content="<?php echo $get_portfolio_details[0]['seo_keyword'] ?>"/>
      <meta name="author" content="Dits">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title><?php echo $get_portfolio_details[0]['title'] ?></title>

      <!--common css-->
      <?php include_once('common/commoncss.php'); ?>
      <!--slicl slider css-->
      <link rel="stylesheet" href="../assets/css/slickslider/slick.css" type="text/css"/>
      <link rel="stylesheet" href="../assets/css/slickslider/slick-theme.css" type="text/css"/>
      <link rel="stylesheet" href="../assets/css/slickslider/custom.css" type="text/css"/>
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
          $imgTitle = str_replace(['.jpg','.jpeg','.png','.gif'],'',$get_portfolio_details[0]['image']);
          ?>
            <img src="/assets/portfolioimage/<?php echo $get_portfolio_details[0]['image'] ?>" alt="Addiction Substance Abuse Management" title="<?php echo $imgTitle ?>"/>
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
                     $fa=$get_portfolio_details[0]['fs_image'];
                     $section1Image  = (explode(',',$fa));
                     foreach($section1Image as $list)
                     {
                     ?>
                     <img src="/assets/portfolioimage/<?php echo $list ?>" usemap="#image-map" alt="Addiction Substance Abuse Management" title="<?php echo str_replace(['.jpg','.jpeg','.png','.gif'],'',$list) ?>">
                     <?php } ?>
                     <map name="image-map">
                        <area target="" alt="Microsoft SQL Server Reporting Services" title="Microsoft SQL Server Reporting Services" href="" coords="289,54,277,71,289,92,280,109,262,132,260,153,290,168,316,171,368,192,560,195,551,180,551,153,702,157,713,116,693,106,539,101,498,90,490,67,418,66,375,62,341,66,323,67,311,58" shape="poly">
                        <area target="" alt="Microsoft .NET Entity Framework" title="Microsoft .NET Entity Framework" href="" coords="749,49,1330,163" shape="rect">
                        <area target="" alt="JSON" title="JSON" href="" coords="633,192,1018,300" shape="rect">
                        <area target="" alt="ASP .NET Webforms" title="ASP .NET Webforms" href="" coords="133,243,107,274,104,298,133,297,210,296,229,328,237,347,398,347,402,296,442,291,442,245,242,246,219,239" shape="poly">
                        <area target="" alt="Microsoft Azure SQL" title="Microsoft Azure SQL" href="" coords="488,286,490,382,512,394,531,394,547,415,627,410,627,394,618,384,615,366,602,356,588,344,586,286,561,270,525,270" shape="poly">
                        <area target="" alt="Bootstrap" title="Bootstrap" href="" coords="1074,192,1230,399" shape="rect">
                        <area target="" alt="JavaScript" title="JavaScript" href="" coords="17,320,186,536" shape="rect">
                        <area target="" alt="CSS 3" title="CSS 3" href="" coords="294,411,296,454,262,453,284,625,356,646,423,625,439,451,406,453,404,413" shape="poly">
                        <area target="" alt="Microsoft SQL Server" title="Microsoft SQL Server" href="" coords="724,357,689,375,670,392,697,416,705,443,702,473,686,491,657,520,638,551,625,579,484,589,486,710,582,714,885,695,924,648,772,599,779,486,865,462,828,426,777,407,751,402" shape="poly">
                        <area target="" alt="HTML 5" title="HTML 5" href="" coords="945,398,943,441,926,441,943,603,1008,625,1071,607,1089,441,1061,397" shape="poly">
                        <area target="" alt="Microsoft .NET MVC" title="Microsoft .NET MVC" href="" coords="1121,428,1474,504" shape="rect">
                        <area target="" alt="Photoshop" title="Photoshop" href="" coords="101,560,213,662" shape="0">
                        <area target="" alt="C-Sharp" title="C-Sharp" href="" coords="90,706,286,846" shape="rect">
                        <area target="" alt="DevOps" title="DevOps" href="" coords="333,754,697,940" shape="rect">
                        <area target="" alt="AJAX" title="AJAX" href="" coords="732,733,936,819" shape="0">
                        <area target="" alt="Microsoft Azure" title="Microsoft Azure" href="" coords="1142,549,1097,588,1062,659,1106,679,1222,679,1255,651,1497,650,1498,589,1310,580,1281,575" shape="poly">
                        <area target="" alt="Web API" title="Web API" href="" coords="972,690,1153,856" shape="rect">
                        <area target="" alt="jQuery" title="jQuery" href="" coords="728,863,1053,937" shape="rect">
                    </map>
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
                     $ssImage=$get_portfolio_details[0]['ss_image'];
                     $section2Image  = (explode(',',$ssImage));
                     foreach($section2Image as $list)
                     {
                     ?>
                     <img src="/assets/portfolioimage/<?php echo $list ?>" alt="Technical Implementations" title="<?php echo str_replace(['.jpg','.jpeg','.png','.gif'],'',$list) ?>">
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
                     $sImage=$get_portfolio_details[0]['slider_image'];
                     $sliderImage  = (explode(',',$sImage));
                     foreach($sliderImage as $list)
                     {
                       ?>
                     <div class="slide">
                        <div class="cl">
                        <img src="/assets/portfolioimage/<?php echo $list ?>" alt="Peer to Peer Car Sharing Application" title="<?php echo str_replace(['.jpg','.jpeg','.png','.gif'],'',$list) ?>">
                          
                        </div>
                     </div>
                     <?php } ?>
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
      <script src="../assets/js/slickslider/slick1.js"></script>
      <script src="../assets/js/slickslider/custom.js"></script>
   </body>
</html>