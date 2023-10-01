<?php

namespace App\Exceptions;

use Exception;

class ProjectsException extends Exception
{
    public function render($request)
    {
        return response()->json([
            'error' => 'There was a problem getting projects.',
        ], 400);
    }
}
