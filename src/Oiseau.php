<?php

declare(strict_types=1);

namespace App;

class Oiseau extends Animal
{
    // private string $moyenDeLocomotion = 'Flies';

    public function __construct(protected string $race, protected string $nom, protected string $moyenDeLocomotion = 'Flies')
    {
    }

    public function migrate(string $month)
    {
        $winter = ['Nov', 'Dec', 'Jan', 'Feb'];
        $summer = ['May', 'Jun', 'Jul', 'Aug'];
        if (in_array($month, $winter)) {
            return "$this->nom will migrate down south on $month";
        } elseif (in_array($month, $summer)) {
            return "$this->nom will migrate up north on $month";
        } else {
            return "$this->nom won't migrate at this time of the year.";
        }
    }

    public function eat()
    {
        return 'Eats either meat of other animals, or small stuff like worms/seeds and grains';
    }
}