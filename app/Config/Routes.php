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
$routes->get('register', 'Index::register');
$routes->post('register', 'Auth::register');
$routes->get('login', 'Auth::login');
$routes->get('verify-account', 'Auth::verifyAccount');
$routes->get('forgot-password', 'Auth::forgotPassword');

// itso personnel route
$routes->get('itso-personnel-login', 'Auth::itsoPersonnel');

// associates route
$routes->get('associate-login', 'Auth::associate');

// students route
$routes->get('student-login', 'Auth::student');