<?php

function updateCart()
{
    $_SESSION['cart'] = [
        [
            'id' => 1,
            'name' => 'Fruit 1',
        ],

        [
            'id' => 2,
            'name' => 'Fruit 2',
        ],
    ];
}