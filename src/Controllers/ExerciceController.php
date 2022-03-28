<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Models\Calculator;
use App\Models\Oiseau;

class ExerciceController
{
    public function index(): string
    {
        return (new \App\View('homepage'))->render();
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

    public function calculator()
    {
        if ('POST' === $_SERVER['REQUEST_METHOD']) {
            if (in_array('', $_POST)) {
                return header('Location:/calculator');
            }
            $operator = htmlspecialchars(trim($_POST['operator']));
            $a = (float) htmlspecialchars(trim($_POST['a']));
            $b = (float) htmlspecialchars(trim($_POST['b']));

            $calculator = new Calculator();
            $result = match ($operator) {
                'add' => $calculator->add($a, $b),
                'multiply' => $calculator->multiply($a, $b),
                'divide' => $calculator->divide($a, $b),
                'substract' => $calculator->substract($a, $b),
                'median' => $calculator->median($a, $b),
            };

            return (new \App\View('calculator', ['result' => $result]))->render();
        }

        return (new \App\View('calculator', []))->render();
    }
}