<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<?php require_once("head.php") ?>

<body class="vertical-layout vertical-compact-menu 1-column  bg-full-screen-image menu-expanded blank-page blank-page" data-open="click" data-menu="vertical-compact-menu" data-col="1-column">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section id="account-register" class="flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <!-- image -->
                        <div class="col-xl-3 col-lg-4 col-md-5 col-sm-5 col-12 p-0 text-center d-none d-md-block">
                            <div class="border-grey border-lighten-3 m-0 box-shadow-0 card-account-left height-400">
                                <img src="images/logo.png" class="card-account-img width-200" alt="card-account-img">
                            </div>
                        </div>
                        <!-- login form -->
                        <div class="col-xl-3 col-lg-4 col-md-5 col-sm-5 col-12 p-0">
                            <div class="card border-grey border-lighten-3 m-0 box-shadow-0 card-account-right height-400">
                                <div class="card-content">
                                    <div class="card-body p-3">
                                        <p class="text-center h5 text-capitalize">Started with Crypto ICO!</p>
                                        <p class="mb-3 text-center">Create your account</p>
                                        <form class="form-horizontal form-signin" action="index.html">
                                            <fieldset class="form-label-group">
                                                <input type="text" class="form-control" id="user-name" placeholder="Your Username" required="" autofocus="">
                                                <label for="user-name">Username</label>
                                            </fieldset>
                                            <fieldset class="form-label-group">
                                                <input type="password" class="form-control" id="user-password" placeholder="Your Email" required="" autofocus="">
                                                <label for="user-password">Email address</label>
                                            </fieldset>
                                            <div class="form-group row">
                                                <div class="col-12 text-center text-sm-left">
                                                    <fieldset>
                                                        <input type="checkbox" id="remember-me" class="chk-remember">
                                                        <label for="remember-me"> I agree to Crypto ICO's terms</label>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn-gradient-primary btn-block my-1">Sign Up</button>
                                            <p class="text-center"><a href="login.php" class="card-link">Log In</a></p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>

    <script src="vendors/js/vendors.min.js" type="text/javascript"></script>
    <script src="vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
    <script src="js/core/app-menu.min.js" type="text/javascript"></script>
    <script src="js/scripts/forms/form-login-register.min.js" type="text/javascript"></script>
</body>

</html>