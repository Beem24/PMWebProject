<?php

/**
 * Created by BEEM24.
 * Modified on: 12/09/2016
 * Time: 2:28 AM
 */
class View
{
    public static function getTemplate($template,$title=null){
        $title = $title;
        include $template.".template.php";
    }

    public static function getPage($view){
        include $view.".page.php";
    }
    public static function getDataPage($view,$rows){
        $row = $rows;
        include "data/".$view.".data.php";
    }
}

function content($view){
    include $view.".php";
}

function topLayout(){
    include "top_layout.php";
}

function footerLayout(){
    include "footer_layout.php";
}


