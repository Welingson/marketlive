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

/**
 * HOME
 */
$route->group(null);
$route->get("/", "Web:home");


/**
 * ABOUT
 */

 $route->group(null);
 $route->get("/sobre", "Web:about");


/**
 * MARKET LIVE
 */

 $route->group("feiras-ao-vivo");
 $route->get("/", "Web:marketLive");
 $route->get("/{nameMarketer}", "Web:marketerLive");


 
/**
 * LIVE FEIRANTE
 */



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