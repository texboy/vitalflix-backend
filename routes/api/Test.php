<?php
/**
 * Copyright (c) 2020. Victor Barcellos Lopes (Texboy)
 */

use Pecee\SimpleRouter\SimpleRouter as Router;

Router::group([
    'namespace' => '\Vitalflix\Test\Controller'
], function () {
    Router::get('/test/', 'Controller@getData')
        ->name('test');
});
