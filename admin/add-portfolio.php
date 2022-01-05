<?php
require_once('../core/ajax.php');
$category_id = $seo_title = $seo_keyword = $seo_desc = $title = $slug = $date = $tags = $image = $slider_image = $banner_heading =  $short_desc = $long_desc = $fs_heading = $fs_sub_heading = $fs_description = $fs_image = $image_text = $ss_description = $ss_image = $cat_link =  $msg = $extension = '';
$tags = array();
$image_required = 'required';
$fs_image_required = 'required';
$ss_image_required = 'required';
$sliderImage_required = 'required';

if (isset($_GET['id']) && $_GET['id'] != '') {
    $image_required = '';
    $fs_image_required = '';
    $ss_image_required = '';
    $sliderImage_required = '';
    $id = get_safe_value($conn, $_GET['id']);
    $res = mysqli_query($conn, "select * from portfolio where id='$id'");
    $check = mysqli_num_rows($res);
    if ($check > 0) {
        $row = mysqli_fetch_assoc($res);
        $category_id = $row['category_id'];
        $seo_title = $row['seo_title'];
        $seo_keyword = $row['seo_keyword'];
        $seo_desc = $row['seo_desc'];
        $title = $row['title'];
        $slug = $row['slug'];
        $tags = (explode(',', $row['tags']));
        $image = $row['image'];
        $slider_image = (explode(',', $row['slider_image']));
        $banner_heading = $row['banner_heading'];
        $fs_heading = $row['fs_heading'];
        $fs_sub_heading = $row['fs_sub_heading'];
        $fs_description = $row['fs_description'];
        $fs_image = (explode(',', $row['fs_image']));
        $image_text = $row['image_text'];
        $ss_description = $row['ss_description'];
        $ss_image = (explode(',', $row['ss_image']));
        $date = $row['date'];
        $short_desc = $row['short_desc'];
    } else {
        header('location:portfolio.php');
        die();
    }
}

if (isset($_POST['submit'])) {
    // echo "<pre>";
    // print_r($_POST);
    // print_r($_FILES);
    // die;
    $seo_title = get_safe_value($conn, $_POST['seo_title']);
    $seo_keyword = get_safe_value($conn, $_POST['seo_keyword']);
    $seo_desc = get_safe_value($conn, $_POST['seo_desc']);
    $category_id = get_safe_value($conn, $_POST['category_id']);
    $title = get_safe_value($conn, $_POST['title']);
    $tags = (implode(',', $_POST['tags']));
    $banner_heading = get_safe_value($conn, $_POST['banner_heading']);
    $fs_heading = get_safe_value($conn, $_POST['fs_heading']);
    $fs_sub_heading = get_safe_value($conn, $_POST['fs_sub_heading']);
    $fs_description = get_safe_value($conn, $_POST['fs_description']);
    $image_text = get_safe_value($conn, $_POST['image_text']);
    $ss_description = get_safe_value($conn, $_POST['editor1']);
    $date = get_safe_value($conn, $_POST['date']);
    $short_desc = get_safe_value($conn, $_POST['short_desc']);
    $slug1 = str_replace(' ', '-', $title);
    $slug = trim(strtolower($slug1), "?");

    $MainImageQuery = "";
    if (isset($_FILES['image']) && $_FILES['image']['name'] != '') {
        //$image = rand(111111111, 999999999) . '_' . $_FILES['image']['name'];
        $image = $_FILES['image']['name'];
        $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $allowed_extensions = array("jpg", "jpeg", "png", "gif");
        if (!in_array($extension, $allowed_extensions)) {
            $msg1 = "Invalid format. Only jpg / jpeg/ png /gif format allowed";
        } else {
            $FileUpload = move_uploaded_file($_FILES['image']['tmp_name'], '../assets/portfolioimage/' . $image);
            if (!$FileUpload) {
                $msg1 = "Error in file uploading. Please try again.";
            }
            $MainImageQuery = ", image = '$image'";
        }
    } else {
        $image = '';
    }

    $Section1ImageQuery = "";
    if (isset($_FILES['fs_image']) && $_FILES['fs_image']['name'] != '') {
        foreach ($_FILES["fs_image"]["error"] as $key => $error) {
            if ($error == UPLOAD_ERR_OK) {
                $fs_image = $_FILES['fs_image']['name'];
                $fsImage = implode(",", $fs_image);
                $name = $_FILES["fs_image"]["name"][$key];
                $tmp_name = $_FILES["fs_image"]["tmp_name"][$key];
                move_uploaded_file($tmp_name, "../assets/portfolioimage/" . $name);

                $res = mysqli_query($conn, "select fs_image from portfolio ");
                $checkImage = mysqli_num_rows($res);
                $row = mysqli_fetch_array($res);
                $oldImage = $row['fs_image'];
                $newSection1Image = $fsImage . "," . $oldImage;

                $Section1ImageQuery = ", fs_image = '$newSection1Image'";
            }
        }
    }

    $Section2ImageQuery = "";
    if (isset($_FILES['ss_image']) && $_FILES['ss_image']['name'] != '') {
        foreach ($_FILES["ss_image"]["error"] as $key => $error) {
            if ($error == UPLOAD_ERR_OK) {
                $ss_image = $_FILES['ss_image']['name'];
                $ssImage = implode(",", $ss_image);
                $name = $_FILES["ss_image"]["name"][$key];
                $tmp_name = $_FILES["ss_image"]["tmp_name"][$key];
                move_uploaded_file($tmp_name, "../assets/portfolioimage/" . $name);

                $res = mysqli_query($conn, "select ss_image from portfolio ");
                $checkImage = mysqli_num_rows($res);
                $row = mysqli_fetch_array($res);
                $oldImage = $row['ss_image'];
                $newSection2Image = $ssImage . "," . $oldImage;
                $Section2ImageQuery = ", ss_image = '$newSection2Image'";
            }
        }
    }


    $sliderImageUpdate = "";
    if (isset($_FILES['sliderImage']) && $_FILES['sliderImage']['name'] != '') {
        foreach ($_FILES["sliderImage"]["error"] as $key => $error) {
            if ($error == UPLOAD_ERR_OK) {
                $sliderImage = $_FILES['sliderImage']['name'];
                $fileName = implode(",", $sliderImage);
                $name = $_FILES["sliderImage"]["name"][$key];
                $tmp_name = $_FILES["sliderImage"]["tmp_name"][$key];
                move_uploaded_file($tmp_name, "../assets/portfolioimage/" . $name);

                $res = mysqli_query($conn, "select slider_image from portfolio ");
                $checkImage = mysqli_num_rows($res);
                $row = mysqli_fetch_array($res);
                $oldImage = $row['slider_image'];
                $newSliderImage = $fileName . "," . $oldImage;
                $sliderImageUpdate = ", slider_image = '$newSliderImage'";
            }
        }
    }

    $res = mysqli_query($conn, "select * from portfolio where title='$title'");
    $check = mysqli_num_rows($res);
    if ($check > 0) {
        if (isset($_GET['id']) && $_GET['id'] != '') {
            $getData = mysqli_fetch_assoc($res);
            if ($id == $getData['id']) {
            } else {
                $msg = "Title already exist";
            }
        } else {
            $msg = "Title already exist";
        }
    }
    if ($msg == '') {
        if (isset($_GET['id']) && $_GET['id'] != '') {
            if ($MainImageQuery != '' || $Section1ImageQuery != '' || $Section2ImageQuery != '' || $sliderImageUpdate != '') {
                $update_sql = "update portfolio set  seo_title = '$seo_title' , seo_keyword = '$seo_keyword' , seo_desc = '$seo_desc' ,
                category_id = '$category_id' , title='$title', slug='$slug' , tags = '$tags', banner_heading='$banner_heading', 
                fs_heading = '$fs_heading' , fs_sub_heading = '$fs_sub_heading', fs_description = '$fs_description' $Section1ImageQuery , image_text = '$image_text' , ss_description = '$ss_description' $Section2ImageQuery  , date='$date' ,
                short_desc='$short_desc' $MainImageQuery $sliderImageUpdate  where id='$id'";
            } else {
                $update_sql = "update portfolio set  seo_title = '$seo_title' , seo_keyword = '$seo_keyword' , seo_desc = '$seo_desc' ,
                category_id = '$category_id' , title='$title', slug='$slug' , tags = '$tags', banner_heading='$banner_heading', fs_heading = '$fs_heading' ,
                fs_sub_heading = '$fs_sub_heading', fs_description = '$fs_description', image_text = '$image_text'  , ss_description = '$ss_description'  , date='$date' ,
                short_desc='$short_desc'  where id='$id'";
            }

            mysqli_query($conn, $update_sql);

            session_start();
            $_SESSION['success_message'] = "Data updated successfully.";
        } else {
            $sql = mysqli_query($conn, 'insert into portfolio (seo_title, seo_keyword, seo_desc,category_id, title, slug , tags, banner_heading , sub_heading , short_desc, fs_heading , fs_sub_heading ,  fs_description ,  fs_image , image_text , ss_description ,  ss_image , date, status, image,slider_image) 
            values("'.$seo_title.'", "'.$seo_keyword.'", "'.$seo_desc.'", "'.$category_id.'", "'.$title.'", "'.$slug.'" , "'.$tags.'", "'.$banner_heading.'", "'.$sub_heading.'", "'.$short_desc.'", "'.$fs_heading.'", "'.$fs_sub_heading.'" , "'.$fs_description.'"  , "'.$fsImage.'", "'.$image_text.'" , "'.$ss_description.'" , "'.$ssImage.'" , "'.$date.'", "1", "'.$image.'",  "'.$fileName.'")');

            session_start();
            $_SESSION['success_message'] = "Data inserted successfully.";
        }
       
        header('location:add-portfolio.php?id=' . $_GET['id']);
        die();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <!---->
    <?php include_once('common/commoncss.php'); ?>
    <link rel="stylesheet" href="https://unpkg.com/@jcubic/tagger@0.x.x/tagger.css" />
    <!---->
    <style>
        .imgGallery img {
            padding: 4px;
            max-width: 100px;
        }

        .ssGallery img {
            padding: 4px;
            max-width: 100px;
        }

        .fsGallery img {
            padding: 4px;
            max-width: 100px;
        }
    </style>
</head>

<body>
    <!--sidebar-->
    <?php include_once('common/sidebar.php'); ?>
    <!--header-->
    <?php include_once('common/header.php'); ?>

    <!--content-->
    <div class="main-content">
        <div class="inner-content">
            <div class="heading">
                <h1>Portfolio</h1>
                <div class="addBtn">
                    <a class="btn btn-primary" href="portfolio.php">Back</a>
                </div>
            </div>
            <div class="whiteBg">
                <h2>Portfolio</h2>
                <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
                    <div id="successMessage" style="margin-bottom: 20px;font-size: 20px;color: green;"><?php echo $_SESSION['success_message']; ?></div>
                <?php
                    unset($_SESSION['success_message']);
                }
                ?>
                <form method="post" name="portfolioForm" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Seo Title</label>
                                <input type="text" name="seo_title" value="<?php echo $seo_title ?>" class="form-control" placeholder="Enter  Title" />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Seo Keyword</label>
                                <input type="text" name="seo_keyword" value="<?php echo $seo_keyword ?>" class="form-control" placeholder="Enter  Title" />
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Seo Description</label>
                                <textarea class="form-control" name="seo_desc" placeholder="Enter Seo Description"><?php echo $seo_desc ?></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Select Category</label>
                                <select class="form-control" name="category_id" id="category_id" required>
                                    <?php
                                    $res = mysqli_query($conn, "select id,name from category order by name asc");
                                    while ($row = mysqli_fetch_assoc($res)) {
                                        if ($row['id'] == $category_id) {
                                            echo "<option selected value='" . $row['id'] . "'>" . $row['name'] . "</option>";
                                        } else {
                                            echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
                                        }
                                    }
                                    ?>

                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Select tags</label>
                                <select id="example-getting-started" name="tags[]" multiple="multiple" class="form-control">
                                    <?php

                                    $res = mysqli_query($conn, "select id,tag from tags order by tag asc");
                                    while ($row = mysqli_fetch_assoc($res)) {
                                        if (in_array($row['tag'], $tags)) {
                                            echo "<option selected value='" . $row['tag'] . "'>" . $row['tag'] . "</option>";
                                        } else {
                                            echo "<option value='" . $row['tag'] . "'>" . $row['tag'] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" id="title" value="<?php echo $title ?>" class="form-control" placeholder="Enter  Title" required />
                                <span><?php echo $msg ?></span>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Date</label>
                                <?php
                                if ($date != '') {
                                    $val = date('Y-m-d', strtotime($date));
                                } else {
                                    $val = '';
                                }
                                ?>
                                <input type="date" name="date" id="date" value="<?php echo $val ?>" class="form-control" placeholder="Enter Date" required />
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Short Description</label>
                                <textarea class="form-control" name="short_desc" id="short_desc" placeholder="Enter Short Description" required><?php echo $short_desc ?></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Banner Heading</label>
                                <input type="text" name="banner_heading" id="heading" value="<?php echo html_entity_decode($banner_heading); ?>" class="form-control" placeholder="Enter Heading" required />
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Images Upload</label>
                                <div class="btnWrapper" style="display: <?php echo ($image == '') ? 'none' : 'flex'; ?>;" id='ImageBlock'>
                                    <div class="image-inner">
                                        <img id="output_image" width="100" height="60" src="../assets/portfolioimage/<?php echo $image ?>" />
                                    </div>
                                    <div class="fileName"><?php echo ($image != '') ? $image : ''; ?></div>
                                    <div class="crossIcon" id="crossIcon" onclick="HideImageButton()"><i class="fa fa-times"></i></div>
                                </div>
                                <div class="upload-btn-wrapper" id="imageUpload">
                                    <button class="btn" name="image"><i class="fa fa-cloud-upload"></i>Upload a file</button>
                                    <input type="file" name="image" id="image" accept="image/*" onchange="preview_image(event)" value="<?php echo $image ?>" class="form-control" <?php echo $image_required ?> />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">First Section</div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Heading</label>
                                                <input type="text" name="fs_heading" id="fs_heading" value="<?php echo $fs_heading ?>" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Sub-Heading</label>
                                                <textarea class="form-control" name="fs_sub_heading" id="fs_sub_heading"><?php echo $fs_sub_heading ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="ckeditor" name="fs_description" id="fs_description" required><?php echo $fs_description ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Image Upload</label>
                                                <div class="fsGallery"></div>
                                                <?php
                                                if (is_array($fs_image) || is_object($fs_image)) {
                                                    foreach ($fs_image as $list) {
                                                ?>
                                                        <div class="btnWrapper" style="display: <?php echo ($list == '') ? 'none' : 'flex'; ?>;" id='ImageBlock1Section-<?php echo $_GET['id'] ?>'>
                                                            <div class="image-inner">
                                                                <img width='90' height='70' id='photo' src='../assets/portfolioimage/<?php echo $list ?>'>
                                                            </div>
                                                            <div class=" "><?php echo ($list != '') ? $list : ''; ?></div>
                                                            <a href='add-portfolio?id=<?php echo $id ?>' data-id="<?php echo $_GET['id'] ?>" data-name="<?php echo $list  ?>" class='delete-image1'>
                                                                <div class="crossIcon" id="crossIcon"><i class="fa fa-times"></i></div>
                                                            </a>
                                                        </div>
                                                <?php  }
                                                }
                                                ?>
                                                <div class="upload-btn-wrapper">
                                                    <button class="btn" name="fs_image[]"><i class="fa fa-cloud-upload"></i>Upload a file</button>
                                                    <input type="file" name="fs_image[]" id="fs_image" multiple value="<?php echo $fsImage = implode(",", $fs_image) ?>" class="form-control" <?php echo $fs_image_required ?> />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Image Map</label>
                                                <textarea class="form-control" name="image_text" id="image_text"><?php echo $image_text ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">Second Section</div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="ckeditor" name="editor1" id="editor1" required><?php echo $ss_description ?></textarea>
                                            </div>
                                            </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Image Upload</label>
                                                <div class="ssGallery"></div>
                                                <?php
                                                if (is_array($ss_image) || is_object($ss_image)) {
                                                    foreach ($ss_image as $list) {
                                                ?>
                                                        <div class="btnWrapper" style="display: <?php echo ($list == '') ? 'none' : 'flex'; ?>;" id='ImageBlock2Section-<?php echo $_GET['id'] ?>'>
                                                            <div class="image-inner">
                                                                <img width='90' height='70' id='photo' src='../assets/portfolioimage/<?php echo $list ?>'>
                                                            </div>
                                                            <div class=" "><?php echo ($list != '') ? $list : ''; ?></div>
                                                            <a href='add-portfolio?id=<?php echo $id ?>' data-id="<?php echo $_GET['id'] ?>" data-name="<?php echo $list  ?>" class='delete-image2'>
                                                                <div class="crossIcon" id="crossIcon"><i class="fa fa-times"></i></div>
                                                            </a>
                                                        </div>
                                                <?php  }
                                                }
                                                ?>
                                                <div class="upload-btn-wrapper">
                                                    <button class="btn" name="ss_image[]"><i class="fa fa-cloud-upload"></i>Upload a file</button>
                                                    <input type="file" name="ss_image[]" id="ss_image" multiple value="<?php echo $ssImage = implode(",", $ss_image) ?>" class="form-control" <?php echo $ss_image_required ?> />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">Slider Section</div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Image Upload</label>
                                                <div class="imgGallery"> </div>
                                                <?php
                                                if (is_array($slider_image) || is_object($slider_image)) {
                                                    foreach ($slider_image as $list) {
                                                ?>
                                                        <div class="btnWrapper" style="display: <?php echo ($list == '') ? 'none' : 'flex'; ?>;" id='ImageBlockSlider-<?php echo $_GET['id'] ?>'>
                                                            <div class="image-inner">
                                                                <img width='90' height='70' id='photo' src='../assets/portfolioimage/<?php echo $list ?>'>
                                                            </div>
                                                            <div class=" "><?php echo ($list != '') ? $list : ''; ?></div>
                                                            <a href='add-portfolio?id=<?php echo $id ?>' data-id="<?php echo $_GET['id'] ?>" data-name="<?php echo $list  ?>" class='delete-image'>
                                                                <div class="crossIcon" id="crossIcon"><i class="fa fa-times"></i></div>
                                                            </a>
                                                        </div>
                                                <?php  }
                                                }
                                                ?>
                                                <div class="upload-btn-wrapper">
                                                    <button class="btn" name="sliderImage[]"><i class="fa fa-cloud-upload"></i>Upload a file</button>
                                                    <input type="file" name="sliderImage[]" value="<?php echo $sliderImage = implode(",", $slider_image) ?>" id="sliderFile" multiple class="form-control" <?php echo $sliderImage_required ?> />
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    </div>
    <!---->
    <?php include_once('common/commonjs.php'); ?>
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
    <script src="assets/js/bootstrap-multiselect.js"></script>
    <script>
        $(document).ready(function() {
            CKEDITOR.instances.editor1.on('change', function() {
                if (CKEDITOR.instances.editor1.getData().length > 0) {
                    $('label[for="editor1"]').hide();
                } else {
                    $('label[for="editor1"]').show();
                }
            });
        });

        $(document).ready(function() {
            CKEDITOR.instances.fs_description.on('change', function() {
                if (CKEDITOR.instances.fs_description.getData().length > 0) {
                    $('label[for="fs_description"]').hide();
                } else {
                    $('label[for="fs_description"]').show();
                }
            });
        });

        $(window).on('load', function() {
            CKEDITOR.replace('editor1');
        });

        //update  multiple image delete one by one on x click

        $(document).on('click', '.delete-image1', function() {
            var imageId = $(this).attr('data-id');
            var imageName = $(this).attr('data-name');
            var result = confirm("Are You sure want to delete!");

            if (result) {
                $.ajax({
                    url: '/core/ajax',
                    method: "POST",
                    headers: {
                        "content-type": "application/x-www-form-urlencoded"
                    },
                    data: {
                        "Action": 'RemoveImageSection1',
                        "id": imageId,
                        "name": imageName
                    },
                    success: function(html) {
                        $('#ImageBlock1Section-' + imageId).remove();
                    }
                });
            }
        });


        $(document).on('click', '.delete-image2', function() {
            var imageId = $(this).attr('data-id');
            var imageName = $(this).attr('data-name');
            var result = confirm("Are You sure want to delete!");

            if (result) {
                $.ajax({
                    url: '/core/ajax',
                    method: "POST",
                    headers: {
                        "content-type": "application/x-www-form-urlencoded"
                    },
                    data: {
                        "Action": 'RemoveImageSection2',
                        "id": imageId,
                        "name": imageName
                    },
                    success: function(html) {
                        $('#ImageBlock2Section-' + imageId).remove();
                    }
                });
            }
        });


        $(document).on('click', '.delete-image', function() {

            var imageId = $(this).attr('data-id');
            var imageName = $(this).attr('data-name');
            var result = confirm("Are You sure want to delete!");
            console.log(imageName);
            if (result) {
                $.ajax({
                    url: '/core/ajax',
                    method: "POST",
                    headers: {
                        "content-type": "application/x-www-form-urlencoded"
                    },
                    data: {
                        "Action": 'RemoveImage',
                        "id": imageId,
                        "name": imageName
                    },
                    success: function(html) {
                        $('#ImageBlockSlider-' + imageId).remove();
                    }
                });
            }
        });



        $(document).ready(function() {
            $('#example-getting-started').multiselect();
        });

        $(function() {
            $("form[name='portfolioForm']").validate({
                // Define validation rules
                ignore: [],
                debug: false,
                rules: {
                    category_id: {
                        required: true
                    },
                    title: {
                        required: true,

                    },
                    tags: {
                        required: true,

                    },
                    heading: {
                        required: true
                    },
                    sub_heading: {
                        required: true
                    },
                    short_desc: {
                        required: true
                    },
                    image_text: {
                        required: true
                    },
                    editor1: {
                        required: function(textarea) {
                            CKEDITOR.instances[textarea.id].updateElement();
                            var editorcontent = textarea.value.replace(/<[^>]*>/gi, '');
                            return editorcontent.length === 0;
                        }
                    },
                    fs_description: {
                        required: function(textarea) {
                            CKEDITOR.instances[textarea.id].updateElement();
                            var editorcontent = textarea.value.replace(/<[^>]*>/gi, '');
                            return editorcontent.length === 0;
                        }
                    },
                    fs_heading: {
                        required: true
                    },
                    fs_sub_heading: {
                        required: true
                    },
                    date: {
                        required: true
                    }

                },
                messages: {
                    title: "This field is required.",
                    tags: "This field is required.",
                    heading: "This field is required.",
                    category_id: "This field is required.",
                    sub_heading: "This field is required.",
                    short_desc: "This field is required.",
                    image_text: "This field is required.",
                    editor1: {
                        required: "This field is required"
                    },
                    fs_description: {
                        required: "This field is required"
                    },
                    fs_heading: "This field is required.",
                    fs_sub_heading: "This field is required.",
                    date: "This field is required.",
                },
                /* use below section if required to place the error*/
                errorPlacement: function(error, element) {
                    if (element.attr("name") == "editor1") {
                        error.insertAfter("#cke_editor1");
                    } else {
                        error.insertAfter(element);
                    }
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        });

        function preview_image(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('output_image');
                output.src = reader.result;
                $('#ImageBlock').show();
            }
            reader.readAsDataURL(event.target.files[0]);
            $('.fileName').html(event.target.files[0].name);
            $('#imageUpload').hide();
            $('#ImageBlock').show();
        }

        function HideImageButton() {
            var result = confirm("Are You sure want to delete!");
            if (result) {
                $('#ImageBlock').hide();
            }
            $('#imageUpload').show();
            $('#image').val('');
        }

        //window.setTimeout("document.getElementById('successMessage').style.display='none';", 3000);
    </script>
    <!---->
    <script>
        $(document).ready(function() {
            $('.delete-image').click(function() {
                $('#ImageBlock1Section').hide();
            });
        });

        $(document).ready(function() {
            $('.delete-image').click(function() {
                $('#ImageBlock2Section').hide();
            });
        });

        $(document).ready(function() {
            $('.delete-image').click(function() {
                $('#ImageBlockSlider').hide();
            });
        });

        // Multiple images preview 
        $(function() {
            var multiImgPreview = function(input, imgPreviewPlaceholder) {

                if (input.files) {
                    var filesAmount = input.files.length;
                    var items = input.files;
                    for (i = 0; i < filesAmount; i++) {
                        var Imagehtml = '';
                        var wrapperid = "btnWrapperid_" + i;
                        var src = URL.createObjectURL(event.target.files[i]);
                        html = '<div class="btnWrapper" id="' + wrapperid + '">';
                        html += '<div class="crossIcon" id="crossIcon" onclick="deleteSliderimage(' + i + ');"><i class="fa fa-times"></i></div>';
                        html += '<div class="image-inner"><img src="' + src + '"/>' + event.target.files[i].name + '</div>';
                        $(imgPreviewPlaceholder).append(html)
                        html += '</div>';

                    }
                }


            };

            $('#sliderFile').on('change', function() {
                multiImgPreview(this, 'div.imgGallery');
            });
        });

        $(function() {
            var multiImgPreview = function(input, imgPreviewPlaceholder) {
                if (input.files) {
                    var filesAmount = input.files.length;
                    var items = input.files;
                    for (i = 0; i < filesAmount; i++) {
                        var Imagehtml = '';
                        var wrapperid2 = "btnWrapperid2_" + i;
                        var src = URL.createObjectURL(event.target.files[i]);
                        html = '<div class="btnWrapper" id="' + wrapperid2 + '">';
                        html += '<div class="crossIcon" id="crossIcon" onclick="deleteSliderimageSection2(' + i + ');"><i class="fa fa-times"></i></div>';
                        html += '<div class="image-inner"><img src="' + src + '"/>' + event.target.files[i].name + '</div>';
                        $(imgPreviewPlaceholder).append(html)
                        html += '</div>';
                    }
                }

            };

            $('#ss_image').on('change', function() {
                multiImgPreview(this, 'div.ssGallery');
            });
        });


        $(function() {
            var multiImgPreview = function(input, imgPreviewPlaceholder) {
                if (input.files) {
                    var filesAmount = input.files.length;
                    var items = input.files;
                    for (i = 0; i < filesAmount; i++) {
                        var wrapperid1 = "btnWrapperid1_" + i;
                        var Imagehtml = '';
                        var src = URL.createObjectURL(event.target.files[i]);
                        html = '<div class="btnWrapper" id="' + wrapperid1 + '">';
                        html += '<div class="crossIcon" id="crossIcon" onclick="deleteSliderimageSection1(' + i + ');"><i class="fa fa-times"></i></div>';
                        html += '<div class="image-inner"><img src="' + src + '"/>' + event.target.files[i].name + '</div>';
                        $(imgPreviewPlaceholder).append(html)
                        html += '</div>';
                    }
                }

            };

            $('#fs_image').on('change', function() {
                multiImgPreview(this, 'div.fsGallery');
            });
        });

        function deleteSliderimage(index) {
            $("#btnWrapperid_" + index).remove();
        }

        function deleteSliderimageSection2(index2) {
            $("#btnWrapperid2_" + index2).remove();
        }

        function deleteSliderimageSection1(index1) {
            $("#btnWrapperid1_" + index1).remove();
        }
    </script>
    <script src="https://unpkg.com/@jcubic/tagger@0.x.x/tagger.js"></script>
    <script>
        var input = document.querySelector('[name="seo_keyword"]');
        var seo_keyword = tagger(input, {
            allow_duplicates: false,
            allow_spaces: true,
            wrap: true,
            completion: {
                list: ['foo', 'bar', 'tomato', 'tomato sause']
            }
        });
    </script>
</body>
</html>