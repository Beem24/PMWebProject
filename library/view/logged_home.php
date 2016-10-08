<header id="user_cover_photo">

    <img src="assets/img/cover.jpg" class="img-responsive user_cover">

</header>
<!--user menu begins-->
<div class="user_menu">
    <div class="row row1">
        <div class="col-md-3">
            <div class="user-photo-name">
                <img src="user_files/profile_pictures/<?php echo ProfileController::getUserInfo('_profile_picture') ?>" class="img-rounded img-thumbnail p-p"/>
                <h4><?php echo ProfileController::getUserInfo('_firstname')." ".ProfileController::getUserInfo('_lastname') ?></h4>
                <p><?php echo ProfileController::getUserInfo('_username')?></p>
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
        <li><a href="#">Home</a></li>
        <li><a href="#">Contribute</a> </li>
        <li><a href="#">Configure Profile</a> </li>
        <li><a href="#">Friend List</a> </li>
    </ul>
    <h5>People you may know</h5>
    <ul class="people-you-may-know">
        <?php

            $profile = new ProfileController();
            $row = $profile->peopleYouMayKnow();
            foreach ($row as $item){
                echo "<li>
            <div class='pull-left picture'>
                <img src='user_files/profile_pictures/".$item['_profile_picture']."' class='img-responsive img-circle'/>
            </div>
            <div class='pull-left'>
                <h5 style='font-size: 12px;margin-top: 5px;margin-bottom:5px;text-transform:capitalize;'>".$item['_firstname']." ".$item['_lastname']."</h5>
                <a href='' class='btn btn-xs btn-default'>view ations</a> <a href='' class='btn btn-xs btn-default'><span class='text-danger'>follow</span> </a>
            </div>
        </li>";
            }

        ?>
    </ul>

</div>

<!--second column for user actities-->
<div class="col-md-5 activity-col">
    <div class="col-title">Activities</div>
    <div class="panel panel-default no-border">
        <div class="modalDialog">
            <div id="u">

            </div>
        </div><?php if (isset($_POST['submitNew'])){
            $share = new ShareFunc();
            $share->addNewShare();
        } ?>
        <form class="panel-body" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="panel panel-body post-box">
                <div class="pull-left picture">
                    <img src="user_files/profile_pictures/<?php echo ProfileController::getUserInfo('_profile_picture') ?>" class="img-responsive img-circle"/>
                </div>
                <div class="pull-left">
                    <textarea name="user_post" id="user_post" placeholder="Share events..." required></textarea>
                </div>
            </div>
            <div class="pull-right">
                <input type="submit" class="btn btn-xs btn-danger post-btn" value="Post" name="submitNew" id="submitNew">
            </div>
        </form>
    </div>
    <ul id="shares" class="scroll">
    <?php
            $share = new ShareFunc();

            View::getDataPage("feedsRows",$share->getShares());
    ?>
    </ul>
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
<script>
    $("ul.scroll").jscroll({
        autoTrigger: true,
        contentSelector: 'li'
    });
</script>