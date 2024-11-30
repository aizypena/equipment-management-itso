<?php

namespace App\Models;

use CodeIgniter\Model;

class EquipmentModel extends Model 
{
    protected $table = 'school_equipment';
    protected $primaryKey = 'equipment_id'; // Ensure 'id' is included here
    protected $allowedFields = [
        'name',
        'category',
        'status',
        'assigned_to',
        'assigned_date',
        'returned_date',
        'notes',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}