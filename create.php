<?php
/**
 * Created by BEEM24.
 * Modified on: 14/09/2016
 * Time: 8:35 PM
 */
require dirname(__FILE__)."/init.inc.php";

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
                        <a href="#"><img src="assets/img/pics.jpg" class="img-responsive img-circle"></a>
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
            <!-- /.navbar-collapse
            <ul class="category">
                <li><a href="yearbook">Year Book</a></li>
                <li><a href="#">Self Note</a></li>
                <li><a href="#">Customised T-Shirt</a></li>
            </ul>
            -->

        </div>

    </nav>

    <div class="container-fluid">

        <header id="user_cover_photo">

            <img src="assets/img/cover.jpg" class="img-responsive user_cover">

        </header>
        <!--user menu begins-->
        <div class="user_menu">
            <div class="row row1">
                <div class="col-md-3">
                    <div class="user-photo-name">
                        <img src="assets/img/pics.jpg" class="img-rounded img-thumbnail"/>
                        <h4>Forijimi Aanuoulapo</h4>
                        <p>@aanuoluwapo</p>
                    </div>
                </div>
                <div class="col-md-8">
                    <ul class="nav-menu">
                        <li><a href="home">Share</a></li>
                        <li><a href="create">Create</a></li>
                        <li><a href="groups">Groups</a></li>
                        <li><a href="trendings">Trendings</a></li>

                    </ul>
                </div>
            </div>
        </div>

        <!--left panel for categories-->
        <div class="col-md-2" style="margin: 0;padding: 0;">
            <ul class="left-pane">
                <li><a href="">Saved Event</a></li>
                <li class="active"><a href="">New Event</a> </li>
            </ul>
            <h5>People you may know</h5>
            <ul class="people-you-may-know">
                <li>
                    <div class="pull-left" style="width: 25%;margin-right: 10px;">
                        <img src="assets/img/pics.jpg" class="img-responsive img-circle"/>
                    </div>
                    <div class="pull-left">
                        <h5 style="font-size: 12px;margin-top: 0;">Olaoye Oladipupo</h5>
                        <a href="" class="btn btn-xs btn-default">view ations</a> <a href="" class="btn btn-xs btn-default"><span class="text-danger">follow</span> </a>
                    </div>
                </li>
            </ul>

        </div>

        <!--second column for user actities-->
        <div class="col-md-5 activity-col">
            <div class="col-title">Fill the details below to create new event</div>
            <div class="create-box">
                <form method="post" action="create2.php">
                    <div class="form-group">
                    <label for="event_name">Event Name</label>
                    <input type="text" title="event_name" name="event_name">
                    </div>
                    <div class="form-group">
                    <label for="event_location">Event Name</label>
                    <select name="event_location" title="event_location">
                        <option value="">Nigeria</option>
                        <option value="">Nigeria</option>
                    </select>
                    </div>
                    <div class="form-group">
                        <label for="event_location">Event Definition</label>
                        <textarea placeholder="share details of event.."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="event_location">Event Category</label>
                        <select name="event_location" title="event_location">
                            <option value="">Nigeria</option>
                            <option value="">Nigeria</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="event_location">Event Type</label>
                        <select name="event_location" title="event_location">
                            <option value="">Nigeria</option>
                            <option value="">Nigeria</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="event_location">Accessibility</label>
                        <select name="event_location" title="event_location">
                            <option value="">Nigeria</option>
                            <option value="">Nigeria</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="event_location">Creation Date</label>
                        <select name="event_location" title="event_location">
                            <option value="">Nigeria</option>
                            <option value="">Nigeria</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="event_location">Closure Date</label>
                        <select name="event_location" title="event_location">
                            <option value="">Nigeria</option>
                            <option value="">Nigeria</option>
                        </select>
                    </div>
                    </div>
                        <div class="row save-btn-container">
                            <div class="col-xs-6 save-btn left-btn">
                                <button class="btn btn-default btn-block">Save</button>
                            </div>
                            <div class="col-xs-6 save-btn continue-btn">
                                <button type="submit" class="btn btn-default btn-block"><div class="text-danger">Continue <i class="fa fa-arrow-right"></i></div> </button>
                            </div>
                        </div>
                </form>

        </div>

        <!--third column for sponsord posts-->
        <div class="col-md-2 sponsored">
            <div class="col-title">Sponsored</div>
            <ul class="sponsored-box-container">
                <li class="col-md-12 col-xs-6">
                    <div class="sponsored"><div class="sponsored-box"></div>
                        <div class="sponsored-text">perfect home are beatiful home and a perfect example is this</div></div></li>
                <li class="col-md-12 col-xs-6"><div class="sponsored"><div class="col-md-12 sponsored-box"></div></div></li>
            </ul>
        </div>


        <div class="col-md-4">

        </div>
    </div>

<?php

// loads the core javascript files for fast execution
@View::getTemplate("bottom_loader",null);

?>