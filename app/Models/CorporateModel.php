<?php

namespace App\Models;

use CodeIgniter\Model;

class CorporateModel extends Model
{
    protected $table = 'g_corporate';
    protected $useTimestamps = true;
    // protected $allowedFields = ['name'];

    public function getCorp($corporate_id_sandeza = false)
    {

        if ($corporate_id_sandeza == false) {
            return $this->findAll();
        }
        return $this->where(['corporate_id_sandeza' => $corporate_id_sandeza])->first();
    }
}