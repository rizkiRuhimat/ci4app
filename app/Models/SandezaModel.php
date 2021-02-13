<?php

namespace App\Models;

use CodeIgniter\Model;

class SandezaModel extends Model
{
    protected $table = 'sandeza';
    protected $useTimestamps = true;
    // protected $useSoftDeletes = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';
    protected $allowedFields = ['name-c', 'id-c-sandeza', 'div-name', 'services', 'validator', 'API', 'id-div-sandeza', 'tcpuser', 'tcppass', 'webuser', 'webpass', 'token', 'name-sender', 'sender-id', 'prvd', 'status', 'url_status_send', 'url_status_delivery'];

    public function getSandeza($id = false)
    {

        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}