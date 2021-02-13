<?php

namespace App\Models;

use CodeIgniter\Model;

class TypeModel extends Model
{
    protected $table = 'tipetask';
    protected $useTimestamps = true;
    protected $allowedFields = ['typetask'];
}