<?php

namespace App\Models;

use CodeIgniter\Model;

class Users extends Model
{
    protected $table      = 'users'; // Name of your table
    protected $primaryKey = 'id';    // Primary key

    // Allowed fields for insertion and updating
    protected $allowedFields = [
        'department',
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'password',
        'birthdate',
        'gender',
        'school_id'
    ];

    // Enable timestamps for created_at and updated_at
    protected $useTimestamps = true;

    // Set the names of the created_at and updated_at fields
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}