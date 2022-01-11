<?php

if (isset($_FILES['file']) && $_FILES['file']['name'] != '') {
    //$image = rand(111111111, 999999999) . '_' . $_FILES['image']['name'];
    $image = time()."_".str_replace(" ", "_", $_FILES['file']['name']);
    $extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    $allowed_extensions = array("jpg", "jpeg", "png", "gif");
    if (!in_array($extension, $allowed_extensions)) {
        $msg1 = "Invalid format. Only jpg / jpeg/ png /gif format allowed";
    } else {
        $FileUpload = move_uploaded_file($_FILES['file']['tmp_name'], './assets/portfolioimage/' . $image);
        if (!$FileUpload) {
            $msg1 = "Error in file uploading. Please try again.";
        }
        echo json_encode(array('file'=>$image));die;
    }
} else {
    $image = '';
}