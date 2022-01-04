<?php

function seedTable() {
    $fruitBowl = [
        [
            'id'    => 1,
            'name'  => 'Apples',
            'image' => 'apples.jpg',
            'price' => 1.25,
            'stock' => 20,
        ],

        [
            'id'    => 2,
            'name'  => 'Avocado\'s',
            'image' => 'avacados.jpg',
            'price' => 1.25,
            'stock' => 20,
        ],

        [
            'id'    => 3,
            'name'  => 'Bananas',
            'image' => 'bananas.jpg',
            'price' => 1.25,
            'stock' => 20,
        ],

        [
            'id'    => 4,
            'name'  => 'Berries',
            'image' => 'berries.jpg',
            'price' => 1.25,
            'stock' => 20,
        ],

        [
            'id'    => 5,
            'name'  => 'Grapefruit',
            'image' => 'grapefruit.jpg',
            'price' => 1.25,
            'stock' => 20,
        ],

        [
            'id'    => 6,
            'name'  => 'Grapes',
            'image' => 'grapes.jpg',
            'price' => 1.25,
            'stock' => 20,
        ],

        [
            'id'    => 7,
            'name'  => 'Kiwi\'s',
            'image' => 'kiwis.jpg',
            'price' => 1.25,
            'stock' => 20,
        ],

        [
            'id'    => 8,
            'name'  => 'Lemon',
            'image' => 'lemon.jpg',
            'price' => 1.25,
            'stock' => 20,
        ],

        [
            'id'    => 9,
            'name'  => 'Oranges',
            'image' => 'oranges.jpg',
            'price' => 1.25,
            'stock' => 20,
        ],

        [
            'id'    => 10,
            'name'  => 'Peaches',
            'image' => 'peaches.jpg',
            'price' => 1.25,
            'stock' => 20,
        ],

        [
            'id'    => 11,
            'name'  => 'Raspberries',
            'image' => 'raspberries.jpg',
            'price' => 1.25,
            'stock' => 20,
        ],

        [
            'id'    => 12,
            'name'  => 'Strawberries',
            'image' => 'strawberries.jpg',
            'price' => 1.25,
            'stock' => 20,
        ],
    ];

    $sql = "TRUNCATE `fruitbowl`.`products`";

    query($sql);

    foreach ($fruitBowl as $fruit) {
        $fruit['created_at'] = date('Y-m-d H:i:s');

        insert($fruit, 'products');
    }
}