<?php
namespace App\Controllers;

use App\Models\EquipmentModel;

class AssociateDashboard extends BaseController {

    public function equipment(): string {

        $data['title'] = 'Associate - Home';
        return view('includes/tailwind-header', $data)
        . view('includes/associate-side')
        . view('associate/equipment')
        . view('includes/associate-bottom');
    }

}

