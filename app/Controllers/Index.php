<?php
namespace App\Controllers;

class Index extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'Home - Equipment Management System';
        return view('includes/header', $data)
            .view('includes/nav')
            .view('index')
            .view('includes/footer')
            .view('includes/bottom');
    }

    public function about(): string
    {
        $data['title'] = 'About Us - Equipment Management System';
        return view('includes/header', $data)
            .view('includes/nav')
            .view('about-us')
            .view('includes/footer')
            .view('includes/bottom');
    }

    public function contact(): string 
    {
        $data['title'] = 'Contact Us - Equipment Management System';
        return view('includes/header', $data)
            .view('includes/nav')
            .view('contact-us')
            .view('includes/footer')
            .view('includes/bottom');
    }

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