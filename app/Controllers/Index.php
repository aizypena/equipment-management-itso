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
            .view('includes/bottom');
    }
}

?>