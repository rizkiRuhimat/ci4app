<?php

namespace App\Models;

use CodeIgniter\Model;

class PicModel extends Model
{
    protected $table = 'pic';
    protected $useTimestamps = true;
    // protected $useSoftDeletes = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';
    protected $allowedFields = ['nama', 'alias', 'position', 'dob', 'phone', 'address'];

    public function getPic($id = false)
    {

        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}