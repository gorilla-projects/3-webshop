<?php

function index($view)
{
    // $fruits = require 'data/fruits.php';

    return require $_SERVER['DOCUMENT_ROOT'] . '/assets/views/' . $view . '.view.php';
}

function getData()
{
    $sql = "SELECT * FROM `products` WHERE `deleted_at` IS NULL";
    $res = query($sql);

    $fruits = $res->fetchAll(PDO::FETCH_CLASS);

    // if (array_key_exists('cart', $_SESSION)) {
    //     $shoppingCart = json_decode($_SESSION['cart']);
    //     if (count($shoppingCart->products)) {
    //         foreach (@$shoppingCart as $cart) {
    //             $sql = "SELECT `stock` FROM `products` WHERE `id`=" . $cart['id'] . " AND `deleted_at`";
    //             $fruit = $res->fetch(PDO::FETCH_ASSOC);
    //         }
    //     }
    // }

    echo json_encode([
        'success'   => true,
        'fruits'    => $fruits,
        'what'      => 'kiekeboo!',
    ]);
}
