<?php

namespace Cm\Api\Routes;

final class Http
{
    public const POST_METHOD = 'POST';
    public const GET_METHOD = 'GET';
    public const PUT_METHOD = 'PUT';
    public const DELETE_METHOD = 'DELETE';


    public static function matchHttpRequestMethod(string $http_method): bool
    {
        return strtolower($_SERVER['REQUEST_METHOD']) === strtolower($http_method);
    }
}
