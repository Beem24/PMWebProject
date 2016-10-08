<?php

    if (!is_array($row)){
            echo "empty";
    }else {
        foreach ($row as $item) {

            echo "<li class='panel panel-default no-border' id='feeds'>
    <div class='feeds'>
        <div class='pull-left picture'>
            <img src = 'user_files/profile_pictures/".User::getUserInfo($item['poster'],'_profile_picture')."' class='img-responsive img-circle' />
        </div >
        <div class='pull-left' >
            <h5 style = 'font-size: 15px;margin-top: 3px;color: #a2a2a2;margin-bottom:4px;' >".User::getUserInfo($item['poster'],'_firstname')." ".User::getUserInfo($item['poster'],'_lastname')."</h5 >
            <span class='post-time' >".formatShareTime($item['post_date'])."</span >
        </div >
        <div class='clearfix' ></div >
        <p class='post-content' >
            ".$item['user_post']."
            </p >
        <p ><a href = '' class='share-options' ><i class='fa fa-heart' > ".showCounter($item['likes_count'])."</i ></a > <a href = '' class='share-options' ><i class='fa fa-comment' > ".showCounter($item['comment_count'])."</i ></a ></p >
        <form class='panel-body' action = '#' method = 'post' style = 'margin: 0;padding: 0' >
            <div class='panel panel-body comment-box' >
                <div class='pull-left' >
                    <img src = 'user_files/profile_pictures/".ProfileController::getUserInfo('_profile_picture')."' class='img-responsive img-circle' />
                </div >
                <div class='pull-left' >
                    <input name = 'user_post' placeholder = 'comments...' />
                </div >
            </div >
        </form >
    </div>

</li>";
        }
    }