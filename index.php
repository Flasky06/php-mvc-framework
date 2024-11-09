<?php

/** User: tritva */



$app = new Application();

$app->router->get('/', function() {
    return 'Hello World';
});

$app->run();
