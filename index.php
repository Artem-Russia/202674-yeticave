<?php

require_once 'functions.php';
require_once 'data.php';

$page_content = renderTemplate('templates/index.php',["categories"=>$categories,"lots"=>$lots, "lot_time_remaining"=>$lot_time_remaining]);
$layout_content = renderTemplate('templates/layout.php',["content"=>$page_content, "title"=>$title, "user_name"=>$user_name, "user_avatar"=>$user_avatar, "is_auth"=>$is_auth]);

print($layout_content);

?>
