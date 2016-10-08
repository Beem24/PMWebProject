<?php

/**
 * Created by BEEM24.
 * Modified on: 24/09/2016
 * Time: 8:25 PM
 */
require_once "AppModel.php";
require_once "UploadImage.php";
class ProfileController extends AppModel
{

    public function is_logged(){
        if (isset($_SESSION['user_logged_boolean']) && $_SESSION['user_logged_boolean'] == true){
            return true;
        }else{
            return false;
        }
    }

    public function is_logged_redirect($loc){
        if ($this->is_logged() == true){
            redirect($loc);
        }else{
            return false;
        }
    }

    public function is_logged_out(){
        if ($this->is_logged() == false){
            redirect("/logout");
        }else{
            return false;
        }
    }

    public function complete_profile(){
        $userName = $this->cleanData($_POST['_username']);
        try{
            $profilePicture = new UploadImage('profile_photo',1);
            if (strlen($userName)<4){
                throw new PDOException("Username must be more than four characters");
            }
            $check = $this->db->prepare("SELECT COUNT(_username) FROM mpm_users WHERE _username = ?");
            $check->bindValue(1, "@".$userName);
            try{
                $check->execute();
                $row = $check->fetchColumn();
                if ($row >= 1){
                    throw new PDOException("Username already exists, please choose a different username");
                }else{
                    $profilePicture->upload();
                    $send = $this->db->prepare("UPDATE mpm_users SET _username = ?, _profile_picture = ?, is_completed = ? WHERE _email_address = ?");
                    $send->bindValue(1,"@".strtolower($userName));
                    $send->bindValue(2,$profilePicture->uploadName);
                    $send->bindValue(3,1,PDO::PARAM_INT);
                    $send->bindValue(4,$_SESSION['user_logged_id']);
                    try{
                        $send->execute();
                        redirect("home?ref_mm=event_share");
                    }catch (PDOException $e){
                        echo $e->getMessage();
                    }
                }
            }catch (PDOException $e){
                echo $e->getMessage();
            }
        }catch (PDOException $e){
            echo $e->getMessage();
        }
    }

    public static function getUserInfo($val){
        $user = $_SESSION['user_logged_id'];
        $test = new AppModel();
        $select = $test->db->prepare("SELECT * FROM mpm_users WHERE _email_address = ?");
        $select->bindValue(1, $user);
        try{
            $select->execute();
        }catch (PDOException $e){
            echo $e->getMessage();
        }
        $row = $select->fetch();
        return $row[$val];
    }

    public function peopleYouMayKnow(){
        $select = $this->db->prepare("SELECT * FROM mpm_users ORDER BY RAND() DESC LIMIT 5");
        try{
            $select->execute();
        }catch (PDOException $e){
            echo $e->getMessage();
        }
        return $select->fetchAll();
    }

}
class User extends AppModel{
    public static function getUserInfo($user,$val){
        $test = new AppModel();
        $select = $test->db->prepare("SELECT * FROM mpm_users WHERE _email_address = ?");
        $select->bindValue(1, $user);
        try{
            $select->execute();
        }catch (PDOException $e){
            echo $e->getMessage();
        }
        $row = $select->fetch();
        return $row[$val];
    }
}