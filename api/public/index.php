<?php

declare(strict_types=1);

http_response_code(500);

require_once  __DIR__ . '/../vendor/autoload.php';

/** @var \Psr\Container\ContainerInterface $container */
$container = require __DIR__ . '/../config/container.php';

/** @var \Slim\App $app */
$app = (require __DIR__ . '/../bootstrap/app.php')($container);
$app->run();
