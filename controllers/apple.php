<?php

function index($view)
{
    $fruits = require 'data/fruits.php';

    return require $_SERVER['DOCUMENT_ROOT'] . '/assets/views/' . $view . '.view.php';
}