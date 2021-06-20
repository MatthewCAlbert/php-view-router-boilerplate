<?php

$router->get('/', function() use(&$blade, &$data) {
    echo $blade->render('pages.homepage');
});