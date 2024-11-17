<?php
namespace App\Controllers;

class AssociateDashboard extends BaseController {
    public function dashboard(): string {
        $data['title'] = 'Associate - Home';

        return view('includes/tailwind-header', $data)
        . view('includes/associate-side')
        . view('includes/associate-bottom');
    }
}
?>