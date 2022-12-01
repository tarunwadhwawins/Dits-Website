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
            <img src="../assets/industriesImages/Education.jpg" alt="Custom Application Development" title="Custom Application Development" class="img-fluid" />
            <div class="bannerDesc">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 test-center">
                            <h1>INDUSTRIES WE SERVE</h1>
                            <p>Ed-Tech</p>
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
                            <img class="rightImage" src="../assets/domains/ed-tech.png" alt="image" />
                            <h2 class="pb-1">Ed-Tech</h2>
                            <p><strong>DITS</strong> offers custom-tailored <strong>EdTech software development services</strong> for educational institutions and companies of nearly all sizes, introducing modern learning practices powered by the latest technology. We are competent to provide a personalized elearning experience through cutting-edge <strong>EdTech software.</strong></p>
                            <p>Whether you are looking for <strong>eLearning software</strong> for businesses or any educational establishments, our team comes to help. We rigorously evaluate your requirements and industry specifics to develop a fully-featured EdTech development solution corresponding to your needs. In addition, our engineers build the functionality that delivers value to your users from simple eLearning portals to complex administration software.</p>
                            <p>As an expert in <strong>EdTech software development</strong>, <strong>DITS </strong> helps businesses and educational institutions enhance employee and student engagement in the learning process. Embrace the advantages of our sophisticated eLearning solutions.</p>
                            <ul>
                                <li><a href="#">Learning Management Solutions</a></li>
                                <li><a href="#">Virtual / Remote Learning Platform</a></li>
                                <li><a href="#">e-learning Application Development</a></li>

                            </ul>
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