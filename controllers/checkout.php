<?php

function index($view)
{
    return require $_SERVER['DOCUMENT_ROOT'] . '/assets/views/' . $view . '.view.php';
}

function saveCard()
{
    echo json_encode([
        'success'   => true,
        'message'   => 'Fruit added to order',
        'redirect'  => '',
    ]);
}

function show() {
    $checkout = [
        'aantal' => 10,
        'name'  => 'Toby',
    ];

    return require $_SERVER['DOCUMENT_ROOT'] . '/assets/views/cart.view.php';
}

function kiekeboo()
{
    dd('kiekeboo');
}