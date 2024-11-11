<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// index route
$routes->get('/', 'Index::index');
$routes->get('about-us', 'Index::about');
$routes->get('contact-us', 'Index::contact');

// auth route
$routes->get('register', 'Auth::register');
$routes->get('login', 'Auth::login');

// itso personnel route

// associates route

// students route