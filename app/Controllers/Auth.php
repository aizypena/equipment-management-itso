<?php
namespace App\Controllers;

use App\Models\AssociateUsers;
use App\Models\Controller;

class Auth extends BaseController
{

    // register function
    public function register(): string
    {
        $associateUsers = new AssociateUsers();

        // Collect form data
        $data = [
            'department' => $this->request->getPost('department'),
            'first_name' => $this->request->getPost('first_name'),
            'middle_name' => $this->request->getPost('middle_name'),
            'last_name' => $this->request->getPost('last_name'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'birthdate' => $this->request->getPost('birthdate'),
            'gender' => $this->request->getPost('gender')
        ];

        // Attempt to save data
        if ($associateUsers->save($data)) {
            // Set success message in session
            session()->setFlashdata('success', 'Registration successful! You can now log in.');
        } else {
            // Set error message in session
            session()->setFlashdata('error', 'Registration failed! Please try again.');
        }

        // Load the registration view with feedback
        $data['title'] = 'Register - Equipment Management System';
        return view('includes/header', $data)
            . view('register')
            . view('includes/bottom');
    }



    public function login(): string
    {
        $associateUsers = new AssociateUsers();

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