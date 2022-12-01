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
            <img src="../assets/industriesImages/retails.jpg" alt="Custom Application Development" title="Custom Application Development" class="img-fluid" />
            <div class="bannerDesc">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 test-center">
                            <h1>INDUSTRIES WE SERVE</h1>
                            <p>Retail</p>
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
                    <div class="thumbDesc">
                        <div class="innerThumbDesc">
                            <img class="rightImage" src="../assets/domains/retail.jpg" alt="image" />
                            <h2 class="py-2">Retail</h2>
                            <p><strong>DITS</strong> offers custom retail software development services for brick and mortar, e-commerce, c-store & grocery, web, and mobile systems. We also provide brick-and-mortar <strong>POS</strong> integrations built with automated invoicing, payment processing, and security features that work flawlessly with all payment forms, such as bank cards, checks, and mobile payments.</p>
                            <ul style="padding: 5px 0 15px 24px;">
                                <li><a href="#">Virtual Storefronts</a></li>
                                <li><a href="#">B2C & B2B </a></li>
                                <li><a href="#">C2C, B2B2C Marketplaces</a></li>
                                <li><a href="#">E-Commerce Web Designs</a></li>
                            </ul>
                            <p>We blend payment and order processing systems into your virtual storefronts for more secure transaction processing and conventional billing automation and have developed feature-rich, sophisticated <strong>B2B, B2C, C2C, B2B2C marketplaces</strong> that bring vendors, distributors, and customers together in a centralized platform.</p>
                            <p>Our <strong>highly dedicated developers</strong> also design unique e-commerce websites and applications that are mobile-friendly and provide the ultimate shopping experiences for customers. We also engineer mobile-responsive e-commerce software solutions and <strong>retail management systems</strong> that allow Ecommerce portal development with automated synchronization of your physical catalog with your e-commerce store.</p>
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