<?php
/**
 * Created by BEEM24.
 * Modified on: 25/09/2016
 * Time: 12:10 AM
 */
ob_start();
session_start();
session_destroy();
header("location: /");