<?php

namespace App\Models;

use CodeIgniter\Model;

class Users extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'department',
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'password',
        'birthdate',
        'gender',
        'school_id',
        'status',
        'activation_code',
        'role'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}