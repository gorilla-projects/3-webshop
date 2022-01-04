<?php

function index($view)
{
    return require $_SERVER['DOCUMENT_ROOT'] . '/assets/views/' . $view . '.view.php';
}

function saveCard()
{
    dd($_REQUEST);
    
    echo json_encode([
        'success'   => true,
        'message'   => 'Fruit added to order',
        'redirect'  => '',
    ]);
}

function getData()
{
    $sql = "SELECT * FROM `products` WHERE `deleted_at` IS NULL";
    $res = query($sql);

    echo json_encode([
        'success'   => true,
        'fruits'    => $res->fetchAll(PDO::FETCH_ASSOC),
    ]);
}