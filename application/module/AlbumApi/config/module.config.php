<?php

return array(
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'AlbumApi\Controller\Index',
                    ),
                ),
            ),
            'album' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/album[/:id]',
                    'constraints' => array(
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'AlbumApi\Controller\Album',
                    ),
                ),
            ),
            'book' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/book[/:id]',
                    'constraints' => array(
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'AlbumApi\Controller\Book',
                    ),
                ),
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'AlbumApi\Controller\Index' => 'AlbumApi\Controller\IndexController',
            'AlbumApi\Controller\Album' => 'AlbumApi\Controller\AlbumController',
            'AlbumApi\Controller\Book' => 'AlbumApi\Controller\BookController',
        ),
    ),
    'view_manager' => array(
        'strategies' => array(
            'ViewJsonStrategy',
        ),
    ),
);
