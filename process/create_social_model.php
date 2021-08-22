<?php

include_once('../inc/database.php');

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    // move uploade image
    move_uploaded_file($fileTmpName,"../assets/images/".$fileName);
          
    $datas = $_POST;
    $datas['img_url'] = $fileName;
    $isCreate = createItem($datas);
    if($isCreate){
        header("Location:../index.php?page=home");
    }
   
}
