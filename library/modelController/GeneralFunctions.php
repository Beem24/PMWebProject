<?php
/**
 * Created by BEEM24.
 * Modified on: 21/09/2016
 * Time: 6:42 PM
 */

function getFooterDate(){
    $newDate = date("Y",time()+3600);
    if ($newDate > 2016)
        echo "- ".$newDate;
}

function redirect($location){
    header("location: ".$location);
}
function regTimeLoop($time){
    $newDate = date("Y",time()+3600);
    if ($time == "year"){
        for ($i=1980;$i<=(int)$newDate;$i++){
            echo "<option value=".$i.">".$i."</option>";
        }
    }elseif($time == "month"){
        $months = array("January","February","March","April","May","June","July","August","September","October","November","December");
        for ($i=0;$i<count($months);$i++){
            echo "<option value=".$months[$i].">".$months[$i]."</option>";
        }
    }else{
        for ($i=1;$i<=31;$i++){
            echo "<option value=".$i.">".$i."</option>";
        }
    }
}

function postSet($postName, $postClassAction, $methodName){
    $instanceClass = $postClassAction;
    if (isset($_POST[$postName])){
       echo $instanceClass->$methodName();
    }
}

function formatShareTime($timeInt){
    if (date("l",time()+3600) == date("l",$timeInt)){
        $day = "Today";
    }else{
        $day = date("l",$timeInt);
    }
    $day2 = date("d",$timeInt);
    $month = date("F",$timeInt);
    $hour = date("h",$timeInt);
    $min = date("i",$timeInt);
    $time = date("a",$timeInt);
    return $day.", ".$month." ".$day2." at ".$hour.".".$min.$time;
}
function showCounter($param){
    if($param >= 1){
        return $param;
    }else{
        return null;
    }
}