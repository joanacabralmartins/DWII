<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    header("Access-Control-Allow-Origin: *");

    require __DIR__ . '/../vendor/autoload.php';
    
    use atv\controllers\StudentController;

    $obj = new StudentController();

    $data = (
        array (
            'id' =>$_POST['id'],
            'nome' => $_POST['nome'],
            'turma' => $_POST['turma']
        )
    );

    $obj->update($data);

    print_r($data);