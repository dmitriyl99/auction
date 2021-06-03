<?php

declare(strict_types=1);

namespace App\Http\Action;

use App\Http\BaseAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class HomeAction extends BaseAction implements RequestHandlerInterface
{
    /**
     * @throws \JsonException
     */
    public function handle(ServerRequestInterface $request): Response
    {
        return $this->json(['message' => 'Hello world!']);
    }
}
