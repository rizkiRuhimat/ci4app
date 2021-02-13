<?php

namespace App\Controllers;

// date_default_timezone_set('Asia/Jakarta');

use \App\Models\DivisionModel;
use \App\Models\CorporateModel;
use \App\Models\SandezaModel;
use CodeIgniter\I18n\Time;


class Sandeza extends BaseController
{
    protected $SandezaModel;
    protected $DivisionModel;
    protected $CorporateModel;

    public function __construct()
    {
        helper('sn');
        $this->sandezaModel = new SandezaModel();
        $this->corpModel = new CorporateModel();
        $this->divModel = new DivisionModel();
    }

    public function index()
    {
        $sandeza = $this->sandezaModel->orderby('id', 'desc')->findAll();
        $data = [
            'title' => 'Daftar Client Sandeza',
            'sandeza'    => $sandeza
        ];

        return view('sandeza/index', $data);
    }

    public function list($id)
    {
        $sandeza = $this->sandezaModel->orderby('id', 'desc')->findAll();
        $listcorp   = $this->corpModel->findAll();
        $listdivisi = $this->divModel->findAll();

        $data = [
            'title'         => 'Detail Sandeza',
            'sandeza'       => $sandeza,
            'listcorp'      => $listcorp,
            'listdivisi'    => $listdivisi
        ];
        // dd($data);

        // jika sandeza tidak ada di table
        if (empty($data['sandeza'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama Client "' . $id . '" tidak ditemukan.');
        }

        return view('sandeza/list', $data);
    }

    public function detail($id)
    {
        $myTime = Time::now('Asia/Jakarta', 'en_US');
        // dd($id);
        $data = [
            'title' => 'Detail Sandeza',
            'sandeza' => $this->sandezaModel->getSandeza($id),
            // 'time' => $myTime
        ];
        // dd($data);

        // jika sandeza tidak ada di table
        if (empty($data['sandeza'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama Client "' . $id . '" tidak ditemukan.');
        }

        return view('sandeza/detail', $data);
    }

    public function create()
    {
        $div = $this->divModel->orderby('name', 'asc')->findAll();
        $corp = $this->corpModel->orderby('name', 'asc')->findAll();
        $myTime = Time::now('Asia/Jakarta', 'en_US');

        $data = [
            'title'         => 'Tambah Data Sandeza',
            'div'           => $div,
            'corp'          => $corp,
            'time'          => $myTime,
            'validation'    => \Config\Services::validation()
        ];
        // dd($data);

        return view('sandeza/create', $data);
    }

    public function save()
    {

        $this->sandezaModel->save([
            'name-c'                => $this->request->getVar('namecorp'),
            'id-c-sandeza'          => $this->request->getVar('idsandeza'),
            'div-name'              => $this->request->getVar('namedivisi'),
            'id-div-sandeza'        => $this->request->getVar('iddiv'),
            'tcpuser'               => $this->request->getVar('usertcp'),
            'tcppass'               => $this->request->getVar('passtcp'),
            'webuser'               => $this->request->getVar('webuser'),
            'webpass'               => $this->request->getVar('webpass'),
            'token'                 => $this->request->getVar('token'),
            'name-sender'           => $this->request->getVar('namesender'),
            'sender-id'             => $this->request->getVar('idsender'),
            'status'                => $this->request->getVar('status'),
            'url_status_send'       => $this->request->getVar('urlstatussent'),
            'url_status_delivery'   => $this->request->getVar('urldelivery')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');

        return redirect()->to('/sandeza');
    }

    public function delete($id)
    {

        // cek gambar berdasarkan id
        // $sandeza = $this->sandezaModel->find($id);
        // dd($sandeza);

        $this->sandezaModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/sandeza');
    }

    public function edit($id)
    {
        $div = $this->divModel->orderby('token_type', 'asc')->findAll();
        $token = $this->divModel->groupby('token_type')->findColumn('token_type');
        $corp = $this->corpModel->findAll();
        $data = [
            'title'         => 'Ubah Data Sandeza',
            'validation'    => \Config\Services::validation(),
            'sandeza'       => $this->sandezaModel->getSandeza($id),
            'token'         => $token,
            'corp'          => $corp,
            'div'           => $div,
        ];
        // dd($data);

        return view('sandeza/edit', $data);
    }

    public function update($id)
    {
        // cek task
        $sandezaLama = $this->sandezaModel->getSandeza($this->request->getVar('id'));


        if ($sandezaLama['tcpuser'] == $this->request->getVar('tcpuser')) {
            $rule_name_corp = 'required';
        } else {
            $rule_name_corp = 'required|is_unique[sandeza.tcpuser]';
        }

        if (!$this->validate([
            'tcpuser' => [
                'rules' => $rule_name_corp,
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'is_unique' => '{field} sudah terdaftar.'
                ]
            ]
            // ,
            // 'sampul' => [
            //     'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
            //     'errors' => [
            //         'max_size' => 'Ukuran file tidak boleh lebih dari 1 Mb',
            //         'is_image' => 'File yang dipilih bukan gambar',
            //         'mime_in' => 'File yang dipilih bukan .jpg, .jpeg, .png'
            //     ]

        ])) {
            return redirect()->to('/sandeza/edit/' . $this->request->getVar('id'))->withInput();
        }
        // $fileSampul = $this->request->getFile('sampul');

        // // cek file gambar, baru atau tetap
        // if ($fileSampul->getError() == 4) {
        //     // sampulLama diambil dari input hidden pada view edit line 10
        //     $namaSampul = $this->request->getVar('sampulLama');
        // } else {
        //     // jika upload file baru, generate nama file baru
        //     $namaSampul = $fileSampul->getRandomName();
        //     // pindahkan gambar
        //     $fileSampul->move('img', $namaSampul);
        //     // hapus gambar berdasarkan sampulLama pada view edit line 10
        //     unlink('img/' . $this->request->getVar('sampulLama'));
        // }

        // $id = url_title($this->request->getVar('id'), '-', true);
        // $data = [
        //     'id' => $id,
        //     'task' => $this->request->getVar('task'),
        //     'task_type' => $this->request->getVar('tipe'),
        //     // 'id' => $id,
        //     'status' => $this->request->getVar('status'),
        //     'remark' => $this->request->getVar('remark')
        // ];
        // dd($data);

        // dd($this->request->getVar('name-c'));
        $this->sandezaModel->save([
            'id'                    => $id,
            'name-c'                => $this->request->getVar('name-c'),
            'id-c-sandeza'          => $this->request->getVar('id-c-sandeza'),
            'div-name'              => $this->request->getVar('div-name'),
            'id-div-sandeza'        => $this->request->getVar('id-div-sandeza'),
            'tcpuser'               => $this->request->getVar('tcpuser'),
            'tcppass'               => $this->request->getVar('tcppass'),
            'webuser'               => $this->request->getVar('webuser'),
            'webpass'               => $this->request->getVar('webpass'),
            'token'                 => $this->request->getVar('token'),
            'API'                   => $this->request->getVar('api'),
            'validator'             => $this->request->getVar('validator'),
            'services'              => $this->request->getVar('services'),
            'name-sender'           => $this->request->getVar('name-sender'),
            'sender-id'             => $this->request->getVar('sender-id'),
            'status'                => $this->request->getVar('status'),
            'url_status_send'       => $this->request->getVar('url_status_send'),
            'url_status_delivery'   => $this->request->getVar('url_status_delivery')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah');


        return redirect()->to('/sandeza');
    }
}