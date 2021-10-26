<?php
require_once('core/dbconnection.php');
require_once('core/ajax.php');

$slug=str_replace('.php', '', $_GET['title']);
$slug=trim($slug);
$get_blog=get_blog($conn,$slug);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="description" content="<?php echo $get_blog[0]['seo_desc'] ?>" />
    <meta name="keywords" content= "<?php echo $get_blog[0]['seo_keyword'] ?>" />
    <meta name="author" content="Ditstek" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $get_blog[0]['title'] ?></title>
    <meta property="og:title" content="4 Reasons Why Offshore Development Is A Better Option Than The Onshore - Ditstek Innovations" />
    <meta property="og:site_name" content="Dits Innovations" />
    <meta property="og:url" content="https://ditstek.com/blogs/4-reasons-why-offshore-development-is-a-better-option-than-the-onshore" />
    <meta property="og:description" content="The conceptions of offshore and onshore development are rooted within offshore and onshore firms' ideas, so we'll conjointly glance at that to compare the two of them." />
    <meta property="og:type" content="article" />
    <meta property="og:image" content="https://ditstek.com/assets/images/4-reasons-why-offshore-development.jpg" />
    <!--common css-->
    <?php include_once('common/commoncss.php'); ?>
</head>
<body>
    <!--header -->
    <?php include_once('common/topheader.php'); ?>
    <!--slider-->
    <section class="innerBanner">
        <!--navigation-->
        <?php include_once('common/header.php'); ?>
        <!---->
        <div class="bannerMain barkWrapper">
            <img src="<?php echo $url; ?>/assets/blogimages/<?php echo $get_blog[0]['image'] ?>" title="4 Reasons Why Offshore Development Is A Better Option Than The Onshore" alt="4 Reasons Why Offshore Development Is A Better Option Than The Onshore" />
            <div class="bannerDesc">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1><?php echo $get_blog[0]['title'] ?></h1>
                            <div class="bannerButton mt-3" id="bannerExtFour" data-toggle="modal" data-target="#exampleModal"> <a href="javascript:void(0);" class="btn btn-custom blueBtn siteBtn addCountry">Contact Form</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <?php include_once('common/popup-form.php'); ?>
    </div>
    <section class="blogInnerPage">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="blogInnerDesc">
                        <h2><?php echo $get_blog[0]['title'] ?></h2>
                        <span class="adminBlogs">
                            <span class="admin"><i class="fa fa-user"></i>Ditstek</span>
                            <span class="blogsIcon"><i class="fa fa-folder-o"></i>Blogs</span>
                        </span>
                        <?php echo $get_blog[0]['desc1'] ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="recentPosts">
                        <h2>Recent Posts</h2>
                        <ul>
                            <?php 
                             $sql= "SELECT * FROM blogs WHERE status=1 AND slug!='$slug' ORDER BY date DESC LIMIT 10 ";
                             $res=mysqli_query($conn,$sql);
                             if($res->num_rows>0)
                             {
                                while($row=$res->fetch_assoc()){
                            ?>
                            <li>
                                <a class="blogImage" href="<?php echo $row['slug'] ?>">
                                <?php
                                $img = str_replace(".jpg","",$row['image']);
                                ?>
                                <img src="/assets/blogimages/<?php echo $row['image'] ?>" title="<?php echo $img ?> " alt="image" /></a>
                                <div class="blogContent">
                                <div class="blogInnerContent"><a class="active" href="<?php echo $row['slug'] ?>" target="_self">
                                <?php echo $row['title'] ?></a></div>
                                <div class="srpw-meta"><?php echo date("d M Y", strtotime($row['date'])); ?></div>
                                </div>
                            </li>

                            <?php }}?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--footer-->
    <?php include_once('common/footer.php'); ?>
    <!--scripts-->
    <?php include_once('common/commonscripts.php'); ?>
</body>

</html>