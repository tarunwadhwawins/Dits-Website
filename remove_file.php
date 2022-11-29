<?php
require_once('core/dbconnection.php');
$image = $_POST['file'];
unlink('./assets/portfolioimage/' . $image);

if(!empty($_POST['id'])){

	$res = mysqli_query($conn, "select * from portfolio where id='".$_POST['id']."'");
    $check = mysqli_num_rows($res);
    if ($check > 0) {
        $row = mysqli_fetch_assoc($res);

        $slider_image = trim(str_replace(",,",",",str_replace($image,"",$row['slider_image'])),',');
        
        $fs_image = trim(str_replace(",,",",",str_replace($image,"",$row['fs_image'])),',');
        
        $ss_image = trim(str_replace(",,",",",str_replace($image,"",$row['ss_image'])),',');
        $image = trim(str_replace(",,",",",str_replace($image,"",$row['image'])),',');

		$update_sql = "UPDATE `portfolio` SET `image`='".$image."',`slider_image`='".$slider_image."',`fs_image`='".$fs_image."',`ss_image`='".$ss_image."'  where id='".$_POST['id']."' ";

		mysqli_query($conn, $update_sql);
    }
}