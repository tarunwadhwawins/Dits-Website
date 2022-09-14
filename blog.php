<?php
require_once('core/dbconnection.php');
require_once('core/ajax.php');

?>

<!doctype html>
<html lang="en">
<head>
<?php include_once('common/commonmeta.php'); ?>
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
        <div id='BlogContent' class="quotes">
            <?php
            $page = 1;
       
                $limit = 40;
                $offset = ($page-1)*$limit;
                
                $sql = "SELECT * FROM blogs WHERE status=1 ORDER BY date desc";
                
                $res=mysqli_query($conn,$sql);
                $total_record = $res->num_rows;

                $sql.=" limit ".$offset.",".$limit; 
                $res=mysqli_query($conn,$sql);
                $Response = array();
                $Output = "";
                if(mysqli_num_rows($res) > 0)
                {

                    $Output .= "<div class='row'>";
                    while($row = mysqli_fetch_assoc($res))
                    {
                        $time  = strtotime($row['date']);
                        $day   = date('d',$time);
                        $month = date('M',$time);
                        $year  = date('Y',$time);
                        $str = $row['short_desc'];
                        if( strlen( $row['short_desc']) > 200) 
                        {
                            $str = explode( "\n", wordwrap( $row['short_desc'], 200));
                            $str = $str[0] . '<div class="readMore">Read More ...</div>';
                        }
                        $Output .='
                        <div class="col-lg-6 col-md-6 col-sm-6 blogBox moreBox">
                            <div class="blogDiv">
                                <a href="blog/'.$row['slug'].'"  target="_blank">
                                    <div class="thumbImage">
                                        <img src="assets/blogimages/'.$row['image'].'" alt="image"/> 
                                        <span class="dayMonth"> <span class="day">'.$day.'</span>
                                        <span class="month">'.strtoupper($month).'</span>
                                        <span class="day">'.$year.'</span> </span> 
                                    </div>
                                    <div class="thumbDesc">
                                        <h2>'.$row['title'].'</h2>
                                        <span class="adminBlogs"> 
                                            <span class="admin"><i class="fa fa-user"></i>Ditstek</span> 
                                            <span class="blogsIcon"><i class="fa fa-folder-o"></i>Blogs</span> 
                                        </span><p>'.$str.'</p>
                                    </div>
                                </a> 
                            </div>
                        </div>';
                    }
                    $Output .= "</div>";
                }
                else
                {
                    $Output = "<center>No Result Found.</center>";
                }
                echo $Output;
                $total_page = ceil($total_record/$limit);
                
                if($total_page > $page){
                    $Response['next'] = true;
                }else{
                    $Response['next'] = false;
                }
            ?>
        </div>
        <div class="row">
            <div class="col-sm-12" id="loading-element" style="height:50px;">
                <div class="load-more" style="display: none;">
                    <img src="<?php echo $url; ?>assets\images\Loading.gif" style="height: 100px;"/>
                </div>
            </div>
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
    var page = 2;
    var has_more = <?php echo $Response['next']; ?>;
    var ajax_load ;
    $(document).ready(function () {
  
        

        $(".load-more").hide();
        
        var element_position = $('#BlogContent');

       /* $(window).on('scroll', function() {
            var y_scroll_pos = $(this).scrollTop();
            var scroll_pos_test = (element_position[0].offsetTop+element_position[0].offsetHeight)-300;
            
            if(y_scroll_pos > scroll_pos_test) {
               
                loadBlog();
            }
        });*/
  
    });
    
    function loadBlog()
    {
        if(has_more){
            $(".load-more").show();
            if(ajax_load){
                ajax_load.abort();
            }
            ajax_load = jQuery.ajax({
                            url: '<?php echo $url; ?>/core/ajax',
                            method: "GET",
                            headers: {
                               "content-type": "application/x-www-form-urlencoded"
                            },
                            data: {
                               "Action": 'getBlog',
                               "page": page
                            },
                            success: function(response) {
                               var response = JSON.parse(response);
                               $("#BlogContent").html( $("#BlogContent").html()+response.Output);
                               has_more = response.next;
                               $(".load-more").hide();
                               page++;
                            }
                        });
        }
    }
    //loadBlog();
</script> 

<!---->
</body>
</html>