<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// index route
$routes->get('/', 'Index::index');
$routes->get('about-us', 'Index::about');
$routes->get('contact-us', 'Index::contact');

$routes->get('register', 'Index::register');
$routes->post('register', 'Auth::register');

//login routes
$routes->get('login', 'Index::login');
$routes->get('login/associate-account', 'Index::associateAccount');
$routes->post('associateLogin', 'Auth::associateLogin');

//logout routes
$routes->get('logout', 'Auth::logout');

$routes->get('verify-account', 'Auth::verifyAccount');
$routes->get('forgot-password', 'Auth::forgotPassword');

// itso personnel route
$routes->get('itso-personnel-login', 'Auth::itsoPersonnel');

// associates dashboard route
$routes->get('associate-account', 'AssociateDashboard::profile');
$routes->get('associate-account/equipment', 'AssociateDashboard::equipment');
$routes->get('associate-account/history', 'AssociateDashboard::history');
$routes->get('associate-account/return', 'AssociateDashboard::return');
$routes->get('associate-account/borrow', 'AssociateDashboard::borrow');

// students route
$routes->get('student-login', 'Auth::student');