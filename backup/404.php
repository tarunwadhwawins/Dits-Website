<?php
    require_once('core/dbconnection.php');
?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <meta name="author" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>404 Page - Ditstek Innovations</title>
      <!--common css-->
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
            <img src="assets/images/not-found-area.jpg" alt="image"/>
            <div class="bannerDesc">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-12">
                        <h1>404 Page</h1>
                     </div>
                  </div>
               </div>
            </div>
         </div>
		 
		 <div class="notFoundArea">
			<div class="container">
				<div class="row justify-content-center ">
					<div class="col-sm-6 text-center">
						<h2>404</h2>
						<h4>Oopps! The page you were looking for, couldn't be found.</h4>
						<p>Try the search below to find matching pages:</p>
						<form>
							<div class="input-group form-group">
							  <input type="text" class="form-control" placeholder="Search">
							  <div class="input-group-append">
								<button class="btn" type="submit">Submit</button>
							  </div>
							</div>
						</form>
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