<?php

namespace App\Exceptions;

use Exception;

class CustomErrorException extends Exception
{
    public function render($request)
    {
        return response()->json([
            'error' => 'This is a custom error message.',
        ], 400);
    }

}
