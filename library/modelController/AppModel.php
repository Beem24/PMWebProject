<?php

/**
 * Created by BEEM24.
 * Modified on: 12/09/2016
 * Time: 1:22 AM
 */
//require "Database.php";

class AppModel
{
    public $db;

    public function __construct()
    {
        $this->db = Database();
    }

    public function clean($string)
    {
        $ES = $this->db->quote($string);
        return trim($ES);
    }

    public function cleanData($string)
    {
        return trim($string);
    }


}