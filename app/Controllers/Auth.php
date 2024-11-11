<?php
namespace App\Controllers;

class Auth extends BaseController
{
    public function register(): string
    {
        $data['title'] = 'Register - Equipment Management System';
        return view('includes/header', $data)
            .view('register')
            .view('includes/bottom');
    }

    public function login(): string
    {
        $data['title'] = 'Login - Equipment Management System';
        return view('includes/header', $data)
            .view('login')
            .view('includes/bottom');
    }
}

?>