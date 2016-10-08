<?php
/**
 * Created by BEEM24.
 * Modified on: 25/09/2016
 * Time: 1:07 AM
 */
require_once dirname(__FILE__)."../../../../init.inc.php";

$share = new ShareFunc();

View::getDataPage("feedsRows",$share->getShares());
