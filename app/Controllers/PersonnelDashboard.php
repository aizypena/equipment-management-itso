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
}
?>