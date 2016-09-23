<?php

require "core/bootstrap.php";
require "core/Request.php";
require 'routes.php';

// POO

//HTTP -> Request -> Response

//$request = new Request;
//$uri = $request->uri();

$uri = Request::uri();

if ( array_key_exists($uri,$routes)) {
    require $routes[$uri];
} else {
    throw new Exception("No s'ha trobat la ruta");
}

