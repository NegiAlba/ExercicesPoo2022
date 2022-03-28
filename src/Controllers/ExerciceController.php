<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Models\Oiseau;

class ExerciceController
{
    public function index(): string
    {
        $calcul = 10 * 2;

        return (new \App\View('calcul', ['calcul' => $calcul]))->render();
    }

    public function oiseau()
    {
        $eagle = new Oiseau('Eagle', 'notUSA');
        $albatros = new Oiseau('Albatros', 'CAW');
        $pigeon = new Oiseau('Pigeon', 'Stupid');

        return (new \App\View('oiseau', ['eagle' => $eagle, 'albatros' => $albatros, 'pigeon' => $pigeon]))->render();
    }

    public function processed()
    {
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';

        return header('Location:/');
    }
}