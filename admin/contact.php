<?php
require_once('../core/ajax.php');
    $sql= "select * from contacts order by ContactId desc";
    $res=mysqli_query($conn,$sql);

    //pagination...

    if (isset($_GET['pageno']))
    {
        $pageno = $_GET['pageno'];
    }
     else
    {
        $pageno = 1;
    }
    $no_of_records_per_page = 5;
    $offset = ($pageno-1) * $no_of_records_per_page;
    $total_pages_sql = "SELECT COUNT(*) FROM contacts";
    $result = mysqli_query($conn,$total_pages_sql);
    $total_rows = mysqli_fetch_array($result)[0];
    $total_pages = ceil($total_rows / $no_of_records_per_page);
    $sql = "SELECT * FROM contacts order by ContactId desc LIMIT $offset, $no_of_records_per_page ";
    $res = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
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
                                        <th>URL</th>
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
                                    <?php
                                        $i=$offset+1;
                                        while($row=mysqli_fetch_assoc($res)) {
                                    ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $row['IP']; ?></td>
                                                <td><?php echo $row['URL']; ?></td>
                                                <td><?php echo $row['FirstName']; ?></td>
                                                <td><?php echo $row['Email']; ?></td>
                                                <td><?php echo $row['Country']; ?></td>
                                                <td><?php echo $row['State']; ?></td>
                                                <td><?php echo $row['City']; ?></td>
                                                <td><?php echo $row['Phone']; ?></td>
                                                <td><?php echo $row['FindUs']; ?></td>
                                                <td><?php echo $row['Message']; ?></td>
                                            </tr>
                                    <?php 
                                            $i++ ;
                                        } 
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="pagintionlisting">
                        <ul class="pagination">
                            <li><a class="page-item page-link" href="?pageno=1">First</a></li>
                            <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
                            <a class="page-link" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Previous</a></li>
                            
                            <?php for($i = 1; $i <= $total_pages; $i++ ): ?>
                            <li class="page-item <?php if($pageno == $i) {echo 'active'; } ?>">
                             <a class="page-link" href="contact?pageno=<?= $i; ?>"> <?= $i; ?> </a>
                            </li>
                            <?php endfor; ?>
                            <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                            <a class="page-link" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a></li>
                            <li><a class="page-item page-link" href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
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