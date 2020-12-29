<?php

namespace App\Core;

use Carbon\Carbon;

class UploadLib {
    public static function upload()
    {
        $targetDir = "uploads/";
        $fileName = basename($_FILES["image"]["name"] ?? '');
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
        $newFilePath = $targetDir . Carbon::now()->timestamp . $fileType;
    
        $allowTypes = array('jpg','png','jpeg','gif');
        if(in_array($fileType, $allowTypes)){
            // Upload file to server
            if(move_uploaded_file($_FILES["image"]["tmp_name"], $newFilePath)){
                return $newFilePath;
            }
        }
    
        return false;
    }
    
}

?>