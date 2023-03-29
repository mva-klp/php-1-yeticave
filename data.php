<?php
$user_name = 'Vladimir'; // укажите здесь ваше имя

$categories = [
  "boards" => "Доски и лыжи",
  "attachment" => "Крепления",
  "boots" => "Ботинки",
  "clothing" => "Одежда",
  "tools" => "Инструменты",
  "other" => "Разное"
];

$goods = [
  [
    'title' => '2014 Rossignol District Snowboard',
    'category' => $categories['boards'],
    'price' => '10999',
    'img_url' => 'img/lot-1.jpg',
    'expiry_date' => '2023-03-29'
  ],
  [
    'title' => 'DC Ply Mens 2016/2017 Snowboard',
    'category' => $categories['boards'],
    'price' => '159999',
    'img_url' => 'img/lot-2.jpg',
    'expiry_date' => '2023-04-02'
  ],
  [
    'title' => 'Крепления Union Contact Pro 2015 года размер L/XL',
    'category' => $categories['attachment'],
    'price' => '8000',
    'img_url' => 'img/lot-3.jpg',
    'expiry_date' => '2023-04-12'
  ],
  [
    'title' => 'Ботинки для сноуборда DC Mutiny Charocal',
    'category' => $categories['boots'],
    'price' => '10999',
    'img_url' => 'img/lot-4.jpg',
    'expiry_date' => '2023-05-01'
  ],
  [
    'title' => 'Куртка для сноуборда DC Mutiny Charocal',
    'category' => $categories['clothing'],
    'price' => '7500',
    'img_url' => 'img/lot-5.jpg',
    'expiry_date' => '2023-07-13'
  ],
  [
    'title' => 'Маска Oakley Canopy',
    'category' => $categories['other'],
    'price' => '5400',
    'img_url' => 'img/lot-6.jpg',
    'expiry_date' => '2023-04-26'
  ]
];
