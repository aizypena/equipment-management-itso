<?php
namespace App\Controllers;

use App\Models\EquipmentModel;
use App\Models\Users;

class AssociateDashboard extends BaseController {

    // equipment function
    public function equipment(): string {
        
        $equipmentModel = new EquipmentModel();
        $data['title'] = 'Associate - Equipment';
        $data['equipment'] = $equipmentModel->findAll();

        return view('includes/tailwind-header', $data)
            . view('includes/associate-side')
            . view('associate/equipment', $data)
            . view('includes/associate-bottom');
    }

    
    public function profile()
    {
    $usersModel = new Users();

    // Get the logged-in associate's ID from the session
    $associateId = session()->get('associate_id');

    // Fetch the associate's details
    $user = $usersModel->find($associateId);

    // Prepare data to pass to the view
    $data = [
        'title' => 'Associate - Profile',
        'user' => $user
    ];

    return view('includes/tailwind-header', $data)
        . view('includes/associate-side')
        . view('associate/profile', $data)
        . view('includes/associate-bottom');
    }



    // history function
    public function history(): string {

        $data['title'] = 'Associate - History';

        return view('includes/tailwind-header', $data)
            . view('includes/associate-side')
            . view('associate/history')
            . view('includes/associate-bottom');
    }



    // history function
    public function return(): string {

        $data['title'] = 'Associate - Return';

        return view('includes/tailwind-header', $data)
            . view('includes/associate-side')
            . view('associate/return')
            . view('includes/associate-bottom');
    }


    
    //borrow function
    public function borrow(): string {
        $data['title'] = 'Associate - Borrow Equipment';

        return view('includes/tailwind-header', $data)
            . view('includes/associate-side')
            . view('associate/borrow')
            . view('includes/associate-bottom');
    }

}