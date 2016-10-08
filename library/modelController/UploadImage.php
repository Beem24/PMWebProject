<?php

/**
 * Created by PhpStorm.
 * User: Lexy
 * Date: 14/06/2016
 * Time: 8:12 PM
 */
define("PP", dirname(dirname(dirname(__FILE__)))."/user_files/profile_pictures/");
define("CP", dirname(dirname(dirname(__FILE__)))."/user_files/cover_pictures/");

class UploadImage
{

    private $uploadFile;
    private $name;
    private $tmp_name;
    private $type;
    private $allowedTypes = array("image/jpeg","image/png","image/gif");
    private $ext;
    private $viewType;
    public $uploadName;
    public $names = array();

    public function __construct($file,$loc)
    {
        if($loc == 1) {
            $uploadDir = PP;
        }else{
            $uploadDir = CP;
               }
        if (!file_exists($uploadDir)){
            mkdir($uploadDir);
        }
        
        if (!is_dir($uploadDir)) {
            throw new Exception("Invalid upload Directory");
        }

        if (!count($_FILES)) {
            throw new Exception("Invalid number of files");
        }

        foreach ($_FILES[$file] as $key => $value) {
            $this->{$key} = $value;
        }

        if (!in_array($this->type, $this->allowedTypes)) {
            throw new Exception("Invalid Image type");
        }

        $size = $_FILES[$file]['size']/1024;

        if ($size > 300){
            throw new Exception("Image must not be more than 300kb");
        }
        $this->ext = pathinfo($this->name, PATHINFO_EXTENSION);
        $this->uploadName = "ContestImg_".substr(str_shuffle(md5(time())), 0, 12) . "." . $this->ext;
        $this->uploadFile = $uploadDir . "/" . $this->uploadName;

        array_push($this->names, $this->uploadName);
    }

    public function upload()
    {
        if (move_uploaded_file($this->tmp_name, $this->uploadFile)) {
            return true;
        }
    }


}