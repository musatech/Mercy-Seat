<?php 
    require_once __DIR__ . '/backend/functions.php';
    session_start();
    $auth = new Auth();
    if(isset($_SESSION['user_id'])){
        $auth->redirect('./dashboard/index.php');
    }else{
        if(isset($_POST['login'])){
            $username = $auth->clean($_POST['username']);
            $password = $auth->clean($_POST['password']);
            $auth->login($username,$password);
        }
    }
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Metronic Admin Theme #2 | User Login 5</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Preview page of Metronic Admin Theme #2 for " name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"
    />
    <link href="./assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="./assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="./assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="./assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="./assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="./assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="./assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="./assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="./assets/pages/css/login-5.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" /> </head>
<!-- END HEAD -->

<body class=" login">
    <!-- BEGIN : LOGIN PAGE 5-1 -->
    <div class="user-login-5">
        <div class="row bs-reset">
            <div class="col-md-6 bs-reset mt-login-5-bsfix">
                <div class="login-bg" style="background-image:url('./assets/pages/img/login/bg1.jpg')">
                    <img class="login-logo" src="./assets/pages/img/login/logo.png" /> </div>
            </div>
            <div class="col-md-6 login-container bs-reset mt-login-5-bsfix">
                <div class="login-content">
                    <h1>Mercy Seat Church Login</h1>
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" class="login-form" method="post">
                        <?php if(isset($_SESSION['message'])){
                                echo '<div class="'. $_SESSION['messageType'] .'">
                                        <button class="close" data-close="alert"></button>
                                        <span> '.$_SESSION['message'] . '</span>
                                    </div>';
                                
                                $auth->unset();
                            }
                        ?>
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button>
                            <span>Enter any username and password. </span>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Username"
                                    name="username" required/> </div>
                            <div class="col-xs-6">
                                <input class="form-control form-control-solid placeholder-no-fix form-group" type="password" autocomplete="off" placeholder="Password"
                                    name="password" required/> </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                            </div>
                            <div class="col-sm-8 text-right">
                                <!-- <div class="forgot-password">
                                    <a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>
                                </div> -->
                                <button class="btn green" name='login' type="submit">Sign In</button>
                            </div>
                        </div>
                    </form>
                    <!-- BEGIN FORGOT PASSWORD FORM -->
                    <form class="forget-form" action="javascript:;" method="post">
                        <h3 class="font-green">Forgot Password ?</h3>
                        <p> Enter your e-mail address below to reset your password. </p>
                        <div class="form-group">
                            <input class="form-control placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Email" name="email"
                            /> </div>
                        <div class="form-actions">
                            <button type="button" id="back-btn" class="btn green btn-outline">Back</button>
                            <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
                        </div>
                    </form>
                    <!-- END FORGOT PASSWORD FORM -->
                </div>
                <div class="login-footer">
                    <div class="row bs-reset">
                        <div class="col-xs-5 bs-reset">
                            <ul class="login-social">
                                <li>
                                    <a href="javascript:;">
                                        <i class="icon-social-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="icon-social-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="icon-social-dribbble"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-7 bs-reset">
                            <div class="login-copyright text-right">
                                <p>Copyright &copy; Mercy Seat Church</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END : LOGIN PAGE 5-1 -->
    <!--[if lt IE 9]>
<script src="./assets/global/plugins/respond.min.js"></script>
<script src="./assets/global/plugins/excanvas.min.js"></script> 
<script src="./assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
    <!-- BEGIN CORE PLUGINS -->
    <script src="./assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="./assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="./assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
    <script src="./assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="./assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="./assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="./assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="./assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
    <script src="./assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="./assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="./assets/global/scripts/app.min.js" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="./assets/pages/scripts/login-5.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <!-- END THEME LAYOUT SCRIPTS -->
    <script>
        $(document).ready(function () {
            $('#clickmewow').click(function () {
                $('#radio1003').attr('checked', 'checked');
            });
        })
    </script>
</body>

</html>