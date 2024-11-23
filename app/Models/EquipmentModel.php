<?php

namespace App\Models;

use CodeIgniter\Model;

class EquipmentModel extends Model 
{
    protected $table = 'school_equipment';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id', // Ensure 'id' is included here
        'name',
        'category',
        'status'
    ];
}