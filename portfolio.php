<?php
require_once('core/dbconnection.php');
require_once('core/ajax.php');

$get_portfolio = get_portfolio($conn);

?>

<!doctype html>
<html lang="en">

<head>
   <?php include_once('common/commonmeta.php'); ?>
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
         <img src="<?php echo $url; ?>assets/images/Portfoliobanner1.jpg" alt="image" />
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
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="mobileFilter">
                        <div class="dropdown">
                           <button class="btn btn-primary dropdown-toggle form-control" type="button" id="cat-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <span class="category-name">Category - All</span>
                           </button>
                           <div class="dropdown-menu tagsList" aria-labelledby="cat-tabs">
                           <div class="tabs-domain">
                                    <input type="radio" id="radio0" name="tabs" />
                                    <label class="tab category All active" for="radio0" onclick="loadCategory('All', 'All', 'All')">All</label>
                                    <?php $get_category = get_category($conn);
                                    $i = 1;
                                    foreach ($get_category as $list) { ?>
                                       <input type="radio" id="radio<?php echo $i ?>" name="tabs" />
                                       <label class="tab category <?php echo $list['slug'] ?>" for="radio-1" onclick="loadCategory('<?php echo $list['slug'] ?>', '<?php echo $list['id'] ?>', '<?php echo $list['name'] ?>')" id="<?php echo $list['id'] ?>"><?php echo $list['name'] ?></label>
                                    <?php $i++;
                                    } ?>
                                    <span class="glider"></span>
                                 </div>
                           </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-12 col-sm-12 d-sm-none d-md-none d-lg-block">
                        <div class="deskFilter">
                           <div class="tabs-domain">
                              <input type="radio" id="radio0" name="tabs" />
                              <label class="tab category All active" for="radio0" onclick="loadCategory('All', 'All', 'All')">All</label>

                              <?php
                              $get_category = get_category($conn);
                              $i = 1;
                              foreach ($get_category as $list) {
                              ?>
                                 <input type="radio" id="radio<?php echo $i ?>" name="tabs" />
                                 <label class="tab category <?php echo $list['slug'] ?>" for="radio-1" onclick="loadCategory('<?php echo $list['slug'] ?>', '<?php echo $list['id'] ?>', '<?php echo $list['name'] ?>')" id="<?php echo $list['id'] ?>"><?php echo $list['name'] ?></label>
                                 <?php
                                 $i++;
                                 ?>
                              <?php
                              }
                              ?>
                              <span class="glider"></span>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="mobileFilter">
                           <div class="dropdown">
                              <button class="btn btn-primary dropdown-toggle form-control" type="button" id="tags-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <span class="tag-name">Tags - All</span>
                              </button>
                              <div class="dropdown-menu tagsList" aria-labelledby="tags-tabs">
                                 <div class="tabs">
                                    <ul id="tabs" class="nav justify-content-center" role="tablist">
                                       <li class="nav-item">
                                          <a id="tag-All" href="#pane-A" class="nav-link tag-All active" data-toggle="tab" role="tab" onclick="loadCategoryWithTag('All')">All</a>
                                       </li>
                                       <?php
                                       $get_tags = get_tags($conn);
                                       foreach ($get_tags as $tag) {
                                       ?>
                                          <li class="nav-item">
                                             <a id="tag-<?php echo str_replace(" ", "-", $tag['tag']); ?>" href="#pane-ALL" class="nav-link tag-<?php echo str_replace(" ", "-", $tag['tag']); ?>" data-toggle="tab" role="tab" onclick="loadCategoryWithTag('<?php echo $tag['tag'] ?>')"><?php echo $tag['tag'] ?></a>
                                          </li>
                                       <?php } ?>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-12">
                        <div class="tabs">
                           <ul id="tabs" class="nav nav-tabs justify-content-center" role="tablist">
                              <li class="nav-item">
                                 <a id="tag-All" href="#pane-A" class="nav-link tag-All active" data-toggle="tab" role="tab" onclick="loadCategoryWithTag('All')">All</a>
                              </li>

                              <?php
                              $get_tags = get_tags($conn);
                              foreach ($get_tags as $tag) {
                              ?>
                                 <li class="nav-item">
                                    <a id="tag-<?php echo str_replace(" ", "-", $tag['tag']); ?>" href="#pane-ALL" class="nav-link tag-<?php echo str_replace(" ", "-", $tag['tag']); ?>" data-toggle="tab" role="tab" onclick="loadCategoryWithTag('<?php echo $tag['tag'] ?>')"><?php echo $tag['tag'] ?></a>
                                 </li>
                              <?php } ?>
                           </ul>

                           <div id="content" class="tab-content" role="tablist">
                              <div id="pane-ALL" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-ALL">
                                 <div id="collapse-ALL" class="collapse show" data-parent="#content" role="tabpanel" aria-labelledby="heading-ALL">
                                    <div class="card-body">
                                       <div id='PortfolioContent'>
                                          <div class='row'>
                                          <?php
                                             $Output='';
                                             foreach ($get_portfolio as $key => $row) {

                                                # code...
                                                 $str = $row['short_desc'];
                                                 if( strlen( $row['short_desc']) >200) {
                                                     $str = explode( "\n", wordwrap( $row['short_desc'], 200));
                                                     $str = $str[0] . '<div class="readMore">Read More ...</div>';
                                                 }
                                           
                                                 $TagsHTML = "";
                                                 $Tags = explode(',', $row['tags']);
                                                 foreach($Tags AS $Tag)
                                                 {
                                                     $TagsHTML .= "<span>$Tag</span>";
                                                 }
                                                 $Output .= "<div class='col-lg-4 col-md-6 col-sm-12 commonPortfolio moreBox'>
                                                                 <div class='potfolioDiv'>
                                                                     <a href='$url/portfolio/$row[slug]' target='_blank'>
                                                                     <div class='thumbImage' style='background-image: url($url/assets/portfolioimage/$row[image]);'>
                                                                             <div class='domainName'>$row[name]</div>
                                                                         </div>
                                                                         <div class='thumbDesc'>
                                                                             <div class='tags'>
                                                                                 $TagsHTML
                                                                             </div>
                                                                             <h2>$row[title]</h2>
                                                                             <p>$str</p>
                                                                         </div>
                                                                     </a>
                                                                 </div>
                                                             </div>";
                                             }
                                             echo $Output;
                                          ?>
                                          </div>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-12" id="loading-element">

                              <div class="load-more" style="display: none;">
                                 <img src="<?php echo $url; ?>assets/images/Loading.gif" alt="image"/>
                              </div>
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
      
      <?php 
         if(isset($_GET['category']) && $_GET['category']!=''){
      ?>
            var selected_category_slug = "<?php echo $_GET['category']; ?>";
            var selected_category = $("."+selected_category_slug).attr('id');
            var selected_category_name = $("."+selected_category_slug)[0].innerHTML;
            
            
      <?php
         }else{
      ?>
            var selected_category = "All";
            var selected_category_slug = "All";
            var selected_category_name = "All";

      <?php
         }
      ?>

      <?php 
         if(isset($_GET['tag']) && $_GET['tag']!=''){
      ?>
            var selected_tag = "<?php echo str_replace("-", " ", $_GET['tag']); ?>";
      <?php
         }else{
      ?>
            var selected_tag = "All";

      <?php
         }
      ?>
      
      loadCategory(selected_category_slug, selected_category, selected_category_name);

      var page = 1;
      var has_more = false;
      var ajax_load;
      var element_position = $('#PortfolioContent');
      $(document).ready(function() {
         $(".load-more").hide();
         if(selected_category_slug == "All"){
            $('.tabs-domain label:first').addClass('active');
         }
         $(window).on('scroll', function() {
            var y_scroll_pos = $(this).scrollTop();
            var scroll_pos_test = (element_position[0].offsetTop + element_position[0].offsetHeight) - 300;

            if (y_scroll_pos > scroll_pos_test) {

              loadPortfolio(selected_category, selected_tag);
            }
         });
      });

      function loadCategory(Slug, CategoryID = 'All', CatName) {
         page = 1;
         $("#cat-tabs").addClass('collapsed');
         $("#collapseExample").removeClass('show');
         $(".category-name").text('Category - ' + CatName);
         $(".category").removeClass('active');
         $("." + Slug).addClass('active');
         $('.nav-link').removeClass('active');
         
         if(typeof selected_tag == 'undefined'){
            selected_tag = "All";
         }
         $(".tag-" + selected_tag.replace(" ","-")).addClass('active');

         $("#PortfolioContent").html("");
         selected_category = CategoryID;
         selected_category_slug = Slug;
         
         has_more = true;
         loadPortfolio(CategoryID, selected_tag);
      }

      function loadCategoryWithTag(Tag, Category) {
         page = 1;
         $("#tags-tabs").addClass('collapsed');
         $("#collapseExample1").removeClass('show');
         $(".tag-name").text('Tags - ' + Tag);
         var Category = $(".tabs-domain label.active").attr('id');
         if (!Category) {
            Category = "All";
         }
         selected_category = Category;
         selected_tag = Tag;
         $("#PortfolioContent").html("");
         has_more = true;
         loadPortfolio(Category, Tag)
      }

      function loadPortfolio(CategoryID, Tag) {
         if (has_more) {
            $(".load-more").show();
            if (ajax_load) {
               ajax_load.abort();
            }
            updateURL();
            ajax_load = jQuery.ajax({
               url: '<?php echo $url; ?>core/ajax',
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
                  $("#PortfolioContent").html($("#PortfolioContent").html() + response.Output);
                  has_more = response.next;
                  $(".load-more").hide();
                  page++;
               }
            });
         }
      }
      function updateURL(){
         var URL = window.location.href;
         var index = URL.indexOf("portfolio");
         if(index>-1){
            URL = URL.substring(0,index);
         }
         URL=URL+"portfolio/"
         if(selected_category_slug!='All' || selected_tag!='All'){
            URL=URL+selected_category_slug+"/";
         }
         if(selected_category_slug!='All' || selected_tag!='All'){
            URL=URL+selected_tag.replace(" ","-");
         }
         console.log(URL);
         window.history.pushState("","", URL);
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