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
                                    <label class="tab category All" for="radio0" onclick="loadCategory('All', 'All', 'All')">All</label>
                                    <?php $get_category = get_category($conn);
                                    $i = 1;
                                    foreach ($get_category as $list) { ?>
                                       <input type="radio" id="radio<?php echo $i ?>" name="tabs" />
                                       <label class="tab category <?php echo $list['slug'] ?>" data-slug="<?php echo $list['slug']; ?>" data-id="<?php echo $list['id']; ?>" for="radio-1" onclick="loadCategory('<?php echo $list['slug'] ?>', '<?php echo $list['id'] ?>', '<?php echo $list['name'] ?>')" id="<?php echo $list['id'] ?>"><?php echo $list['name'] ?></label>
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
                                 <label class="tab category <?php echo $list['slug'] ?>" data-slug="<?php echo $list['slug']; ?>" data-id="<?php echo $list['id']; ?>" for="radio-1" onclick="loadCategory('<?php echo $list['slug'] ?>', '<?php echo $list['id'] ?>', '<?php echo $list['name'] ?>')" id="<?php echo $list['id'] ?>"><?php echo $list['name'] ?></label>
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
                                          <a id="tab-A" href="#pane-A" class="nav-link active" data-toggle="tab" role="tab" onclick="loadCategoryWithTag('All')">All</a>
                                       </li>
                                       <?php
                                       $get_tags = get_tags($conn);
                                       foreach ($get_tags as $tag) {
                                       ?>
                                          <li class="nav-item">
                                             <a id="tab-ALL" href="#pane-ALL" class="nav-link" data-toggle="tab" data-tag="<?php echo $tag['tag']; ?>" role="tab" onclick="loadCategoryWithTag('<?php echo $tag['tag'] ?>')"><?php echo $tag['tag'] ?></a>
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
                                 <a id="tab-A" href="#pane-A" class="nav-link active" data-toggle="tab" role="tab" onclick="loadCategoryWithTag('All')">All</a>
                              </li>

                              <?php
                              $get_tags = get_tags($conn);
                              foreach ($get_tags as $tag) {
                              ?>
                                 <li class="nav-item">
                                    <a id="tab-ALL" href="#pane-ALL" class="nav-link" data-toggle="tab" role="tab" data-tag="<?php echo $tag['tag']; ?>" onclick="loadCategoryWithTag('<?php echo $tag['tag'] ?>')"><?php echo $tag['tag'] ?></a>
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
                                                                     <a href='portfolio/$row[slug]' target='_blank'>
                                                                     <div class='thumbImage' style='background-image: url(assets/portfolioimage/$row[image]);'>
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
      var selected_category = "All";
      var selected_tag = "All";
      var page = 1;
      var has_more = false;
      var ajax_load;
      var element_position = $('#PortfolioContent');
      getURLparameter();
      $(document).ready(function() {
         $(".load-more").hide();
         if(selected_category=="All"){
            $('.tabs-domain label:first').addClass('active');
         }
         //$("#PortfolioContent").html("");
         //loadPortfolio(selected_category, selected_tag);

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
         $('.tabs li:first .nav-link').addClass('active');
         $("#PortfolioContent").html("");
         selected_category = CategoryID;
         selected_tag = "All";
         has_more = true;

         window.history.replaceState('', '', updateURLParameter(window.location.href, "category", Slug));
         loadPortfolio(CategoryID, 'All');
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
         window.history.replaceState('', '', updateURLParameter(window.location.href, "tag", Tag));
         loadPortfolio(Category, Tag)
      }

      function loadPortfolio(CategoryID, Tag) {
         if (has_more) {
            $(".load-more").show();
            if (ajax_load) {
               ajax_load.abort();
            }
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
      function getURLparameter(){
         const queryString = window.location.search;
         const urlParams = new URLSearchParams(queryString);
         const category = urlParams.get('category');
         if($("."+category).length>0){
            var slug = $("."+category).data('slug');
            var id = $("."+category).data('id');
            var text = $("."+category).text();
            loadCategory(slug,id,text);
         }

         const tag = urlParams.get('tag');
         if($('[data-tag='+tag+']').length>0){
            $('[data-tag='+tag+']').click();
         }
      }
      function updateURLParameter(url, param, paramVal){
          var newAdditionalURL = "";
          var tempArray = url.split("?");
          var baseURL = tempArray[0];
          var additionalURL = tempArray[1];
          var temp = "";
          if (additionalURL) {
              tempArray = additionalURL.split("&");
              for (var i=0; i<tempArray.length; i++){
                  if(tempArray[i].split('=')[0] != param){
                      newAdditionalURL += temp + tempArray[i];
                      temp = "&";
                  }
              }
          }

          var rows_txt = temp + "" + param + "=" + paramVal;
          return baseURL + "?" + newAdditionalURL + rows_txt;
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