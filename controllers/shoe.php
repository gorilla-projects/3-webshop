<?php

function index($view)
{
    require_once $_SERVER['DOCUMENT_ROOT'] . '/models/fruits-model.php';

    return require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/views/' . $view . '.view.php';
}