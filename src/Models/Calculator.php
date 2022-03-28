<?php

declare(strict_types=1);

namespace App\Models;

class Calculator
{
    public function add(float $a, float $b): float
    {
        return $a + $b;
    }

    public function multiply(float $a, float $b): float
    {
        return $a * $b;
    }

    public function divide(float $a, float $b): float
    {
        return $a / $b;
    }

    public function substract(float $a, float $b): float
    {
        return $a - $b;
    }

    public function median(float $a, float $b): int
    {
        return (int) round(($a + $b) / 2);
    }
}