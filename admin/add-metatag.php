<?php
require_once('../core/ajax.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Meta Tags</title>
    <!---->
    <?php include_once('common/commoncss.php'); ?>
    <!---->
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
                <h1>Meta Tags</h1>
                <div class="addBtn">
                    <a class="btn btn-primary" href="metatags">Back</a>
                </div>
            </div>
            <div class="whiteBg">
                <h2>Meta Tags</h2>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Page Name</label>
                            <input type="text" name="seo_title" value="" class="form-control" placeholder="Enter page name" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Page Slug</label>
                            <input type="text" name="seo_title" value="" class="form-control" placeholder="Enter page slug" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Seo Title</label>
                            <input type="text" name="seo_title" value="" class="form-control" placeholder="Enter Seo Title" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Seo Keyword</label>
                            <input type="text" name="seo_title" value="" class="form-control" placeholder="Enter Seo Title" />
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Seo Description</label>
                            <textarea class="form-control" name="seo_desc" placeholder="Enter Seo Description"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <?php include_once('common/commonjs.php'); ?>
</body>

</html>