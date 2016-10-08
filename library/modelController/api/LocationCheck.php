<?php
/**
 * Created by BEEM24.
 * Modified on: 24/09/2016
 * Time: 9:52 PM
 */
require "../../../init.inc.php";

    if (isset($_GET['ref_mm'])){
        $get = $_GET['ref_mm'];
    }
        global $get;

    if ($get == "share_page"){
        if (ProfileController::getUserInfo("is_completed") == 0){
            redirect("/home?ref_mm=profile_complete");
        }else{
            redirect("/home?ref_mm=event_share");
        }
    }