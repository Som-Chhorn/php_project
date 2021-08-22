<?php
require_once("../inc/database.php");
$id = $_GET['id'];
$isDeleted = deleteData($id);
if($isDeleted){
    header("Location: http://localhost/php_project/index.php?page=home");
}
