<?php
namespace App\Controllers;

use App\Models\Users;
use App\Models\Controller;

class Auth extends BaseController
{

    // register function
    public function register(): string
    {
        $users = new Users();

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

        // Generate associate number
        $currentYearMonth = date('Ym');
        $lastAssociate = $users->where('school_id LIKE', "$currentYearMonth%")
                                        ->orderBy('school_id', 'DESC')
                                        ->first();
        if ($lastAssociate) {
            $lastNumber = (int)substr($lastAssociate['school_id'], -4);
            $newNumber = str_pad($lastNumber + 1, 4, '0', STR_PAD_LEFT);
        } else {
            $newNumber = '0001';
        }
        $data['school_id'] = $currentYearMonth . $newNumber;

        // Attempt to save data
        if ($users->save($data)) {
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

    public function associateLogin()
    {
        $users = new Users();

        // Get form data
        $associateNumber = $this->request->getPost('associateNumber');
        $password = $this->request->getPost('password');

        // Find user by associate number
        $user = $users->where('school_id', $associateNumber)->first();

        if ($user && password_verify($password, $user['password'])) {
            if ($user['status'] === 'active') {
                // Set user session data
                session()->set([
                    'associate_id' => $user['id'],
                    'school_id' => $user['school_id'],
                    'logged_in' => true
                ]);

                // Redirect to associate account page
                return redirect()->to('/associate-account');
            } else {
                // Set error message in session
                session()->setFlashdata('error', 'Your account is inactive. Please contact support.');

                // Redirect back to login page
                return redirect()->to('/login/associate-account');
            }
        } else {
            // Set error message in session
            session()->setFlashdata('error', 'Invalid associate number or password.');

            // Redirect back to login page
            return redirect()->to('/login/associate-account');
        }
    }

    public function personnelLogin()
    {
        $users = new Users();

        // Get form data
        $associateNumber = $this->request->getPost('associateNumber');
        $password = $this->request->getPost('password');

        // Find user by associate number
        $user = $users->where('school_id', $associateNumber)->first();

        if ($user && password_verify($password, $user['password'])) {
            if ($user['role'] === 'itso_personnel') {
                // Set user session data
                session()->set([
                    'associate_id' => $user['id'],
                    'school_id' => $user['school_id'],
                    'logged_in' => true
                ]);

                // Redirect to ITSO personnel dashboard
                return redirect()->to('itso-personnel');
            } else {
                // Set error message in session
                session()->setFlashdata('error', 'Only ITSO personnel can log in.');

                // Redirect back to login page
                return redirect()->to('/itso-personnel-login');
            }
        } else {
            // Set error message in session
            session()->setFlashdata('error', 'Invalid personnel number or password.');

            // Redirect back to login page
            return redirect()->to('/itso-personnel-login');
        }
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/');
    }

    public function itsoPersonnelLogin()
    {
        $itsoUsers = new ITSOUsers();
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

    // flashdata clearing
    public function clear_flashdata()
    {
        session()->remove('success');
        session()->remove('error');
        return $this->response->setJSON(['status' => 'success']);
    }
}

?>