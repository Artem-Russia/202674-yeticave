<?php

$lots=[
    1 => ["name"=>"2014 Rossignol District Snowboard","category"=>"Доски и лыжи","price"=>10999,"url"=>"img/lot-1.jpg"],
    ["name"=>"DC Ply Mens 2016/2017 Snowboard","category"=>"Доски и лыжи","price"=>159999,"url"=>"img/lot-2.jpg"],
    ["name"=>"Крепления Union Contact Pro 2015 года размер L/XL","category"=>"Крепления","price"=>8000,"url"=>"img/lot-3.jpg"],
    ["name"=>"Ботинки для сноуборда DC Mutiny Charocal","category"=>"Ботинки","price"=>10999,"url"=>"img/lot-4.jpg"],
    ["name"=>"Куртка для сноуборда DC Mutiny Charocal","category"=>"Одежда","price"=>7500,"url"=>"img/lot-5.jpg"],
    ["name"=>"Маска Oakley Canopy","category"=>"Разное","price"=>5400,"url"=>"img/lot-6.jpg"]
];

$bets = [
    ['name' => 'Иван', 'price' => 11500, 'ts' => strtotime('-' . rand(1, 50) .' minute')],
    ['name' => 'Константин', 'price' => 11000, 'ts' => strtotime('-' . rand(1, 18) .' hour')],
    ['name' => 'Евгений', 'price' => 10500, 'ts' => strtotime('-' . rand(25, 50) .' hour')],
    ['name' => 'Семён', 'price' => 10000, 'ts' => strtotime('last week')]
];

$categories=[
    ["name"=>"Доски и лыжи","class"=>"promo__item promo__item--boards"],
    ["name"=>"Крепления","class"=>"promo__item promo__item--attachment"],
    ["name"=>"Ботинки","class"=>"promo__item promo__item--boots"],
    ["name"=>"Одежда","class"=>"promo__item promo__item--clothing"],
    ["name"=>"Инструменты","class"=>"promo__item promo__item--tools"],
    ["name"=>"Разное","class"=>"promo__item promo__item--other"]
];


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