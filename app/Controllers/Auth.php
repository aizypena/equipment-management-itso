<?php
namespace App\Controllers;

use App\Models\AssociateUsers;
use App\Models\Controller;

class Auth extends BaseController
{
    public function register()
    {
    $associateUsersModel = new AssociateUsers();

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

    public function itsoPersonnel(): string 
    {
        $data['title'] = 'ITSO Personnel - Login';
        return view('includes/header', $data)
            .view('itso-personnel-login')
            .view('includes/bottom');
    }

    public function associate(): string
    {
        $data['title'] = 'Associate - Login';
        return view('includes/header', $data)
            .view('associate-login')
            .view('includes/bottom');
    }

    public function verifyAccount(): string
    {
        $data['title'] = 'Account Verification - Equipment Management System';
        return view('includes/header', $data)
            .view('account-verification')
            .view('includes/bottom');
    }

    public function forgotPassword(): string
    {
        $data['title'] = 'Forgot Password - Equipment Management System';
        return view('includes/header', $data)
            .view('forgot-password')
            .view('includes/bottom');
    }

    
}

?>