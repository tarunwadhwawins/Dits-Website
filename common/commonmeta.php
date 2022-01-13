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
    <link href="<?php echo $current_url; ?>" rel="canonical"/>
    <meta name="author" content="Dits"/>