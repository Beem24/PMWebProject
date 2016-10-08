<?php
/**
 * Created by BEEM24.
 * Modified on: 14/09/2016
 * Time: 8:35 PM
 */
require dirname(__FILE__)."/init.inc.php";

$user = new ProfileController();

$user->is_logged_out();

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

            <ul  class="nav navbar-nav navbar-right profile-nav">
                <li>
                   <a href="#"><i class="fa fa-heart"></i></a>
                </li>

                <li>
                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                </li>
                <li>
                    <a href="logout"><img src="user_files/profile_pictures/<?php echo ProfileController::getUserInfo('_profile_picture') ?>" class="img-responsive img-circle"></a>
                </li>

            </ul>
            <ul  class="nav navbar-nav navbar-right right-nav">
                <li>
                    <a href="#">Event</a>
                </li>
                <li>
                    <a href="#">Studio</a>
                </li>
                <li>
                    <a href="#">Stores</a>
                </li>
                <li>
                    <a href="#">Account</a>
                </li>

            </ul>
</div>

</div>

</nav>

<div class="container-fluid">


    <?php if (isset($_GET['ref_mm']) && $_GET['ref_mm'] == "profile_complete"){
        @content("complete_profile");
}else{
        if (ProfileController::getUserInfo("is_completed") == 0){
            redirect("home?ref_mm=profile_complete");
        }else{
    @content("logged_home");}
}?>

</div>

<?php

// loads the core javascript files for fast execution
@View::getTemplate("bottom_loader",null);

?>