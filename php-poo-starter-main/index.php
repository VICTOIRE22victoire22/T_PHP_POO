<?php

require_once 'Controller/Router.php'; // Charge le router

include_once 'Views/header.html.php'; // Inclut le header

$router = new Router();
include_once $router->getRequest();

include_once 'Views/footer.html.php'; // Inclut le footer