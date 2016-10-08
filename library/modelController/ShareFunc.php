<?php

/**
 * Created by BEEM24.
 * Modified on: 24/09/2016
 * Time: 10:38 PM
 */

class ShareFunc extends AppModel
{

    public function addNewShare(){
        $sharedPost = $this->cleanData($_POST['user_post']);
        $user = ProfileController::getUserInfo('_email_address');
        $postDate = time()+3600;
        $input = $this->db->prepare("INSERT INTO shares (user_post,poster,post_date) VALUES (?,?,?)");
        $input->bindValue(1, $sharedPost);
        $input->bindValue(2,$user);
        $input->bindValue(3,$postDate);
        try{
            $input->execute();
            redirect("/home?ref_mm=event_share");
        }catch (PDOException $e){
            echo $e->getMessage();
        }
    }

    public function getShares(){
        $get = $this->db->prepare("SELECT * FROM shares ORDER BY _id DESC");
        try{
            $get->execute();
        }catch (PDOException $e){
            echo $e->getMessage();
        }
        return $get->fetchAll();
    }

}