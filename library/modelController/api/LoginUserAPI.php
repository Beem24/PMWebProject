<?php
require_once dirname(__FILE__)."../../../../init.inc.php";

if (isset($_GET['action'])){
   $get = $_GET['action'];
}
    global $get;
$db = Database();
    $auth = new RegisterAuth();

    if ($get == "request_login"){
        $userEmail = $_POST['email_address'];
        $userPassword = $_POST['password'];
        try {
            if ($auth->user_record_exists($userEmail) == true) {
                try {
                    $row = $auth->getUserSingleRecord($userEmail);
                    if ($userPassword == $row['_password']) {
                        $_SESSION['user_logged_id'] = $userEmail;
                        $_SESSION['user_logged_boolean'] = true;
                        echo "true";
                    }else{
                        throw new PDOException("Incorrect Password");
                    }
                }catch (PDOException $e){
                    echo $e->getMessage();
                }
            }else{
                throw new PDOException("User with ".$userEmail." not found");
            }
        }catch (PDOException $e){
            echo $e->getMessage();
        }

    }
