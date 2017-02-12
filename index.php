<?php

$database = require 'core/bootstrap.php';

// order of these two matters. A new Router object has to be created before
//routes can be defined. This is because 'routes.php' is going to use the object's
//define() method.
$router = new Router;

require 'routes.php';

require Router::load('routes.php')->direct(Request::uri());
