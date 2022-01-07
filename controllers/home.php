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

    $shoppingCart = array_key_exists('cart', $_SESSION) ? json_decode($_SESSION['cart']) : [];

    $fruits = [];

    $index = 0;

    while ($fruit = $res->fetch(PDO::FETCH_ASSOC)) {
        $fruits[$index] = $fruit;
        $fruits[$index]['price'] = (float)$fruit['price'];
        $fruits[$index]['stock'] = (int)$fruit['stock'];

        if (count($shoppingCart)) {
            foreach ($shoppingCart as $key => $product) {
                dd($fruit, $product);
                
                if ($fruit['id'] === $product['id']) {
                    // $fruits[$key][''];
                }
            }
        }

        $index++;
    }

    // dd($fruits);

    echo json_encode([
        'success'   => true,
        'fruits'    => $fruits,
        'what'      => 'kiekeboo!',
    ]);
}
