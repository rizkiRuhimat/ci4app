<?php

namespace App\Models;

use CodeIgniter\Model;

class DivisionModel extends Model
{
    protected $table = 'g_division';
    protected $useTimestamps = true;
    // protected $allowedFields = ['name'];

    public function getDiv($corporate_id_sandeza = false)
    {

        if ($corporate_id_sandeza == false) {
            return $this->findAll();
        }
        return $this->where(['corporate_id_sandeza' => $corporate_id_sandeza])->findAll();
    }
}