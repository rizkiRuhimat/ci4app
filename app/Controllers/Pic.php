<?php

namespace App\Controllers;

use \App\Models\PicModel;
use \App\Models\PosisiModel;
use CodeIgniter\I18n\Time;

class Pic extends BaseController
{
    protected $PicModel;

    public function __construct()
    {
        $this->picModel = new PicModel();
        $this->posisiModel = new PosisiModel();
    }

    public function index()
    {
        $pic = $this->picModel->orderby('nama', 'desc')->findAll();
        $data = [
            'title' => 'Daftar Pic',
            'pic'    => $pic
        ];

        return view('pic/index', $data);
    }

    public function detail($id)
    {
        $myTime = Time::now('Asia/Jakarta', 'en_US');
        $data = [
            'title' => 'Detail Pic',
            'pic' => $this->picModel->getPic($id),
            'time' => $myTime
        ];

        // jika pic tidak ada di table
        if (empty($data['pic'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama Pic "' . $id . '" tidak ditemukan.');
        }

        return view('pic/detail', $data);
    }

    public function create()
    {
        $pic        = $this->picModel->orderby('nama', 'asc')->findAll();
        $posisi     = $this->posisiModel->orderby('nama', 'asc')->findAll();

        $data = [
            'title'         => 'Tambah Data Pic',
            'pic'           => $pic,
            'posisi'        => $posisi,
            'validation'    => \Config\Services::validation()
        ];
        // dd($data);

        return view('pic/create', $data);
    }

    public function save()
    {

        $data = [
            'nama'          => $this->request->getVar('nama'),
            'alias'         => $this->request->getVar('alias'),
            'id'            => $this->request->getVar('posid'),
            'address'       => $this->request->getVar('address'),
            'phone'         => $this->request->getVar('phone'),
            'dob'           => $this->request->getVar('dob'),
            'position'      => $this->request->getVar('posisi'),
        ];
        dd($data);
        // $this->picModel->save([
        //     'nama'          => $this->request->getVar('nama'),
        //     'alias'         => $this->request->getVar('alias'),
        //     'id'            => $this->request->getVar('posid'),
        //     'position'      => $this->request->getVar('posisi')
        // ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');

        return redirect()->to('/pic');
    }

    public function delete($id)
    {
        $this->picModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/pic');
    }

    public function edit($id)
    {
        $posisi = $this->posisiModel->orderby('nama', 'asc')->findAll();
        $data = [
            'title'         => 'Ubah Data PIC',
            'validation'    => \Config\Services::validation(),
            'pic'           => $this->picModel->getPic($id),
            'position'      => $posisi
        ];

        return view('pic/edit', $data);
    }

    public function update($id)
    {
        // cek pic
        $picLama = $this->picModel->getPic($this->request->getVar('id'));

        if ($picLama['nama'] == $this->request->getVar('nama')) {
            $rule_pic = 'required';
        } else {
            $rule_pic = 'required|is_unique[pic.nama]';
        }

        if (!$this->validate([
            'nama' => [
                'rules' => $rule_pic,
                'errors' => [
                    'required' => '{field} Nama harus diisi.',
                    'is_unique' => '{field} Nama sudah terdaftar.'
                ]
            ]
        ])) {
            return redirect()->to('/pic/edit/' . $this->request->getVar('id'))->withInput();
        }

        $this->picModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'alias' => $this->request->getVar('alias'),
            'position' => $this->request->getVar('position'),
            'address' => $this->request->getVar('address'),
            'phone' => $this->request->getVar('phone'),
            'dob' => $this->request->getVar('dob'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah');


        return redirect()->to('/pic');
    }
}