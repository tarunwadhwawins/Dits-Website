<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
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
                <h1>Change Password</h1>
            </div>
            <div class="whiteBg">
                <div class="row">
                    <div class="col-sm-12">
                        <form>
                            <div class="form-group">
                                <label>New Password</label>
                                <input type="text" class="form-control" placeholder="New password"/>
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="text" class="form-control" placeholder="Confirm password"/>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary">Save </button>
                            </div>
                        </form>
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