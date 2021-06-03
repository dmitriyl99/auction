<?php

namespace App\Http;

use Psr\Http\Message\ResponseInterface as Response;

class BaseAction
{
    /**
     * Convert response data to json format
     *
     * @param mixed $data
     * @param int $statusCode
     * @return Response
     * @throws \JsonException
     */
    protected function json(mixed $data, int $statusCode = 200): Response
    {
        return new JsonResponse($data, $statusCode);
    }
}
