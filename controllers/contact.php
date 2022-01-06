<?php

function index($view)
{
    $contact = [
        'id' => 1,
        'name' => 'Paul',
    ];

    return require $_SERVER['DOCUMENT_ROOT'] . '/assets/views/' . $view . '.view.php';
}