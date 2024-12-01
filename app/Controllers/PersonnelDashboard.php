<?php
namespace App\Controllers;

use App\Models\EquipmentModel;
use App\Models\Users;

class PersonnelDashboard extends BaseController {

    public function profile()
    {
        if(!session()->has('logged_in')){
            return redirect()->to('itso-personnel-login');
        }
        
        $usersModel = new Users();

        // Get the logged-in personnel's school ID from the session
        $schoolId = session()->get('school_id'); // Use 'school_id' from the session

        // Fetch the personnel's details using school_id
        $user = $usersModel->where('school_id', $schoolId)->first();

        // Prepare data to pass to the view
        $data = [
            'title' => 'ITSO Personnel - Profile',
            'user' => $user
        ];

        return view('includes/tailwind-header', $data)
            . view('includes/personnel-side')
            . view('itso-personnel/profile', $data)
            . view('includes/associate-bottom');
    }
    
    public function equipment() {
        $equipmentModel = new EquipmentModel();

        $school_equipment = $equipmentModel->findAll();
        $data = [
            'title' => 'ITSO Personnel - Equipment',
            'school_equipment' => $school_equipment
        ];

        if(!session()->has('logged_in')){
            return redirect()->to('itso-personnel-login');
        }

        return view('includes/tailwind-header', $data)
            . view('includes/personnel-side')
            . view('itso-personnel/equipment')
            . view('includes/associate-bottom');
    }

    public function history() {
        $data['title'] = 'ITSO Personnel - History';

        if(!session()->has('logged_in')){
            return redirect()->to('itso-personnel-login');
        }

        return view('includes/tailwind-header', $data)
            . view('includes/personnel-side')
            . view('itso-personnel/history')
            . view('includes/associate-bottom');
    }

    public function return() {
        $data['title'] = 'ITSO Personnel - Return';

        if(!session()->has('logged_in')){
            return redirect()->to('itso-personnel-login');
        }

        return view('includes/tailwind-header', $data)
            . view('includes/personnel-side')
            .view('itso-personnel/return')
            . view('includes/associate-bottom');
    }

    public function users()
    {
        $usersModel = new Users();

        // Fetch all users
        $users = $usersModel->findAll();

        if(!session()->has('logged_in')){
            return redirect()->to('itso-personnel-login');
        }

        // Prepare data to pass to the view
        $data = [
            'title' => 'ITSO Personnel - Users',
            'users' => $users
        ];

        return view('includes/tailwind-header', $data)
            . view('includes/personnel-side')
            . view('itso-personnel/users', $data)
            . view('includes/associate-bottom');
    }

    public function usersView() {

        if(!session()->has('logged_in')){
            return redirect()->to('itso-personnel-login');
        }
        
        $data = [
            'title' => 'ITSO Personnel - View Users',
        ];

        return view('includes/tailwind-header', $data)
            . view('itso-personnel/users-view')
            . view('includes/associate-bottom');
    }


    
    // equipment crud
    public function deleteEquipment()
    {
        $data = [
            'title' => 'ITSO Personnel - Delete Equipment',
        ];

        return view('includes/tailwind-header', $data)
            . view('itso-personnel/delete-equipment')
            . view('includes/associate-bottom');
    }


    //USERS
    public function addUser() {
        $data['title'] = 'Associate - Add Users';

        if(!session()->has('logged_in')){
            return redirect()->to('login/itso-personnel-login');
        }

        return view('includes/tailwind-header', $data)
            . view('itso-personnel/add-users')
            . view('includes/associate-bottom');
    }

    public function viewUser($id)
    {
        $userModel = new Users();

        // Fetch user data by ID
        $user = $userModel->find($id);

        // Check if user exists
        if (!$user) {
            session()->setFlashdata('error', 'User not found.');
            return redirect()->to(base_url('itso-personnel/users'));
        }

        // Pass user data to the view
        $data = [
            'title' => 'View User',
            'user' => $user
        ];

        return view('includes/tailwind-header', $data)
            . view('itso-personnel/view-user', $data)
            . view('includes/associate-bottom');
    }

    public function editUser() {
        $userModel = new Users();

        if (!user) {
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

}
?>