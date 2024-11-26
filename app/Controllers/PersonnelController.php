<?php
namespace App\Controllers;

use App\Models\EquipmentModel;

class PersonnelController extends BaseController {
    public function addEquipment()
    {
        $equipmentModel = new EquipmentModel();

        // Collect form data
        $data = [
            'name' => $this->request->getPost('name'),
            'category' => $this->request->getPost('category'),
            'status' => $this->request->getPost('status')
        ];

        // Attempt to save data
        if ($equipmentModel->save($data)) {
            return $this->response->setJSON(['success' => true]);
        } else {
            return $this->response->setJSON(['success' => false]);
        }
    }

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

    public function getEquipment($id)
    {
        $equipmentModel = new EquipmentModel();
        $equipment = $equipmentModel->find($id);

        return $this->response->setJSON($equipment);
    }
}