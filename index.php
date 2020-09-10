<?php

$user_name = 'Марина';
$user_avatar = 'img/user.jpg';
$categories = [
    "Доски и лыжи", "Крепления", "Ботинки", "Одежда", "Инструменты", "Разное"
  ];

$announcement = [
    [
        'title' => '2014 Rossignol District Snowboard',
        'category' => 'Доски и лыжи',
        'price' => 10199,
        'pictures_url' => 'img/lot-1.jpg'
    ],
    [
        'title' => 'DC Ply Mens 2016/2017 Snowboard',
        'category' => 'Доски и лыжи',
        'price' => 159999,
        'pictures_url' => 'img/lot-2.jpg'
    ],
    [
        'title' => 'Крепления Union Contact Pro 2015 года разме L/XL',
        'category' => 'Крепления',
        'price' => 8000,
        'pictures_url' => 'img/lot-3.jpg'
    ],
    [
        'title' => 'Ботинки для сноубода DC Mutiny Charocal',
        'category' => 'Ботинки',
        'price' => 10999,
        'pictures_url' => 'img/lot-4.jpg'
    ],
    [
        'title' => 'Куртка для сноубода DC Mutiny Charocal',
        'category' => 'Одежда',
        'price' => 7500,
        'pictures_url' => 'img/lot-5.jpg'
    ],
    [
        'title' => 'Маска Oakey Canopy',
        'category' => 'Разное',
        'price' => 5400,
        'pictures_url' => 'img/lot-6.jpg'
    ],
];

function formatThePrice ($price) {
    if ($price < 1000 ) {
        return ceil($price) . ' ₽';
    } else {
        $format_price = ceil($price);
        return number_format($format_price, 0, '.', ' ') . ' ₽';
    }
}
require_once ('functions.php');

$page_content = include_template('index.php', [
    'categories' => $categories,
    'announcement' => $announcement
]);
$layout_content = include_template ('layout.php', [
    'content' => $page_content,
    'categories' => $categories,
    'is_auth' => $is_auth,
    'title' => 'Yeticave - Главная страница'
]);
echo $layout_content;
?>
