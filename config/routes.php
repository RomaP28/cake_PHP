<?php
/**
 * Routes configuration.
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * It's loaded within the context of `Application::routes()` method which
 * receives a `RouteBuilder` instance `$routes` as method argument.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return static function (RouteBuilder $routes) {

    $routes->setRouteClass(DashedRoute::class);

    $routes->scope('/', function (RouteBuilder $builder) {

        $builder->connect('/', ['controller' => 'Posts', 'action' => 'index', 'home']);

        $builder->connect('/pages/*', 'Pages::display');

        $builder->fallbacks();
    });


    $routes->prefix('admin', function ($routes){
        $routes->connect('/', ['controller' => 'Dashboard']);
        $routes->connect('/create', ['controller' => 'Posts', 'action' => 'create']);

    });

    $routes->scope('/posts', function ($routes){
        $routes->connect('/',
            ['controller' => 'Posts']
        );

        $routes->connect('/create',
            ['controller' => 'Posts', 'action' => 'create']
        );

        $routes->connect('/:id',
            ['controller' => 'Posts', 'action' => 'view'],
            ['id' => '\d+', 'pass' => ['id']]
        );

        $routes->connect('edit/:id',
            ['controller' => 'Posts', 'action' => 'edit'],
            ['id' => '\d+', 'pass' => ['id']]
        );

        $routes->connect('/hello',
            ['controller' => 'Posts', 'action' => 'hello'],
        );
    });
};
