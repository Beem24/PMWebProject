<?php

/**
 * Created by BEEM24.
 * Modified on: 12/09/2016
 * Time: 1:20 AM
 */
$config = array(
    'host'		=> 'localhost',
    'username' 	=> 'test',
    'password' 	=> 'test',
    'dbname' 	=> 'picsmall'
);
mysqli_report(MYSQLI_REPORT_ALL);

    function Database()
    {
        global $config;
        try {
            //$db = new mysqli($config['host'], $config['username'], $config['password'], $config['dbname']);
            $db = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'], $config['username'], $config['password']);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            /*if ($db->connect_errno) {
                throw new ErrorException(('Database Connection Failed');
            }*/
            return $db;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }





