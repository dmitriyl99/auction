<?php

declare(strict_types=1);

namespace Test\Functional;


use PHPUnit\Framework\TestCase;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\App;
use Slim\Psr7\Factory\ServerRequestFactory;

class WebTestCase extends TestCase
{
    protected static function json(string $method, string $path): ServerRequestInterface
    {
        return self::request($method, $path)
            ->withHeader('Accept', 'application/json')
            ->withHeader('Content-Type', 'application/json');
    }

    protected static function request(string $method, string $path): ServerRequestInterface
    {
        return (new ServerRequestFactory())->createServerRequest($method, $path);
    }

    protected function container(): ContainerInterface
    {
        /** @var \Psr\Container\ContainerInterface */
         return require __DIR__ . '/../../config/container.php';
    }

    protected function app(): App
    {
        /** @var \Slim\App */
        return (require __DIR__ . '/../../bootstrap/app.php')($this->container());
    }
}