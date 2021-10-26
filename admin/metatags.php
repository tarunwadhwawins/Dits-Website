<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meta Tags</title>
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
                    <a class="btn btn-primary" href="add-metatag.php">Add Meta Tags</a>
                </div>
            </div>
            <div class="whiteBg">
                <h2>Meta Tags Listing</h2>
                <div class="row">
                    <div class="col-sm-12 mb-2">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-nowrap">Sr. No</th>
                                        <th>Url</th>
                                        <th>Page Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>...</td>
                                        <td>Home page</td>
                                        <td class="text-nowrap">
                                            <a class="btn btn-primary mr-2" href=""><i class="fa fa-edit"></i></a>
                                            <a class="btn btn-danger" href="#"><i class="fa fa-close"></i></a>                                </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="pagintionlisting">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!---->
        <?php include_once('common/commonjs.php'); ?>
        <!---->
</body>

</html>