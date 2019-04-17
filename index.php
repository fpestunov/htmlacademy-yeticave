<?php
require_once('functions.php');
require_once('data.php');

// показывать или нет выполненные задачи
$is_auth = rand(0, 1);

$page_content = include_template('index.php', [
    'categories' => $categories,
    'lot_list' => $lot_list
]);

$layout_content = include_template('layout.php', [
    'is_auth' => $is_auth,
    'user_name' => $user_name,
    'content' => $page_content,
    'categories' => $categories,
    'title' => 'Главная страница'
]);

print($layout_content);
