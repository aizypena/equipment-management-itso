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
$routes->post('itsoPersonnelLogin', 'Auth::personnelLogin');


// itso personnel route
$routes->get('itso-personnel-login', 'Auth::itsoPersonnel');
$routes->get('itso-personnel', 'PersonnelDashboard::profile');
$routes->get('itso-personnel/equipment', 'PersonnelDashboard::equipment');
$routes->get('itso-personnel/history', 'PersonnelDashboard::history');
$routes->get('itso-personnel/return', 'PersonnelDashboard::return');
$routes->get('itso-personnel/users', 'PersonnelDashboard::users');

$routes->post('itso-personnel/equipment/add', 'PersonnelController::addEquipment');
$routes->put('itso-personnel/equipment/update/(:num)', 'PersonnelController::updateEquipment/$1');
$routes->delete('itso-personnel/equipment/delete/(:num)', 'PersonnelController::deleteEquipment/$1');
$routes->get('itso-personnel/equipment/get/(:num)', 'PersonnelController::getEquipment/$1');

// associates dashboard route
$routes->get('associate-account', 'AssociateDashboard::profile');
$routes->get('associate-account/equipment', 'AssociateDashboard::equipment');
$routes->get('associate-account/history', 'AssociateDashboard::history');
$routes->get('associate-account/return', 'AssociateDashboard::return');
$routes->get('associate-account/borrow', 'AssociateDashboard::borrow');

// students route
$routes->get('student-login', 'Auth::student');

// test
$routes->get('viewUsers', 'PersonnelDashboard::usersView');

//activate account
$routes->get('activate/(:any)', 'Auth::activateAccount/$1');