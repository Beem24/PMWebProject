<?php

/**
 * Created by BEEM24.
 * Modified on: 23/09/2016
 * Time: 11:26 PM
 */
require_once "AppModel.php";
class RegisterAuth extends AppModel
{
    public function user_record_exists($val) {
        $query = $this->db->prepare("SELECT COUNT(_userId) FROM mpm_users WHERE _email_address = ?");
        $query->bindValue(1,$val,PDO::PARAM_STR);
        try{
            $query->execute();
            $rows = $query->fetchColumn();
            if($rows >= 1){
                return true;
            }else{
                return false;
            }
        } catch (PDOException $e){
            echo $e->getMessage();
        }
    }

    public function getUserSingleRecord($val){
        $query= $this->db->prepare("SELECT * FROM mpm_users WHERE _email_address = ?");
        $query->bindValue(1, $val);
        try
        {
            $query->execute();
            $row = $query->fetch();
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        return $row;
    }


    public function registerUser(){
        $userEmail = $this->cleanData($_POST['email_address']);
        $userGender = $this->cleanData($_POST['gender']);
        $firstName = $this->cleanData($_POST['fname']);
        $lastName = $this->cleanData($_POST['lname']);
        try {
            if(strlen($_POST['password']) < 8){
                throw new Exception("Pasword is weak, please use a password with minimum of 8 characters");
            }
            if ($_POST['password2'] != $_POST['password']){
                throw new Exception("Oops! Password do not match");
            }
            if (strlen($firstName) < 4){
                throw new Exception("First name too short");
            }
            if (strlen($lastName) < 4){
                throw new Exception("Last name too short");
            }

        $userPassword = $this->cleanData($_POST['password2']);
        $checkExistingUser = $this->db->prepare("SELECT * FROM mpm_users WHERE _email_address = ?");
        $checkExistingUser->bindValue(1,$userEmail);
        try {
            $checkExistingUser->execute();
            if ($this->user_record_exists($userEmail)) {
                throw new Exception("User with " . $this->cleanData($_POST['email_address']) . " already registered, please use another email or login with existing one");
            } else {
                $dobReal = $this->cleanData($_POST['dob']) . "-" . $this->cleanData($_POST['mob']) . "-" . $this->cleanData($_POST['yob']);
                $addUser = $this->db->prepare("INSERT INTO mpm_users (_email_address,_password,_gender,_firstname,_lastname,_dob) VALUES (?,?,?,?,?,?)");
                $addUser->bindValue(1, $userEmail);
                $addUser->bindValue(2, $userPassword);
                $addUser->bindValue(3, $userGender);
                $addUser->bindValue(4, $firstName);
                $addUser->bindValue(5, $lastName);
                $addUser->bindValue(6, $dobReal);
                try {
                    $addUser->execute();
                    redirect("/home?ref_mm=event_share");
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        }catch (Exception $e){
            echo $e->getMessage();
        }

    }

}