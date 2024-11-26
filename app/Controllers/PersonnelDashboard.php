<?php
namespace App\Controllers;

use App\Models\EquipmentModel;
use App\Models\Users;

class PersonnelDashboard extends BaseController {

    public function profile() {
        $data['title'] = 'ITSO Personnel - Profile';

        return view('includes/tailwind-header', $data)
            . view('includes/personnel-side')
            . view('itso-personnel/profile')
            . view('includes/associate-bottom');
    }
    
    public function equipment() {
        $equipmentModel = new EquipmentModel();

        $school_equipment = $equipmentModel->findAll();
        $data = [
            'title' => 'ITSO Personnel - Equipment',
            'school_equipment' => $school_equipment
        ];

        return view('includes/tailwind-header', $data)
            . view('includes/personnel-side')
            . view('itso-personnel/equipment')
            . view('includes/associate-bottom');
    }

    public function history() {
        $data['title'] = 'ITSO Personnel - History';

        return view('includes/tailwind-header', $data)
            . view('includes/personnel-side')
            . view('itso-personnel/history')
            . view('includes/associate-bottom');
    }

    public function return() {
        $data['title'] = 'ITSO Personnel - Return';

        return view('includes/tailwind-header', $data)
            . view('includes/personnel-side')
            . view('itso-personnel/return')
            . view('includes/associate-bottom');
    }

    public function users()
    {
        $usersModel = new Users();

        // Fetch all users
        $users = $usersModel->findAll();

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
}
?>