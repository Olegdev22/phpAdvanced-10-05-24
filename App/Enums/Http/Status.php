<?php

namespace App\Enums\Http;
enum Status: int
{
    case OK = 200;
    case CREATED = 201;
    case BAD_REQUEST = 400;
    case UNAUTHORIZED = 401;
    case FORBIDDEN = 403;
    case NOT_FOUND = 404;
    case METHOD_NOT_ALLOWED = 405;
    case UNPROCESSABLE_ENTITY = 422;
    case INTERNAL_SERVER_ERROR = 500;

    public function withDescription()
    {
        $description = match ($this->value) {
            200 => '200 OK',
            201 => '201 Created',
            400 => '400 Bad Request',
            401 => '401 Unauthorized',
            403 => '403 Forbidden',
            404 => '404 Not Found',
            405 => '405 Method Not Allowed',
            422 => '422 Unprocessable Entity',
            500 => '500 Internal Server Error',

        };

        return [
            'code' => $this->value,
            'status' => $description
        ];
    }

}
