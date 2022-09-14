<?php
  $current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $current_page = str_replace($url, "", $current_url); 
  if($current_page == ""){
    $current_page = "/";
  }
  $res = mysqli_query($conn, "select * from meta_tags where slug='$current_page'");
  $check = mysqli_num_rows($res);
  if ($check > 0) {
      $row = mysqli_fetch_assoc($res);
      $title = $row['title'];
      $keyword = $row['keyword'];
      $description = $row['description'];
?>
      <title><?php echo $title; ?></title>
      <meta name="description" content="<?php echo $description; ?>"/>
      <meta name="keywords" content="<?php echo $keyword; ?>"/>
<?php
  } else {
?>
    <title></title>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
<?php
  }
?>
    <meta charset="utf-8">
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="msvalidate.01" content="3F416B44A7EE2BB4BCE8BF552AAEE8E4" />
    <meta name="robots" content="follow, index"/>
    <link rel="canonical" href="<?php echo $current_url; ?>"/>
    <meta name="author" content="Dits"/>

    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="@ditstek"/>
    <meta name="twitter:title" content="<?php echo $title; ?>"/>
    <meta name="twitter:description" content="<?php echo $description; ?>"/>
    <meta name="twitter:image" content="https://ditstek.com/assets/images/logo.png"/>

    <meta property="og:title" content="<?php echo $title; ?>"/> 
    <meta property="og:url" content="<?php echo $current_url; ?>"/> 
    <meta property="og:site_name" content="DITSTEK"/> 
    <meta property="og:image" content="<?php echo $url; ?>assets/images/logo.png"/> 
    <meta property="og:type" content="website"/> 
    <meta property="og:description" content="<?php echo $description; ?>"/></code>

    <?php include_once('seo-scripts.php'); ?>

