<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
                <h1>Dashboard</h1>
            </div>
            <div class="whiteBg">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card blogCard">
                            <div class="card-header">Blogs</div>
                            <div class="card-body">
                                <div class="value">14</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="card blogCard">
                            <div class="card-header">Portfolios</div>
                            <div class="card-body">
                                <div class="portValues">
                                    <div class="portValue">Healthcare
                                         <span class="numeric">20</span>
                                    </div>
                                    <div class="portValue">Business and workflow automation <span class="numeric">20</span></div>
                                    <div class="portValue">Ed-Tech <span class="numeric">20</span></div>
                                    <div class="portValue">Fintech <span class="numeric">20</span></div>
                                    <div class="portValue">IOT <span class="numeric">20</span></div>
                                    <div class="portValue">Real Estate <span class="numeric">20</span></div>
                                    <div class="portValue">Retail <span class="numeric">20</span></div>
                                </div>
                            </div>
                        </div>
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