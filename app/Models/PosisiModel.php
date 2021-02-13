<?php

namespace App\Models;

use CodeIgniter\Model;

class PosisiModel extends Model
{
    protected $table = 'posisi';
    protected $useTimestamps = true;
    // protected $useSoftDeletes = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';
    protected $allowedFields = ['posisi'];

    public function getPosisi($id = false)
    {

        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}