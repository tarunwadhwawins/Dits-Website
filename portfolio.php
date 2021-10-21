<?php
require_once('core/dbconnection.php');
require_once('core/ajax.php');
//$cat_id=mysqli_real_escape_string($conn,$_GET['id']);
$get_portfolio=get_portfolio($conn);

?>

<!doctype html>
<html lang="en">

<head>
   <title>Custom Software Development Company | Dedicated Software Development Teams - Ditstek Innovations</title>
   <meta charset="utf-8">
   <meta http-equiv="pragma" content="no-cache" />
   <meta name="description" content="Need Custom solutions for your business needs? We offer Solutions like Marketplace, SAAS Workflow Automation, Marketplaces, Cloud based,CRM etc. Hire us Today. " />
   <meta name="keywords" content="Custom Software Development agency , Dedicated Software Development Teams, remote software development teams" />
   <meta name="author" content="Dits" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!--common css-->
   <link href="https://www.ditstek.com/portfolio" rel="canonical" />
   <?php include_once('common/commoncss.php'); ?>
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
         <img src="assets/images/Portfoliobanner1.jpg" alt="image" />
         <div class="bannerDesc">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <h1>Portfolio</h1>
                     <!--<div class="bannerButton mt-3" id="bannerExtFour" data-toggle="modal" data-target="#exampleModal"> <a href="javascript:void(0);" class="btn btn-custom siteBtn addCountry">Contact Form</a> </div>-->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <?php include_once('common/popup-form.php'); ?>
   </div>
   <section class="portfolio">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <div class="portfolioDesc text-left">
                  <p>DITS, a Remote Software Development Company follows Agile driven development offering full stack developers, front-end and back-end developers focussing on developing interactive business solutions based on the latest industry trends and technologies. We offer services and solutions tailored to match client expectations and international standards. We are totally focused to Empower Our Customers and work together to exceed client expectations by consistency delivering service through continuous improvements in quality.</p>
                  <p>As a <a href="https://ditstek.com/services/full-stack-development-services" target="bkank">Full Stack remote development company</a>, we assure that our Full Stack developers are all set to assist you with needed expertise in all areas, identifying roles and responsibilities with corresponding challenges attached along with. We produce engineering teams fluent in the full spectrum of technologies from simplistic latent front-end to high-performance back-end business automation solutions and everything in between.</p>
               </div>
            </div>
         </div>
     

         <div class="row">
            <div class="col-sm-12">
               <div class="whiteBg text-center">
                  
                  <div class="tabs-domain">
                        <input type="radio" id="radio0" name="tabs"/>
                        <label class="tab category All" for="radio0" onclick="loadCategory('All')">All</label>    
                     <?php
                      $get_category=get_category($conn);
                      $i=1;
                      foreach($get_category as $list){
                        ?>
                        <input type="radio" id="radio<?php echo $i ?>" name="tabs"/>
                        <label class="tab category <?php echo $list['slug'] ?>" for="radio-1" onclick="loadCategory('<?php echo $list['slug'] ?>', '<?php echo $list['id'] ?>')" id="<?php echo $list['id'] ?>"><?php echo $list['name'] ?></label>    
                     <?php
                     $i++;
                     ?>
                     <?php
                     }
                     ?>
                     <span class="glider"></span>
                  </div>
                 
                  <div class="tabs">
                     <ul id="tabs" class="nav nav-tabs justify-content-center" role="tablist">
                       
                        <li class="nav-item">
                           <a id="tab-A" href="#pane-A" class="nav-link active" data-toggle="tab" role="tab" onclick="loadCategoryWithTag('All')">All</a>
                        </li>
                       
                        <?php 
                        $get_tags=get_tags($conn);
                        foreach($get_tags as $tag){   
                        ?>
                        <li class="nav-item">
                           <a id="tab-ALL" href="#pane-ALL" class="nav-link" data-toggle="tab" role="tab" onclick="loadCategoryWithTag('<?php echo $tag['tag'] ?>')"><?php echo $tag['tag'] ?></a>
                        </li>
                        <?php } ?>
                     </ul>
                    
                     <div id="content" class="tab-content" role="tablist">
                        <div id="pane-ALL" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-ALL">
                           <div class="card-header" role="tab" id="heading-ALL">
                              <h5 class="mb-0">
                                 <a data-toggle="collapse" href="#collapse-ALL" aria-expanded="true" aria-controls="collapse-ALL">
                                    All Work
                                 </a>
                              </h5>
                           </div>
                           <div id="collapse-ALL" class="collapse show" data-parent="#content" role="tabpanel" aria-labelledby="heading-ALL">
                           <div class="card-body">
                                 <div class="row">
                                 </div>
                           </div>
                        </div>

                        <div id='PortfolioContent'>

                        </div>
                 
                        <div class="col-sm-12">
                           <div class="load-more">
                              <div class="load-more-button">Load More</div>
                           </div>
                        </div>
                     </div>
                  </div>
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
   <script>
      var selected_category = "All";
      var selected_tag = "All";
      var page = 1;
      $(document).ready(function() {
         $('.tabs-domain label:first').addClass('active');
         InitialCall();
         var x, size_li;

         function changeLoadCount(media) {
            if (media.matches) {
               x = 6; // no. of items per click mobile <= 767
               $(".moreBox").hide();
               setTimeout(function(){
                  $(".moreBox").hide();
                  $(".moreBox:lt(6)").show();
               }, 600);
               size_li = $(".moreBox").length;
               if (x == size_li) {
                  $(".load-more").hide();
               } else {
                  $(".load-more").show();
               }
            } else {
               x = 6; // no. of items per click in desktop >= 768
               $(".moreBox").hide();
               setTimeout(function(){
                  $(".moreBox").hide();
                  $(".moreBox:lt(6)").show();
               }, 300);
               // $(".moreBox:lt(" + x + ")").show();
               size_li = $(".moreBox").length;
               if (x == size_li) {
                  $(".load-more").hide();
               } else {
                  $(".load-more").show();
               }
            }
         }

         var media = window.matchMedia("(max-width: 767px)");
         changeLoadCount(media);
         media.addListener(changeLoadCount);
         window.addEventListener("load resize", function() {
            changeLoadCount(media);
            media.addListener(changeLoadCount);
         });

         function loadMore() {
            $(".moreBox").hide();
            var size_li = $(".moreBox").length;
            $(".moreBox:lt(" + x + ")").show();
           
         }
         loadMore();
         $(".load-more-button").click(function() {
            
            loadPortfolio(selected_category,selected_tag);
         });
      });

      // function loadDomain(DomainID) {
      //    $('.commonPortfolio').hide();
      //    $("#" + DomainID).show();
      //    $("#" + DomainID).addClass('activeDomain');
      // }

      function InitialCall()
      {
         page=1;
         var CategoryID = $('.tabs-domain label:first').attr('id');
         loadPortfolio('All', 'All');
         $("#PortfolioContent").html("");
      }

      function loadCategory(Slug, CategoryID='All') {
         page=1;
         $(".category").removeClass('active');
         $("." + Slug).addClass('active');
         $('.nav-link').removeClass('active');
         $('.tabs li:first .nav-link').addClass('active');
         $("#PortfolioContent").html("");
         selected_category = CategoryID;
         selected_tag = "All";
         loadPortfolio(CategoryID, 'All');
      }
      
      function loadCategoryWithTag(Tag,Category) {
         page=1;
         var Category = $(".tabs-domain label.active").attr('id');
         selected_category = Category;
         selected_tag = Tag;
         $("#PortfolioContent").html("");
         loadPortfolio(Category, Tag)
      }

      function loadPortfolio(CategoryID, Tag )
      {
         jQuery.ajax({
            url: '/core/ajax',
            method: "GET",
            headers: {
               "content-type": "application/x-www-form-urlencoded"
            },
            data: {
               "Action": 'getPortfolio',
               "CategoryID": CategoryID,
               "Tag": Tag,
               "page": page
            },
            success: function(response) {
               var response = JSON.parse(response);
               $("#PortfolioContent").html( $("#PortfolioContent").html()+response.Output);
               if(response.next){
                  $(".load-more").show();
               }else{
                  $(".load-more").hide();
               }
               page++;
            }
         });
      }
   </script>

<style>
	 
    /* loader */
    
    .loader {
        display: inline-block;
        position: relative;
        width: 80px;
        height: 80px;
        opacity: 0;
    
    }
    
    
    .loader.show {
        opacity: 1;
    }
    
    .loader div {
        display: inline-block;
        position: absolute;
        left: 8px;
        width: 16px;
        background: #f4f4f4;
        animation: loader 1.2s cubic-bezier(0, 0.5, 0.5, 1) infinite;
    }
    
    .loader div:nth-child(1) {
        left: 8px;
        animation-delay: -0.24s;
    }
    
    .loader div:nth-child(2) {
        left: 32px;
        animation-delay: -0.12s;
    }
    
    .loader div:nth-child(3) {
        left: 56px;
        animation-delay: 0;
    }
    
    @keyframes loader {
        0% {
            top: 8px;
            height: 64px;
        }
    
        50%,
        100% {
            top: 24px;
            height: 32px;
        }
    }
       </style>
    
        <script>
       
    </script> 
</body>

</html>