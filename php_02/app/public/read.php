<?php

    header("Access-Control-Allow-Origin: *");

    require __DIR__ . '/../vendor/autoload.php';

    use atv\controllers\StudentController;

    $obj = new StudentController();

    $data = $obj->read();
    print_r($data);