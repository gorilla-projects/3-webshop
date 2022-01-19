<?php

function index($view)
{
    // $fruits = require 'data/fruits.php';

    return require $_SERVER['DOCUMENT_ROOT'] . '/assets/views/' . $view . '.view.php';
}

function getData()
{
    try {
        $query = "SELECT * FROM `products` WHERE `deleted_at` IS NULL";
        $result = query($query);
        
        $products = $result->fetchAll(PDO::FETCH_ASSOC);

        $success = true;
        $message = "Success";
        
    } catch (Exception $e) {
        $products = null;
        $success = false;
        $message = $e->getMessage();
    }

    echo json_encode([
        'success'   => $success,
        'message'   => $message,
        'products'  => $products,
    ]);
}

function registerSuccessful()
{
    return require $_SERVER['DOCUMENT_ROOT'] . '/assets/views/register-succful.view.php';
}
