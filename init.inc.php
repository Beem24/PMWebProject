<?php
/**
 * Created by BEEM24.
 * Modified on: 12/09/2016
 * Time: 1:18 AM
 */
ob_start();
session_start();

require dirname(__FILE__) . "/library/modelController/Database.php";
require dirname(__FILE__) . "/library/modelController/AppModel.php";
require dirname(__FILE__) . "/library/modelController/RegisterAuth.php";
require dirname(__FILE__) . "/library/modelController/GeneralFunctions.php";
require dirname(__FILE__) . "/library/modelController/ProfileController.php";
require dirname(__FILE__) . "/library/modelController/ShareFunc.php";
require dirname(__FILE__) . "/library/view/View.php";
