<?php
namespace App\Controllers;

use App\Models\EquipmentModel;

class AssociateDashboard extends BaseController {

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

}