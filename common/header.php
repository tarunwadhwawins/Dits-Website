
<div class="get-a-quote">
    <a href="javascript:void(0)" class="show-popup addQuote"><i class="fa fa-file-text-o" aria-hidden="true"></i> Get A Quote</a>
    <div class="contact-us">
        <div class="form-header">
            <h4>Contact us now and get consult for your project absolutely free</h4>
        </div>
        <div class="contact-form-main">
                <div id='quotesmessage'></div>
            <form name="quoteForm" method="POST" id="quoteForm">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" name="quotes_first_name" id="quotesFirstName">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email Address" name="quotes_email" id="quotesEmail">
                        </div>
                        <!-- <div class="form-group">
                          <input type="text" class="form-control" placeholder="Last Name" name="contact_last_name" id="contactLastName">
                       </div> -->
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <select class="quotecountries form-control" id="quotecountryId" name="country">
                                <option value="">Select Country</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <select class="quotestates form-control" id="quotestateId" name="state">
                                <option value="">Select State</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <input type="text" class="quotecities form-control" name="city" id="quotecityId" placeholder="City"/>  
                           
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Mobile Number" name="quotes_phone" id="quotesPhone" maxlength="10">
                        </div>
                    </div>
                    <!-- <div class="col-sm-6">
                      <div class="form-group">
                         <input type="text" class="form-control" placeholder="Subject" name="contact_company" id="contactCompany">
                      </div>
                   </div> -->
                    <div class="col-sm-6">
                        <div class="form-group">
                           <!-- <select class="form-control" id="sel1"> -->
                            <select class="form-control" name="quotes_findUs" id="quotesFindUs">
                                <option value="" selected>How did you find us?</option>
                                <option value="Website">Website</option>
                                <option value="Portals">Portals</option>
                                <option value="Internet">Internet</option>
                                <option value="Reference">Reference</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <textarea class="form-control" rows="3" placeholder="Message" name="quotes_message" id="quotesMessage"></textarea>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-left">
                            <a href="javascript:void(0)" class="close-btn btn">Close</a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="contactUsForm">
                            <input type="submit" value="Send" class="btn siteBtn">
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
<!---->
<!---->
<?php
$current_page = $_SERVER['REQUEST_URI'];
//	echo $current_page; die;
?>

<header class="fixed-top">
    <div class="topHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactDetails">
                        <div class="phone"><a href="tel:+91-623-942-1395"><i class="feather icon-phone"></i>+91-623-942-1395</a></div>
                        <div class="email"><a href="mailto:info@ditstek.com"><i class="feather icon-mail"></i><img src="<?php echo $url; ?>assets/images/Img-Top.png" alt="image"/></a></div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="socialMedias">
                        <ul>
                            <li class="linkedin"><a href="https://www.linkedin.com/company/ditstek-innovations" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            <li class="twitter"><a href="https://twitter.com/DitsTek" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li class="facebook"><a href="https://www.facebook.com/Ditstek" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li class="youtube"><a href="https://www.youtube.com/c/ditstek" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            <li class="instagram"><a href="https://www.instagram.com/ditstek_innovations/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li class="behance"><a href="https://www.behance.net/DitstekInnovations" target="_blank"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navigationMenus">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="navbar navbar-expand-md">
                        <a class="navbar-brand" href="<?php echo $url; ?>"><img src="<?php echo $url; ?>assets/images/logo.png" title="Ditstek Innovations" alt="image"/></a>
                        <button type="button" class="navbar-toggle hidden-lg" data-toggle="collapse" id="offcanvas-toggler">
                            <div class="menu-bar"></div>
          <!--                   <img src="/assets/images/menu-bar.png" alt="image"/>-->
                        </button>
                        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item <?php echo $current_page == '/index' ? 'active' : '' ?>">
                                    <a class="nav-link" href="<?php echo $url; ?>" title="Home">Home</a>
                                </li>
                                <li class="nav-item <?php echo $current_page == '/about' ? 'active' : '' ?>">
                                    <a class="nav-link" href="<?php echo $url; ?>about" title="About Us">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Services <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="fullWidth">
                                        <li class="columnFull">
                                            <div class="row">
                                                <div class="col-sm-2 pad-0">
                                                    <div class="hireUs">
                                                        <div class="thumbImage">
                                                            <div class="hireusImage"></div>
               <!--											  <img src="../assets/images/hireus.png" alt="image"/>-->
                                                        </div>
                                                        <div class="desc">
                                                            <h4>Hire Us</h4>
                                                            <p>Get Experienced <br> Developer</p>
                                                        </div>
                                                    </div>
                                                    <div class="CallUs">
                                                        <div class="thumbImage">
                                                            <div class="CallUsImage"></div>
               <!--											  <img src="../assets/images/callus.png" alt="image"/>-->
                                                        </div>
                                                        <div class="desc">
                                                            <h4>Call Us</h4>
                                                            <p><a href="tel:+91-623-942-1395">+91- (623)-942-1395 </a></p>
                                                            <p><a href="tel:+91-172-4080477">+91172-4080477</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-7">
                                                    <div class="serviceTitle">
                                                        <label>Services</label>
                                                        <span>Cost-Effective Software Development And Support Services</span>
                                                    </div>
                                                    <div class="serviceMenus">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="serviceSubMenu">
                                                                    <ul>
                                                                        <li class="nav-item <?php echo $current_page == '/services/custom-application-development' ? 'active' : '' ?>"><a class="nav-link" href="<?php echo $url; ?>services/custom-application-development"><i class="feather icon-arrow-right"></i>Custom application development</a></li>
                                                                        <li class="nav-item <?php echo $current_page == '/services/software-development-services' ? 'active' : '' ?>"><a class="nav-link" href="<?php echo $url; ?>services/software-development-services"><i class="feather icon-arrow-right"></i>Software development services</a></li>
                                                                        <li class="nav-item <?php echo $current_page == '/services/full-stack-development-services' ? 'active' : '' ?>"><a class="nav-link" href="<?php echo $url; ?>services/full-stack-development-services"><i class="feather icon-arrow-right"></i>Full-stack development Services</a></li>
                                                                        <li class="nav-item  <?php echo $current_page == '/services/dedicated-development-team' ? 'active' : '' ?>"><a class="nav-link" href="<?php echo $url; ?>services/dedicated-development-team"><i class="feather icon-arrow-right"></i>Dedicated development team</a></li>
                                                                        <!---->
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="serviceSubMenu">
                                                                    <ul>
                                                                        <li class="nav-item <?php echo $current_page == '/services/hire-remote-developers' ? 'active' : '' ?>"><a class="nav-link" href="<?php echo $url; ?>services/hire-remote-developers"><i class="feather icon-arrow-right"></i>Hire Remote Developers</a>
                                                                            <ul>
                                                                                <li class="nav-item <?php echo $current_page == '/services/hire-asp-net-developers' ? 'active' : '' ?>"><a class="nav-link" href="<?php echo $url; ?>services/hire-asp-net-developers">Hire Asp.Net Developers</a></li>
                                                                                <li class="nav-item <?php echo $current_page == '/services/hire-php-developers' ? 'active' : '' ?>"><a class="nav-link" href="<?php echo $url; ?>services/hire-php-developers">Hire PHP Developers</a></li>
                                                                                <li class="nav-item <?php echo $current_page == '/services/hiring-ui-ux-developers' ? 'active' : '' ?>"><a class="nav-link" href="<?php echo $url; ?>services/hiring-ui-ux-developers">Hire UI/UX Developers</a></li>
                                                                                <li class="nav-item <?php echo $current_page == '/services/front-end-development' ? 'active' : '' ?>"><a class="nav-link" href="<?php echo $url; ?>services/front-end-development">Hire Front End Developers</a></li>
                                                                                <!--
                                                                                                                                            <li><a href="#">Hiring MEAN Developers</a></li>
                                                                                                                                            <li><a href="#">Hiring Angular Developers</a></li>
                                                                                                                                            <li><a href="#">Hiring SQL Developers</a></li>
                                                                                -->
                                                                            </ul>
                                                                        </li>
                                                                        <!---->
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="headerPortfolio">
                                                        <h4>Portfolio</h4>
                                                        <div class="portCarousel">
                                                            <div class="owl-carousel owl-theme" id="portCarousel">
                                                                <div class="item">
                                                                    <div class="blogBox">
                                                                        <img class="img-fluid" src="<?php echo $url; ?>assets/portfolioimage/sellout-banner.jpg" alt="image">
                                                                        <h6><a href="<?php echo $url; ?>portfolio/saas-based-event-ticketing-platform">SAAS Based Event Ticketing Platform</a></h6>
                                                                    </div>
                                                                </div>	
                                                                <div class="item">
                                                                    <div class="blogBox">
                                                                        <img class="img-fluid" src="<?php echo $url; ?>assets/portfolioimage/rhentit-banner.jpg" alt="image">
                                                                        <h6><a href="<?php echo $url; ?>portfolio/saas-based-b2b2c-workflow-automation-for-rental-businesses-pos-and-market-place">B2B2C rental platform POS Rental Software and Marketplace</a></h6>
                                                                    </div>
                                                                </div>
                                                                 <div class="item">
                                                                    <div class="blogBox">
                                                                        <img class="img-fluid" src="<?php echo $url; ?>assets/portfolioimage/164915352451_Drive-Shop-Portfolio-Banner.jpg" alt="image">
                                                                        <h6><a href="<?php echo $url; ?>portfolio/saas-based-business-workflow-automation-suite-of-apps-for-automotive-industry">SAAS Based Business Workflow Automation Suit of Apps for Automotive Industry</a></h6>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="blogBox">
                                                                        <img class="img-fluid" src="<?php echo $url; ?>assets/portfolioimage/affiliate-marketing.jpg" alt="image">
                                                                        <h6> <a href="<?php echo $url; ?>portfolio/affiliate-marketing-green-tech-platform">Affiliate Marketing Green Tech Platform</a></h6>
                                                                    </div>
                                                                </div>	
                                                               
                                                                <div class="item">
                                                                    <div class="blogBox">
                                                                        <img class="img-fluid" src="<?php echo $url; ?>assets/portfolioimage/blommruner-banner.jpg" alt="image">
                                                                        <h6><a href="<?php echo $url; ?>portfolio/saas-based-e-commerce-marketplace-and-workflow-automation-solution">SAAS Based E-Commerce Marketplace and Workflow Automation Solution</a></h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--<div class="counters">-->
                                                        <!--   <span class="counter-count wow fadeInDown">2</span>	-->
                                                        <!--   <p>Years In Business </p>-->
                                                        <!--</div>-->
                                                        <!--<div class="counters">-->
                                                        <!--   <span class="counter-count wow fadeInDown">20</span>	-->
                                                        <!--   <p>Customers Served</p>-->
                                                        <!--</div>-->
                                                        <!--<div class="counters">-->
                                                        <!--   <span class="counter-count wow fadeInDown">32</span>	-->
                                                        <!--   <p> Projects Delivered</p>-->
                                                        <!--</div>-->
                                                        <!--<div class="counters">-->
                                                        <!--   <span class="counter-count wow fadeInDown">30</span>	-->
                                                        <!--   <p>Employees </p>-->
                                                        <!--</div>-->
                                                    </div>
                                                </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item <?php echo $current_page == '/technology' ? 'active' : '' ?>">
                                    <a class="nav-link" href="<?php echo $url; ?>technology" title="Technology">Technology</a>
                                </li>
								 <li class="nav-item <?php echo $current_page == '/industries' ? 'active' : '' ?>">
                                <a class="nav-link" href="<?php echo $url; ?>industries" title="Industries">Industries</a> </li>
                                <li class="nav-item <?php echo $current_page == '/blog' ? 'active' : '' ?>">
                                    <a class="nav-link" href="<?php echo $url; ?>blog" title="Blog">Blogs</a>
                                </li>
                                <li class="nav-item <?php echo $current_page == '/portfolio' ? 'active' : '' ?>">
                                    <a class="nav-link" href="<?php echo $url; ?>portfolio" title="Portfolio">Portfolio</a>
                                </li>
                                <li class="nav-item <?php echo $current_page == '/contact' ? 'active' : '' ?>">
                                    <a class="nav-link" href="<?php echo $url; ?>contact" title="Contact Us">Contact Us</a>
                                </li>
                                
                            </ul>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<!---->
<!--mobile header-->
<div class="offcanvas-overlay"></div>
<div class="offcanvas-menu visible-sm visible-xs">
    <button type="button" class="close-offcanvas"><i class="fa fa-remove"></i></button>
    <div class="offcanvas-inner">
        <ul>
            <li class="nav-item <?php echo $current_page == '/index' ? 'active' : '' ?>"><a class="nav-link" href="<?php echo $url; ?>">Home</a></li>
            <li class="nav-item <?php echo $current_page == '/about' ? 'active' : '' ?>"><a class="nav-link" href="<?php echo $url; ?>about">About Us</a></li>
            <li><a href="#">Services </a>
                <span role="button" class="offcanvas-menu-toggler collapsed" data-toggle="collapse" data-target="#collapse-menu-02265" aria-expanded="false" aria-controls="collapse-menu-02">
                    <i class="fa fa-plus"></i><i class="fa fa-minus"></i>
                </span>
                <ul class="collapse" id="collapse-menu-02265" aria-expanded="false">
                    <li class="nav-item <?php echo $current_page == '/services/custom-application-development' ? 'active' : '' ?>"><a href="<?php echo $url; ?>services/custom-application-development">Custom application development</a></li>
                    <li class="nav-item <?php echo $current_page == '/services/software-development-services' ? 'active' : '' ?>"><a href="<?php echo $url; ?>services/software-development-services">Software development services</a></li>
                    <li class="nav-item <?php echo $current_page == '/services/full-stack-development-services' ? 'active' : '' ?>"><a href="<?php echo $url; ?>services/full-stack-development-services">Full-stack development Services</a></li>
                    <li class="nav-item <?php echo $current_page == '/about' ? 'active' : '' ?>"><a href="<?php echo $url; ?>services/dedicated-development-team">Dedicated development team</a></li>
                    <li class="nav-item <?php echo $current_page == '/services/hire-remote-developers' ? 'active' : '' ?>"><a href="<?php echo $url; ?>services/hire-remote-developers">Hire Remote Developers</a>
                        <span role="button" class="offcanvas-menu-toggler collapsed" data-toggle="collapse" data-target="#collapse-menu-02266" aria-expanded="false" aria-controls="collapse-menu-02">
                            <i class="fa fa-plus"></i><i class="fa fa-minus"></i>
                        </span>
                        <ul class="collapse" id="collapse-menu-02266" aria-expanded="false">
                            <li class="nav-item <?php echo $current_page == '/services/hire-asp-net-developers' ? 'active' : '' ?>"><a href="<?php echo $url; ?>services/hire-asp-net-developers">Hire Asp.Net Developers</a></li>
                            <li class="nav-item <?php echo $current_page == '/services/hire-php-developers.php' ? 'active' : '' ?>"><a href="<?php echo $url; ?>services/hire-php-developers">Hire PHP Developers</a></li>
                            <li class="nav-item <?php echo $current_page == '/services/hiring-ui-ux-developers' ? 'active' : '' ?>"><a href="<?php echo $url; ?>services/hiring-ui-ux-developers">Hire UI/UX Developers</a></li>
                            <li class="nav-item <?php echo $current_page == '/services/front-end-development' ? 'active' : '' ?>"><a href="<?php echo $url; ?>services/front-end-development">Front End Development</a></li>
                        </ul>
                    </li>
                </ul>
            </li> 
            <li class="nav-item <?php echo $current_page == '/technology' ? 'active' : '' ?>"><a class="nav-link" href="<?php echo $url; ?>technology" title="Technology">Technology</a> </li>
            	 <li class="nav-item <?php //echo $current_page == '/industries' ? 'active' : '' ?>"> <a class="nav-link" href="<?php echo $url; ?>industries" title="Industries">Industries</a> </li>
            <li class="nav-item <?php echo $current_page == '/blogs' ? 'active' : '' ?>"><a class="nav-link" href="<?php echo $url; ?>blog" target="_blank">Blogs</a></li>
            <li class="nav-item <?php echo $current_page == '/portfolio' ? 'active' : '' ?>"><a class="nav-link" href="<?php echo $url; ?>portfolio">Portfolio</a></li>

            <li class="nav-item <?php echo $current_page == '/contact' ? 'active' : '' ?>"><a class="nav-link" href="<?php echo $url; ?>contact">Contact Us</a></li>
    </div> 
</div> 