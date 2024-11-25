<?php
namespace App\Controllers;

class PersonnelDashboard extends BaseController {

    public function profile() {
        $data['title'] = 'ITSO Personnel - Profile';

        return view('includes/tailwind-header', $data)
            . view('includes/personnel-side')
            . view('itso-personnel/profile')
            . view('includes/associate-bottom');
    }
    
    
}
?>