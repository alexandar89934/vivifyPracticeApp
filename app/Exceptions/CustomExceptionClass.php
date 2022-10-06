<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CustomExceptionClass extends Exception
{

    public function __construct($status = 400, $error = 'default error')
    {
        $this->status = $status;
        $this->error = $error;
    }
    public function render(Request $request): Response
    {

        return response(["error" => $this->error], $this->status);
    }
}
