<?php

use App\Models\Poisson;

$root = dirname(__DIR__).DIRECTORY_SEPARATOR;
define('VIEWS_PATH', $root.'views'.DIRECTORY_SEPARATOR);

    // spl_autoload_register(function ($class) {
    //     // ! Nom de la classe
    //     // ? App\Zoo\Animal
    //     // Il faudra transformer le nom de la classe afin qu'il corresponde à un chemin qu'on puisse require
    //     $class = str_replace('\\', '/', $class);

    //     // 1. On va transformer les '\' en '/'
    //     // ? App/Zoo/Animal

    //     $path = '../'.str_replace('App', 'src', $class).'.php';
    //     // 2. On va remplacer 'App' par 'src' dans le nom de classe et concaténer le retour au dossier parent et l'extension php
    //     // ? ../src/Zoo/Animal.php

    //     if (file_exists($path)) {
    //         require $path;
    //     }
    // });

    require '../vendor/autoload.php';

        $router = new App\Router();
        // $router->register('/', function () { include '../views/homepage.php'; })
        $router->get('/', [App\Controllers\ExerciceController::class, 'index'])
                ->get('/oiseau', [App\Controllers\ExerciceController::class, 'oiseau'])
                ->post('/oiseau', [App\Controllers\ExerciceController::class, 'processed'])
                ->get('/poisson', function () {
                    $guppito = new Poisson('Guppy', 'Guppito');
                    $redFish = new Poisson('Poisson Rouge', 'LPPSR');
                    $shark = new Poisson('Requin', 'NomNom');
                    include '../views/poisson.php';
                })
                ->get('/calculator', [App\Controllers\ExerciceController::class, 'calculator'])
                ->post('/calculator', [App\Controllers\ExerciceController::class, 'calculator']);
        echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));