<?php
require_once('core/dbconnection.php');
require_once('core/ajax.php');
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="pragma" content="no-cache" />
<meta name="description" content="Blogs - Ditstek Innovations"/>
<meta name="keywords" content="Blogs"/>
<meta name="author" content="Dits"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Custom Software Development Blog - Ditstek Innovations</title>
<!--common css-->
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
    <div class="bannerMain"> <img src="assets/images/blogbanner2.jpg" title="Blogs" alt="Blogs"/>
        <div class="bannerDesc">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1>Blogs</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <?php include_once('common/popup-form.php'); ?>
</div>
<section class="blogs">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="blogsDesc text-left">
                    <p>A remote software development company providing offshore development services enabling business rapidity and competence with web and mobile solutions.</p>
                </div>
            </div>
        </div>

        <div class="row quotes">
        <?php
        $sql= "SELECT * FROM blogs WHERE status=1 ORDER BY date desc";
        $res=mysqli_query($conn,$sql);
        if($res->num_rows>0)
        {
            while($row=$res->fetch_assoc()){
            $time  = strtotime($row['date']);
            $day   = date('d',$time);
            $month = date('M',$time);
            $year  = date('Y',$time);
            ?>
                <div class="col-lg-6 col-md-6 col-sm-6 blogBox moreBox">
                    <div class="blogDiv">
                        <a href="blog/<?php echo $row['slug'] ?>"  target="_blank">
                            <div class="thumbImage">
                                <img src="assets/blogimages/<?php echo $row['image'] ?>" alt="image"/> 
                                <span class="dayMonth"> <span class="day"><?php echo $day ?></span>
                                <span class="month"><?php echo strtoupper($month) ?></span>
                                <span class="day"><?php echo $year ?></span> </span> 
                            </div>
                            <div class="thumbDesc">
                                <h2><?php echo $row['title'] ?></h2>
                                <span class="adminBlogs"> 
                                    <span class="admin"><i class="fa fa-user"></i>Ditstek</span> 
                                    <span class="blogsIcon"><i class="fa fa-folder-o"></i>Blogs</span> 
                                </span>
                                <?php
                                  $str = $row['short_desc'];
                                  if( strlen( $row['short_desc']) > 200) 
                                {
                                    $str = explode( "\n", wordwrap( $row['short_desc'], 200));
                                    $str = $str[0] . '<div class="readMore">Read More ...</div>';
                                }
                                ?>
                                <p><?php echo $str; ?></p>
                            </div>
                        </a> 
                    </div>
                </div>
            <?php } 
            if($res->num_rows>4)
            { ?>
            <div class="col-sm-12">
                <div class="load-more">
                    <div class="load-more-button">Load More</div>
                </div>
            </div>
            <?php } ?>
        <?php }
        else { ?>
            <div class="col-sm-12">
                <span>No Blog Found.</span>
            </div>
        <?php } ?>
    </div>
  </div>
</section>
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
<!--footer-->
<?php include_once('common/footer.php'); ?>
<!--scripts-->
<?php include_once('common/commonscripts.php'); ?>
<!-- <script src="assets/js/app.js"></script> -->

<script>
	$(document).ready(function () {
  var x, size_li;
  function changeLoadCount(media) {
    if (media.matches) {
      x = 4; // no. of items per click mobile <= 767
      $(".moreBox").hide();
      $(".moreBox:lt(" + x + ")").show();
      size_li = $(".moreBox").length;
      if (x == size_li) {
        $(".load-more").hide();
      } else {
        $(".load-more").show();
      }
    } else {
      x = 4; // no. of items per click in desktop >= 768
      $(".moreBox").hide();
      $(".moreBox:lt(" + x + ")").show();
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
  window.addEventListener("load resize", function () {
    changeLoadCount(media);
    media.addListener(changeLoadCount);
  });

  function loadMore() {
    $(".moreBox").hide();
    size_li = $(".moreBox").length;
    $(".moreBox:lt(" + x + ")").show();
    $(".load-more-button").click(function () {
      if (media.matches) {
        x = x + 4 <= size_li ? x + 4 : size_li;
      } else {
        x = x + 4 <= size_li ? x + 4 : size_li;
      }
      $(".moreBox:lt(" + x + ")").show();
      if (x == size_li) {
        $(".load-more").hide();
      } else {
        $(".load-more").show();
      }
    });
  }
  loadMore();
});
</script> 

<!---->
</body>
</html>