<?php 
require_once("../inc/database.php");
$isUpdated = updateData($_POST);
if($isUpdated){
    header("Location: ../index.php?page=home");
}