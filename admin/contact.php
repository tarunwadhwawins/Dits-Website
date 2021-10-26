<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
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
                <h1>Contact</h1>
            </div>
            <div class="whiteBg">
                <h2>Contact Listing</h2>
                <div class="row">
                    <div class="col-sm-12 mb-2">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-nowrap">Sr. No</th>
                                        <th>Ip Address</th>
                                        <th>Name</th>
                                        <th>Email Id</th>
                                        <th>Country </th>
                                        <th>State</th>
                                        <th>City</th>
                                        <th>Phone No.</th>
                                        <th>Find Us</th>
                                        <th>Message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>192.168.0.1</td>
                                        <td>Tarun Wadhwa</td>
                                        <td>tarunwadhwawins@gmail.com</td>
                                        <td>India</td>
                                        <td>Haryana</td>
                                        <td>Kurukshetra</td>
                                        <td>1234567890</td>
                                        <td>Website</td>
                                        <td>Testing</td>
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