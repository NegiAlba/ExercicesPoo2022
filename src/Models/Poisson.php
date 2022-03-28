<?php

declare(strict_types=1);

namespace App\Models;

class Poisson extends Animal
{
    // private string $moyenDeLocomotion = 'Swims';

    public function __construct(protected string $race, protected string $nom, protected string $moyenDeLocomotion = 'Swims')
    {
    }

    public function getSize()
    {
        $smallRaces = ['Guppy', 'Platy', 'Néon Bleu', 'Corydoras poivré', 'Xiphophore', 'Poisson Rouge'];
        if (in_array($this->getRace(), $smallRaces)) {
            return 'Small';
        } else {
            return 'Big';
        }
    }

    public function eat(): string
    {
        if ('Big' === $this->getSize()) {
            return 'Eats another fish';
        } else {
            return 'Eats whatever he can, probably algaes and larvaes';
        }
    }
}