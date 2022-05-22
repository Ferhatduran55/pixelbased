<?php 
ob_start();
session_start();
if(isset($_POST)){
    extract($_POST);
    $lastId = $_POST['pixelId'];
}else if(isset($_GET)){
    extract($_GET);
    $lastId = $_GET['pixelId'];
}
function name($id){
    return $id;
}
exit(name($lastId));
?>