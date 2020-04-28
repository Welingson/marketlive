<?php

ob_start();

require __DIR__ . "/vendor/autoload.php";

/**
 * BOOTSTRAP
 */

use CoffeeCode\Router\Router;
use Source\Core\Session;

$session = new Session();
$route = new Router(url(), ":");
$route->namespace("Source\App");

/**
 * SITE ROUTES
 */

$route->group(null);
$route->get("/", "Web:home");



/**
 * ERROR ROUTES
 */
$route->group("/ops");
$route->get("/{errcode}", "Web@error");

/**
 * ROUTE
 */
$route->dispatch();

/**
 * ERROR REDIRECT
 */
if ($route->error()) {
//    var_dump("Deu erro: {$route->error()}");
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();