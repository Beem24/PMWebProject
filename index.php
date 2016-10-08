<?php
/**
 * Created by BEEM24.
 * Modified on: 14/09/2016
 * Time: 8:35 PM
 */
require dirname(__FILE__)."/init.inc.php";

$user = new ProfileController();

$user->is_logged_redirect("/home?ref_mm=event_share");

@View::getTemplate("template_loader", "Home Page");
?>

    <nav id="mainNav" class="navbar navbar-default navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle menu-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i>
                </button>
                <button type="button" class="navbar-toggle search-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                    <span class="sr-only">search</span><i class="fa fa-search"></i>
                </button>
                <a class="navbar-brand page-scroll main" href="/"><img src="assets/img/logo.png"></a>
            </div>

            <div class="collapse navbar-collapse search-col" id="bs-example-navbar-collapse-2">
                <ul class="nav navbar-nav navbar-right search-nav">
                    <li><form><input type="text" id="search" class="search_top pull-left" placeholder="Lautech Anatomy Class 19"></form></li>
                </ul>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse menu-col" id="bs-example-navbar-collapse-1">

                <!--<ul  class="nav navbar-nav navbar-right profile-nav">
                    <li>
                        <a href=""><i class="fa fa-heart"></i></a>
                    </li>

                    <li>
                        <a href=""><i class="fa fa-shopping-cart"></i></a>
                    </li>
                    <li>
                        <a href=""><img src="assets/img/pics.jpg" class="img-responsive img-circle"></a>
                    </li>

                </ul>-->
                <ul  class="nav navbar-nav navbar-right right-nav" style="margin-right: 8em;">
                    <li>
                        <a href="">Products</a>
                    </li>
                    <li>
                        <a href="">Trendings</a>
                    </li>
                    <li>
                        <a href="">Stores</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse
            <ul class="category">
                <li><a href="yearbook">Year Book</a></li>
                <li><a href="#">Self Note</a></li>
                <li><a href="#">Customised T-Shirt</a></li>
            </ul>
            -->

        </div>

    </nav>

    <div class="container">

            <div class="tabs_2">
                <div class="row tabs">
                <div class="col-md-5 col-md-push-6 head-tabs">
            <ul class="tab_2-links">
                <li class="active"><a href="#signup" class="scheduler-btn"><i class="fa fa-edit"></i> Register</a></li>
                <li><a href="#signin" class="scheduler-btn"><i class="fa fa-sign-in "></i> Sign In</a></li>
            </ul>
                    </div>
                    </div>
                <div class="clearfix"></div>
            <div class="tab_2-content">
                <div class="row">
                    <div class="col-md-6">
                        <div id="signup" class="active process">
                            <p class="process-title">Sign Up</p>
                            <p class="process-desc">
                                You have the right to ask us not to process uour personal dara for marketing purposes. We will usually inform you (before collecting your data) if we intend to use your data for such purposes or intent to disclose, give, rent, sell or otherwise transfer your personal data to any third party. You can excercise your right to prevent such process at any time by <a href="">contacting us</a>
                            </p>
                        </div>
                        <div id="signin" class="tab_2 process">
                            <p class="process-title">Sign In</p>
                            <p class="process-desc">
                                You have the right to ask us not to process uour personal dara for marketing purposes. We will usually inform you (before collecting your data) if we intend to use your data for such purposes or intent to disclose, give, rent, sell or otherwise transfer your personal data to any third party. You can excercise your right to prevent such process at any time by <a href="">contacting us</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-5 sign-up-in">
                <div id="signup" class="active">
                    <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
                        <p class="reg-title">Create a free account now with MyPicsmall</p>
                        <p class="response-msg error">
                            <?php

                            postSet("registerNewUser",new RegisterAuth(),"registerUser")?>
                        </p>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email_address" placeholder="E-mail address">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password2" placeholder="Confirm Password">
                        </div>
                        <div class="form-group" style="overflow: auto">
                        <div class="form-inline">
                            <div class="col-xs-6 pass">
                                <input type="text" class="form-control" name="fname" placeholder="First Name">
                            </div>
                            <div class="col-xs-6 pass2">
                                <input type="text" class="form-control" name="lname" placeholder="Last Name">
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="form-group dob">
                            <select name="dob">
                                <option value="0">Day</option>
                                <?php regTimeLoop("day");?>
                            </select>
                            <select name="mob">
                                <option value="0">Month</option>
                                <?php regTimeLoop("month");?>
                            </select>
                            <select name="yob">
                                <option value="0">Year</option>
                                <?php regTimeLoop("year");?>
                            </select>
                        </div>
                        <div class="form-group reg-notice">
                            By clicking on Register now, you agree to our terms and conditions and have read our privacy policy.
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 join-btn">
                            <input type="submit" name="registerNewUser" value="Register now" class="btn btn-block btn-success">
                                </div>
                        </div>
                    </form>
                </div>
                <div id="signin" class="tab_2">
                    <form method="post" action="<?php $_SERVER['PHP_SELF']?>" id="login_form">
                        <p class="reg-title">Login into your MyPicsmall account!</p>
                        <p class="response-msg"></p>
                        <div class="form-group">
                            <label for="inputEmail">E-mail Address</label>
                            <input type="email" class="form-control" name="email_address" id="inputEmail" placeholder="E-mail address" required>
                        </div>
                        <div class="form-group">
                            <label for="inputPass">Password</label>
                            <input type="password" class="form-control" name="password" id="inputPass" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <div class="remember">
                                <div class="checkbox">
                                    <label><input type="checkbox"> Remember me</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="join-btn">
                                <input type="submit" name="logUserIn" value="Sign In" id="sign_in_button" class="btn btn-block btn-success">
                            </div>
                        </div>
                    </form>
                </div>
                        </div>
            </div>
        </div>
</div>


    </div>

<?php

// loads the core javascript files for fast execution
@View::getTemplate("bottom_loader",null);

?>