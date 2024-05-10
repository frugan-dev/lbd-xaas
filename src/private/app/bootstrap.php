<?php

declare(strict_types=1);

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require _ROOT.'/vendor/autoload.php';

try {
    $dotenv = Dotenv\Dotenv::createImmutable(_ROOT);
    $dotenv->load();

    // https://github.com/vlucas/phpdotenv/issues/231#issuecomment-663879815
    foreach ($_ENV as $key => $val) {
        if (ctype_digit((string) $val)) {
            $dotenv->required($key)->isInteger();
            $_ENV[$key] = (int) $val;
        } elseif (!empty($val) && !is_numeric($val) && ($newVal = \filter_var($_ENV[$key], \FILTER_VALIDATE_BOOLEAN, \FILTER_NULL_ON_FAILURE)) !== null) {
            $dotenv->required($key)->isBoolean();
            $_ENV[$key] = $newVal;
        }
    }
} catch (Exception $e) {
    // https://github.com/phpro/grumphp/blob/master/doc/tasks/phpparser.md#no_exit_statements
    exit($e->getMessage());
}

Kint::$enabled_mode = true;

$app = AppFactory::create();

$app->addErrorMiddleware(true, true, true);

$app->get('/[{params:.+}]', function (Request $request, Response $response, array $args) {
    $response->getBody()->write(@s($args, $_ENV, $_SERVER));
    return $response;
});

return $app;
