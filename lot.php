<?php
error_reporting(E_ALL);
require_once 'data.php';
require_once 'functions.php';

if (isset($_GET['id']) and array_key_exists($_GET['id'], $lots)){
    $id=$_GET['id'];
}
else {
   http_response_code(404);
   exit();
}

$lot = $lots[$id];
$title= $lots[$id]['name'];


$page_content = renderTemplate('templates/lot.php', ["lot" =>$lot, "bets"=>$bets, "id"=>$id]);
$layout_content = renderTemplate('templates/layout.php',["content"=>$page_content, "title"=>$title, "user_name"=>$user_name, "user_avatar"=>$user_avatar, "is_auth"=>$is_auth]);


print $layout_content;



?>