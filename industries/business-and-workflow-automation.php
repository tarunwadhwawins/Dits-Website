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
            <img src="../assets/industriesImages/workflow-automations.jpg" alt="Custom Application Development" title="Custom Application Development" class="img-fluid" />
            <div class="bannerDesc">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 test-center">
                            <h1>INDUSTRIES WE SERVE </h1>
                            <p>Business And Workflow Automation</p>
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
                            <img class="rightImage" src="../assets/domains/business-automation.png" alt="image" />
                            <h2 class="pb-1">Business And Workflow Automation</h2>
                            <p><strong>Business And Workflow Automation</strong> is the automation of business processes through technology, empowering businesses to curtail expenses and enhance productivity. Rather than hiring employees doing repeated and menial jobs, the businesses can let the software handle these tasks. <strong>Approval management, Employee onboarding, Customer support,</strong> evaluation of examinations are examples of business process automation. </p>
                            
                        </div>
                        <div class="innerThumbDesc">
                             <h3 class="pt-1">Here are some of the domains which are reaping the rewards of business process automation:</h3>
                            <ul class="buisnessDomains">
                                <li><a href="javascript:void(0);">Supply Chain</a></li>
                                <li><a href="javascript:void(0);">HR</a></li>
                                <li><a href="javascript:void(0);">Financial & Legal</a></li>
                                <li><a href="javascript:void(0);">Management Procurement</a></li>
                                <li><a href="javascript:void(0);">TeleHealth and TeleMedicine</a></li>
                                <li><a href="javascript:void(0);">Sales & Marketing</a></li>
                                <li><a href="javascript:void(0);">Production </a></li>
                                <li><a href="javascript:void(0);">Banking</a></li>
                                <li><a href="javascript:void(0);">Finance</a></li>
                                <li><a href="javascript:void(0);">Insurance</a></li>
                                <li><a href="javascript:void(0);">Education</a></li>
                            </ul>
                            <p><strong>DITS</strong> provides <strong>business automation applications outsourcing services</strong> to <strong>startups </strong> and <strong>business automation product development companies.</strong> We understand the technology, business, and automation domain and experience delivering business automation products. We also provide business automation application outsourcing services, business automation web application development services and business automation application developers for hire.</p>
                            <p class="pt-2">If you are a <strong>startup</strong> or an <strong>enterprise-level company</strong> that requires automating your business process, we can help you with <strong>Mobile Application Development, Web Application Development, API Integration, Quality Assurance</strong> or any other custom requirement.</p>
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