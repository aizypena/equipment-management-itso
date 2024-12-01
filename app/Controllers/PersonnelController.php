<?php
namespace App\Controllers;

use App\Models\EquipmentModel;
use App\Models\Users;

class PersonnelController extends BaseController {

    public function addEquipment()
    {
        $equipmentModel = new EquipmentModel();

        // Collect form data
        $data = [
            'name' => $this->request->getPost('name'),
            'category' => $this->request->getPost('category'),
            'notes' => $this->request->getPost('notes'),
            'status' => 'available', // Set default status to 'available'
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        // Attempt to save data
        if ($equipmentModel->insert($data)) {
            // Set success message in session
            session()->setFlashdata('success', 'Equipment added successfully.');
        } else {
            // Set error message in session
            session()->setFlashdata('error', 'Failed to add equipment. Please try again.');
        }

        // Redirect back to the equipment page
        return redirect()->to(base_url('itso-personnel/equipment'));
    }


    public function editEquipment($id)
    {
        $equipmentModel = new EquipmentModel();
        $equipment = $equipmentModel->find($id);

        if (!$equipment) {
            session()->setFlashdata('error', 'Equipment not found.');
            return redirect()->to(base_url('itso-personnel/equipment'));
        }

        $data = [
            'title' => 'Edit Equipment',
            'equipment' => $equipment
        ];

        return view('includes/tailwind-header', $data)
            . view('itso-personnel/edit-equipment', $data)
            . view('includes/associate-bottom');
    }
    
    public function updateEquipment($id)
    {
        $equipmentModel = new EquipmentModel();

        // Set the default time zone
        date_default_timezone_set('Asia/Manila'); // Set your desired time zone

        // Collect form data
        $data = [
            'name' => $this->request->getPost('name'),
            'category' => $this->request->getPost('category'),
            'status' => $this->request->getPost('status'),
            'notes' => $this->request->getPost('notes'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        // Attempt to update data
        if ($equipmentModel->update($id, $data)) {
            // Set success message in session
            session()->setFlashdata('success', 'Equipment updated successfully.');
        } else {
            // Set error message in session
            session()->setFlashdata('error', 'Failed to update equipment. Please try again.');
        }

        // Redirect back to the equipment page
        return redirect()->to(base_url('itso-personnel/equipment'));
    }

    public function deleteEquipment()
    {
        $equipmentModel = new EquipmentModel();
        $userModel = new Users();

        // Get logged-in user's ID and submitted data
        $userId = session()->get('user_id');
        $password = $this->request->getPost('password');
        $equipmentId = $this->request->getPost('equipment_id');

        // Debugging: Log incoming form data
        log_message('debug', 'User ID: ' . $userId);
        log_message('debug', 'Password: ' . $password);
        log_message('debug', 'Equipment ID: ' . $equipmentId);

        // Validate input
        if (empty($userId)) {
            log_message('error', 'Validation failed: User ID is empty.');
        }
        if (empty($password)) {
            log_message('error', 'Validation failed: Password is empty.');
        }
        if (empty($equipmentId)) {
            log_message('error', 'Validation failed: Equipment ID is empty.');
        }
        if (empty($userId) || empty($password) || empty($equipmentId)) {
            log_message('error', 'Validation failed: All fields are required.');
            session()->setFlashdata('error', 'All fields are required.');
            return redirect()->back();
        }

        // Retrieve user details
        $user = $userModel->find($userId);
        if (!$user || !password_verify($password, $user['password'])) {
            log_message('error', 'Invalid password for user ID: ' . $userId);
            session()->setFlashdata('error', 'Invalid password.');
            return redirect()->back();
        }

        // Update equipment status
        $updateData = [
            'status' => 'deleted',
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        if ($equipmentModel->update($equipmentId, $updateData)) {
            log_message('info', 'Equipment ID ' . $equipmentId . ' marked as deleted by user ID: ' . $userId);
            session()->setFlashdata('success', 'Equipment deleted successfully.');
        } else {
            log_message('error', 'Failed to update equipment ID: ' . $equipmentId);
            session()->setFlashdata('error', 'Failed to delete equipment.');
        }

        return redirect()->to(base_url('itso-personnel/equipment'));
    }


    //USERS
    public function activateUser($encodedActivationCode)
    {
        $users = new Users();

        // Decode the activation code
        $activationCode = urldecode($encodedActivationCode);

        // Debugging: Check the decoded activation code
        log_message('debug', 'Decoded activation code: ' . $activationCode);

        // Find user by activation code
        $user = $users->where('activation_code', $activationCode)->first();

        // Debugging: Check if user is found
        if ($user) {
            log_message('debug', 'User found with activation code: ' . $activationCode);

            // Set user status to 1 (active)
            $users->update($user['id'], ['status' => 1, 'activation_code' => null]);

            // Redirect to login page with success message
            session()->setFlashdata('success', 'Account activated successfully. You can now log in.');
            return redirect()->to('login');
        } else {
            log_message('debug', 'No user found with activation code: ' . $activationCode);

            // Redirect to login page with error message
            session()->setFlashdata('error', 'Invalid activation code.');
            return redirect()->to('login');
        }
    }
    
    public function addUser()
    {
        $userModel = new Users();

        date_default_timezone_set('Asia/Manila');

        // Collect form data
        $firstName = $this->request->getPost('first_name');
        $middleName = $this->request->getPost('middle_name');
        $lastName = $this->request->getPost('last_name');
        $email = $this->request->getPost('email');
        $birthdate = $this->request->getPost('birthdate');
        $gender = $this->request->getPost('gender');
        $department = $this->request->getPost('department');
        $role = $this->request->getPost('role');

        // Validate input
        if (empty($firstName) || empty($lastName) || empty($email) || empty($birthdate) || empty($gender) || empty($department) || empty($role)) {
            session()->setFlashdata('error', 'All fields except middle name are required.');
            return redirect()->back()->withInput();
        }

        // Set default password to birthdate
        $password = $birthdate;

        // Generate school_id based on role
        $schoolId = null;
        if ($role == 'itso_personnel' || $role == 'associate') {
            $yearMonth = date('Ym');
            $lastUser = $userModel->where('role', $role)->orderBy('id', 'DESC')->first();
            $lastId = $lastUser ? intval(substr($lastUser['school_id'], -4)) : 0;
            $schoolId = $yearMonth . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
        } elseif ($role == 'student') {
            $year = date('Y');
            $lastUser = $userModel->where('role', $role)->orderBy('id', 'DESC')->first();
            $lastId = $lastUser ? intval(substr($lastUser['school_id'], -5)) : 0;
            $schoolId = $year . str_pad($lastId + 1, 5, '0', STR_PAD_LEFT);
        }

        // Generate activation code using uniqid
        $activationCode = uniqid();

        // Prepare user data
        $data = [
            'first_name' => $firstName,
            'middle_name' => $middleName,
            'last_name' => $lastName,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'birthdate' => $birthdate,
            'gender' => $gender,
            'department' => $department,
            'role' => $role,
            'school_id' => $schoolId,
            'activation_code' => $activationCode,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        // Attempt to save data
        if ($userModel->insert($data)) {
            // Encode the activation code
            $encodedActivationCode = urlencode($activationCode);

            // Send activation email
            $message = "Hello " . $firstName . ",<br><br>Thank you for registering. Please activate your account by clicking the link below:<br><br><a href='" . base_url('activate/' . $encodedActivationCode) . "'>Activate Account</a>";
            $emailService = \Config\Services::email(); // Instantiate an email object
            $emailService->setTo($email);
            $emailService->setSubject('Account Registration and Activation');
            $emailService->setMessage($message);

            if (!$emailService->send()) {
                // Print email debugger information
                echo $emailService->printDebugger(['headers']);
                die();
            }

            // Set success message in session
            session()->setFlashdata('success', 'User added successfully. An activation email has been sent.');
        } else {
            // Set error message in session
            session()->setFlashdata('error', 'Failed to add user. Please try again.');
        }

        // Redirect back to the add user page
        return redirect()->to(base_url('itso-personnel/users/add'));
    }

    public function editUser($id)
    {
        $userModel = new Users();
        $user = $userModel->find($id);

        if (!$user) {
            session()->setFlashdata('error', 'User not found.');
            return redirect()->to(base_url('itso-personnel/users'));
        }

        $data = [
            'title' => 'Edit User',
            'user' => $user
        ];

        return view('includes/tailwind-header', $data)
            . view('itso-personnel/edit-user', $data)
            . view('includes/associate-bottom');
    }

    public function updateUser($id)
    {
        $userModel = new Users();

        //timezone
        date_default_timezone_set('Asia/Manila');

        // Collect form data
        $firstName = $this->request->getPost('first_name');
        $middleName = $this->request->getPost('middle_name');
        $lastName = $this->request->getPost('last_name');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $birthdate = $this->request->getPost('birthdate');
        $gender = $this->request->getPost('gender');
        $department = $this->request->getPost('department');
        $role = $this->request->getPost('role');

        // Validate input
        if (empty($firstName) || empty($lastName) || empty($email) || empty($birthdate) || empty($gender) || empty($department) || empty($role)) {
            session()->setFlashdata('error', 'All fields except middle name are required.');
            return redirect()->back()->withInput();
        }

        // Prepare user data
        $data = [
            'first_name' => $firstName,
            'middle_name' => $middleName,
            'last_name' => $lastName,
            'email' => $email,
            'birthdate' => $birthdate,
            'gender' => $gender,
            'department' => $department,
            'role' => $role,
            'updated_at' => date('Y-m-d H:i:s')
        ];

        // Update password only if provided
        if (!empty($password)) {
            $data['password'] = password_hash($password, PASSWORD_DEFAULT);
        }

        // Attempt to update data
        if ($userModel->update($id, $data)) {
            // Set success message in session
            session()->setFlashdata('success', 'User updated successfully.');
        } else {
            // Set error message in session
            session()->setFlashdata('error', 'Failed to update user. Please try again.');
        }

        // Redirect back to the edit user page
        return redirect()->to(base_url('itso-personnel/users/edit/' . $id));
    }
}