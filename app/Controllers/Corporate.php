<?php

namespace App\Controllers;

// date_default_timezone_set('Asia/Jakarta');

use \App\Models\DivisionModel;
use \App\Models\CorporateModel;
// use \App\Models\SandezaModel;
use CodeIgniter\I18n\Time;


class Corporate extends BaseController
{
    protected $CorporateModel;
    protected $DivisionModel;
    // protected $TypeModel;

    public function __construct()
    {
        helper('sn', 'array');
        // $this->sandezaModel = new SandezaModel();
        $this->corpModel = new CorporateModel();
        $this->divModel = new DivisionModel();
    }

    public function index()
    {
        $corp = $this->corpModel->orderby('id', 'asc')->findAll();
        $data = [
            'title' => 'Daftar Client Sandeza',
            // 'sandeza' => $this->SandezaModel->getAgenda()
            'corp'    => $corp
        ];

        return view('corporate/index', $data);
    }

    public function detail($corporate_id_sandeza)
    {
        // $myTime = Time::now('Asia/Jakarta', 'en_US');
        // $corp = $this->corpModel->getCorp($corporate_id_sandeza);
        // $div = $this->divModel->getDiv($corporate_id_sandeza);
        // $div    = $this->corpModel->join('g_division', 'corporate.corporate_id_sandeza = g_division.corporate_id_sandeza', 'left')->findColumn($corporate_id_sandeza);

        // dd($div);
        $data = [
            'title' => 'Detail Sandeza',
            'corp'  => $this->corpModel->getCorp($corporate_id_sandeza),
            'div'   => $this->divModel->getDiv($corporate_id_sandeza),
        ];
        // dd($data);

        // jika corporate tidak ada di table
        if (empty($data['div'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama Corporate "' . $corporate_id_sandeza . '" tidak ditemukan.');
        }

        return view('corporate/detail', $data);
    }
}