<?php

$is_auth = (bool) rand(0, 1);
$title = "Главная";
$user_name = "Константин";
$user_avatar = 'img/user.jpg';

// устанавливаем часовой пояс в Московское время
date_default_timezone_set('Europe/Moscow');

// записать в эту переменную оставшееся время в этом формате (ЧЧ:ММ)
$lot_time_remaining = "00:00";

// временная метка для полночи следующего дня
$tomorrow = strtotime('tomorrow midnight');

// временная метка для настоящего времени
$now = strtotime('now');

// далее нужно вычислить оставшееся время до начала следующих суток и записать его в переменную $lot_time_remaining
$lot_time_remaining = gmdate("H:i", $tomorrow - $now);

$categories=[
    ["name"=>"Доски и лыжи","class"=>"promo__item promo__item--boards"],
    ["name"=>"Крепления","class"=>"promo__item promo__item--attachment"],
    ["name"=>"Ботинки","class"=>"promo__item promo__item--boots"],
    ["name"=>"Одежда","class"=>"promo__item promo__item--clothing"],
    ["name"=>"Инструменты","class"=>"promo__item promo__item--tools"],
    ["name"=>"Разное","class"=>"promo__item promo__item--other"]
];

require_once 'functions.php';
require_once 'all_lots.php';

$page_content = renderTemplate('templates/index.php',["categories"=>$categories,"lots"=>$lots, "lot_time_remaining"=>$lot_time_remaining]);
$layout_content = renderTemplate('templates/layout.php',["content"=>$page_content, "title"=>$title, "user_name"=>$user_name, "user_avatar"=>$user_avatar, "is_auth"=>$is_auth]);

print($layout_content);

?>
