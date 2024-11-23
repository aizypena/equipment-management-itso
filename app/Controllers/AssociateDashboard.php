<?php
namespace App\Controllers;

use App\Models\EquipmentModel;

class AssociateDashboard extends BaseController {

    // equipment function
    public function equipment(): string {
        
        $equipmentModel = new EquipmentModel();
        $data['title'] = 'Associate - Equipment';
        $data['equipment'] = $equipmentModel->findAll();

        // Debugging: Print the fetched data
        // echo '<pre>';
        // print_r($data['equipment']);
        // echo '</pre>';
        // exit;

        return view('includes/tailwind-header', $data)
            . view('includes/associate-side')
            . view('associate/equipment', $data)
            . view('includes/associate-bottom');
    }



    // profile function
    public function profile(): string {

        $data['title'] = 'Associate - Profile';

        return view('includes/tailwind-header', $data)
            . view('includes/associate-side')
            . view('associate/profile')
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