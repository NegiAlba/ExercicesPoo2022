<?php

declare(strict_types=1);

namespace App\Models;

// On créer une class abstraite avec le préfixe abstract

abstract class Animal
{
    // ? Passage à la promotion de propriétés
    // protected string $race;
    // protected string $nom;
    // protected string $moyenDeLocomotion;

    public function __construct(protected string $race, protected string $nom, protected string $moyenDeLocomotion)
    {
    }

    /**
     * Get the value of race.
     */
    public function getRace(): string
    {
        return $this->race;
    }

    /**
     * Set the value of race.
     */
    public function setRace(string $race): self
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get the value of nom.
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom.
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of moyenDeLocomotion.
     */
    public function getMoyenDeLocomotion(): string
    {
        return $this->moyenDeLocomotion;
    }

    /**
     * Set the value of moyenDeLocomotion.
     */
    public function setMoyenDeLocomotion(string $moyenDeLocomotion): self
    {
        $this->moyenDeLocomotion = $moyenDeLocomotion;

        return $this;
    }

    // ? Méthodes Customs

    public function identify(): string
    {
        return "My name is $this->nom and i'm part of the $this->race race";
    }

    public function flee(): string
    {
        return "$this->moyenDeLocomotion away";
    }

    abstract public function eat();
}