<?php

declare(strict_types=1);

namespace App\Exceptions;

class ViewNotFoundException extends \Exception
{
    protected $message = 'Cannot render view because the file you requested does not exist';
}