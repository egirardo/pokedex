<?php

declare(strict_types=1);

namespace App\Exceptions;

use Exception;
use Throwable;

class NotFound extends Exception
{
    private $previous;

    public function __construct($message, $code = 0, ?Throwable $previous = null)
    {

        parent::__construct($message, $code, $previous);

        if (!is_null($previous)) {
            $this->previous = $previous;
        }
    }
}
