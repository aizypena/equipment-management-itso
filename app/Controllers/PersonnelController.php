<?php
namespace App\Controllers;

use App\Models\EquipmentModel;

class PersonnelController extends BaseController {

    public function updateEquipment($id)
    {
        $equipmentModel = new EquipmentModel();

        // Collect form data
        $data = [
            'equipment_id' => $id,
            'name' => $this->request->getPost('name'),
            'category' => $this->request->getPost('category'),
            'status' => $this->request->getPost('status')
        ];

        // Attempt to update data
        if ($equipmentModel->save($data)) {
            return $this->response->setJSON(['success' => true]);
        } else {
            return $this->response->setJSON(['success' => false]);
        }
    }

    public function deleteEquipment($id)
    {
        $equipmentModel = new EquipmentModel();

        // Attempt to delete data
        if ($equipmentModel->delete($id)) {
            return $this->response->setJSON(['success' => true]);
        } else {
            return $this->response->setJSON(['success' => false]);
        }
    }

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

    public function editEquipment() {
        
    }
}